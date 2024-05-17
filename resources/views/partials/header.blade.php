<header class="bg-success-subtle">
    <nav class="container navbar navbar-expand navbar-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link {{ Route::currentRouteName() === 'guests.home' ? 'active' : '' }}"
                href="{{ route('guests.home') }}">Home</a>
            <a class="nav-item nav-link {{ Route::currentRouteName() === 'items.index' ? 'active' : '' }}"
                href="{{ route('items.index') }}">Items</a>
            <a class="nav-item nav-link {{ Route::currentRouteName() === 'characters.index' ? 'active' : '' }}"
                href="{{ route('characters.index') }}">Characters</a>
        </div>
    </nav>

</header>
