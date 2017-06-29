
@extends('layout.master')


@section('title', 'Exibindo Blog')

@section('content')
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Mostrando conteudo no Blog</p></h3>


				<div class="jumbotron">
					<!--
					<div class="col-md-2 navbar-right">
					<a class="btn btn-default navbar-right btn-warning" {{link_to_action('EntryController@edit','Editar',$post->id)}}</a>
					</div>
					
					<div class="col-md-2 navbar-right">	
				
					 {{ Form::open(array('route' => array('entry.destroy', $post->id), 'method' => 'delete')) }}
       					 <button type="submit" class="btn btn-default navbar-right btn-danger">Delete</button>
    				 {{ Form::close() }}
					</div>
					-->
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
						<a class="btn btn-primary btn-large" {{link_to_action('EntryController@index','Voltar')}}</a>
					</div>


@endsection
				
					
				</div>
			</div>
		</div>
