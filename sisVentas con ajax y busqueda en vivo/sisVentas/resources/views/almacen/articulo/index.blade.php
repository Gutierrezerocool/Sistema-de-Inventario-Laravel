@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-sx-12">
			<h3>Listado de Artículos</h3>
			@include('almacen.articulo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th style="text-align: center">Id</th>
						<th style="text-align: center">Nombre</th>
						<th style="text-align: center">Código</th>
						<th style="text-align: center">Categoría</th>
						<th style="text-align: center">Stock</th>
						<th style="text-align: center">Imagen</th>
						<th style="text-align: center">Estado</th>
						<th style="text-align: center">Opciones</th>
					</thead>
					
					@foreach ($articulos as $art)
					<tr>
						<td align="center">{{ $art->idarticulo}}</td>
						<td align="center">{{ $art->nombre}}</td>
						<td align="center">{{ $art->codigo}}</td>
						<td align="center">{{ $art->categoriaojo}}</td>
						<td align="center">{{ $art->stock}}</td>
						<td align="center">
							<img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{ $art->nombre}}" height="50px" width="50px" class="img-thumbnail">
						</td>
						<td align="center">{{ $art->estado}}</td>
						<td align="center">
							<a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>	
					</tr>
					@include('almacen.articulo.modal')
					@endforeach
				</table>
			</div>

			<div style="text-align: center">
				{!!$articulos->render()!!}
			</div>

		</div>
	</div>
@endsection