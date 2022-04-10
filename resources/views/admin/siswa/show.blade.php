@extends('layouts.app')

@section('content')
    <x-main-layout title="Detail Pendaftar">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Detail Lengkap Siswa</h4>
                            <button class="btn btn-primary btn-sm"><i class="fas fa-download me-2"></i> Unduh
                                identitas</button>
                        </div>
                        <p class="card-title-desc">segera lakukan pengecekan pada siswa pendaftar</p>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#identitas" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Identitas Siswa</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Orang Tua</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">Alamat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                    <span class="d-none d-sm-block">Dokumen</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#pembayaran" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                    <span class="d-none d-sm-block">Pembayaran</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="identitas" role="tabpanel">
                                @include('admin.siswa.tab.identitas')
                            </div>
                            <div class="tab-pane" id="profile1" role="tabpanel">
                                @include('admin.siswa.tab.orang-tua')
                            </div>
                            <div class="tab-pane" id="messages1" role="tabpanel">
                                <p class="mb-0">
                                    @include('admin.siswa.tab.alamat')
                                </p>
                            </div>
                            <div class="tab-pane" id="settings1" role="tabpanel">
                                @include('admin.siswa.tab.dokumen')
                            </div>
                            <div class="tab-pane" id="pembayaran" role="tabpanel">
                                @include('admin.siswa.tab.pembayaran')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-main-layout>
@endsection

@push('script')
    @include('admin.siswa.script')
@endpush
