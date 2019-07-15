@extends('theme.backoffice.layouts.admin')

@section('title','Editar rol: '. $role->name)

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li><a href=""></a></li> --}}
	<li><a href="{{ route('backoffice.role.index') }}">Roles del Sistema</a></li>
	<li><a href="{{ route('backoffice.role.show', $role) }}">{{ $role->name }}</a></li>
	<li>Edición de rol</li>
@endsection

@section('content')
	<div class="section">
		<p class="caption">Edita los datos del rol {{ $role->name }}</p>
		<div class="divider"></div>
		<div id="basic-form" class="section">
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<div class="card">
						<div class="card-content">
							<div class="row">
							<form class="col s12" method="post" action="{{ route('backoffice.role.update', $role) }}">

									{{ csrf_field() }}
									{{ method_field('PUT') }}

									<div class="row">
										<div class="input-field col s12">
											<input id="name" type="text" name="name" value="{{ $role->name }}">
											<label for="name">Nombre</label>
											@if ($errors->has('name'))
												<span class="invalid-feedback" role="alert">
													<strong style="color: red">{{ $errors->first('name') }}</strong>
												</span>
											@endif
										</div>
									</div>
									
									
									<div class="row">
										<div class="input-field col s12">
											<textarea id="description" class="materialize-textarea" name="description">{{ $role->description }}</textarea>
											<label for="description">Descripción del rol</label>
											@if ($errors->has('description'))
												<span class="invalid-feedback" role="alert">
													<strong style="color: red">{{ $errors->first('description') }}</strong>
												</span>
											@endif
										</div>
									<div class="row">
									<div class="input-field col s12">
										<button class="btn waves-effect waves-light right" type="submit">Actualizar
										  <i class="material-icons right">send</i>
										</button>
									</div>
									</div>
								</div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection


@section('foot')

@endsection