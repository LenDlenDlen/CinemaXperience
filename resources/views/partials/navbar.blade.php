<div id="navbar">
    <div id="cinemaxperience-logo">
        <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="LOGO CINEMAXPERIENCE"></a>
    </div>

    <div class="mid-section">
        @auth
            @if(auth()->user()->role === 'admin' )
            <div class="admin-mid">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ddl-admin" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Movie
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Movie Lists</a></li>
                    <li><a class="dropdown-item" href="#">Add Movie</a></li>
                    <li><a class="dropdown-item" href="#">Update Movie</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Delete Movie</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ddl-admin" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      User
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">User Lists</a></li>
                        <li><a class="dropdown-item" href="#">Add User</a></li>
                        <li><a class="dropdown-item" href="#">Update User</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Delete User</a></li>
                    </ul>
                  </li>
            </div>

            @elseif (auth()->user()->role === 'non-member')
                <div class="subscribe"><a href="#">Subscribe</a></div>
            @endif
        @endauth
    </div>

    <div class="ddl">
        @auth
            @if(auth()->user()->role === 'admin' )
                @include('partials.navbar-admin');
            @elseif (auth()->user()->role === 'member')
                @include('partials.navbar-member');
            @else
                @include('partials.navbar-non-member');
            @endif

        @else
            @if (Route::currentRouteName() == 'login')
                <a href="{{ route('signup') }}"><div class="sign-up">Sign Up</div></a>
            @else
                <a href="{{ route('login') }}"><div class="sign-up">Login</div></a>
            @endif
        @endauth
    </div>

</div>
