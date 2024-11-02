<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - EVOLUTION 2025</title>
    <link rel="stylesheet" href="login.css">
</head> 
<body>
    
    <div class="headline">
        <a href="/" class="back-home"><img src="./home-icon.png" alt="">Kembali ke home</a>
        <h1>LOGIN</h1>
        <h3>Silahkan masuk dengan akun anda</h3>
    </div>
    <div class="container">
        <form class="login-form">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" placeholder="Masukkan Email  " required>
            <small>ex. : username@gmail.com</small>

            <label for="password">Password <span class="required">*</span></label>
            <div class="password-input">
                <input type="password" id="password" placeholder="Masukkan Password" required>
                <img id="togglePasswordImg" class="passwordImg" src="./hidden.png" alt="">
            </div>
            <a href="" class="forgot-password">Lupa Password?</a>


            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <p class="register-prompt">
            Belum memiliki akun? <a href="/daftar" class="register-link">Daftar</a> disini
        </p>

        <div class="footer-colors">
            <span style="background-color: #FF7A52;"></span>
            <span style="background-color: #F8C100;"></span>
            <span style="background-color: #9AE8B7;"></span>
            <span style="background-color: #A5C5CC;"></span>
            <span style="background-color: #CA73FF;"></span>
            <span style="background-color: #B5B5B5;"></span>
            <span style="background-color: #FF7A52;"></span>
        </div>
    </div>

</body>
<script src="./script.js"></script>
</html>
