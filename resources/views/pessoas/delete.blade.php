@extends("template.app")

@section('content')

<div class="col-md-12 wm11">
	<div class="col-md-12">
		<h3>Deseja Realmente Excluir esse Contato</h3>
		<div style="float: right;">
			<a  class="btn btn-default" href="{{url('pessoas/')}}">
				<ion-icon name="skip-backward"></ion-icon>
				Cancelar
			</a>
			<a  class="btn btn-danger" href="{{url('pessoas/$pessoas->$id/destroy')}}">
				<ion-icon name="close"></ion-icon>
				Excluir
			</a>
	</div>
</div>
  <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                	{{$pessoa->nome}}
                </div>
                <div class="card-body">
                	@foreach($pessoa->telefones as $telefone)
                	 <p><strong>Telefone:</strong>{{{$telefone->ddd}}} {{$telefone->telefone}}</p>
                	@endforeach 
                </div>
            </div>
        </div>
@endsection