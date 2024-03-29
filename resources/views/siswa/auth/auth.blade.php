<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Selamat Datang di PPDB SMPN 10 Ciamis</title>
    <link rel="stylesheet" href="{{ asset('login') }}/itsform.css">
</head>

<body>
    <div class="if">
        <div class="if-panel">
            <div class="if-panel-inner">
                <div class="if-brand">
                    <img src="{{ asset('login') }}kodinger.jpg" alt="logo">
                </div>
                <div class="if-text">
                    <h1>Welcome to <b>Kodinger</b></h1>
                    <p>Before you get started, you must login or register if you don't already have an account.</p>
                </div>
                <div class="if-form">
                    <div class="if-nav">
                        <ul>
                            <li class="active"><a href="#" class="if-form-go" data-go="0">Login</a></li>
                            <li><a href="#" class="if-form-go" data-go="1">Register</a></li>
                        </ul>
                    </div>
                    <div class="if-forms">
                        <!-- Form: 0 -->
                        <form id="login-form" class="active">
                            <div class="if-group">
                                <label>Email</label>
                                <input type="email" autocomplete="email" name="email" class="if-input">
                            </div>
                            <div class="if-group password-group">
                                <label>Password <a href="#" class="if-form-go" data-go="2">Forgot
                                        Password?</a></label>
                                <input type="password" name="password" autocomplete="current-password"
                                    class="if-input">
                            </div>
                            <button class="if-btn">
                                Sign In
                            </button>
                        </form>
                        <!-- Form: 1 -->
                        <form id="register-form">
                            <div class="if-group">
                                <label>Name</label>
                                <input type="email" autocomplete="email" name="email" class="if-input">
                            </div>
                            <div class="if-group">
                                <label>Email</label>
                                <input type="email" autocomplete="email" name="email" class="if-input">
                            </div>
                            <div class="if-group password-group">
                                <label>Password</label>
                                <input type="password" name="password" autocomplete="current-password"
                                    class="if-input">
                            </div>
                            <button class="if-btn">
                                Sign Up
                            </button>
                        </form>
                        <!-- Form: 2 -->
                        <form id="forgot-form">
                            <div class="if-group">
                                <label>Email</label>
                                <input type="email" autocomplete="email" name="email" class="if-input">
                            </div>
                            <button class="if-btn">
                                Reset Password
                            </button>
                        </form>
                    </div>
                </div>
                <div class="if-text-foot">
                    &copy; Your Company. Design by <a href="http://fb.me/itskodinger" target="_blank">@itskodinger</a>
                </div>
            </div>
        </div>
        <div class="if-main">
            <div class="if-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="if-text-foot">
                Photo by <a
                    href="https://unsplash.com/photos/HG5QX-GXV5A?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Ren
                    Ran</a> on <a
                    href="https://unsplash.com/?utm_source=kodinger&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('login') }}/itsform.js"></script>
</body>

</html>
