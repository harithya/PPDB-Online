<div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-login text-center"
                    style="background: url(https://img.beritasatu.com/cache/investor/798x449-2/20170714071818545.jpg);">
                    <div class="bg-login-overlay"></div>
                    <div class="position-relative">
                        <h5 class="text-white font-size-20">{{ $title }}</h5>
                        <p class="text-white-50 mb-0">{{ $subtitle }}</p>
                        <a href="index.html" class="logo logo-admin mt-4">
                            <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-Tut-Wuri-Handayani-PNG-Warna.png"
                                alt="" height="50">
                        </a>
                    </div>
                </div>
                {{ $slot }}
            </div>
            @if ($withRegister)
                <div class="mt-5 text-center">
                    <p>Don't have an account ? <a href="{{ route('siswa.auth.register') }}"
                            class="fw-medium text-primary"> Signup
                            now </a> </p>
                </div>
            @endif

        </div>
    </div>
</div>
