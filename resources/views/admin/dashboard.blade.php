@extends('admin.layouts.app')

@section('content')
    <div class="card" style="text-align: center;">
        <h2>Welcome to Admin Panel</h2>
        <p>Manage your content with ease and efficiency.</p>
    </div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
        <div class="stats-card">
            <h3>Posts</h3>
            <p>42</p>
        </div>
        <div class="stats-card">
            <h3>Comments</h3>
            <p>128</p>
        </div>
        <div class="stats-card">
            <h3>Users</h3>
            <p>15</p>
        </div>
    </div>
@endsection