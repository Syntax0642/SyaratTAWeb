<header>
    <div class="logo">
        <img src="assets/images/jejeslogowhite.png" class="logoimg" alt="">
        <p>Jejeska Education.</p>
    </div>
<nav>
    <ul class="nav-links">
        <li><a href="/home" class="active">Home</a></li>
        @auth
         <li><a href="/dashboard/index">Dashboard</a></li>
        @else
            <li></li>
        @endauth
        <li><a href="/kelas/index">Kelas</a></li>
        <li><a href="/siswa/index">Murid</a></li>
    </ul>

</nav>
    @auth
        <span>Welcome,{{auth()->user()->name}}</span>
    @else
    <div class="main">
        <button class="signin">
            <a href="/login/index" class="user"><i class="fa-solid fa-user"></i></a>
            <a href="/login/index">Sign In</a>
        </button>
        <button class="register">
            <a href="/register/index">Register</a>
        </button>
    </div>
    @endauth
</header>

