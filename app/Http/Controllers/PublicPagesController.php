<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function contact()
    {

        return view("public.pages.contact");
    }

    public function about()
    {

        return view("public.pages.about");
    }

    public function terms()
    {

        return view("public.pages.terms");
    }

    public function home()
    {

        return view("public.pages.home");
    }
}
