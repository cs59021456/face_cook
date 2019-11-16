<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'FaceCook') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm" >
            <div class="container">

                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="https://sv1.picz.in.th/images/2019/11/13/gswiB8.png" class="card-img" alt="...">


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
                                <a  class="nav-link" href="{{ route('login') }}" >เข้าสู่ระบบ</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('register') }}" >ลงทะเบียน</a>
                                </li>
                            @endif

                        @else

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-link"><a class="text-light" href="{{ url('/') }}">หน้าแรก</a></button>
                                    <button type="button" class="btn btn-link"><a class="text-light" href="{{ route('home') }}">หน้าหลัก</a></button>
                                    <button type="button" class="btn btn-link"><a class="text-light"  href="/refme/{{Auth::user()->id}}">ตู้เย็นของฉัน<span class="sr-only">(current)</span></a></button>
                                    <button type="button" class="btn btn-link"><a class="text-light" href="{{route('ref.create')}}">เพิ่มตู้เย็น<span class="sr-only">(current)</span></a></button>




                                    <!-- ชื่อของคนที่ล็อคอินเข้ามา กดdropdown แล้วมีฟังก์ชั่นอื่นๆ -->
                                     <li class="nav-item dropdown " >


                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->first_name}} <span class="caret"></span>
                                        </a>


                                        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href='/showprofile'>โปรไฟล์ผู้ใช้</a>
                                            <a class="dropdown-item" href='/edituser'>แก้ไขโปรไฟล์</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('ออกจากระบบ') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>

                                </div>



                                        </ul>
                                    </div>
                              </nav>
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
