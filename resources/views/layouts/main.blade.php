<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Akhil Ravindran" />
    <meta name="description" content="Adgugu Website for making money">
    <!--  <link rel="icon" type="image/png" href="images/favicon.png">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Adgugu</title>
    <!-- Stylesheets & Fonts -->
    <link href="/css/plugins.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link href="/css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/assets/css/argon.css?v=1.2.0" type="text/css">

    <script src="/js/app.js"></script>
    <link href="/css/app.css" rel="stylesheet" data-turbolinks-track="reload">

    <link href="/css/pages/main.css" rel="stylesheet" data-turbolinks-track="reload">
</head>

<body>


<!-- Body Inner -->
<div class="body-inner">

    @include('layouts.partials.header')

    {{ $slot }}

    @include('layouts.partials.footer')


</div>
<!-- end: Body Inner -->


@livewireScripts()

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<!--Plugins-->
<script src="/js/jquery.js"></script>
<script src="/js/plugins.js"></script>

<script src="/plugins/gmap3/gmap3.min.js"></script>
<script src="/plugins/gmap3/map-styles.js"></script>

<!--Template functions-->
<script src="/js/functions.js"></script>

<script src="/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="/assets/js/argon.js?v=1.2.0"></script>

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>


<script src="js/pages/main.js"></script>

</body>

</html>


