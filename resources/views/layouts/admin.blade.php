<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('title')
        <!-- BOOTSTRAP STYLES-->
        {!!Html::style('assets/css/bootstrap.css')!!}
        <!-- FONTAWESOME STYLES-->
        {!!Html::style('assets/css/font-awesome.css')!!}
        <!-- MORRIS CHART STYLES-->
        {!!Html::style('assets/js/morris/morris-0.4.3.min.css')!!}
        <!-- CUSTOM STYLES-->
        {!!Html::style('assets/css/custom.css')!!}
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="container-fluid bg-color-blue-grey">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Web Store</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav bg-color-white" style="margin-top:4px">
                    <li><a href="{{ url('/') }}">Users pages</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right bg-color-white" style="margin-top:4px">
                    @if(auth()->guest())
                        @if(!Request::is('auth/login'))
                            <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        @endif
                        @if(!Request::is('auth/register'))
                            <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        @endif
                    @else
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Welcome: {{ auth()->user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a class="active-menu" href="{{ url('/admin/categories')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{url('admin/categories')}}"><i class="fa fa-desktop fa-3x"></i>categories</a>
                </li>
                <li>
                    <a href="{{url('admin/products')}}"><i class="fa fa-qrcode fa-3x"></i>Products</a>
                </li>
                <li>
                    <a href="{{url('auth/register')}}"><i class="fa fa-laptop fa-3x"></i> Registration</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        @yield('content')
    </div>
</div>

<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
{!!Html::script('assets/js/jquery-1.10.2.js')!!}
<!-- BOOTSTRAP SCRIPTS -->
{!!Html::script('assets/js/bootstrap.min.js')!!}
<!-- METISMENU SCRIPTS -->
{!!Html::script('assets/js/jquery.metisMenu.js')!!}
<!-- MORRIS CHART SCRIPTS -->
{!!Html::script('assets/js/morris/raphael-2.1.0.min.js')!!}
<!-- Table -->
{!!Html::script('assets/js/dataTables/jquery.dataTables.js')!!}
{!!Html::script('assets/js/dataTables/dataTables.bootstrap.js')!!}
<!-- CUSTOM SCRIPTS-->
@yield('jquery_for_table')
{!!Html::script('assets/js/custom.js')!!}
</body>
</html>



