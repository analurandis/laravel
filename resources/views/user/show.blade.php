
@extends('layout.master')


@section('title', 'Exibindo Blog')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Mostrando Usuários</p></h3>


				<div class="jumbotron">
					<div class="col-md-2 navbar-right">
					<a class="btn btn-default navbar-right btn-warning" {{link_to_action('UserController@edit','Editar',$user->id)}}</a>
					</div>
					<div class="col-md-2 navbar-right">	
				
					 {{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'delete')) }}
       					 <button type="submit" class="btn btn-default navbar-right btn-danger">Delete</button>
    				 {{ Form::close() }}
					</div>
					<h2>
						<div class="btn-group">
				 			Nome do usuário: {{$user->name}}
					</h2>	
						<p>
							Email: {{$user->email}}
						</p>

					<p>
						Sobre: {{$user->about}}
					</p>

						<a class="btn btn-primary btn-large" {{link_to_action('UserController@index','Voltar')}}</a>
					</div>

				</div>
			</div>
		</div>


@endsection
				
		
