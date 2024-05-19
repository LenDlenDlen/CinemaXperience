<div id="navbar">
    <div id="cinemaxperience-logo">
        <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="LOGO CINEMAXPERIENCE"></a>
    </div>

    @auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ddl" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-right" style="color: black"></i> Logout
                    </button>
                </form>
            </li>
          {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
        </ul>
      </li>
    @else
        @if (Route::currentRouteName() == 'login')
            <a href="{{ route('signup') }}"><div class="sign-up">Sign Up</div></a>
        @else
            <a href="{{ route('login') }}"><div class="sign-up">Login</div></a>
        @endif
    @endauth




</div>
