<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Selamat Datang PPDB SMPN Mangunreja</title>
    <link rel="stylesheet" href="{{ asset('login') }}/itsform.css">
</head>

<body>
    <div class="if">
        <div class="if-panel">
            <div class="if-panel-inner">
                <div class="if-brand">
                    <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-Tut-Wuri-Handayani-PNG-Warna.png"
                        alt="logo">
                </div>
                <div class="if-text">
                    <h1>Welcome di <b>PPDB</b></h1>
                    <p>Sebelum memulai, Anda harus login atau mendaftar jika Anda belum memiliki akun.</p>
                </div>
                <div class="if-form">
                    <div class="if-nav">
                        <ul>
                            <li class="{{ request()->segment(1) == null ? 'active' : '' }}"><a
                                    href="{{ url('/') }}" class="if-form-gos">Login</a></li>
                            <li class="{{ request()->segment(1) == 'register' ? 'active' : '' }}"><a
                                    href="{{ url('register') }}" class="if-form-gos">Register</a></li>
                        </ul>
                    </div>
                    <div class="if-forms">
                        {{ $slot }}
                    </div>
                </div>
                <div class="if-text-foot">
                    &copy; STMIK Tasikmalaya. Design by <a href="http://fb.me/itskodinger"
                        target="_blank">@itskodinger</a>
                </div>
            </div>
        </div>
        <div class="if-main">
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
