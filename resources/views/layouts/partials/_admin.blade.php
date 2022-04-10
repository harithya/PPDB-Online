<nav class="navbar navbar-light navbar-expand-lg topnav-menu">

    <div class="collapse navbar-collapse" id="topnav-menu-content">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}" role="button">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('management-user.index') }}" role="button">
                    Management User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}" role="button">
                    Siswa Pendaftar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pengaturan.index') }}" role="button">
                    Pengaturan
                </a>
            </li>
        </ul>
    </div>
</nav>
