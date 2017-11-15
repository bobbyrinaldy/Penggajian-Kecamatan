@extends('layouts.loginmaster')

@section('content')

  <style media="screen">
  #error{
    color:#fff;
    text-shadow:1px 1px 10px #fff, 1px 1px 10px #ccc;
    font-size:20px;
    text-align:center;
  }
  </style>

  <div class="main-agileits">
		<h1>Login Aplikasi Sistem Penggajian</h1>

		<div class="mainw3-agileinfo form">
      @if ($errors->has('username') || $errors->has('password'))
          <center>
          <span class="help-block">
              <strong id="error">Username atau Password salah</strong>
          </span>
        </center>
      @endif
      <br>
			<div id="login">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
					<div class="field-wrap{{ $errors->has('username') ? ' has-error' : '' }}">

						<label> Enter Your Email<span class="req">*</span> </label>
            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
					</div>
					<div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
						<label> Your Password<span class="req">*</span> </label>
            <input id="password" type="password" class="form-control" name="password" required>
					</div>
					<button class="button button-block"/>Log In</button>
				</form>
			</div>

		</div>
	</div>
@endsection
