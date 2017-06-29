
@extends('layout.master')


@section('title', 'Exibindo Blog')

@section('content')
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<h3><p>Meus  Posts</p></h3>
				Usuário: {{Auth::user()->name }} 	
			@foreach($posts as $post)
			<div class="jumbotron">
				<h4>
				<div class="btn-group">
				 	{{$post->title}}
				</h4>
					<a class="btn btn-primary btn-large" {{link_to_action('EntryController@show','Ler mais ...',$post->id)}}</a>
<div class="col-md-2 navbar-right">
					<a class="btn btn-default navbar-right btn-warning" {{link_to_action('EntryController@edit','Editar',$post->id)}}</a>
					</div>
					<div class="col-md-2 navbar-right">	
				
					 {{ Form::open(array('route' => array('entry.destroy', $post->id), 'method' => 'delete')) }}
       					 <button type="submit" class="btn btn-default navbar-right btn-danger">Delete</button>
    				 {{ Form::close() }}
					</div>

				
					</div>
					@endforeach


					
				</div>
			</div>
		</div>

@endsection
				
		
