<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>{{ trans('home.header.title') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     @include('partials.layout.head')
    @include('partials.layout.head_login')
    <link rel="shortcut icon" href="assets/global/plugins/datatables/images/favicon.ico" />
</head>
<!-- END HEAD -->
<body class=" login">
<!-- BEGIN LOGO -->
@include('partials.layout.logo')
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
<!--  Main container -->
    @yield('content')
<!-- end Main container -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
@include('partials.layout.footer')
<!-- END COPYRIGHT -->
@include('partials.layout.scripts')
@include('partials.layout.scripts_login')
</body>
</html>