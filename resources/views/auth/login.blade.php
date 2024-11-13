@extends('publicLayout')

@section('content')

    <section>

        <h1>login page</h1>
    
        <form method="POST" action="{{ route('login') }}">
    
            @csrf
    
            <div>
    
                <label for="email">{{ __('Email Address') }}</label>
    
                <div>
    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                    @error('email')
    
                        <span class="invalid-feedback" role="alert">
    
                            <strong>{{ $message }}</strong>
    
                        </span>
    
                    @enderror
    
                </div>
            </div>
    
            <div>
    
                <label for="password">{{ __('Password') }}</label>
    
                <div>
    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                    @error('password')
    
                        <span class="invalid-feedback" role="alert">
    
                            <strong>{{ $message }}</strong>
    
                        </span>
    
                    @enderror
    
                </div>
            </div> 

            <div>
    
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
    
            </div>
        </form>   
    </section>

    @endsection