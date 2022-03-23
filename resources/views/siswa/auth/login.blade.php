@extends('layouts.auth')

@section('content')
    <x-auth-layout title="Welcome Back !" subtitle="Sign in to continue to PPDB." withRegister>
        <div class="card-body pt-5">
            <div class="p-2">
                @if (session()->get('message'))
                    <div class="alert alert-danger">{{ session()->get('message') }}</div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('siswa.auth.login.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Enter email" name="email">
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
                        <label class="form-check-label" for="customControlInline">Remember
                            me</label>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-primary w-100 waves-effect waves-light">Log
                            In</button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-layout>
@endsection
