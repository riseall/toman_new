<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Override username field for validation.
     */
    public function username()
    {
        return 'login'; // harus sama dengan name input di form
    }

    /**
     * Override credentials to allow login with email or username.
     */
    protected function credentials(Request $request)
    {
        $login = $request->input('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $field => $login,
            'password' => $request->input('password'),
        ];
    }

    protected function attemptLogin(Request $request)
    {
        // Dapatkan kredensial tanpa password terlebih dahulu untuk memeriksa keberadaan user dan statusnya
        $credentials = $this->credentials($request);
        $loginField = array_keys($credentials)[0]; // Ambil nama field login (email atau username)
        $loginValue = $credentials[$loginField];

        // Cari user berdasarkan email atau username
        $user = User::where($loginField, $loginValue)->first();

        // Jika user ditemukan dan statusnya tidak aktif, lempar exception
        if ($user && !$user->is_active) {
            throw ValidationException::withMessages([
                $this->username() => ['Akun Anda tidak aktif. Silakan hubungi administrator.'],
            ]);
        }

        // Jika user aktif atau tidak ditemukan, lanjutkan dengan percobaan otentikasi default
        return $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }

    protected function authenticated(Request $request, $user)
    {
        // authorization User berdasarkan role
        if ($user->hasRole('super_admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('admin')) {
            return redirect()->route('pelanggan.dashboard');
        }

        return redirect('/'); // fallback jika tidak ada role yang cocok
    }
}
