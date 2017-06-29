
@extends('layout.master')


@section('title', 'Editando Blog')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Editado conteudo no Blog</p></h3>
					{{ Form::model($post, ['method' => 'PATCH', 'action' => ['EntryController@destroy', $post->id]]) }}
					
					 <div class="form-group">

					 <h2>
						<div class="btn-group">
				 			Titulo: {{$post->title}}
					</h2>	
						<p>
							{{$post->content}}
						</p>

						<p>
					@if ($post->is_private == 1)
  				   		 Post restrito ao usuário, privado!
  				   		 @else
  				   		 	Post não restrito
   				   	@endif  

<p>
<p>
							Tags: {{$post->tag}}
						</p>
						<a class="btn btn-primary btn-large" {{link_to_action('EntryController@destroy','Excluir')}}</a>
					</div>


					</div>

					{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-large')) }}

					{{ Form::close() }}
@endsection
				
					
				</div>
			</div>
		</div>
