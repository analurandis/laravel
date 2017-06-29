
@extends('layout.master')


@section('title', 'Editando Blog')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Editado conteudo no Blog</p></h3>
					{{ Form::model($post, ['method' => 'PATCH', 'action' => ['EntryController@update', $post->id]]) }}
					
					 <div class="form-group">

					{{ Form::label('title', 'Título do Post:', array('class'=>'control-label')) }}
					{{ Form::text('title', $post->title, array('class'=>'form-control')) }}
							 
					 </div>
					 <div class="form-group">
					 {{ Form::label('tag', 'Tag:', array('class'=>'control-label')) }}
					 
					{{ Form::text('tag', $post->tag, array('class'=>'form-control')) }}
					

					 </div>
					 	 <div class="form-group">

					{{ Form::label('is_private)', 'Post Privado?', array('class'=>'control-label')) }}
  				   	{{ Form::checkbox('is_private') }}
  				   		 

					 </div>

					 <div class="form-group">
					{{ Form::label('content', 'Post', array('class'=>'control-label')) }}
					</br>
					 {{ Form::textarea('content', $post->content, array('class'=>'form-control'))}}
					 </div>

					

					{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-large')) }}

					{{ Form::close() }}
@endsection
				
					
				</div>
			</div>
		</div>
