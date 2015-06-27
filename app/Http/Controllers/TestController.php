<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function flash()
    {
        flash()->overlay('Hello Mameee pangooo :*','Welcome to flappy');
        return view('pages.flash')->with('name', $name);
    }
}
