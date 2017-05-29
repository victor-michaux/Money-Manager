@extends('templates.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col">
                <div class="card-block">
                    @if($activated)
                        <div class="alert alert-success" role="alert">
                            <strong>Well done!</strong> You're account has now been activated, enjoy manage your money !
                        </div>
                    @else
                        <div class="alert alert-danger" role="alert">
                            <strong>Oh snap!</strong> It seem that this account already or doesn't has been activated !
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection