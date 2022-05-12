<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function como_llegar(){
        return view("como_llegar");
    }
}
