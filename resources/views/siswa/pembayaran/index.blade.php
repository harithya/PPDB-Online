@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Pembayaran">
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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Konfirmasi Pembayaran</h4>
                            <p class="card-title-desc">Siswa pendaftar harus melakukan pembayaran terlebih dahulu</p>

                            @if (user('guest')->status > 0)
                                <form id="formAdd" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            @if (user('guest')->status == MENUNGGU)
                                                <div class="alert mb-4 alert-info alert-dismissible fade show mb-0"
                                                    role="alert">
                                                    <i class="fas fa-info-circle me-2"></i> Harap segera melakukan
                                                    pembayaran
                                                    sebelum tanggal {{ dateTime(setting()->waktu_selesai) }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                            @elseif (user('guest')->status == PENGECEKAN)
                                                <div class="alert mb-4 alert-warning alert-dismissible fade show"
                                                    role="alert">
                                                    <i class="far fa-clock me-2"></i> Pengecekan pembayaran sedang
                                                    berlangsung
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label>Nama Pengirim</label>
                                                <input type="text" class="form-control"
                                                    value="{{ optional($bukti)->nama_pengirim }}" name="nama_pengirim">
                                            </div>
                                            <div class="form-group">
                                                <label>No Rekening</label>
                                                <input type="number" class="form-control"
                                                    value="{{ optional($bukti)->no_rekening }}" name="no_rekening">
                                            </div>
                                            <div class="form-group">
                                                <label>Bank Pengirim</label>
                                                <input type="text" class="form-control"
                                                    value="{{ optional($bukti)->bank_pengirim }}" name="bank_pengirim">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input type="number" class="form-control"
                                                    value="{{ optional($bukti)->jumlah }}" name="jumlah">
                                            </div>
                                            <div class="form-group">
                                                <label>Bukti Pembayaran</label>
                                                <input type="file" name="bukti_pembayaran" class="form-control file-input"
                                                    id="bukti_pembayaran">
                                                <div class="img-preview">
                                                    <img src="{{ optional($bukti)->img_bukti? url('storage/' . optional($bukti)->img_bukti): 'https://indonesiamengajar.org/images/placeholder.jpg' }}"
                                                        id="preview_bukti_pembayaran"
                                                        class="{{ optional(optional($bukti))->img_bukti ? 'img-thumbnail' : '' }}">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <div class="alert mb-4 alert-warning alert-dismissible fade show mb-0" role="alert">
                                    <i class="fas fa-info-circle me-2"></i> Untuk melakuakan pembayaran, silahkan melakukan
                                    pendaftaran terlebih dahulu

                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @endif
    </x-main-layout>
    <!-- end page title -->
@endsection

@push('script')
    @include('siswa.pembayaran.script')
@endpush
