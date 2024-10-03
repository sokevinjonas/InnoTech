<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PublicLoginRequest;

class PublicAuthentificationController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return view('public.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(PublicLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('public.pages.home', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('public.pages.home');
    }
}
