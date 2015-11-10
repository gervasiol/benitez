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

<!-- Domicilio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('domicilio', 'Domicilio:') !!}
	{!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
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

<!-- Fecha Ingreso Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
	{!! Form::date('fecha_ingreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Egreso Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_egreso', 'Fecha Egreso:') !!}
	{!! Form::date('fecha_egreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Civil Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado_civil', 'Estado Civil:') !!}
	{!! Form::text('estado_civil', null, ['class' => 'form-control']) !!}
</div>

<!-- Hijos Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('hijos', 'Hijos:') !!}
	{!! Form::number('hijos', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
