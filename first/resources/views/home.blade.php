@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Use this document as a way to quickly start any new project.
            All you get is this text and a mostly barebones HTML document.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection