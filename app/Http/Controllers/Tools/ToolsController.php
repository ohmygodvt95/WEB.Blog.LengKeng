<?php

namespace App\Http\Controllers\Tools;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    public function getIndex(){
    	return view('frontend.tools.index');
    }

    public function getRandom(){
    	return view('frontend.tools.random');
    }
    public function missingMethod($parameters = []){
    	return redirect('tools/index');
    }
}
