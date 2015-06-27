<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function set()
    {
        $usr = \Auth::User();
        $msg = new Message;
        $msg->message = 'Try Message';
        $msg->from = 'Try2';
        $msg->user_id = $usr->id;
        $msg->isRead = true;
        $msg->save();

        return view('welcome');
    }
}
