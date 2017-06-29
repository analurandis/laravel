
@extends('layout.master')


@section('title', 'Lista de Posts')

@section('content')

			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Lista de Posts Públicos</p></h3>

					
					@foreach($posts as $post)

					<div class="jumbotron">
					
				
						<h3>
						<div class="btn-group">
						{{$post->title}}
						
				 		
				 		
				 

				 		
						</h3>


							
						
						<a class="btn btn-primary btn-large navbar-right" {{link_to_action('EntryController@show','Ler mais ...',$post->id)}}</a>
<div class="col-md-2 navbar-right">
					
					</div>

				
					</div>
					@endforeach


					
				</div>
			</div>
		</div>


	@endsection