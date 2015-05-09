<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>@yield('title') | SolidBoard</title>

	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css"  media="screen,projection"/>
	<style type="text/css">
		body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
		}
		
		main {
			flex: 1 0 auto;
		}
	</style>
</head>
	<body>
		<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="{{ URL::action('HomeController@index') }}" class="brand-logo">SolidBoard</a>
			<ul class="right hide-on-med-and-down">
				@if(Auth::check())
					<li><a href="{{ URL::action('TaskController@index') }}">My Tasks</a></li>
				@else
					<li><a href="{{ URL::action('HomeController@index') }}">Login</a></li>
				@endif
			</ul>
			
			<ul id="nav-mobile" class="side-nav">
				@if(Auth::check())
					<li><a href="{{ URL::action('TaskController@index') }}">My Tasks</a></li>
				@else
					<li><a href="{{ URL::action('HomeController@index') }}">Login</a></li>
				@endif
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		</div>
		</nav>
		<br>
		<div class="container">
			@if (count($errors) > 0)
				<div class="row">
					<div class="col s12">
						<ul class="collection">
							@foreach ($errors->all() as $error)
								<li class="collection-item red"><i class="mdi-alert-error"></i> {{ $error }} </li>
							@endforeach
						</ul>
					</div>
				</div>
			@endif
			<br>
		</div>
		@yield('content')
		
		<footer class="page-footer orange">
			<div class="container">
			  <div class="row">
				<div class="col l6 s12">
				  <h5 class="white-text">SolidBoard</h5>
				  <p class="grey-text text-lighten-4">SolidBoard was made to provide students and faculty the best experience in enhancing the online experience in Education.</p>
		
		
				</div>
				<div class="col l3 s12 right">
				  <h5 class="white-text">Settings</h5>
				  <ul>
				  	@if(Auth::check())
						<li><a class="white-text" href="{{ url('/auth/logout') }}">Logout</a></li>
					@else
						<li><a class="white-text" href="{{ URL::to('/', array(), true) }}">Home</a></li>
					@endif
				  </ul>
				</div>
			  </div>
			</div>
			<div class="footer-copyright">
			  <div class="container">
			  Made by <a class="orange-text text-lighten-3" href="http://www.kalose.net">Akshay Kalose</a>
			  </div>
			</div>
		  </footer>
		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
		<script type="text/javascript">
			(function($){
			  $(function(){
			
				$('.button-collapse').sideNav();
			
			  }); // end of document ready
			})(jQuery); // end of jQuery name space
			
			@yield('morejs')
			
		</script>
	</body>
</html>
