<ul class="nav">
    @foreach ($navItems as $item)
        <li>{{ $item['title'] }}</li>
    @endforeach
</ul>