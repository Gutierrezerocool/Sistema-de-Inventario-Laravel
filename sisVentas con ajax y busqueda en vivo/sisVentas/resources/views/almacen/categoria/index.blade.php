@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-sx-12">
			<h3>Listado de Categorías <!-- <a href="categoria/create"><button class="btn btn-success">Nuevo</button></a>--></h3>
			
			<input type="text" class="form-control" id="search" name="search">
			<label style="margin-left: 2px">{!!link_to('almacen/categoria/create', $title='Nuevo', $attributes = ['id'=>'','class'=>'btn btn-success'], $secure = null)!!}</label>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Opciones</th>
					</thead>
					<tbody id="dato">
					
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" ></script>

	<script type="text/javascript">
	$('#search').on('keyup',function(){
	$value=$(this).val();
	var route = "http://localhost/sisVentas/public/almacen/categorias";
	$.ajax({
		type : 'get',
		url:route,
		data : {'search':$value},
		success:function(data){
			$('tbody').html(data);
		}
	});
});
</script>


@endsection


@section('scripts')
	{!!Html::script('js/script2.js')!!}
@endsection