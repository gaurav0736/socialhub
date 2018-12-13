@extends('layouts.login')

@section('content')


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ config('app.name', 'laravel') }}</h4> 
                    <p class="card-category">Please login to proceed.</p>              
                 </div>
                    <div class="card-body">      
                    <br> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="bmd-label-floating">{{ __('E-Mail Address') }}</label>
                                   <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                              </div>
                        </div>


                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group">
                            <label for="password" class="bmd-label-floating">{{ __('Password') }}</label>                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                           </div>
                        </div>
                        <div class="">
                             <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                     <label class="bmd-label-floating" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
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
