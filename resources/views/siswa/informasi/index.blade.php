@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Informasi">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Alur Penerimaan</h4>
                        <p class="card-title-desc">Informasi alur pendaftaran peserta didik baru</p>

                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="timeline-count p-4">
                                    <!-- Timeline row Start -->
                                    <div class="row">
                                        <x-timeline-item date="14, Januari" title="Pendaftaran Dibuka"
                                            description="Pendaftar sudah bisa melakukan pendaftaran melalui website yang sudah disediakan oleh sekolah" />
                                        <x-timeline-item date="20, Maret" title="Validasi Pembayaran"
                                            description="Siswa yang sudah mengisi formulir pendaftaran dapat segera melakukan pembayaran dan akan divalidasi oleh pihak sekolah secara serentak" />
                                        <x-timeline-item date="18 - 25, April" title="Pengumuman Masuk Tes Seleksi"
                                            description="Siswa yang sudah diterima pembayarannya dapat masuk ke tahap test yang akan  dilakukan disekolah" />
                                        <x-timeline-item date="2, Mei" title="Pengumuman Masuk Tes Seleksi"
                                            description="Pengumuman hasil seleksi,siswa yang lulus segera melakukan pendaftaran ulang" />
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
    </x-main-layout>
    <!-- end page title -->
@endsection
