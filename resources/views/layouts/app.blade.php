<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bulkit.cssninja.io/blog-posts-side.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 May 2021 08:32:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link href="../api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link id="theme-sheet" rel="stylesheet" href="{{asset('assets/css/core.css')}}">

</head>

<body class="is-theme-core">
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <!-- Hero (Parallax) and nav -->
    <div class="hero is-app-grey">
        @include('includes.navbar')
        <!-- Hero image -->
        <div id="main-hero" class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                        <h1 class="title is-2">
                            BLOG
                        </h1>
                        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid enim? Immo videri
                            fortasse. Compensabatur, inquit.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Single Centered -->
    <div class="section blog-section">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    @yield('content')
                </div>
                @include('includes.sidebar')
            </div>
        </div>
    </div>

    @include('includes.chat-widget')
    @include('includes.footer')


    <script src="../api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/core.js')}}"></script>
</body>

</html>