<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Ambil role user yang login
        $role = Auth::user()->role;

        // Tentukan redirect berdasarkan role
        switch ($role) {
            // case 'admin':
            //     return redirect()->intended(route('admin.beranda'));
            case 'guru':
                return redirect()->intended(route('guru.beranda'));
            case 'siswa':
                return redirect()->intended(route('siswa.beranda'));
            default:
                // Kalau tidak cocok, kembalikan ke halaman utama
                return redirect('/login');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
