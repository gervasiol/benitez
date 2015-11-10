<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cuil</th>
			<th>Cel Cod Area</th>
			<th>Cel</th>
			<th>Responsable</th>
			<th>Domicilio</th>
			<th>Referencia Domicilio</th>
			<th>Tipo Operador Id</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Created At Ip</th>
			<th>Updated At Ip</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($operadores as $operadores)
        <tr>
            <td>{!! $operadores->id !!}</td>
			<td>{!! $operadores->nombre !!}</td>
			<td>{!! $operadores->apellido !!}</td>
			<td>{!! $operadores->cuil !!}</td>
			<td>{!! $operadores->cel_cod_area !!}</td>
			<td>{!! $operadores->cel !!}</td>
			<td>{!! $operadores->responsable !!}</td>
			<td>{!! $operadores->domicilio !!}</td>
			<td>{!! $operadores->referencia_domicilio !!}</td>
			<td>{!! $operadores->tipo_operador_id !!}</td>
			<td>{!! $operadores->created_at !!}</td>
			<td>{!! $operadores->updated_at !!}</td>
			<td>{!! $operadores->created_at_ip !!}</td>
			<td>{!! $operadores->updated_at_ip !!}</td>
            <td>
                <a href="{!! route('operadores.edit', [$operadores->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('operadores.delete', [$operadores->id]) !!}" onclick="return confirm('Are you sure wants to delete this Operadores?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
