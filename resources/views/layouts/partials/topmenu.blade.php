<div class="navbar-top">
    <div class="d-flex justify-content-between align-items-center">
        <ul class="navbar-top-left-menu">
            <li class="nav-item">
                <a href="pages/index-inner.html" class="nav-link">Advertise</a>
            </li>
            <li class="nav-item">
                <a href="pages/aboutus.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Events</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Write for Us</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">In the Press</a>
            </li>
        </ul>
        <ul class="navbar-top-right-menu ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item ">
                    <span class="nav-link text-warning" >{{__('Здравей,')}} {{Auth::user()->first_name}}</span>
                </li>
                <li class="nav-item ">
                    <span class="nav-link" >&nbsp;</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </ul>
    </div>
</div>

