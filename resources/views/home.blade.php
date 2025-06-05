@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero-section" style="background-image: url('/images/hero-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-black opacity-50"></div> 
        
        <div class="hero-container relative z-10"> 
            <h1 class="hero-title text-white">Welcome to Anime Hub</h1>
            <p class="hero-description text-gray-200">Discover the best anime, explore genres, and join the community!</p>
            <form method="GET" action="{{ route('animes.index') }}" class="search-form">
                <input type="text" name="q" placeholder="Search for an anime..." class="search-input">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
    </section>
    <section class="featured-section">
        <h2 class="featured-title">Featured Animes</h2>
        <div class="anime-grid">
            @foreach ( $posts as $post)
                <div class="anime-card">
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="anime-image">
                    <div class="anime-content">
                        <h3 class="anime-title">{{ $post['title'] }}</h3>
                        <p>{{ substr($post['description'] , 0 , 36) }} ...</p>
                        <a href="{{ route('posts.show', $post->slug) }}" class="anime-link">Details</a>                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <x-footer />
@endsection 