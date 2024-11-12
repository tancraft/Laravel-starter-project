@extends('layout')

@section('content')

    <h1>login page</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">email:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="" role="alert">
                <strong>{{ $message }}</strong>
                </span>
             @enderror
        </div>

        <div>
            <label for="">password:</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    
    </form>

    @endsection