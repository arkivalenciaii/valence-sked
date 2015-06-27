<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

class DashboardController extends Controller
{
    public function index()
    {
        $name = \Auth::User()->name;
        $messages = \Auth::user()->messages()->get();
        $count_read = 0;
        foreach($messages as $message)
        {
            if($message->isRead == '0')
            {
                $count_read = $count_read + 1;
            }
        }

        return view('pages.dashboard')->with(['name' => $name, 'messages' => $messages, 'count_read' => $count_read]);
    }
}
