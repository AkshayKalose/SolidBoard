@extends('app')

@section('title', 'Welcome')

@section('content')
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<br><br>
			<h1 class="header center orange-text">SolidBoard</h1>
			<div class="row center">
				<h5 class="header col s12 light">The Solid, Stable, and Sleek Alternative to BlackBoard.</h5>
			</div>
			<div class="row center">
				<a href="{{ URL::action('HomeController@index') }}" id="download-button" class="btn-large waves-effect waves-light orange">{{ Auth::check() ? 'Enter' : 'Login' }}</a>
			</div>
			<br><br>

		</div>
	</div>


	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">
				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center light-blue-text"><i class="mdi-image-flash-on"></i></h2>
						<h5 class="center">Speeds Up Organization</h5>

						<p class="light">By providing you with the best tools right in front on you, you can quickly do what you want while becoming organized</p>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center light-blue-text"><i class="mdi-social-group"></i></h2>
						<h5 class="center">User Experience Focused</h5>

						<p class="light">By utilizing Material Design from Android 5 Lollipop, we have created a nice-looking smooth experience for everyone.</p>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center light-blue-text"><i class="mdi-action-settings"></i></h2>
						<h5 class="center">Easy to Use</h5>

						<p class="light">By keeping everything minimalistic and simple, you can easily do what you want to do through SolidBoard.</p>
					</div>
				</div>
			</div>

		</div>
		
	</div>
@endsection
