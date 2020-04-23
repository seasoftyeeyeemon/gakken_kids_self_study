<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelfStudyController extends Controller
{
    public function cooking_challenge(){
        return view('self_study.cooking_challenge.20200421_challenge');
    }


    public function educe_food_edu(){
        return view('self_study.educe_food_edu.20200421_edu');
    }
}
