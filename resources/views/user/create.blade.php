
@extends('layout.master')


@section('title', 'Usuário')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Cadastro de Usuário</p></h3>
					{{Form::open(array('action'=>'UserController@store'))}}
					
					 <div class="form-group">

					{{ Form::label('name', 'Nome do usuário:', array('class'=>'control-label')) }}
					
					 {{ Form::text('name',null ,array('placeholder'=>'Nome do usuário...', 'class'=>'form-control')) }}

					 {{ Form::label('password', 'Senha:', array('class'=>'control-label')) }}
					
					 {{ Form::text('password',null, array('class'=>'form-control'))}}


				
					 </div>
					 	 <div class="form-group">

					{{ Form::label('email)', 'Email: ', array('class'=>'control-label')) }}

					 {{ Form::text('email',null, array('class'=>'form-control'))}}
					 </div>

					 <div class="form-group">
					{{ Form::label('about', 'Sobre:', array('class'=>'control-label')) }}
					
					 {{ Form::textarea('about', null, array('placeholder'=>'Digite seu conteudo...', 'class'=>'form-control'))}}
				

					 </div>

					
					

					{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-large')) }}

					{{ Form::close() }}

				
					
				</div>
			</div>
		</div>


	@endsection