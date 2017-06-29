
@extends('layout.master')


@section('title', 'Lista de Usuários')

@section('content')

			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Lista de Usuários</p></h3>

					@foreach($users as $user)

					<div class="jumbotron">
					
				
						<h3>
						<div class="btn-group">
				 		{{$user->name}}
				 

				 		
						</h3>


							
						
						<a class="btn btn-primary btn-large" {{link_to_action('UserController@show','Ler mais ...',$user->id)}}</a>
<div class="col-md-2 navbar-right">
					<a class="btn btn-default navbar-right btn-warning" {{link_to_action('UserController@edit','Editar',$user->id)}}</a>
					</div>
					<div class="col-md-2 navbar-right">	
				
					 {{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'delete')) }}
       					 <button type="submit" class="btn btn-default navbar-right btn-danger">Delete</button>
    				 {{ Form::close() }}



					</div>

				
					</div>
					@endforeach


					
				</div>
			</div>
		</div>


	@endsection