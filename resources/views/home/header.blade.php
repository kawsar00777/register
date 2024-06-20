<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">Groovin</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>


                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>




                @if (Route::has('login'))
                    @auth

                        <li class="nav-item">
                            <x-app-layout>

                            </x-app-layout>
                        </li>
                    @else
                        <li class="nav-item">
                            <i class="fa fa-user" aria-hidden="true">
                                <a class="" href="{{ route('login') }}">
                                    <span>
                                        Login
                                    </span>
                                </a>
                            </i>
                        </li>


                        <li class="nav-item">

                            <i class="fa fa-vcard" aria-hidden="true">
                                <a class="" href="{{ route('register') }}">
                                    <span>
                                        Register
                                    </span>
                                </a>
                            </i>
                        </li>
                    @endauth
                @endif






            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
