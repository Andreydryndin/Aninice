<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="http-equiv" content="Content-type: text/html; charset=UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="ALL">
    <meta name="document-state" content="Dynamic">
    {{--<meta name="resource-type" content="document">--}}
    <meta name="revisit-after" content="1 days">
    <meta name="revisit" content="1">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <title>@yield('title') @if (isset($meta_title)){{$meta_title}}@endif</title>

    @if ((isset($meta_description)))
        <meta name="description" content="{{ $meta_description }}">
    @endif
    @if ((isset($meta_keywords)))
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif
    <link rel="icon" type="image/png" href="/images/front/favicon.png">

    @yield('head')

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700%7CNiconne" rel="stylesheet">

    <!-- Styles -->
    @section("styles")
        <link rel="stylesheet" href="/css/front/main.css" />
        @if(!Auth::check())
            <link rel="stylesheet" href="/css/front/auth.css" />
        @endif
    @show
</head>
<body>
{{--@include('front.layouts.topmenu')--}}
@yield('content')

@if(!Auth::check())
{{--    @include('front.modals.login')--}}
{{--    @include('front.modals.register')--}}
@endif

<!-- Scripts -->
@section("scripts")


    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}


    @if(!Auth::check())
        <script src="/js/libs/jquery.inputmask.min.js" type="text/javascript"></script>
        <script src="/js/front/auth.js" type="text/javascript"></script>
    @endif
@show
</body>
</html>