@extends('layout')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf
    
    <div>
        <label for="email">email: </label>
        <input type="email" name="email">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>   
    <button type="submit">send</button>
</form>

@endsection