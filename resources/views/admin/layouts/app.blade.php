<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="/admin/assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/style.css" />
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


    <script src="/admin/assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="/admin/assets/js/app.js">
    </script>
@show
</body>
</html>