
<li class="nav-item dropdown nav-item-container">
    <a class="nav-link dropdown-toggle ddl-items" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Welcome, {{ auth()->user()->name }}
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('user.dashboard') }}"><i class="bi bi-person-circle" style="color: black"></i> Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item ">
                    <i class="bi bi-box-arrow-right" style="color: black"></i> Logout
                </button>
            </form>
        </li>
    {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
    </ul>
</li>

