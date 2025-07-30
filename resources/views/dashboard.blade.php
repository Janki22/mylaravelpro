@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <p>You are now logged in.</p>
</div>
@endsection
