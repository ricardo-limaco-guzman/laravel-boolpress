@extends('layouts.guests')

@section('content')
<div class="container pt-5 mt-4">
  <div class="row justify-content-center">
    <div class="col-9">
      <div class="card shadow-lg">
        <div class="row">

          <!-- Img -->
          <div class="col-6">
            <img src="/img/img-login.jpg" alt="login" class="w-100 h-100 rounded-start" style="object-fit: cover">
          </div>
          {{-- <div class="col-6">
            <div class="ratio ratio-1x1">
              <img src="/img/img-login.jpg" alt="login" class="image-fluid rounded-start w-100 h-100"
                style="object-fit: cover">
            </div>
          </div> --}}

          <!-- Text area -->
          <div class="col-6 d-flex flex-column justify-content-center">

            <h3 class="text-primary fw-bold text-center _title-form">Login</h3>

            <!-- Form login -->
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <!-- Email -->
              <div class="form-group row pt-5">
                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail')}}</label>

                <div class="col-md-8">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <!-- Password -->
              <div class="form-group row pt-4">
                <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password')}}</label>

                <div class="col-md-8">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <!-- Checkbox -> ricordami -->
              <div class="form-group row pt-3">
                <div class="col-md-6 offset-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                      ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">{{ __('Ricordami') }}
                    </label>
                  </div>
                </div>
              </div>

              <!-- Button -> login -->
              <div class="form-group row mb-0 justify-content-center pt-4">
                <div class="col-md-8 offset-md-2 d-flex flex-column align-items-center">

                  <button type="submit" class="btn btn-primary w-75">
                    {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                  <a class="btn btn-sm btn-link mt-4 w-75" href="{{ route('password.request') }}">
                    {{ __('Hai dimenticato la password?') }}
                  </a>
                  @endif
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection