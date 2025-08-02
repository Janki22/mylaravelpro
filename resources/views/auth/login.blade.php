@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}" class="row g-3 p-4 border bg-white shadow-sm rounded mx-auto" style="max-width: 400px;">
    @csrf

    <div class="text-center mb-3">
        <h4>Login</h4>

        @if($errors->any())
            <div class="alert alert-danger text-start">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <p class="text-muted">Enter your credentials</p>
    </div>

    <div class="col-12">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="email"  value="{{ old('email') }}" id="inputEmail" required autofocus>
    </div>

    <div class="col-12">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword" required>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-warning w-100">Sign In</button>
    </div>
</form>
@endsection
