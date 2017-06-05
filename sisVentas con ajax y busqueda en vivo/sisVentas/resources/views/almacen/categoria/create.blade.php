@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Categoría</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(['id'=>'formulario'])!!}
			

			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
			<div class="form-group">
				<!--<label for="nombre">Nombre</label>
				<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre...">-->

				{!!Form::label('nombre','Nombre: ')!!}
				{!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}
			</div>

			<div class="form-group">
				<!--<label for="nombre">Descripción</label>
				<input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción...">-->

				{!!Form::label('descripcion','Descripción: ')!!}
				{!!Form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Ingresa una descripción'])!!}
			</div>

			<div class="form-group">
				<!--<label for="nombre">condicion</label>
				<input type="text" id="condicion" name="condicion" class="form-control" placeholder="condicion">-->

				{!!Form::hidden('condicion','Condición: ')!!}
				{!!Form::hidden('condicion',null,['id'=>'condicion','class'=>'form-control','placeholder'=>'Condición'])!!}
			</div>

			<div class="form-group">
				<!--<button id="registro" class="btn btn-primary" type="submit">Guardar</button>-->
				{!!link_to('almacen/categoria', $title='Guardar', $attributes = ['id'=>'registro','class'=>'btn btn-primary'], $secure = null)!!}
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::close()!!}

		</div>
	</div>
@endsection


@section('scripts')
	{!!Html::script('js/script.js')!!}
@endsection