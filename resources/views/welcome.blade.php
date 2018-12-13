@extends('layouts.login')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ config('app.name', 'laravel') }}</h4>                  
                </div>
                <div class="card-body">
                    <div id="">
                  <div class="title">
                      <h2>Welcome! Please login/Register to continue...</h2>
                        </div>
                       <div class="row">


                         <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                              <div class="card-icon">
                                <i class="material-icons">account_box</i>
                              </div>
                              <p class="card-category">Users</p>
                              <h3 class="card-title">50
                                <small>users</small>
                              </h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                 <a href="{{ route('login') }}">Click here to login</a>
                              </div>
                            </div>
                          </div>
                        </div>


                            <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                              <div class="card-icon">
                                <i class="material-icons">store</i>
                              </div>
                              <p class="card-category">Register</p>
                              <h3 class="card-title">50
                                <small>registration</small>
                              </h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                 <a href="{{ route('register') }}">Click here to register</a>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                              <div class="card-icon">
                                <i class="material-icons">info_outline</i>
                              </div>
                              <p class="card-category">Forgot Password</p>
                              <h3 class="card-title">
                                <small></small>
                              </h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                 <a href="{{ route('password.request') }}">Forgot Password</a>
                              </div>
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>
@endsection
