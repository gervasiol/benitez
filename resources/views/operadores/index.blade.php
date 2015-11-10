@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Operadores</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('operadores.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($operadores->isEmpty())
                <div class="well text-center">No Operadores found.</div>
            @else
                @include('operadores.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $operadores])


    </div>
@endsection