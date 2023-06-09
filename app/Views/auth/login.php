<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--css style-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/login_page.css" />
    <!--font awesome-->
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <!--javascript-->
    <script src="<?= base_url(); ?>/js/login.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="section">
        <div class="left-side">
            <img class="main-img" src="<?= base_url(); ?>/img/hero-icon.png" alt="main-img" />
            <h3 class="text">Informasi Seputar BPJS Kesehatan<br />Kota Palopo</h3>
        </div>

        <div class="right-side">
            <img class="logo" src="<?= base_url(); ?>/img/logo.png" alt="bpjs-logo" />
            <p class="welcome-text">Selamat Datang</p>

            <form action="<?= base_url() ?>/doLogin" method="post" class="input-form">
                <div class="input-field">
                    <input type="text" name="username" id="username" placeholder="Username" class="input" required />
                    <i class="fa-solid fa-user-gear"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password" placeholder="Password" class="input" required />
                    <i class="fa-solid fa-lock"></i>
                </div>
                <!-- <div class="remember-me">
                    <input class="checkbox" type="checkbox" name="remember-me">
                    <label class="text">Ingat Saya</label>
                </div> -->
                <div class="input-field">
                    <input type="submit" value="LOGIN" class="submit" required />
                </div>
            </form>

        </div>
    </div>

    
    <div id="error-message" data-error-message="<?= session('error'); ?>"></div>
</body>

</html>