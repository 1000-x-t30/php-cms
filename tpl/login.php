<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./assets/css/login.css" />
        <title>Hello world</title>
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form method="post" class="sign-in-form">
                        <h2 class="title">ログイン</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="login_user_name" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="login_password" placeholder="Password" />
                        </div>
                        <input type="submit" name="login" value="Login" class="btn solid" />
                        <p class="social-text">SNSでサインイン</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                    <form action="#" method="post" class="sign-up-form">
                        <h2 class="title">アカウント作成</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="user_name" value="<?php echo $user_name ?>" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        <input type="submit" name="sign_up" class="btn" value="Sign up" />
                        <p class="social-text">SNSでアカウント作成</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>アカウント作成</h3>
                        <p>アカウントをお持ちでない方はこちらのボタンを押してください。</p>
                        <button class="btn transparent" id="sign-up-btn">
                        Sign up
                        </button>
                    </div>
                    <img src="./assets/images/security_SVG.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>ログイン</h3>
                        <p>アカウントをお持ちの方はこちらのボタンを押してください。</p>
                        <button type="submit" class="btn transparent" id="sign-in-btn">
                        Sign in
                        </button>
                    </div>
                    <img src="./assets/images/app_development_SVG.svg" class="image" alt="" />
                </div>
            </div>
        </div>
        <script src="./assets/js/app.js"></script>
    </body>
</html>
