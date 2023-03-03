<?php

namespace App\Http\Controllers\Admin;

use App\Models\SurveyFormB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyFormController extends Controller
{
    public function index()
    {
        //dd($user->id);
        
        $surveyb = SurveyFormB::latest()->get();

        return view('survey_form_b.index', ['surveyb' => $surveyb]);

    }


    // public function index()
    // {
    //     //dd($user->id);

    //     $surveyb = SurveyFormB::latest()->get();

    //     return view('survey_form_b.index', ['surveyb' => $surveyb]);

    // }
}
