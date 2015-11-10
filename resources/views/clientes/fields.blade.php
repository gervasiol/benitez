<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id', 'Id:') !!}
	{!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('apellido', 'Apellido:') !!}
	{!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Cuil Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cuil', 'Cuil:') !!}
	{!! Form::text('cuil', null, ['class' => 'form-control']) !!}
</div>

<!-- Cel Cod Area Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel_cod_area', 'Cel Cod Area:') !!}
	{!! Form::number('cel_cod_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Cel Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel', 'Cel:') !!}
	{!! Form::number('cel', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('responsable', 'Responsable:') !!}
	{!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('domicilio', 'Domicilio:') !!}
	{!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
</div>

<!-- Referencia Domicilio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('referencia_domicilio', 'Referencia Domicilio:') !!}
	{!! Form::text('referencia_domicilio', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('created_at', 'Created At:') !!}
	{!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('updated_at', 'Updated At:') !!}
	{!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Ip Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('created_at_ip', 'Created At Ip:') !!}
	{!! Form::text('created_at_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Ip Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('updated_at_ip', 'Updated At Ip:') !!}
	{!! Form::text('updated_at_ip', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
