@extends('layouts.auth')

@section('content')
    <x-auth-layout title="Registrasi" subtitle="Selamat datang siswa baru">
        <div class="card-body pt-5">
            <div class="p-2">
                @if (session()->get('message'))
                    <div class="alert alert-success">{{ session()->get('message') }}</div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('siswa.auth.register.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            placeholder="Cth : Della Rianty Febrian" name="nama">
                        @error('nama')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Cth : dellariantyfeb@gmail.com" name="email">
                        @error('email')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="userpassword">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            id="userpassword" placeholder="Enter password" name="password">
                        @error('password')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" value="1    "
                            id="customControlInline">
                        <label class="form-check-label" for="customControlInline">Setuju dengan semua
                            ketentuan</label>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-primary w-100 waves-effect waves-light">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </x-auth-layout>
@endsection
