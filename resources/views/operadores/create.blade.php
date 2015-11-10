@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'operadores.store']) !!}

        @include('operadores.fields')

    {!! Form::close() !!}
</div>
@endsection
