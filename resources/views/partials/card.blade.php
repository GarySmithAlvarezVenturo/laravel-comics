<div class="card">
    <div class="img_container">
        {{-- <img :src="urlImage" :alt="title" /> --}}
        <img src="{{ Vite::asset($comic['thumb']) }}" alt="">
    </div>
    <div class="text_container">
        <p class="title">{{ $comic['series'] }}</p>
    </div>
</div>