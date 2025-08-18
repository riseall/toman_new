<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $data = User::all();
        $roles = Role::all();

        return view('admin.user.index', compact('data', 'roles'));
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
        $request->validate([
            'username' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['nullable', 'string', 'exists:roles,name'],
        ]);

        try {
            $user = User::create([
                'username' => $request->username,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'is_active' => $request->has('is_active') ? '1' : '0',
            ]);


            if ($request->filled('role')) {
                $user->assignRole($request->role);
            }

            return redirect()->back()->with('success', 'Pengguna baru berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal membuat pengguna baru: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        //
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

        $request->validate([
            'username' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phone' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed', // 'nullable' if password is optional for update
            'is_active' => 'required|boolean',
            'role' => ['nullable', 'string', 'exists:roles,name'],
        ]);

        try {
            $user->username = $request->username;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->is_active = $request->is_active;

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();
            if ($request->filled('role')) {
                $user->syncRoles([$request->role]);
            } else {
                $user->syncRoles([]);
            }

            return redirect()->back()->with('success', 'Pengguna berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui pengguna: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        //
    }
}
