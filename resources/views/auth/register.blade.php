@extends('layouts/admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading">Register</div>
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

                        <form role="form" method="POST" action="{{ url('/auth/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class=" control-label">Username:</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label class="control-label">E-Mail Address:</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter E-Mail Address">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Password:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>

                            <div class="form-group">
                                <label class=" control-label">Confirm Password:</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Eneter Confirm Password">
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
