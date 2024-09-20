<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthentificationController extends Controller
{
    //Cette function retourne la page login pour les admins
    public function loginAdmin()
    {
        return view('admin.pages.login');
    }
    public function authenticate(Request $request)
    {
        //on valide les donnes depuis le formulaire dans notre variables $validationDonne
        $validationDonne = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //on va connecte l'utilisateur si ces donnes correspondent
        if (Auth::attempt($validationDonne)) {

            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin-login');
    }
}
