@extends('theme.backoffice.layouts.admin')

@section('title','Asignar rol')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li><a href=""></a></li> --}}
	<li><a href="{{ route('backoffice.user.index') }}">Usuarios del Sistema</a></li>
	<li><a href="{{ route('backoffice.user.show', $user) }}"></a>{{ $user->name }}</li>
	<li>Asignar roles</li>
	<li>Crear rol</li>
@endsection

@section('content')
	<div class="section">
		<p class="caption">Selecciona los roles que deseas asignar</p>
		<div class="divider"></div>
		<div class="section">
			<div class="row">
				<div class="col s12 m8">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Asignar roles</span> 
							<div class="row">
								<form class="col s12" method="post" action="{{ route('backoffice.user.role_assignment', $user) }}">

									{{ csrf_field() }}

									@foreach($roles as $role)
								    <p>
								    	<input type="checkbox" id="{{ $role->id }}" name="roles[]" value="{{ $role->id }}" @if($user->has_role($role->id)) checked @endif />
									    <label for="{{ $role->id }}">
									        <span>{{ $role->name }}</span>
									    </label>
								    </p>
								    @endforeach
									<div class="row">
										<div class="input-field col s12">
											<button class="btn waves-effect waves-light right" type="submit">Guardar
											  <i class="material-icons right">send</i>
											</button>
									    </div>	
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
				@include('theme.backoffice.pages.user.includes.user_nav')
			</div>
			</div>
		</div>
	</div>
	
@endsection


@section('foot')

@endsection