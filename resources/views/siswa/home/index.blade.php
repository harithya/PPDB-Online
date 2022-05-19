@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Selamat Datang">
        @if ($pengaturan->waktu_selesai < now())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-info-circle me-2"></i> Periode PPDB telah berakhir. anda dapat melakukan pendaftaran di
                tahun ajaran berikutnya
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button> --}}
            </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    @if ($siswa->status == MENUNGGU)
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <i class="fas fa-info-circle me-2"></i> Harap segera melakukan pembayaran sampai dengan batas
                            waktu
                            {{ dateTime(setting()->waktu_selesai) }}
                        </div>
                    @elseif ($siswa->status == PENGECEKAN)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="far fa-clock me-2"></i> Pengecekan pembayaran sedang berlangsung
                        </div>
                    @elseif ($siswa->status == DITERIMA)
                        <x-success-alert />
                    @elseif($siswa->status == DITOLAK)
                        <x-fail-alert />
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Pendaftaran Siswa</h4>
                                <h4 class="card-title" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Jumlah Kuota Pendaftaran">{{ user('guest')->id }} / {{ setting()->kuota }}
                                </h4>
                            </div>
                            <p class="card-title-desc">Isian data harus sesuai dengan dokumen terkait seperti ijazah dll</p>
                            <div id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                                @include('siswa.home.form.identitas')
                                @include('siswa.home.form.orang-tua')
                                @include('siswa.home.form.alamat')
                                @include('siswa.home.form.dokumen')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </x-main-layout>
    <!-- end page title -->
@endsection

@push('script')
    @include('siswa.home.script')
@endpush
