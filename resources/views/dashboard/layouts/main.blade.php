<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('siswas.css')}}">
    <link rel="shortcut icon" href="../assets/images/jejeslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <div class="logodb">
        <img src="/assets/images/jejeslogowhite.png" alt="">
        <p>Jejeska Education</p>
    </div>
    <div class="dropdown">
        <span>Welcome,{{auth()->user()->name}}</span>
        <div class="dropdown-content">
            <form method="post" action="/logout">
                @csrf
                <button type="submit"> <i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</button>
            </form>
        </div>
    </div>
    <div class="sidebar">
        <div class="menu">
            <li class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form class="search" action="/dashboard/siswa/index">
                    <input type="search" name="search" value="{{request('search')}}" placeholder="Search...">
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
            </li>
            <ul class="menu-links">
                <li class="nav-linkss">
                    <a href="/home">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>
            </ul>
            <ul class="menu-links">
                <li class="nav-linkss">
                    <a href="/dashboard/kelas/index">
                        <i class="fa-solid fa-school"></i>
                        <span>Kelas</span>
                    </a>
                </li>
            </ul>
            <ul class="menu-links">
                <li class="nav-linkss">
                    <a href="/dashboard/siswa/index">
                        <i class="fa-solid fa-user"></i>
                        <span>Murid</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="main">
    @yield('content')
</div>
</body>
</html>
