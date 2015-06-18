<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function flash()
    {
        $name = 'Arki';
        flash()->overlay('HI!','Welcome to flash');
        return view('pages.flash')->with('name', $name);
    }
}
