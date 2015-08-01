@extends('layout')

@section('content')
<section>
	<div class="row">
		<div class="large-5 medium-7 small-12 small-centered columns">
			<div class="radius panel">
				<h4>Forgot Password</h4>
				<hr>
				{!! Form::open(['action' => 'Auth\PasswordController@postEmail']) !!}
			    <div>
		        {!! Form::label('email', 'Email') !!}
		        {!! Form::text('email', old('email'), ['autofocus', 'class' => 'radius']) !!}
			    </div>
			
			    <div>
			      {!! Form::button('Send Password Reset Link', ['class' => 'small radius expand button', 'type' => 'submit']) !!}
			    </div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@stop