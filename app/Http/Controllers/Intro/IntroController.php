<?php

namespace App\Http\Controllers\Intro;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IntroController extends Controller
{

    public function getIndex($value='')
    {
        return view('frontend.intro.index');
    }
}
