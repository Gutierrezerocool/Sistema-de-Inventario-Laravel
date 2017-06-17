{!! Form::open(array('url'=>'seguridad/usuario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>

			<label style="margin-left: 2px">{!!link_to('seguridad/usuario/create', $title='Nuevo', $attributes = ['id'=>'','class'=>'btn btn-success'], $secure = null)!!}</label>
		</span>
	</div>
</div>

{!!Form::close()!!}