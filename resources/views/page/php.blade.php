<!-- resources/views/child.blade.php -->

@extends('layouts.end')

@section('title', 'php Title')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>php blade..</p>
    <p>php blade..</p>
    <p>php blade..</p>
    <p>php blade..</p>
@endsection