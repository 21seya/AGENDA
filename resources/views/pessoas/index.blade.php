@extends("template.app")

@section('content')
    <style>
    	.btn-action{
    		padding: 5px;
    		margin-left: 5px;
    		float: right;
    	}
    </style>
    <div class="col-sm-12" style="padding-bottom: 10px">
      @foreach(range('A','Z') as $letra)
       <div class="btn-group">
         <a href="{{url('pessoas/', $letra)}}" class="btn btn-primary{{$letra ===$criterio ? 'disabled' : ''}}">
              {{$letra}}
         </a>     
       </div>
      @endforeach 
    </div>
   <div class="row">
     <h1 class="col-sm-8">Criterio: {{$criterio}}</h1>
       <div style="margin-top: 30px"class=" col-sm-4 input-group">
        <form action="{{url('pessoas/busca')}}" method="POST">
           {{csrf_field()}}
        </form>
      <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ok</span>
  </div>
  <input type="text" class="form-control" name="criterio"placeholder="Buscar" aria-label="Usuário" aria-describedby="basic-addon1">
</div>
  </div>
	  <div class="row mt-3">
        @foreach($pessoas as $pessoa)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                	{{$pessoa->nome}}
                  <a href="{{url('/pessoas/$pessoa->id/editar')}}" class="btn btn-xs btn-primary btn-action">
                  	<ion-icon name="create"></ion-icon>
                  </a>
                   <a href="{{url('/pessoas/$pessoa->id/editar')}}" class="btn btn-xs btn-danger btn-action">
                   	<ion-icon name="trash"></ion-icon>
                   </a>	
                </div>
                <div class="card-body">
                	@foreach($pessoa->telefones as $telefone)
                	 <p><strong>Telefone:</strong>{{{$telefone->ddd}}} {{$telefone->telefone}}</p>
                	@endforeach 
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection