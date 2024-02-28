<div class="container">
    <div data-collapse="medium" data-animation="default" data-duration="0" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
        <div class="brand-wrapper-large">
            <a href="{{ route('index') }}" >
                <h3 style="font-weight: bolder; color: white">{{ env('APP_NAME')  }}</h3>
            </a>
        </div>

        <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="{{ route('login') }}" target="_blank" class="nav-link light-text w-nav-link">Login</a>
            <a href="{{ route('register') }}" target="_blank" class="nav-end-link w-nav-link">Sign up <span class="right-arrow-white">&gt;</span>
            </a>
        </nav>
        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>
