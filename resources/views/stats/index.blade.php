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
        <div class="container align-items-center">
          <div class="row">
            <div class="col-sm-6 mx-auto">
              <div class="card">
                <div class="card-block">
                  <canvas id="pieChart" style="max-width:500px; max-height:500px;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
