<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PPDB - SDN 10 Ciamis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url()->to('/') }}">
    <meta name="base-url" content="{{ url()->to('admin') }}">
    <!-- App favicon -->
    <link rel=" shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">
    <!-- DataTables -->
    <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />


    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet"
        href="https://simpeg.stit-alhidayah.ac.id/assets/node_modules/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets') }}/css/app.min.css?v={{ microtime() }}" rel="stylesheet" type="text/css" />

</head>

<body data-layout="horizontal">
    <div class="preloader">
        <div class="preloader-body">Loading...</div>
    </div>
    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets') }}/images/logo-sm-dark.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets') }}/logo.svg" alt="" height="35"
                                        style="object-fit: contain;">
                                </span>
                            </a>

                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                            data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            @if (request()->segment(1) == 'siswa')
                                @include('layouts.partials._siswa')
                            @else
                                @include('layouts.partials._admin')
                            @endif
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="d-none d-xl-inline-block ms-1">{{ user('web')->nama ?? user('guest')->nama }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-user font-size-16 align-middle me-1"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-wallet font-size-16 align-middle me-1"></i> My
                                    Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span
                                        class="badge bg-success float-end">11</span><i
                                        class="bx bx-wrench font-size-16 align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                    Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger"
                                    href="{{ auth()->guard('guest')->check()? route('siswa.auth.logout'): route('login.logout') }}"><i
                                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                    Logout</a>
                            </div>
                        </div>


                    </div>
                </div>
            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
