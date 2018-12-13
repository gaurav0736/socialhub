@extends('layouts.login')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ config('app.name', 'laravel') }}</h4> 
                    <p class="card-category">{{ __('Verify Your Email Address') }}</p>              
                 </div>
                    <div class="card-body">      
                    <br> 
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>



@endsection
