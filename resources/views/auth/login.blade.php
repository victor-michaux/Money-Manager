@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col col-lg-4 offset-lg-4 col-md-6 offset-md-3">
            <div id="login-form" class="card">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-block">
                    <form method="post" method="POST" action="{{ route('login') }}" id="form-login">
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        @if ($errors->has('password'))
                            <div class="alert alert-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                      <i class="material-icons">person</i>
                                    </span>
                                <input class="form-control form-control-lg" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                      <i class="material-icons">lock</i>
                                    </span>
                                <input class="form-control col form-control-lg" type="password" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="text-center"><button type="submit" id="login-button" class="btn btn-block btn-lg btn-primary">Login</button></div>
                        {{ csrf_field() }}
                    </form>

                    <p id="forgot-password" class="font-italic">
                        <a href="{{ route('password.request') }}">Forgot your password ?</a>
                    </p>
                    <p id="register-redirection" class="font-italic">
                        You don't have an account ? <a href="{{ route('register') }}">register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
