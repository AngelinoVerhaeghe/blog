@extends('layouts.app')

@section('title')
    Profile | {{ Auth()->user()->name }}
@endsection

@section('content')
    <div>
        <div>
            <h1>Profile</h1>
        </div>
    </div>
@endsection
