<x-adminHead/>
<body>
    <x-adminHeader/>
    <aside class="sidebar">
        <ul>
            <li><a href="{{ route('admin.dashboard.home') }}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{ route('admin.dashboard.posts.index') }}"><i class="fas fa-file-alt"></i> Posts</a></li>
            <li><a href="{{ route('admin.dashboard.comments.index') }}"><i class="fas fa-comments"></i> Comments</a></li>
            <li><a href="{{ route('admin.dashboard.users.index') }}"><i class="fas fa-users"></i> Users</a></li>
        </ul>
    </aside>
    <div class="content">
        @yield('content')
    </div>
    <script>
        document.querySelector('.menu-toggle').addEventListener('click', () => {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>