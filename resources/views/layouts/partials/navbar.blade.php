<nav class="nav-section">
    <div class="container">
        <ul class="main-menu">
            @foreach (config('navbar') as $nav)
                <li class="{{ Route::is($nav['route-name']) || Route::is($nav['is-active']) ? 'active' : ''}}"><a href="{{ route($nav['route-name']) }}">{{ $nav['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
