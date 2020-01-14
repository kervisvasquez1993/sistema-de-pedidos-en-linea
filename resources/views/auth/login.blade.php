@extends('layouts.app')
@section('body-class', 'login-page sidebar-collapse')
@section('content')
    <div class="page-header header-filter" style="background-image: url('{{asset('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Inicio de sesión</h4>
                                <!-- <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>-->
                            </div>
                            <p class="description text-center">Ingresa tus Datos</p>
                            <div class="card-body">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                                    </div>

                                    <input id="email" placeholder="Email..." type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}"
                                           required autocomplete="email" autofocus>

                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                                    </div>
                                    <input  placeholder="Password..."id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" >
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordar Sesión') }}

                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn-primary btn-xs">
                                    {{ __('Login') }}
                                </button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
   @include('includes.footer')
    </div>
@endsection
