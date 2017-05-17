@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
@endsection
@section('content')
    <div id="presentation-text">
        <div class="container">
            <div class="row text-justify">
                <div class="col-lg-9 col-md-7 col-sm-12">
                    <h3>Gemnas assimilant!</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nulla et erat dignissim euismod.
                        Mauris felis mi, tempus at odio molestie, blandit tempor purus. Etiam sollicitudin enim quis cursus luctus.
                        Nunc vel ipsum dolor. Fusce quis congue nisl. Nunc erat ipwsum, tempor quis consectetur in, viverra ac turpis.
                        Maecenas commodo eget neque et faucibus. Quisque rutrum iaculis fermentum.
                    </p>
                    <h3>Extum festus lacta est.</h3>
                    <p>
                        Sed volutpat, velit vitae imperdiet hendrerit, nisl elit maximus mi, non congue libero arcu eu metus.
                        Morbi dapibus consectetur risus, et pharetra ligula vulputate eu. Proin eget consectetur eros.
                        Vivamus dapibus orci vel libero pharetra ornare. Aenean neque augue, molestie vel risus sit amet, molestie vehicula ligula.
                        Maecenas non turpis consequat, dignissim arcu at, condimentum mi. Aliquam at vehicula enim.
                        Phasellus ullamcorper purus a est malesuada facilisis.
                    </p>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-12 text-center">
                    <img class="img-fluid" src="http://fakeimg.pl/300/">
                </div>
            </div>
        </div>
    </div>
    <div id="auth-button">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <p class="text-center"><a id="register-button" href="{{ route('register') }}" class="btn btn-lg btn-primary float-right">Register</a></p>
                </div>
                <div class="col">
                    <p class="text-center"><a id="login-button" href="{{ route('login') }}" class="btn btn-lg btn-primary float-left">Login</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection


