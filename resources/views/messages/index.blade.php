@extends('messages.app')

@section('content')
    @foreach($messages as $message)
        <h1><a href="/messages/{{ $message->from }}">{{ $message->from }}</h1>
    @endforeach