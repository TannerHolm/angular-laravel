@extends('layout')

@section('content')
<section>
	<div class="row">
		<div class="large-5 medium-6 small-12 small-centered columns">
			<div class="radius panel">
				<h4>Register</h4>
				<hr>
				{!! Form::open(['action' => 'Auth\AuthController@postRegister']) !!}
			    <div>
			    	{!! Form::label('username', 'Username') !!}
			      {!! Form::text('username', null, ['autofocus', 'class' => 'radius']) !!}
			    </div>
			
			    <div>
			      {!! Form::label('email', 'Email') !!}
			      {!! Form::email('email', null, ['class' => 'radius']) !!}
			    </div>
			
			    <div>
			      {!! Form::label('password', 'Password') !!}
			      {!! Form::password('password', ['class' => 'radius']) !!}
			    </div>
			
			    <div>
			      {!! Form::label('password_confirmation', 'Confirm Password') !!}
			      {!! Form::password('password_confirmation', ['class' => 'radius']) !!}
			    </div>
			
			    <div>
			      {!! Form::button('Register', ['class' => 'small radius expand button', 'type' => 'submit']) !!}
			    </div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@stop