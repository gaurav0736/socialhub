@extends('layouts.login')

@section('content')


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ config('app.name', 'laravel') }}</h4> 
                    <p class="card-category">Please register to see our platform.</p>              
                 </div>
                    <div class="card-body">      
                    <br> 
                  <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                            <label for="name" class="bmd-label-floating">{{ __('Name') }}</label>
                            
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                            <label for="email" class="bmd-label-floating">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                            <label for="password-confirm" class="bmd-label-floating">{{ __('Confirm Password') }}</label>

                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
