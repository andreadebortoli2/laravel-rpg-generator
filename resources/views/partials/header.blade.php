<header class="py-3">
    <nav class="container navbar navbar-expand navbar-light">
        <div class="nav navbar-nav d-flex justify-content-between w-100">
            <div>
                <a class="nav-item nav-link fw-bold {{ Route::currentRouteName() === 'guests.home' ? 'active' : '' }}"
                    href="{{ route('guests.home') }}">Home</a>
            </div>
            <div class="d-flex flex-no-wrap">
                <a class="nav-item nav-link fw-bold {{ Route::currentRouteName() === 'items.index' ? 'active' : '' }}"
                    href="{{ route('items.index') }}">Items</a>
                <a class="nav-item nav-link fw-bold {{ Route::currentRouteName() === 'characters.index' ? 'active' : '' }}"
                    href="{{ route('characters.index') }}">Characters</a>
            </div>
        </div>
    </nav>

</header>
