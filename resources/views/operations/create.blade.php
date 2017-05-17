@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/create-operation.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('js/operations/create.js') }}"></script>
@endsection

@section('content')
    <div id="app" class="container-fluid">
        <div class="row align-items-center">
            <div class="col col-md-6 offset-md-3">
                <operation-form></operation-form>
            </div>
        </div>
    </div>
@endsection