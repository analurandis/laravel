
@extends('layout.master')


@section('title', 'Criando entrada no Blog')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Criando entrada no Blog</p></h3>
					{{Form::open(array('action'=>'EntryController@store'))}}
					
					 <div class="form-group">

					{{ Form::label('title', 'Título do Post:', array('class'=>'control-label')) }}
					
					 {{ Form::text('title',null ,array('placeholder'=>'Título do Post...', 'class'=>'form-control')) }}

					 {{ Form::label('tag', 'Tag:', array('class'=>'control-label')) }}
					
					 {{ Form::text('tag',null, array('class'=>'form-control'))}}
				
					 </div>
					 	 <div class="form-group">

					{{ Form::label('is_private)', 'Post Privado?', array('class'=>'control-label')) }}

					 {{ Form::checkbox('is_private', 1,array('class'=>'form-control')) }}
					 </div>

					 <div class="form-group">
					{{ Form::label('content', 'Conteúdo', array('class'=>'control-label')) }}
					
					 {{ Form::textarea('content', null, array('placeholder'=>'Digite seu conteudo...', 'class'=>'form-control'))}}
				

					 </div>
					 {{ Form::text('user_id', Auth::user()->id , array('class'=>'form-control', 'TYPE'=>'hidden' ))}}
					

					{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-large')) }}

					{{ Form::close() }}

				
					
				</div>
			</div>
		</div>


	@endsection