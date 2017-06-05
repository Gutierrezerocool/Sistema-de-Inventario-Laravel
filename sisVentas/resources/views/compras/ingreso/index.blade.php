@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-sx-12">
			<h3>Listado de Ingresos</h3>
			@include('compras.ingreso.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th style="text-align: center">Fecha</th>
						<th style="text-align: center">Proveedor</th>
						<th style="text-align: center">Comprobante</th>
						<th style="text-align: center">Impuesto</th>
						<th style="text-align: center">Total</th>
						<th style="text-align: center">Estado</th>
						<th style="text-align: center">Opciones</th>

					</thead>
					
					@foreach ($ingresos as $ing)
					<tr>
						<td align="center">{{ $ing->fecha_hora}}</td>
						<td align="center">{{ $ing->nombre}}</td>
						<td align="center">{{ $ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</td>
						<td align="center">{{ $ing->impuesto}}</td>
						<td align="center">{{ $ing->total}}</td>
						<td align="center">{{ $ing->estado}}</td>
						<td align="center">
							<a href="{{URL::action('IngresoController@show',$ing->idingreso)}}"><button class="btn btn-primary">Detalles</button></a>
							<a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
						</td>	
					</tr>
					@include('compras.ingreso.modal')
					@endforeach
				</table>
			</div>

			<div style="text-align: center">
				{!!$ingresos->render()!!}
			</div>

		</div>
	</div>
@endsection