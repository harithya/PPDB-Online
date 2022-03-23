@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Management User">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary  waves-effect waves-light btn-add" data-bs-toggle="modal"
                            data-bs-target="#modalAdd">
                            <i class="far fa-paper-plane me-3"></i>Tambah Data
                        </button>
                        <table id="table" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>No Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-main-layout>
    <!-- end page title -->
    @include('admin.management-user.modal')
    @push('script')
        @include('admin.management-user.script')
    @endpush
@endsection
