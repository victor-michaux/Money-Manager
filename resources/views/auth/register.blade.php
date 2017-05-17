@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col col-lg-4 offset-lg-4 col-md-6 offset-md-3">
            <div id="registration-form" class="card">
                <div class="card-header text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-block">
                    <form id="form-registration" method="POST" action="{{ route('register') }}">
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        @if ($errors->has('email'))
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
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                <input class="form-control form-control-lg" type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                <input class="form-control col form-control-lg" type="password" id="password" name="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                <input class="form-control col form-control-lg" type="password" id="password2" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>

                        <button id="registration-button" class="btn btn-block btn-lg btn-primary">Create my account</button>
                            {{ csrf_field() }}
                    </form>

                    <p id="sign-in-redirection" class=" font-italic">
                        Already have an account ? <a href="{{ route('login') }}">sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
