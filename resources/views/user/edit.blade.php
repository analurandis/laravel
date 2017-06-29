
@extends('layout.master')


@section('title', 'Editando Usuário')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Editado conteudo no Blog</p></h3>
					{{ Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) }}
					
					 <div class="form-group">

					{{ Form::label('name', 'Nome do Usuário:', array('class'=>'control-label')) }}
					{{ Form::text('name', $user->name, array('class'=>'form-control')) }}
							 
					 </div>
					 <div class="form-group">
					  {{ Form::label('password', 'Senha:', array('class'=>'control-label')) }}
					
					 {{ Form::text('password',$user->password, array('class'=>'form-control'))}}
					 
					

					 </div>
					 	 <div class="form-group">

					{{ Form::label('email)', 'Email: ', array('class'=>'control-label')) }}

					 {{ Form::text('email',$user->email, array('class'=>'form-control'))}}

					 </div>

					 <div class="form-group">
				
					 {{ Form::label('about', 'Sobre:', array('class'=>'control-label')) }}
					</br>
					 {{ Form::textarea('about', $user->about, array('class'=>'form-control'))}}
					 </div>

					

					{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-large')) }}

					{{ Form::close() }}
@endsection
				
					
				</div>
			</div>
		</div>
