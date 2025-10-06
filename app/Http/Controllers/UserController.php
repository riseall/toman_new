<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        /** @var \App\Models\User */
        $user = Auth::user();
        if ($user->hasRole('admin_toti')) {
            $roles = Role::whereNotIn('name', ['super_admin', 'toller_maklooner', 'visitor', 'viewer'])->get();
        } else {
            $roles = Role::all();
        }

        $entities = Company::all();

        $users = User::with('entity', 'roles')->get();

        return view('admin.user.index', compact('users', 'roles', 'entities'));
    }

    public function getUser()
    {
        /** @var \App\Models\User */
        $user = Auth::user();

        $query = User::with('entity', 'roles');
        if ($user->hasRole(2)) {
            $query->whereDoesntHave('roles', function ($q) {
                $q->where('name', 'super_admin');
            });
        }

        $user = $query->get();

        $data = $user->map(function ($item, $index) {
            return [
                'id'          => $item->id,
                'no'          => $index + 1,
                'username' => $item->username ?? '-',
                'name'   => ($item->first_name ?? '') . ' ' . ($item->last_name ?? ''),
                'email'       => $item->email ?? '-',
                'phone'       => $item->phone ?? '-',
                'role'        => $item->roles->first() ? $item->roles->first()->name : '-',
                'company' => $item->entity->entity_name ?? '-',
                'is_active'    => $item->is_active ?? '-',
            ];
        });
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['required', 'string', 'exists:roles,name'],
            'entity_code' => 'required|exists:entities,entity_code',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $user = User::create([
                'username' => $request->username,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'is_active' => $request->is_active ?? false,
                'entity_code' => $request->entity_code
            ]);

            $user->assignRole($request->input('role'));

            return response()->json([
                'success' => 'User baru berhasil dibuat!',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal membuat user. ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        /** @var \App\Models\User */
        $currentUser = Auth::user();
        if ($currentUser->hasRole('admin_toti')) {
            $roles = Role::whereNotIn('name', ['super_admin', 'toller_maklooner', 'visitor', 'viewer'])->get();
        } else {
            $roles = Role::all();
        }

        $entities = Company::all();
        $userRole = $user->roles->first() ? $user->roles->first()->name : null;
        $userEntity = $user->entity->entity_code ?? null;
        return view('admin.user.update', compact('entities', 'user', 'roles', 'userRole', 'userEntity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'is_active' => 'required|boolean',
            'role' => 'required|string|exists:roles,name',
            'entity_code' => 'required|exists:entities,entity_code',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $user->username = $request->username;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->is_active = $request->is_active ?? false;
            $user->entity_code = $request->entity_code;

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            $user->syncRoles($request->input('role'));

            return response()->json([
                'success' => 'User berhasil diubah!',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Gagal mengubah user. ' . $e->getMessage(),
            ], 500);
        }
    }
}
