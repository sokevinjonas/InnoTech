<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('public.auth.signup');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ], [
            'email.required' => "L'email est obligatoire",
            'email.email' => "L'email  doit etre une address valide",
            'email.max' => "L'email ne peut pas dépasser 255 caractères.",
            'name.required' => 'Le pseudo est obligatoire.',
            'name.string' => 'Le pseudo doit être une chaîne de caractères.',
            'name.max' => 'Le pseudo ne peut pas dépasser 255 caractères.',
            'name.min' => 'Le pseudo doit contenir au moins 2 caractères.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('public.pages.home', absolute: false));
    }
}
