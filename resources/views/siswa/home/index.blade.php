@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Selamat Datang">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="text-white-50">
                                    <h5 class="text-white mb-4">Panduan Pengisian Profile</h5>
                                    <p>
                                        Harap segera mengisi form pendaftaran yang sudah di sediakan, ada beberapa yang
                                        harus diperhatikan, diantaranya :
                                    <ul>
                                        <li>Mengisi data identitas dengan tepat</li>
                                        <li>Melampirkan pas foto 2x3</li>
                                        <li>Melampirkan ijazah dari sekolah sebelumnya</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mt-4">
                                    <img src="https://themesbrand.com/qovex/layouts/assets/images/widget-img.png" alt=""
                                        class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pendaftaran Siswa</h4>
                        <p class="card-title-desc">Isian data harus sesuai dengan dokumen terkait seperti ijazah dll</p>


                        <div id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                            {{-- @include('siswa.home.form.identitas') --}}
                            {{-- @include('siswa.home.form.orang-tua') --}}
                            {{-- @include('siswa.home.form.alamat') --}}
                            @include('siswa.home.form.dokumen')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-main-layout>
    <!-- end page title -->
@endsection

@push('script')
    @include('siswa.home.script')
@endpush
