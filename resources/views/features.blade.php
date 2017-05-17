@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/features.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
@endsection

@section('js')
    <script src="{{ URL::asset('js/features.js') }}"></script>
@endsection

@section('content')
    <div id="features-description">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 id="title" class="display-1 text-center">Features</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nulla et erat dignissim euismod.
                        Mauris felis mi, tempus at odio molestie, blandit tempor purus. Etiam sollicitudin enim quis cursus luctus.
                    </p>
                    <p>
                        Nunc vel ipsum dolor. Fusce quis congue nisl. Nunc erat ipsum, tempor quis consectetur in, viverra ac turpis.
                        Maecenas commodo eget neque et faucibus. Quisque rutrum iaculis fermentum.
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-justify">
                        Sed volutpat, velit vitae imperdiet hendrerit, nisl elit maximus mi, non congue libero arcu eu metus.
                        Morbi dapibus consectetur risus, et pharetra ligula vulputate eu. Proin eget consectetur eros.
                    </p>
                    <p>
                        Vivamus dapibus orci vel libero pharetra ornare. Aenean neque augue, molestie vel risus sit amet, molestie vehicula ligula.
                        Maecenas non turpis consequat, dignissim arcu at, condimentum mi. Aliquam at vehicula enim.
                        Phasellus ullamcorper purus a est malesuada facilisis.
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-justify">
                        Sed volutpat, velit vitae imperdiet hendrerit, nisl elit maximus mi, non congue libero arcu eu metus.
                        Morbi dapibus consectetur risus, et pharetra ligula vulputate eu. Proin eget consectetur eros.
                    </p>
                    <p>
                        Vivamus dapibus orci vel libero pharetra ornare. Aenean neque augue, molestie vel risus sit amet, molestie vehicula ligula.
                        Maecenas non turpis consequat, dignissim arcu at, condimentum mi. Aliquam at vehicula enim.
                        Phasellus ullamcorper purus a est malesuada facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection