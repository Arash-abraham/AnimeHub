<x-head-tag title='Anime List'/>
<body>

    <x-anime-header title="AnimeHub" />


    <section class="anime-list container">
        <div class="anime-grid">
            <div class="anime-card animate-card">
                <img src="{{ asset('images/naruto.jpg') }}" alt="Naruto" class="anime-img">
                <h3>Naruto Shippuden</h3>
                <p>Action, Adventure | Ongoing</p>
                <a href="/anime/naruto" class="btn btn-details">Details</a>
            </div>
            <div class="anime-card animate-card">
                <img src="{{ asset('images/jujutsu-kaisen.jpg') }}" alt="Demon Slayer" class="anime-img">
                <h3>Demon Slayer</h3>
                <p>Fantasy, Action | Completed</p>
                <a href="/anime/demon-slayer" class="btn btn-details">Details</a>
            </div>
            <div class="anime-card animate-card">
                <img src="{{ asset('images/demon-slayer.jpg') }}" alt="Jujutsu Kaisen" class="anime-img">
                <h3>Jujutsu Kaisen</h3>
                <p>Supernatural, Action | Ongoing</p>
                <a href="/anime/jujutsu-kaisen" class="btn btn-details">Details</a>
            </div>
            <div class="anime-card animate-card">
                <img src="{{ asset('images/attack-on-titan.jpg') }}" alt="Attack on Titan" class="anime-img">
                <h3>Attack on Titan</h3>
                <p>Action, Drama | Completed</p>
                <a href="/anime/attack-on-titan" class="btn btn-details">Details</a>
            </div>
        </div>
    </section>

    <x-footer/>
</body>
</html>