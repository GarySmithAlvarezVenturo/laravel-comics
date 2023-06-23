<main>
    <div class="grid">
        @foreach ($comics as $comic)
            @include('partials.card')
        @endforeach
    </div>
  </main>