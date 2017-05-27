@if(Session::has('notification'))
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="notification alert alert-success" role="alert">
                    <strong>Well done!</strong> {{ Session::get('notification') }}
                </div>
            </div>
        </div>
    </div>
@endif