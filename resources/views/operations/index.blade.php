@extends('templates.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/operations.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('content')
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="text-center col">
                    <a href="{{ route('create-operation') }}" id="addExpense" class="btn btn-block btn-lg btn-primary">Add Expense</a>
                </div>
                <div class="text-center col">
                    <a href="{{ route('create-operation') }}" id="addIncome" class="btn btn-block btn-lg btn-primary">Add Income</a>
                </div>
            </div>


            <tabs>
                <tab name="all" :selected="true">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>My operations</h4>
                                </div>
                                <div class="card-block">
                                    <operations-list list-type="all" v-bind:operations="operations"></operations-list>
                                </div>
                            </div>
                        </div>
                    </div>
                </tab>

                <tab name="separated">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Expenses</h4>
                                </div>
                                <div class="card-block">
                                    <operations-list list-type="expense" v-bind:operations="operations"></operations-list>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Incomes</h4>
                                </div>
                                <div class="card-block">
                                    <operations-list list-type="income" v-bind:operations="operations"></operations-list>
                                </div>
                            </div>
                        </div>
                    </div>

                </tab>
            </tabs>

        </div>
    </div>
@endsection