<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Paschalinotech</title>

    <!-- Bootstrap -->
    {!!Html::style('assets/css/bootstrap.min.css')!!}
    {!!Html::style('assets/css/font-awesome.min.css')!!}
    {!!Html::style('assets/css/animate.css')!!}
    {!!Html::style('assets/css/overwrite.css')!!}
    {!!Html::style('assets/css/animate.min.css')!!}
    {!!Html::style('assets/css/style.css')!!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {!!Html::link('/','Paschalinotech',['class'=>'navbar-brand'])!!}
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active">{!!Html::link('/','Home')!!}</li>
                    <li>{!!Html::link('/store/services','Services')!!}</li>
                    <li>{!!Html::link('/store','Products')!!}</li>
                    <li>{!!Html::link('/store/about','About Us')!!}</li>
                    <li>{!!Html::link('/store/contact','Contact')!!}</li>

                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->
<!--content session for hom page-->
@yield('content')

<section id="footer">
    <div class="container">
        <div class="row  pad-bottom">
            <div class="col-md-4">
                <h4><strong>ABOUT COMPANY</strong></h4>

                <p>
                    paschalino tech Ltd is an electrical/electronics sale and installation company specialized on
                    condict/surface wiring, general house maintainance and supply of all types of electrical/electronics
                    goods and services.
                </p>
                <a href="#">read more</a>
            </div>
            <div class="col-md-4">
                <h4><strong>SOCIAL LINKS</strong></h4>

                <p>
                    <a href="https://www.facebook.com/grandilo"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a>
                </p>
            </div>
            <div class="col-md-4">
                <h4><strong>Conatact</strong></h4>

                <p>info@paschalinotech.com
                    <br/></br>
                    Phone:+2348038741830 or +2348072165007
                </p>

                <p>Powered by <a href="http://www.grandilo.com">Grandilo</a></p>
            </div>
        </div>
    </div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!!Html::script('assets/js/jquery-2.1.1.min.js')!!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!!Html::script('assets/js/bootstrap.min.js')!!}
{!!Html::script('assets/js/parallax.min.js')!!}
{!!Html::script('assets/js/wow.min.js')!!}
{!!Html::script('assets/js/jquery.easing.min.js')!!}
{!!Html::script('assets/js/fliplightbox.min.js')!!}
{!!Html::script('assets/js/functions.js')!!}
<script>
    wow = new WOW(
            {})
            .init();
</script>
</body>
</html>