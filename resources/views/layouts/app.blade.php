<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Udemy-Clone') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/floatingactionbutton.css')}}" rel="stylesheet">
    <link href="{{asset('css/courselooking.css')}}" rel="stylesheet">
    <link href="{{asset('css/somestyles.css')}}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Udemy-Clone') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="nav-item">
                            <a href="{{(route('home'))}}"class="nav-link">Home</a>
                        </div>
                        <div class="nav-item">
                            <a href="{{(route('contacts'))}}"class="nav-link">Contacts</a>
                        </div>
                        <div class="nav-item">
                            <a href="{{(route('about'))}}"class="nav-link">About</a>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                @if (Auth::user()->role=='student')
                                <a class="dropdown-item" href="{{ route('student_dashboard') }}" onclick="event.preventDefault();
                                                                 document.getElementById('dashboard-form').submit();">
                                    {{ __('dashboard') }}
                                </a>
                                <form id="dashboard-form" action="{{ route('student_dashboard') }}" method="GET" class="d-none">
                                    @csrf
                                </form>
                                @elseif(Auth::user()->role=='teacher')
                                <a class="dropdown-item" href="{{ route('teacher_dashboard') }}" onclick="event.preventDefault();
                                                                document.getElementById('dashboard-form').submit();">
                                    {{ __('dashboard') }}
                                </a>
                                <form id="dashboard-form" action="{{ route('teacher_dashboard') }}" method="GET" class="d-none">
                                    @csrf
                                </form>
                                @endif


                                <a class="dropdown-item" href="{{ route('profile') }}" onclick="event.preventDefault();
                                                             document.getElementById('profile-form').submit();">
                                    {{ __('Profile') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <form id="profile-form" action="{{ route('profile') }}" method="GET" class="d-none">
                                    @csrf
                                </form>



                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="page-footer font-small cyan darken-3">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="{{ url('/') }}">{{__('Udemy-Clone')}}</a>
        </div>

    </footer>
</body>

</html>