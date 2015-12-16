@extends('layouts.login_layout')
@section('title')
    <title>Paschalinotech Admin</title>
@stop
@yield('assets_links')
@section('login_content')
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br/><br/>

                <h2> Binary Admin : Login</h2>

                <h5>( Login yourself to get access )</h5>
                <br/>
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Enter Details To Login </strong>
                    </div>
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

                        <form role="form" method="POST" action="{{ url('/auth/login') }}">
                            {{ csrf_field() }}
                            <br/>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Your Email " value="{{ old('email') }}">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Your Password"/>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="remember"/> Remember me
                                </label>
                                            <span class="pull-right">
                                                   <a href="{{ url('/password/email') }}">Forget password ? </a>
                                            </span>
                            </div>
                            <button type="submit" class="btn btn-primary">Login Now</button>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>
@stop

@yield('footer_assets_links')
