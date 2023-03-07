<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('contitle') 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow,all" />
        <meta name="Author" content="ORHAN" />
        <meta name="HandheldFriendly" content="True">
        @include('inc.headbody')
    </head>
    <body data-spy="scroll" data-target=".inner-link" data-offset="60">
        <main>
        @include('inc.navbar')
        @yield('content')        
        @include('inc.footer')
    </body>
</html>
