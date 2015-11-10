<table class="table">
    <thead>
    <th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cuil</th>
			<th>Cel Cod Area</th>
			<th>Cel</th>
			<th>Domicilio</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Created At Ip</th>
			<th>Updated At Ip</th>
			<th>Fecha Ingreso</th>
			<th>Fecha Egreso</th>
			<th>Estado Civil</th>
			<th>Hijos</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($colaboradores as $colaboradores)
        <tr>
            <td>{!! $colaboradores->id !!}</td>
			<td>{!! $colaboradores->nombre !!}</td>
			<td>{!! $colaboradores->apellido !!}</td>
			<td>{!! $colaboradores->cuil !!}</td>
			<td>{!! $colaboradores->cel_cod_area !!}</td>
			<td>{!! $colaboradores->cel !!}</td>
			<td>{!! $colaboradores->domicilio !!}</td>
			<td>{!! $colaboradores->created_at !!}</td>
			<td>{!! $colaboradores->updated_at !!}</td>
			<td>{!! $colaboradores->created_at_ip !!}</td>
			<td>{!! $colaboradores->updated_at_ip !!}</td>
			<td>{!! $colaboradores->fecha_ingreso !!}</td>
			<td>{!! $colaboradores->fecha_egreso !!}</td>
			<td>{!! $colaboradores->estado_civil !!}</td>
			<td>{!! $colaboradores->hijos !!}</td>
            <td>
                <a href="{!! route('colaboradores.edit', [$colaboradores->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('colaboradores.delete', [$colaboradores->id]) !!}" onclick="return confirm('Are you sure wants to delete this Colaboradores?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
