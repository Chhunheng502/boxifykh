<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <!--========== BOX ICONS ==========-->
    <link
        href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'
        rel='stylesheet'
    >

    <!--========== CSS ==========-->
    <link
        rel="stylesheet"
        href="{{ asset('./CSS/style.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('./CSS/framer.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('./CSS/box.css') }}"
    >
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
        crossorigin="anonymous"
    >
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>BOXIFY</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('css')

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-toggle {
            border: none;
            padding: 2px;
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background: #fff;
            padding: 2px;
            min-width: 200px;
        }

        .dropdown-menu li {
            list-style-type: none;
        }

        .arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 5px 5px 0 5px;
            border-color: #000 transparent transparent transparent;
            margin-left: 5px;
        }

        .open {
            display: block;
        }
    </style>
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a
        href="#"
        class="scrolltop"
        id="scroll-top"
    >
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header
        class="l-header"
        id="header"
    >
        <nav class="nav bd-container">
            <img
                class="nav_logo"
                src="{{ asset('./IMG/logo.png') }}"
            >

            <header
                class="l-header"
                id="header"
            >
                <nav class="nav bd-container">
                    <a href="{{ route('pages.home') }}"><img
                            style="margin-top: 8px;"
                            class="nav_logo"
                            src="{{ asset('./IMG/logo.png') }}"
                        ></a>

                    <div
                        class="nav__menu"
                        id="nav-menu"
                    >
                        <ul class="nav__list">
                            <li class="nav__item"><a
                                    href="{{ route('pages.home') }}"
                                    class="nav__link"
                                >Home</a></li>
                            <li class="nav__item"><a
                                    href="{{ route('pages.feature') }}"
                                    class="nav__link"
                                >Feature</a></li>
                            <li class="nav__item"><a
                                    href="{{ route('pages.pricing') }}"
                                    class="nav__link"
                                >Pricing</a></li>
                            <li class="nav__item"><a
                                    href="{{ route('pages.blog') }}"
                                    class="nav__link"
                                >Blog</a></li>
                            <li class="nav__item"><a
                                    href="{{ route('pages.about') }}"
                                    class="nav__link"
                                >AboutUs</a></li>

                            <div style="width: 200px">
                                @if (Auth::check())
                                <div class="dropdown">
                                    <div class="dropdown-toggle" onclick="toggleDropdown()"> Welcome, {{ Auth::user()->name }} <span class="arrow"></span></div>
                                    <ul class="dropdown-menu">
                                      <li>
                                        <form action="{{ route('auth.logout') }}" method="post">
                                            @csrf
                                            <button type="submit">Logout</a>
                                        </form>
                                        </li>
                                    </ul>
                                  </div>
                                @else                                    
                                    <a
                                        style="background-color: #1271FF; padding: 10px; color: white; border-radius: 20px;"
                                        href="{{ route('auth.view') }}"
                                    >
                                        Login
                                    </a>
                                @endif
                                </div>
                        </ul>
                    </div>

                    <div
                        class="nav__toggle"
                        id="nav-toggle"
                    >
                        <i class='bx bx-menu'></i>
                    </div>
                </nav>
            </header>

            <div
                class="nav__toggle"
                id="nav-toggle"
            >
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    @yield('content')

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a
                    href="#"
                    class="footer__logo"
                >BOXIFY</a>
                <span class="footer__description">AI-powered</span>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Brand Kit Design</a></li>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Packaging Design</a></li>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Design Consultation</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Inspiration</h3>
                <ul>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Blog</a></li>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Startup</a></li>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Entreprise</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Support</h3>
                <ul>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Help Center</a></li>
                    <li><a
                            href="#"
                            class="footer__link"
                        >Community</a></li>
                    <li><a
                            href="#"
                            class="footer__link"
                        >FAQs</a></li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169;2023 BOXIFY, Inc.</p>
    </footer>

    @yield('js')

    <script>
        function toggleDropdown() {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('open');
        }
    </script>
</body>

</html>
