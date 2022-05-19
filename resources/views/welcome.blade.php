@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Selamat Datang">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-title">
                            <h4 class="float-end font-size-16">No Pendaftaran : # 12345</h4>
                            <div class="mb-4">
                                <img src="{{ asset('assets/logo.svg') }}" alt="logo" height="40">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                Yang bertanda tangan dibawah ini Kepala Sekolah SMPN 10 Ciamis Kecamatan Magunreja,
                                menerangkan bahwa :
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4 ms-3">
                                <address>
                                    <strong>Nama Lengkap : </strong>Harithya Wisesa<div class="mb-2"></div>
                                    <strong>Jenis Kelamin : </strong>Laki Laki<div class="mb-2"></div>
                                    <strong>Asal Sekolah : </strong>SMK YPC Tasikmalaya<div class="mb-2"></div>
                                </address>
                            </div>

                        </div>
                        <div class="py-2 mt-3">
                            <p>Anda resmi dapat melanjutkan seleksi masuk sekolah yang akan di laksanakan di lab komputer
                                SMPN 10 Ciamis. Dimohon agar membawa surat ini saat melakukan ujian</p>
                        </div>

                        <div class="d-print-none">
                            <div class="float-end">
                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i
                                        class="fa fa-print"></i></a>
                                <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-main-layout>
    <!-- end page title -->
@endsection
