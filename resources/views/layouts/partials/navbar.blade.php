<nav class="navbar navbar-expand-lg navbar-light">
    @include('layouts.partials.topmenu')
    <div class="navbar-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a class="navbar-brand" href="/"
                ><img src="assets/main/images/logo.svg" alt=""
                    /></a>
            </div>
            <div>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="navbar-collapse justify-content-center collapse"
                    id="navbarSupportedContent"
                >
                    <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                    >
                        <li>
                            <button class="navbar-close">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </li>
                        @guest
                            @include('layouts.partials.main.submenu')
                        @else
                            @include('layouts.partials.admin.submenu')
                        @endguest

                    </ul>
                </div>
            </div>
            <ul class="social-media">
                @guest
                    @include('layouts.partials.medias')
                @endguest
            </ul>
        </div>
    </div>
</nav>
