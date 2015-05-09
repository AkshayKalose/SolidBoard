@extends('app')

@section('title', 'Login')

@section('content')
<div class="container">

	<div class="row">
		<form class="col s12" role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
				<div class="input-field col s6">
					<i class="mdi-communication-email prefix"></i>
					<input id="email" name="email" type="email" class="validate" value="{{ old('email') }}">
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
			 	<div class="input-field col s6">
			 		<i class="mdi-communication-vpn-key prefix"></i>
					<input id="password" name="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="checkbox" class="filled-in" id="filled-in-box" name="remember" checked="checked" />
					<label for="filled-in-box">Remember Me</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<button type="submit" class="waves-effect waves-light btn">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
