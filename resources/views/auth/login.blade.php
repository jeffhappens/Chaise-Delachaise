@extends('layouts.auth')

@section('content')
<div class="container">
	<div class="columns">
		<div class="column is-6 is-offset-3">
			<form class="form-horizontal" method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}
				<div class="field">
					<label for="email">E-Mail Address</label>
					<div class="control">
						<input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
					</div>
					@if ($errors->has('email'))
						<p class="help is-danger">{{ $errors->first('email') }}</p>
					@endif
				</div>

				<div class="field">
					<label for="password">Password</label>
					<div class="control">
						<input id="password" type="password" class="input" name="password" required>
					</div>
					@if ($errors->has('password'))
						<p class="help is-danger">{{ $errors->first('password') }}</p>
					@endif
				</div>

				<div class="field">
					<div class="control">
						<label class="checkbox">
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
    					</label>
  					</div>
  				</div>
  				<div class="field">
  					<button type="submit" class="button is-primary">
						Login
					</button>
					<a class="button" href="{{ route('password.request') }}">
						Forgot Your Password?
					</a>
				</div>
			</form>
		</div>
	</div>

</div>
@endsection
