<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap min css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap icons css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- Fontawesome icons css link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- jquery min js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- owl carosel min js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- owl carosel css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}" />
    <title>ramroYatra | @yield('pageTitle')</title>
    <link rel="shortcut icon" href="{{ url('frontend/img/Anonymous-Bus1.svg') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
        <div class="container">
            <div class="header-logo d-flex">
                <a href="index.html" class="navbar-brand font"><span class="ramro">ramro</span><span
                        class="y">Yatra</span></a>
                <a href="index.html" class="navbar-brand font"><img src="{{ url('frontend/img/Anonymous-Bus1.svg') }}"
                        alt="" width="80px" height="50px"></a>
            </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#allBus" class="nav-link">All Bus</a>
                    </li>
                    <li class="nav-item">
                        <a href="#stats" class="nav-link">Our Stats</a>
                    </li>
                    <li class="nav-item">
                        <a href="#routes" class="nav-link">All Routes</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            24x7 Support
                        </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">9840539880</a></li>
                            <li>
                                <a class="dropdown-item" href="#">rusanmhz789@gmail.com</a>
                            </li>
                        </ul>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->roles === 'ADM')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Manage Bus</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Manage
                                                Operator</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Manage
                                                Route</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">Manage Users</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">Payment
                                                details</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Logout</a>
                                        </li>

                                        <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a href="#" class="dropdown-item">Payment
                                                details</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Logout</a>
                                        </li>

                                        <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </a>
                                <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('register') }}">Signup</a>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
