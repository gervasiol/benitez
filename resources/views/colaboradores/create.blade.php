@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'colaboradores.store']) !!}

        @include('colaboradores.fields')

    {!! Form::close() !!}
</div>
@endsection
