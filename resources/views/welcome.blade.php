@extends('layouts.app')

@section('content')
    @if(Auth::user())
        <h1>Welcome {{ Auth::user()->name }}</h1>
    @endif
@endsection