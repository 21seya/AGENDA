@extends("template.app")

@section('content')
<div class="col-md-12">
		<h3>Editar Contato</h3>
	</div>
	<div class="col-md-6 wm11">
		<form class="col-md-12" action="{{url('pessoas/update')}}" method="POST">
			{{csrf_field()}}
			<input type="hidden" name="id" >
			<div class="from-group col-md-12{{$errors->has('nome') ? 'has-error': ''}}">
				<label class="control-label">Nome</label>
					<input type="text" name="nome" value="{{$pessoa->nome}}"class="form-control" placeholder="Nome">
					@if($errors->has('nome'))
					<span class="help-block">
						{{$errors->first('nome')}}
					</span>
				@endif	
			</div>
			<div class="col-md-11">
				<button style="margin-top: 5px; float: right" class="btn-primary">
					Salvar
				</button>
			</div>
		</form>			
	</div>	
</div>
@endsection