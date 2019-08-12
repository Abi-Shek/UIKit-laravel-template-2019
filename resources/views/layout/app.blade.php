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
    <link rel="stylesheet" type="text/css" href="../css/star-rating-svg.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<div class="app">
    @yield("maincontent")
</div>


<script src="../js/uikit.min.js"></script>
<script src="../js/uikit-icons.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/jquery.flip.js"></script>


<script>


    // $("#card").flip();

    $("#card").flip({
        axis: 'y',
        trigger: 'hover',autoSize:'true'
    });

</script>
<script src="../js/jquery.star-rating-svg.js"></script>
<script>

    $(".my-rating").starRating({
        starSize: 25,
        callback: function(currentRating, $el){
            // make a server call here
        }
    });
</script>

</body>


</html>
