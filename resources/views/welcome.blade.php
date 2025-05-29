<x-head-tag title='Home'/>

<body>
    <x-anime-header title="AnimeHub" />

    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title animate-fade-in">Discover Your Next Anime Adventure</h1>
            <p class="hero-subtitle animate-fade-in">Explore the best anime series and movies, handpicked for you!</p>
            <a href="/anime" class="btn btn-explore animate-pulse">Explore Now</a>
        </div>
    </section>

    <section class="popular-anime container">
        <h2 class="section-title">Popular Anime</h2>
        <div class="anime-grid">
            <div class="anime-card animate-card">
                <img src="{{ asset('images/attack-on-titan.jpg') }}" alt="Anime 1" class="anime-img">
                <h3>Attack on Titan</h3>
                <p>Season 4 - Action, Drama</p>
            </div>
            <div class="anime-card animate-card">
                <img src="{{ asset('images/demon-slayer.jpg') }}" alt="Anime 2" class="anime-img">
                <h3>Demon Slayer</h3>
                <p>Season 3 - Adventure, Fantasy</p>
            </div>
            <div class="anime-card animate-card">
                <img src="{{ asset('images/jujutsu-kaisen.jpg') }}" alt="Anime 3" class="anime-img">
                <h3>Jujutsu Kaisen</h3>
                <p>Season 2 - Supernatural</p>
            </div>
        </div>
    </section>

    <x-footer/>

</body>
</html>