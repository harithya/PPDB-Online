<x-guest-auth-layout>
    <form id="login-form" method="POST" action="{{ route('siswa.auth.register.store') }}" class="active">
        @csrf
        <div class="if-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="if-input @error('nama') if-error @enderror">
            @error('nama')
                <div class="text-error"> {{ $message }}</div>
            @enderror
        </div>
        <div class="if-group">
            <label>Email</label>
            <input type="email" autocomplete="email" name="email" class="if-input @error('email') if-error @enderror">
            @error('email')
                <div class="text-error"> {{ $message }}</div>
            @enderror
        </div>
        <div class="if-group password-group">
            <label>Password </label>
            <input type="password" name="password" autocomplete="current-password"
                class="if-input @error('password') if-error @enderror">
            @error('password')
                <div class="text-error"> {{ $message }}</div>
            @enderror
        </div>
        <button class="if-btn">
            Register
        </button>
    </form>

</x-guest-auth-layout>
