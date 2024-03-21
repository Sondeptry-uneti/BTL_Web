<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <li><div id="login-btn" class="fas fa-user"></div></li>
            </ul>
        </div>
    </section>

    <!-- login form -->
    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>ĐĂNG NHẬP</h3>
            <span>Email</span>
            <input type="email" name="" class="box" placeholder="Nhập email hợp lệ" id="">
            <span>Mật Khẩu</span>
            <input type="password" name="" class="box" placeholder="Nhập mật khẩu" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> Ghi nhớ </label>
            </div>
            <input type="submit" value="ĐĂNG NHẬP" class="btn">
            <p>Quên mật khẩu ? <a href="#">Click here</a></p>
            <p>Chưa có tài khoản ? <a href="#">Tạo tài khoản</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>