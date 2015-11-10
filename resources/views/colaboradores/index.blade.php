@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Colaboradores</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('colaboradores.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($colaboradores->isEmpty())
                <div class="well text-center">No Colaboradores found.</div>
            @else
                @include('colaboradores.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $colaboradores])


    </div>
@endsection