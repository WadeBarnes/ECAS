@extends('app')

@section('content')
    <h1>API Test</h1>
    <p>Health Check Status Code: {{ $status }}</p>
    <h2>Settings</h2>
    @foreach($api as $key => $value)
        <p>{{ $key }}: {{ $value }}</p>
    @endforeach
@endsection