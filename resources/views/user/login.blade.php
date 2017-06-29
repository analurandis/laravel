
@extends('layout.master')


@section('title', 'Lista de Usuários')

@section('content')

			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<h3><p>Lista de Usuários</p></h3>

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}



					
				</div>
			</div>
		</div>


	@endsection