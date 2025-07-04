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

        $user = $request->user();

        switch ($user->role) {
            case 'dinkes':
                $redirectRoute = 'dinkes.dashboard';
                break;
            case 'puskesmas':
                $redirectRoute = 'puskesmas.dashboard';
                break;
            case 'rsud':
                $redirectRoute = 'rsud.dashboard';
                break;
            case 'kelurahan':
                $redirectRoute = 'kelurahan.dashboard';
                break;
            case 'dukcapil':
                $redirectRoute = 'dukcapil.dashboard';
                break;
            default:
                $redirectRoute = 'no-dashboard';
                break;
        }

        return redirect()->intended(route($redirectRoute, absolute: false));
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
