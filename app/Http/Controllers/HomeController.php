<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {

        return view('home.about');
    }

    public function contact()
    {

        return view('home.contact');
    }

    public function Services()
    {

        return view('home.services');
    }

    public function test()
    {

        return view('backend.survey-form.show');
    }

    
}   
