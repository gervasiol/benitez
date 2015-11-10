@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Clientes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('clientes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($clientes->isEmpty())
                <div class="well text-center">No Clientes found.</div>
            @else
                @include('clientes.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $clientes])


    </div>
@endsection