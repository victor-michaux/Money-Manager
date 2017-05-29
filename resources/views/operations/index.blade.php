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
                    <a href="{{ route('create-operation', ['type'   =>  2]) }}" id="addExpense" class="btn btn-block btn-lg btn-primary">Add Expense</a>
                </div>
                <div class="text-center col">
                    <a href="{{ route('create-operation', ['type'   =>  1]) }}" id="addIncome" class="btn btn-block btn-lg btn-primary">Add Income</a>
                </div>
                <div class="text-center col">
                    <a href="{{ route('create-operation', ['type'   =>  3]) }}" id="addPrevision" class="btn btn-block btn-lg btn-primary">Add Prevision</a>
                </div>
            </div>


            <tabs>
                <tab name="All" :selected="true">
                    <div class="row">
                        <div class="col">
                            <operations-list title="My Operations" list-type="all" v-bind:operations="operations" display-progress=true></operations-list>
                        </div>
                    </div>
                </tab>

                <tab name="Separated">
                    <div class="row">
                        <div class="col-md-6">
                            <operations-list title="Expenses" list-type="expense" v-bind:operations="operations"></operations-list>
                        </div>

                        <div class="col-md-6">
                            <operations-list title="Incomes" list-type="income" v-bind:operations="operations"></operations-list>
                        </div>
                    </div>

                </tab>
            </tabs>

        </div>
    </div>
@endsection
