@extends('publicLayout')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf
    
    <div>
        <div>
    
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>

            <div>
    
                <button type="submit" class="btn btn-primary">{{ __('forgot-password') }}</button>
    
            </div>
</form>

@endsection