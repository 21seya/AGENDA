//Route::get('/', function () {
  //  return view('welcome');
//});

//Route::group(['prefix' => 'pessoas'],function(){
//	Route::get('/','PessoasController@index');
//});
//Route::group(['prefix' =>'teste'],function(){
//	Route::get('/',function(){
//		return view('teste');
//	});
//});

//Route::get('/teste',function(){
//	return view('teste');
//});

<!DOCTYPE html>
<html>
<head>
</head>
<body>
@foreach($pessoas as $pessoa)
	Nome:{{$pessoa->nome}}<br>
	Telefone:
	@foreach($pessoa->telefone as $telefone)
	{{$telefone->telefone}}
	@endforeach
	<br><br>
@endforeach	
</body>
</html>