<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('title')
    @section('assets_links')
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
    @show
</head>
<body>
    @yield('login_content')
@section('footer_assets_links')
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
    {!!Html::script('assets/js/morris/morris.js')!!}
    <!-- CUSTOM SCRIPTS -->
    {!!Html::script('assets/js/custom.js')!!}
</body>
</html>
@show
