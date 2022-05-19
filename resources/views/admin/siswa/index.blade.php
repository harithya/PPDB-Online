@extends('layouts.app')

@section('content')
    <x-main-layout title="Siswa Pendaftar">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="">Pilih</option>
                                            <option {{ selected(BARU, 'status') }} value="{{ BARU }}">
                                                Pendaftar
                                                baru</option>
                                            <option {{ selected(MENUNGGU, 'status') }} value="{{ MENUNGGU }}">Belum
                                                melakukan pembayaran</option>
                                            <option {{ selected(PENGECEKAN, 'status') }} value="{{ PENGECEKAN }}">
                                                Menunggu Pengecekan</option>
                                            <option {{ selected(DITERIMA, 'status') }} value="{{ DITERIMA }}">
                                                Diterima
                                            </option>
                                            <option {{ selected(DITOLAK, 'status') }} value="{{ DITOLAK }}">Ditolak
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pekerjaan Orang Tua</label>
                                        <select class="form-control" name="pekerjaan">
                                            <option value="">Pilih</option>
                                            @foreach ($pekerjaan as $item)
                                                <option {{ selected($item->id, 'pekerjaan') }}
                                                    value="{{ $item->id }}">
                                                    {{ $item->pekerjaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Penghasilan Orang Tua</label>
                                        <select class="form-control" name="penghasilan">
                                            <option value="">Pilih</option>
                                            @foreach ($penghasilan as $item)
                                                <option {{ selected($item->id, 'penghasilan') }}
                                                    value="{{ $item->id }}">{{ $item->penghasilan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary"><i class="fas fa-search me-2"></i> Filter Data</button>
                                <a href="{{ url('admin/siswa') }}" class="btn btn-danger ms-2"><i
                                        class="fas fa-redo me-2"></i> Reset
                                    Filter</a>
                                <a href="{{ url('admin/siswa/export/excel?status=' . request()->status . '&pekerjaan=' . request()->pekerjaan . '&penghasilan=' . request()->penghasilan) }}"
                                    class="btn btn-success ms-2"><i class="fas fa-file-excel me-2"></i> Export
                                    Excel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                            </div>
                        @endif
                        <table class="table table-responsive" id="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .dropdown-menu {
                left: -100px !important;
            }

        </style>
    </x-main-layout>
@endsection

@push('script')
    @include('admin.siswa.script')
@endpush
