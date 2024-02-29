<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="../assets/images/jejeslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="main">
    <div class="banner">
    </div>
    <div class="registerform">
        <div class="hero">
            <p class="header">Login Kembali Akun Anda!</p>
            <p class="subheader">Selamat datang kembali untuk pengalamam yang lebih maksimal silahkan login!</p>
        </div>
        <form method="post" action="/login">
            @csrf
            <div class="rform">
                <div class="username">
                    <label for="email">Your Email*</label>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="password">
                    <label for="password">Your Password*</label>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="myCheckbox" name="myCheckbox">
                    <span>I agree to terms & conditions</span>
                </div>
                <button type="submit">
                    Login Account
                </button>
                <div class="link">
                    <p class="a">Belum punya akun?</p>
                    <a href="/register/index" class="b">buat satu disini</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
