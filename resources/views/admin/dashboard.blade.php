@extends('layouts.admin')

@section('content')
    @if(Auth::guard('admin')->user())
        <h1>Welcome {{ Auth::guard('admin')->user()->name }}</h1>
    @endif
@endsection