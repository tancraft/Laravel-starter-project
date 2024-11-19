@extends('publicLayout')

@section('content')

<section>

    <h1>register page</h1>

    <form method="POST" action="{{ route('register') }}">

        @csrf

        <div>
            <label for="name" >{{ __('Name') }}</label>

            <div class="col-md-6">

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')

                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>
        </div>

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

            <label for="password_confirmation">{{ __('Confirm Password') }}</label>

            <div>

                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>
        </div>

        <div>

            <select name="roles[]" id="roles" multiple class="form-control @error('roles') is-invalid @enderror">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ in_array($role->id, old('roles', [])) ? 'selected' : '' }}>
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>

            @error('role_id')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>
                <input type="hidden" id="remember_token" name="remember_token">
        <div>

            <button type="submit">{{ __('Register') }}</button>

        </div>
    </form>   
</section>

@endsection