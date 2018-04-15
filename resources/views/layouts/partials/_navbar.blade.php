<nav class="navbar is-white is-shadowless">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/acme.png" alt="Logo">
            </a>
            <navbar-burger/>
        </div>
        @guest
            <div class="navbar-end">
                <a
                    class="navbar-item {{ request()->is('login') ? 'is-active' : '' }}"
                    href="{{ route('login') }}">
                    Login
                </a>
                <a
                    class="navbar-item {{ request()->is('register') ? 'is-active' : '' }}"
                    href="{{ route('register') }}">
                    Register
                </a>
            </div>
        @else
            <navbar-menu :user="{{ auth()->user() }}" />
        @endguest
    </div>
</nav>
