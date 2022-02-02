<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function form(){
        return view('backend.form');
    }
}
