<!-- resources/views/child.blade.php -->

@extends('layouts.end')

@section('title', 'python Title')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>python blade..</p>
    <p>python blade..</p>
    <p>python blade..</p>
    <p>python blade..</p>
@endsection