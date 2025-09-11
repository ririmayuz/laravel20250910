<!-- resources/views/child.blade.php -->

@extends('layouts.front')

@section('title', 'js Title')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>js blade...</p>
    <p>js blade...</p>
@endsection