@extends('app')

@section('content')
    <div id="app">
        <dashboard
        :user="{{ $user }}"
        :credentials="{{ $credentials }}"
        :sessions="{{ $sessions }}"
        :subjects="{{ $subjects }}"
        :schools="{{ $schools }}"
        :regions="{{ $regions }}"
        :districts="{{ $districts }}"
        :user_credentials="{{ $user_credentials }}"
        dusk="dashboard-component"
        >
    </dashboard>
    </div>
@endsection