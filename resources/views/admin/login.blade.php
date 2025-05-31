<x-loginHead/>
<body>
    <div class="login-card">
        <h2>Admin Login</h2>
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="input-group">
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>

            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
        @error('email')
            <span class="error-message">{{ $message }}</span>
        @enderror
        @error('password')
            <span class="error-message">{{ $message }}</span>
        @enderror
        <p class="text-center text-gray-400 mt-3">AnimeHub © 2025</p>
    </div>
</body>
</html>

