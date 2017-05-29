@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stats.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/stats/stats.js') }}"></script>
@endsection

@section('content')
    <div id="app">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-block">
                  <canvas id="pieChart" width="300" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
