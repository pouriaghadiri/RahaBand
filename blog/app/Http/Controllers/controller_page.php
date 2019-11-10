<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_page extends Controller
{
    //
    public function index(){
        $urls = [
            "https://github.com/aliqasemietedal/RahaBand.git"
        ] ;

        return view('welcome' , compact('urls'));
    }
}
