<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>
    <meta name="robots" content="noindex"/>
    <meta name="copyright" content="@yield('copyright')">
    <meta name="description" content="@yield('description')">
    <meta name="keyword" content="@yield('keyword')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <link rel="stylesheet" href="../css/uikit.min.css">
</head>
<body>


<div class="app">
    @yield("maincontent")
</div>



<script src="../js/uikit.min.js"></script>
<script src="../js/uikit-icons.js"></script>

</body>


</html>
