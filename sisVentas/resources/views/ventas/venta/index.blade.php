@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-sx-12">
			<h3>Listado de Ventas</h3>
			@include('ventas.venta.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th style="text-align: center">Fecha</th>
						<th style="text-align: center">Cliente</th>
						<th style="text-align: center">Comprobante</th>
						<th style="text-align: center">Impuesto</th>
						<th style="text-align: center">Total</th>
						<th style="text-align: center">Estado</th>
						<th style="text-align: center">Opciones</th>

					</thead>
					
					@foreach ($ventas as $ven)
					<tr>
						<td align="center">{{ $ven->fecha_hora}}</td>
						<td align="center">{{ $ven->nombre}}</td>
						<td align="center">{{ $ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante}}</td>
						<td align="center">{{ $ven->impuesto}}</td>
						<td align="center">{{ $ven->total_venta}}</td>
						<td align="center">{{ $ven->estado}}</td>
						<td align="center">
							<a href="{{URL::action('VentaController@show',$ven->idventa)}}"><button class="btn btn-primary">Detalles</button></a>
							<a href="" data-target="#modal-delete-{{$ven->idventa}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
						</td>	
					</tr>
					@include('ventas.venta.modal')
					@endforeach
				</table>
			</div>

			<div style="text-align: center">
				{!!$ventas->render()!!}
			</div>

		</div>
	</div>
@endsection