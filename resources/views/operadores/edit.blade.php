@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($operadores, ['route' => ['operadores.update', $operadores->id], 'method' => 'patch']) !!}

        @include('operadores.fields')

    {!! Form::close() !!}
</div>
@endsection
