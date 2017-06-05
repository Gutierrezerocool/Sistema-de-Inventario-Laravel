{!! Form::open(array('url'=>'compras/proveedor','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" name="searchText" placeholder="Buscar por nombre o código..." value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>

				<label style="margin-left: 2px">{!!link_to('compras/proveedor/create', $title='Nuevo', $attributes = ['id'=>'','class'=>'btn btn-success'], $secure = null)!!}</label>
				
			</span>
		</div>
	</div>

{!!Form::close()!!}