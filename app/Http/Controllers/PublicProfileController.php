<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    public function index()
    {


        return view('public.profile.user-data');
    }

    // public function updateUserData(UpdateUserRequest $request)
    // {
    //     return redirect()->route('public.profile.index')->with('success', 'Données utilisateur mises à jour avec succès.');
    // }
}