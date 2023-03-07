<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @yield('contitle')
        <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta charset="utf-8">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow,all" />
        <meta name="Author" content="ORHAN" />
        <meta name="HandheldFriendly" content="True">
        <meta name="description" content="overview &amp; Orhan" />

         <!-- Favicon icon -->
    <link rel="icon" type="/Admin/image/png" sizes="16x16" href="/Admin/images/favicon.png">

    <link href="{{asset('/Admin/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
	<link href="{{asset('/Admin/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/Admin/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/Admin/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/Admin/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('/Admin/css/style.css')}}" rel="stylesheet">
    
        <style>
            .truncate-ellipsis
            {
                white-space: nowrap; 
                width: 9em; 
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .truncate-ellipsis-title
            {
                white-space: nowrap; 
                width: 9em; 
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .truncate-ellipsis-title:hover{
                overflow: visible; 
                white-space: normal;
                height:auto;  /* just added this line */
            }
            </style>
    </head>
    <body class="fix-header fix-sidebar">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        @include('inc.adminNavTop')
        @include('inc.adminNavLeft')
        @yield('content')
        @include('inc.adminFooter')
    </body>
</html>
