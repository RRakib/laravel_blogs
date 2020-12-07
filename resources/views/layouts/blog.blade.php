<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="bg-white shadow-sm">
        <div class="container">
            <div class="row py-3">
                <a class="d-flex align-items-center text-decoration-none col-md-3" href="/"><h3 class="mb-0 text-info">Buggy<b>Blogs</b></h3></a>
                <div class="col-md-9 d-flex justify-content-end align-items-center">

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item list-unstyled">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item list-unstyled">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <a class="mx-4 mb-0" href={{ route("blogs") }}>Blogs</a>
                        <li class="nav-item dropdown list-unstyled">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </div>
            </div>
        </div>
    </nav>
    <div class="mt-4 container">
        @yield("content")
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
