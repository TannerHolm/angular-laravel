@extends('layout')

@section('content')
<section>
	<div class="row">
		<div class="large-5 medium-7 small-12 small-centered columns">
			<div class="radius panel">
				<h4>Reset Password</h4>
				<hr>
				{!! Form::open(['action' => 'Auth\PasswordController@postReset']) !!}
			    {!! Form::hidden('token', $token) !!}
			
			    <div>
			    	{!! Form::label('email', 'Email') !!}
			      {!! Form::email('email', old('email'), ['autofocus', 'class' => 'radius']) !!}
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
			      {!! Form::button('Reset Password', ['class' => 'small radius expand button', 'type' => 'submit']) !!}
			    </div>
			  {!! Form::close() !!}
		</div>
	</div>
</section>
@stop