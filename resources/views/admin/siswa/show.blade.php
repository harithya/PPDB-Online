@extends('layouts.app')

@section('content')
    <x-main-layout title="Detail Pendaftar">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Detail Lengkap Siswa</h4>

                        </div>
                        <p class="card-title-desc">segera lakukan pengecekan pada siswa pendaftar</p>

                        @if ($siswa->status == MENUNGGU)
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle me-2"></i>Belum melakukan pembayaran
                            </div>
                        @elseif ($siswa->status == PENGECEKAN)
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="far fa-clock me-2"></i> Harap segera melakukan persetujuan atau penolakan
                            </div>
                        @elseif ($siswa->status == DITERIMA)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check me-2"></i> Siswa bersangkutan telah diterima
                            </div>
                        @elseif ($siswa->status == DITOLAK)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-times me-2"></i> Siswa bersangkutan ditolak
                            </div>
                        @endif
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

                        <div class="d-flex justify-content-end">
                            <form action="{{ url('admin/siswa/' . $siswa->id) }}" class="float-right"
                                onsubmit="return confirm('Apakah yakin?')" method="POST">
                                @csrf
                                @method('PUT')
                                <button name="status" value="{{ DITOLAK }}" class="btn btn-danger me-3">Tolak <i
                                        class="fas fa-times ms-2"></i></button>
                                <button name="status" value="{{ DITERIMA }}" class="btn btn-success ">
                                    Terima
                                    <i class="fas fa-check ms-2"></i>
                                </button>
                            </form>
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
