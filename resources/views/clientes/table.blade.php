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
			<th>Created At</th>
			<th>Updated At</th>
			<th>Created At Ip</th>
			<th>Updated At Ip</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($clientes as $clientes)
        <tr>
            <td>{!! $clientes->id !!}</td>
			<td>{!! $clientes->nombre !!}</td>
			<td>{!! $clientes->apellido !!}</td>
			<td>{!! $clientes->cuil !!}</td>
			<td>{!! $clientes->cel_cod_area !!}</td>
			<td>{!! $clientes->cel !!}</td>
			<td>{!! $clientes->responsable !!}</td>
			<td>{!! $clientes->domicilio !!}</td>
			<td>{!! $clientes->referencia_domicilio !!}</td>
			<td>{!! $clientes->created_at !!}</td>
			<td>{!! $clientes->updated_at !!}</td>
			<td>{!! $clientes->created_at_ip !!}</td>
			<td>{!! $clientes->updated_at_ip !!}</td>
            <td>
                <a href="{!! route('clientes.edit', [$clientes->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('clientes.delete', [$clientes->id]) !!}" onclick="return confirm('Are you sure wants to delete this Clientes?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
