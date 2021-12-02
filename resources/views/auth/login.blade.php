@extends ('auth.layout')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-5" id="login-section">
		<div class="form mt-5" style="width: 70%; margin: 0px auto;">
			<img id="loginLogoSekolah" class="mb-3" src="{{asset('images')}}/logo.jpg" alt="">
			<div class="form">
				<div class="mb-2">
					<label for="formUsername" class="form-label">Username or Email</label>
					<input type="text" class="form-control" id="formUsername" >
					</div>
				<div class="mb-2">
					<label for="formPassword" class="form-label">Password</label>
					<input type="text" class="form-control" id="formPassword" >
				</div>
				<div class="mb-2">
					<div class="form-check">
				     	<input class="form-check-input" type="checkbox" id="gridCheck">
				    	<label class="form-check-label" for="gridCheck">
				        	Check me out
				     	</label>
				    </div>
				</div>
				<div class="mb-2">
					<input type="submit" class="form-control btn btn-success btn-grad" value="Login" id="formSubmit" >
				</div>
				<a href="#">Forgot your password?</a>
			</div>	
		</div>
	</div>
	<div class="col-sm-12 col-md-7">
		<img src="{{asset('images')}}/banner-login.png" class="img-fluid">
	</div>
</div>	
@endsection