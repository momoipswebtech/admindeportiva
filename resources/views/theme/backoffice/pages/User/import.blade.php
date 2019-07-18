@extends('theme.backoffice.layouts.admin')

@section('title','Importar usuarios')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li><a href=""></a></li> --}}
	<li><a href="{{ route('backoffice.user.index') }}">Usuarios del Sistema</a></li>
	<li>Importar Usuarios</li>
@endsection

@section('content')
	<div class="section">
		<p class="caption">Selecciona un archivo de Excel</p>
		<div class="divider"></div>
		<div class="section">
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Importar usuario</span> 
							<div class="row">
								<form class="col s12" method="post" action="{{ route('backoffice.user.make_import') }}" enctype="multipart/form-data">

									{{ csrf_field() }}

									<div class="row">
										<div class="input-field col s12">
											<input type="file" name="excel" required="" >
											@if ($errors->has('excel'))
												<span class="invalid-feedback" role="alert">
													<strong style="color: red">{{ $errors->first('excel') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12">
											<button class="btn waves-effect waves-light right" type="submit">Importar
											  <i class="material-icons right">send</i>
											</button>
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