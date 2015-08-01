<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<title>Angular :: Laravel :: Foundation</title>
		{!! HTML::style(elixir('src/css/app.css')) !!}
		{!! HTML::script(elixir('src/js/modernizr.js')) !!}
	</head>
	<body ng-app="angularApp">
		
		<div class="contain-to-grid" ng-controller="NavCtrl">
		  <top-bar class="top=bar">
		    <ul class="title-area">
		      @if (Auth::check())
					<li class="name"><h1><a href="{{ URL::to('#/') }}">WebApp</a></h1></li>
					@else
					<li class="name"><h1><a href="{{ URL::to('/') }}">WebApp</a></h1></li>
					@endif
					
		      <li toggle-top-bar class="menu-icon"><a>Menu<span></span></a></li>
		    </ul>
		
		    <top-bar-section class="top-bar-section">
		    	<ul class="left">
						@if (Auth::check())
						<li><a>Hi, {{ Auth::user()->username }} <i class="fa fa-user"></i></a></li>
						<li><a href="{{ URL::to('logout') }}">Logout <i class="fa fa-sign-out"></i></a></li>
						@endif
					</ul>
		    	
		      <ul class="right">
						@if (Auth::check())
						<li ng-class="{ active: at('/') }"><a ng-href="{{ URL::to('/')}}#/">Home</a></li>
	          <li ng-class="{ active: at('/about') }"><a ng-href="{{ URL::to('/')}}#/about">About</a></li>
	          <li ng-class="{ active: at('/contact') }"><a ng-href="{{ URL::to('/')}}#/contact">Contact</a></li>
	          @endif
					</ul>
		    </top-bar-section>
		  </top-bar>
		</div>
		
		@if ($errors->any())		
			<div data-alert class="alert-box warning">
			  @foreach($errors->all() as $error)
			  	{{ $error }}<br>
			  @endforeach
			  <a class="close">&times;</a>
			</div>
		@endif
		
		<main>
		@yield('content')
		</main>
		
		{{-- Load in the Livereload script if we're in a development environment --}}
		@if ( env('APP_ENV') === 'local' ) 
			<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"></script>
		@endif
		
		{!! HTML::script(elixir('src/js/foundation.js')) !!}
		{!! HTML::script(elixir('src/js/angular.js')) !!}
		{!! HTML::script(elixir('src/js/app.js')) !!}
	</body>
</html>
