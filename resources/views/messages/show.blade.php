@extends('messages.app')

@section('content')
    @foreach($messages as $message)
        @if($message->from == $from)
            <h1>{{$message->from}}</h1><br>
            <l1>{{$message->message}}</l1><br>
        @endif
    @endforeach
