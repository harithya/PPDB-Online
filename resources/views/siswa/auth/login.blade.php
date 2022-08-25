<x-guest-auth-layout>
    @if (session()->get('message'))
        <script>
            alert("{{ session()->get('message') }}")
        </script>
    @endif
    <form id="login-form" method="POST" action="{{ route('siswa.auth.login.store') }}" class="active">
        @csrf
        <div class="if-group">
            <label>Email</label>
            <input type="email" autocomplete="email" name="email" class="if-input @error('email') if-error @enderror">
            @error('email')
                <div class="text-error"> {{ $message }}</div>
            @enderror
        </div>
        <div class="if-group password-group">
            <label>Password <a href="#" class="if-form-go" data-go="2">Forgot
                    Password?</a></label>
            <input type="password" name="password" autocomplete="current-password"
                class="if-input @error('password') if-error @enderror">
            @error('password')
                <div class="text-error"> {{ $message }}</div>
            @enderror
        </div>
        <button class="if-btn">
            Login
        </button>
    </form>

</x-guest-auth-layout>
