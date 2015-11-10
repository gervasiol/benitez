@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($colaboradores, ['route' => ['colaboradores.update', $colaboradores->id], 'method' => 'patch']) !!}

        @include('colaboradores.fields')

    {!! Form::close() !!}
</div>
@endsection
