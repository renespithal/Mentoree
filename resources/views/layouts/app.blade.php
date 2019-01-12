<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mentoree</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQwNC4yNjcsMzE1LjQxYy0xMC4wNDgtMjAuOTQ5LTQ1Ljk5NS01MC4wMjctODAuNzI1LTc4LjEyM2MtMTkuMzcxLTE1LjY1OS0zNy42NzUtMzAuNDY0LTQ5LjM0NC00Mi4xMzMgICAgYy0yLjkyMy0yLjk0NC03LjI5Ni0zLjg4My0xMS4xNTctMi40OTZjLTcuMTg5LDIuNjAzLTExLjYyNyw0LjYwOC0xNS4xMjUsNi4xNjVjLTUuMzMzLDIuMzg5LTcuMTI1LDMuMi0xNC4zMTUsMy45MjUgICAgYy0zLjE3OSwwLjMyLTYuMDM3LDIuMDI3LTcuODA4LDQuNjcyYy0xNS4wODMsMjIuNTQ5LTMwLjY5OSwyMC42MjktNDEuMTMxLDE3LjEzMWMtMy4zMjgtMS4xMDktMy45MjUtMi41MzktNC4yNDUtMy45MDQgICAgYy0yLjI0LTkuMzY1LDkuMDAzLTMxLjE2OCwyMy41NzMtNDUuNzM5YzM0LjY2Ny0zNC42ODgsNTIuNTQ0LTQzLjM3MSw5MC4zMDQtMjYuNDk2YzQyLjgzNywxOS4xNTcsODUuNzYsMzQuMTU1LDg2LjE4NywzNC4zMDQgICAgYzUuNjExLDEuOTQxLDExLjY0OC0xLjAwMywxMy41ODktNi41NzFjMS45Mi01LjU2OC0xLjAwMy0xMS42NDgtNi41NzEtMTMuNTg5Yy0wLjQyNy0wLjE0OS00Mi40OTYtMTQuODQ4LTg0LjQ4LTMzLjY0MyAgICBjLTQ4LjkxNy0yMS44NjctNzUuNzU1LTcuNDY3LTExNC4wOTEsMzAuODkxYy0xNC41OTIsMTQuNTkyLTM0LjQxMSw0NC4xMTctMjkuMjkxLDY1Ljc3MWMyLjE5Nyw5LjIxNiw4LjY4MywxNi4wNDMsMTguMzI1LDE5LjIyMSAgICBjMjQuMTcxLDcuOTc5LDQ2LjIyOSwwLjM0MSw2Mi42NTYtMjEuNDYxYzYuNzg0LTEuMDQ1LDEwLjQ3NS0yLjU4MSwxNi4wMjEtNS4wNzdjMi4wMDUtMC44OTYsNC4zNTItMS45NDEsNy40NjctMy4yICAgIGMxMi4yMDMsMTEuNDU2LDI4LjY3MiwyNC43ODksNDYuMDE2LDM4LjgwNWMzMS4zNiwyNS4zNjUsNjYuOTIzLDU0LjEyMyw3NC45MjMsNzAuNzYzYzMuOTQ3LDguMjEzLTAuMjk5LDEzLjU2OC0zLjE3OSwxNi4wMjEgICAgYy00LjIyNCwzLjYyNy0xMC4wMDUsNC43NzktMTMuMTQxLDIuNTgxYy0zLjQ1Ni0yLjM2OC03Ljk1Ny0yLjUxNy0xMS41Mi0wLjM4NGMtMy41ODQsMi4xMzMtNS41ODksNi4xNjUtNS4xNDEsMTAuMzA0ICAgIGMwLjcyNSw2Ljc4NC01LjQ4MywxMC42NjctOC4xNzEsMTIuMDExYy02LjgyNywzLjQ1Ni0xMy45NTIsMi44NTktMTYuNjE5LDAuMzg0Yy0yLjk4Ny0yLjc3My03LjI3NS0zLjU4NC0xMS4wNzItMi4xNzYgICAgYy0zLjc5NywxLjQyOS02LjQ0Myw0LjkyOC02LjgyNyw4Ljk4MWMtMC42NCw2Ljk5Ny01LjgyNCwxMy43MTctMTIuNTg3LDE2LjM0MWMtMy4yNjQsMS4yMzctOCwxLjk4NC0xMi4yNDUtMS44OTkgICAgYy0yLjY0NS0yLjM4OS02LjMxNS0zLjMwNy05Ljc0OS0yLjQ3NWMtMy40NzcsMC44NTMtNi4yNzIsMy4zNzEtNy40ODgsNi43MmMtMC40MDUsMS4wNjctMS4zMjMsMy42MjctMTEuMzA3LDMuNjI3ICAgIGMtNy4xMDQsMC0xOS44ODMtNC44LTI2LjEzMy04LjkzOWMtNy40ODgtNC45MjgtNTQuNDQzLTM5Ljk1Ny05NC45OTctNzMuOTJjLTUuNjk2LTQuOC0xNS41NTItMTUuMDgzLTI0LjI1Ni0yNC4xNzEgICAgYy03LjcyMy04LjA2NC0xNC43ODQtMTUuMzgxLTE4LjQxMS0xOC40NTNjLTQuNTQ0LTMuODQtMTEuMjY0LTMuMjY0LTE1LjA0LDEuMjU5Yy0zLjc5Nyw0LjUwMS0zLjI0MywxMS4yNDMsMS4yNTksMTUuMDQgICAgYzMuMzA3LDIuNzk1LDkuNzA3LDkuNTU3LDE2Ljc2OCwxNi45MTdjOS41MTUsOS45NDEsMTkuMzQ5LDIwLjIyNCwyNS45NjMsMjUuNzcxYzM5LjcyMywzMy4yNTksODcuNDY3LDY5LjE2Myw5Ni45ODEsNzUuNDEzICAgIGM3Ljg1MSw1LjE2MywyNC43NjgsMTIuNDE2LDM3Ljg2NywxMi40MTZjMTAuNTE3LDAsMTguNjAzLTIuNDExLDI0LjIxMy03LjEyNWM3LjUwOSwyLjkyMywxNi4wNDMsMi45NDQsMjQuMjU2LTAuMjU2ICAgIGM5LjcwNy0zLjc1NSwxNy42ODUtMTEuMzI4LDIyLjIwOC0yMC41MDFjOC40MDUsMS43OTIsMTguMDI3LDAuNTMzLDI2Ljc3My0zLjg2MWM4LjU1NS00LjMwOSwxNC43NDEtMTAuOTAxLDE3LjgxMy0xOC42MDMgICAgYzguNDkxLDAuNDQ4LDE3LjIzNy0yLjU2LDI0LjQ2OS04Ljc2OEM0MDcuOTc5LDM0Ni40MDcsNDExLjM0OSwzMzAuMTA5LDQwNC4yNjcsMzE1LjQxeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIxMy4zMzMsMTM4LjY2M2gtOTZjLTUuODg4LDAtMTAuNjY3LDQuNzc5LTEwLjY2NywxMC42NjdzNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdoOTYgICAgYzUuODg4LDAsMTAuNjY3LTQuNzc5LDEwLjY2Ny0xMC42NjdTMjE5LjIyMSwxMzguNjYzLDIxMy4zMzMsMTM4LjY2M3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MzUuNTIsMjkyLjcxMWMtMy4zMDctNC44ODUtOS45Mi02LjIyOS0xNC44MDUtMi45MDFsLTMxLjE4OSwyMC45NDljLTQuODg1LDMuMjg1LTYuMTg3LDkuOTItMi45MDEsMTQuODA1ICAgIGMyLjA2OSwzLjA1MSw1LjQ0LDQuNzE1LDguODc1LDQuNzE1YzIuMDI3LDAsNC4wOTYtMC41NzYsNS45MzEtMS44MTNsMzEuMTg5LTIwLjk0OSAgICBDNDM3LjUwNCwzMDQuMjMxLDQzOC44MDUsMjk3LjU5Nyw0MzUuNTIsMjkyLjcxMXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zNjkuMzAxLDM0My42MTNjLTcuNjM3LTYuMDE2LTQxLjc5Mi00MC45ODEtNjIuOTEyLTYyLjk5N2MtNC4wNzUtNC4yNjctMTAuODM3LTQuNDE2LTE1LjA4My0wLjMyICAgIGMtNC4yNjcsNC4wNzUtNC4zOTUsMTAuODM3LTAuMzIsMTUuMDgzYzUuNDgzLDUuNzE3LDUzLjg0NSw1Ni4xMjgsNjUuMDg4LDY1LjAwM2MxLjk0MSwxLjUzNiw0LjI4OCwyLjI4Myw2LjU5MiwyLjI4MyAgICBjMy4xMzYsMCw2LjI3Mi0xLjQwOCw4LjQwNS00LjA3NUMzNzQuNzIsMzUzLjk4MSwzNzMuOTMxLDM0Ny4yNjEsMzY5LjMwMSwzNDMuNjEzeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMyNi42NzcsMzY1LjAxYy0xMi43NzktMTAuMjE5LTQ0Ljg4NS00NC4zMzEtNTIuMTM5LTUyLjIyNGMtNC4wMTEtNC4zNTItMTAuNzMxLTQuNjA4LTE1LjA4My0wLjY0ICAgIGMtNC4zMzEsMy45ODktNC42MjksMTAuNzUyLTAuNjQsMTUuMDgzYzAuMzg0LDAuNDA1LDM4LjY5OSw0MS43NzEsNTQuNTI4LDU0LjQ0M2MxLjk2MywxLjU1Nyw0LjMzMSwyLjMyNSw2LjY1NiwyLjMyNSAgICBjMy4xMTUsMCw2LjIyOS0xLjM4Nyw4LjM0MS0zLjk4OUMzMzIuMDExLDM3NS4zOTksMzMxLjI2NCwzNjguNjc5LDMyNi42NzcsMzY1LjAxeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI4NC4yMjQsMzg2LjQ5M2MtMTUuMjExLTEyLjgyMS00Ni4zMzYtNDUuOTUyLTUyLjQxNi01Mi40NTljLTQuMDMyLTQuMzA5LTEwLjc5NS00LjU0NC0xNS4wODMtMC41MTIgICAgYy00LjMwOSw0LjAzMi00LjUyMywxMC43NzMtMC41MTIsMTUuMDgzYzguNzQ3LDkuMzY1LDM4LjUyOCw0MC45MzksNTQuMjUxLDU0LjIwOGMyLjAwNSwxLjY4NSw0LjQzNywyLjUxNyw2Ljg2OSwyLjUxNyAgICBjMy4wMjksMCw2LjA1OS0xLjMwMSw4LjE3MS0zLjc5N0MyODkuMzAxLDM5Ny4wMSwyODguNzI1LDM5MC4yOSwyODQuMjI0LDM4Ni40OTN6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTI0LjY3MiwxMjAuMjUzQzEwNi4zODksMTAyLjkzLDMzLjI4LDk3LjMxOSwxMS4zMDcsOTYuMDE4Yy0zLjAyOS0wLjE0OS01LjgyNCwwLjg1My03Ljk1NywyLjg4ICAgIEMxLjIxNiwxMDAuOTAzLDAsMTAzLjcxOSwwLDEwNi42NjN2MTkyYzAsNS44ODgsNC43NzksMTAuNjY3LDEwLjY2NywxMC42NjdoNjRjNC42MDgsMCw4LjcwNC0yLjk2NSwxMC4xMzMtNy4zNiAgICBjMS41NTctNC43NzksMzguMzE1LTExNy41ODksNDMuMTU3LTE3My4wNTZDMTI4LjIzNSwxMjUuNjcxLDEyNy4wNCwxMjIuNDcxLDEyNC42NzIsMTIwLjI1M3ogTTY2Ljg4LDI4Ny45OTdIMjEuMzMzVjExOC4wOTggICAgYzM0LjI4MywyLjcwOSw3MS4yNzUsOC41OTcsODQuNzE1LDE1LjEyNUMxMDAuMzk1LDE3OS45NDMsNzQuODE2LDI2Mi45NTEsNjYuODgsMjg3Ljk5N3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MDEuMzMzLDExNy4zM2MtODMuNzU1LDAtMTMwLjIxOSwyMS40NC0xMzIuMTYsMjIuMzM2Yy0yLjc3MywxLjMwMS00Ljg0MywzLjcxMi01LjY5Niw2LjYzNXMtMC40MjcsNi4wNTksMS4xNzMsOC42NjEgICAgYzEzLjE4NCwyMS4yMjcsNTQuNDY0LDEzOS4xMTUsNjIuNCwxNjcuODcyYzEuMjgsNC42MjksNS40ODMsNy44MjksMTAuMjgzLDcuODI5aDY0YzUuODg4LDAsMTAuNjY3LTQuNzc5LDEwLjY2Ny0xMC42Njd2LTE5MiAgICBDNTEyLDEyMi4wODcsNTA3LjIyMSwxMTcuMzMsNTAxLjMzMywxMTcuMzN6IE00OTAuNjY3LDMwOS4zM2gtNDUuMzU1Yy0xMC4xMTItMzIuOTM5LTM5Ljk3OS0xMTguODI3LTU2LjY0LTE1NC4zMjUgICAgYzE2LjI3Ny01LjUyNSw1MS4yNDMtMTUuMDE5LDEwMS45OTUtMTYuMjEzVjMwOS4zM3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                    Mentroee
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</body>
</html>
