@extends('layouts.app')

@section('content')
    <x-main-layout title="Pengaturan">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pengaturan</h4>
                        <p class="card-title-desc">Mohon cek kembali isian form agar tidak terjadi kesalahan</p>

                        <form id="formAdd">
                            <div class="row mt-5">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <label>Penutupan PPDB</label>
                                        <input class="form-control"
                                            value="{{ date('Y-m-d\TH:i', strtotime($pengaturan->waktu_selesai)) }}"
                                            type="datetime-local" name="waktu_selesai">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Kuota Pendaftar</label>
                                        <input class="form-control" value="{{ $pengaturan->kuota }}" type="number"
                                            name="kuota">
                                    </div>
                                    <button class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-main-layout>
@endsection

@push('script')
    <script>
        $(document).ready(function() {

            BaseUrl = BaseUrl + '/pengaturan';
            $("#formAdd").on('submit', function(e) {
                e.preventDefault();
                const data = new FormData(this);
                const url = BaseUrl;
                _insert(url, data);
            });
        })
    </script>
@endpush
