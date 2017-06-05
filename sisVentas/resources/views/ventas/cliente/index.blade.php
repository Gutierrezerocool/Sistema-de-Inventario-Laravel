@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-sx-12">
			<h3>Listado de Clientes</h3>
			@include('ventas.cliente.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th style="text-align: center">Id</th>
						<th style="text-align: center">Nombre</th>
						<th style="text-align: center">Tipo Doc.</th>
						<th style="text-align: center">Número Doc.</th>
						<th style="text-align: center">Teléfono</th>
						<th style="text-align: center">Email</th>
						<th style="text-align: center">Opciones</th>
					</thead>
					
					@foreach ($personas as $per)
					<tr>
						<td align="center">{{ $per->idpersona}}</td>
						<td align="center">{{ $per->nombre}}</td>
						<td align="center">{{ $per->tipo_documento}}</td>
						<td align="center">{{ $per->num_documento}}</td>
						<td align="center">{{ $per->telefono}}</td>
						<td align="center">{{ $per->email}}</td>
						<td align="center">
							<a href="{{URL::action('ClienteController@edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>	
					</tr>
					@include('ventas.cliente.modal')
					@endforeach
				</table>
			</div>

			<div style="text-align: center">
				{!!$personas->render()!!}
			</div>

		</div>
	</div>
@endsection