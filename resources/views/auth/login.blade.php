@extends('layouts.app-login')

@section('content')
<div class="container-login100" style="background-image: url('images/DS.jpg');">
  <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="opacity: 0.9;">
    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <span for="email" class="login100-form-title p-b-37">
              {{ __('Login') }}
            </span>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="focus-input100"></span>
            </div>

        </div>
        <div class="form-group row">
          <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="focus-input100"></span>
            </div>
        </div>

        <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    {{ __('Login') }}
                </button>
        </div>

    </form>
  </div>
@endsection
