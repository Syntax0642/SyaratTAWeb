<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="../assets/images/jejeslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="main">
       <div class="banner">
       </div>
       <div class="registerform">
          <div class="hero">
              <p class="header">Daftarkan Akun Individual!</p>
              <p class="subheader">Untuk pengalaman yang lebih maksimal daftarkan akun sekarang</p>
          </div>
           <form method="post" action="/register">
               @csrf
               <div class="rform">
                  <div class="email">
                      <label for="email">Email address*</label>
                      <input type="email" placeholder="Email" name="email" required>
                  </div>
                   <div class="username">
                       <label for="name">Your Fullname*</label>
                       <input type="text" placeholder="Username" name="name" required>
                   </div>
                   <div class="password">
                       <label for="password">Create password*</label>
                       <input type="password" placeholder="Password" name="password" required>
                   </div>
                   <div class="checkbox-container">
                       <input type="checkbox" id="myCheckbox" name="myCheckbox">
                       <span>I agree to terms & conditions</span>
                   </div>
                   <button type="submit">
                       Register Account
                   </button>
                   <div class="link">
                       <p class="a">Sudah punya akun?</p>
                       <a href="/login/index" class="b">Login disini</a>
                   </div>
               </div>
           </form>
       </div>
   </div>
</body>
</html>
