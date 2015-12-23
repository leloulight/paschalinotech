@extends('layouts/admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">Reset Password</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

						<div class="form-group">
							<label class="control-label">E-Mail Address:</label>
								<input type="email" class="form-control" placeholder="Enter E-Mail Address" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-group">
							<label class="control-label">Password:</label>
								<input type="password" class="form-control" placeholder="Enter Password" name="password">
						</div>

						<div class="form-group">
							<label class="control-label">Confirm Password:</label>
								<input type="password" class="form-control" placeholder="Enter Confirm Password" name="password_confirmation">
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Reset Password
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
