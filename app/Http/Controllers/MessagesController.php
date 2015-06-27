<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = \Auth::user()->messages()->get();
        $who = \Auth::user()->name;
        return view('messages.index')->with([
            'messages' => $messages,
            'who' => $who
        ]);
    }

    public function show($from)
    {

        $messages = \Auth::user()->messages()->get();

        return view('messages.show')->with([
            'messages' => $messages,
            'from' => $from,
            'who' => $from,
        ]);
    }
}
