<header class="header">
    <div class="logo">AnimeHub Admin</div>
    <div class="menu-toggle">
        <i class="fas fa-bars"></i>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</header>