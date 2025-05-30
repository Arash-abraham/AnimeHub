<!-- resources/views/components/anime-header.blade.php -->
<header class="anime-header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Konoha Logo" class="logo-img">
            <h1>{{ $title ?? 'AnimeHub' }}</h1>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/anime" class="nav-link">Anime List</a></li>
                <li><a href="/genres" class="nav-link">Genres</a></li>
                <li><a href="/community" class="nav-link">Community</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            @auth
                <span class="user-name">Welcom {{ auth()->user()->name }}</span>
                <form action="/logout" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-register">Logout</button>
                </form>            
            @else
                <a href="/login" class="btn btn-login">Login</a>
                <a href="/register" class="btn btn-register">Sign Up</a>
            @endauth
        </div>
    </div>
</header>