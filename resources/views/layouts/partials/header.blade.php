<div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth" style="z-index: 99">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="top-menu">
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <div class="social-icons social-icons-colored-hover">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: Topbar -->
<!-- Header -->
<header id="header" class="shadow-sm" data-fullwidth="true" style="z-index: 99">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="/">
                    <img src="/images/logo/logo.jpg" class="logo-default">
                </a>
            </div>

            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/contact">Contact</a></li>
                            @guest
                                <li><a href="/register">Register</a></li>
                                <li><a href="/login">Login</a></li>
                            @endguest
                            @auth
                                <li><a href="/dashboard">Dashboard</a></li>
                                <li><a href="/logout">Logout</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
