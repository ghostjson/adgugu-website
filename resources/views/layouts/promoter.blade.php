<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Adgugu - Promoter Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"  data-turbolinks-track="reload">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/assets/admin/jqvmap.min.css">
    <link rel="stylesheet" href="/assets/admin/summernote-bs4.css">
    <link rel="stylesheet" href="/assets/admin/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/admin/owl.theme.default.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" data-turbolinks-track="reload">

    <link rel="stylesheet" href="/assets/css/components.css">
    <script src="/js/app.js"></script>

    <link rel="stylesheet" href="/css/pages/advertiser.css" data-turbolinks-track="reload">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>




<div id="app">
    <div class="main-wrapper">

        @include('layouts.partials.header_promoter')

        <!-- Main Content -->
        <div class="main-content">
            {{ $slot }}
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Adgugu</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
</div>
@livewireScripts()
<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"  data-turbolinks-track="reload"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="/assets/js/stisla.js"  data-turbolinks-track="reload"></script>

<!-- JS Libraies -->
<script src="/assets/admin/jquery.sparkline.min.js"></script>
<script src="/assets/admin/Chart.min.js"></script>
<script src="/assets/admin/owl.carousel.min.js"></script>
<script src="/assets/admin/summernote-bs4.js"></script>
<script src="/assets/admin/jquery.chocolat.min.js"></script>

<script src="/js/pages/advertiser.js"></script>

<!-- Template JS File -->
<script src="/assets/js/scripts.js" data-turbolinks-track="reload"></script>
<script src="/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="/assets/js/page/index.js"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).on('turbolinks:load', function() {
        $('.dropdown-toggle').dropdown()
    })
</script>
</body>
</html>
