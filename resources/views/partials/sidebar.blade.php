<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar bg-light collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column ">
            @if (auth()->user()->isAdmin() or auth()->user()->isOperator())
            <li class="nav-item ms-3 me-3 text-start bg-light btn btn-sm btn-primary">
                <a class="nav-link {{ request()->routeIs('dashboard.*') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard.index') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item mt-3 ms-3 me-3 text-start bg-light btn btn-sm btn-primary">
                <a class="nav-link {{ request()->routeIs('employees.*') ? 'active' : '' }}" href="{{ route('employees.index') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Mahasiswa
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('holidays.*') ? 'active' : '' }}"
                    href="{{ route('holidays.index') }}">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Hari Libur
                </a>
            </li> -->
            <li class="nav-item mt-3 ms-3 me-3 text-start bg-light btn btn-sm btn-primary">
                <a class="nav-link {{ request()->routeIs('attendances.*') ? 'active' : '' }}" href="{{ route('attendances.index') }}">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Absensi
                </a>
            </li>
            <li class="nav-item mt-3 ms-3 me-3 text-start bg-light btn btn-sm btn-primary">
                <a class="nav-link {{ request()->routeIs('presences.*') ? 'active' : '' }}" href="{{ route('presences.index') }}">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Data Kehadiran
                </a>
            </li>
            @endif
            @if (auth()->user()->isAdmin())
            <li class="nav-item mt-3 ms-3 me-3 text-start bg-light btn btn-sm btn-primary">
                <a class="nav-link {{ request()->routeIs('positions.*') ? 'active' : '' }}" href="{{ route('positions.index') }}">
                    <span data-feather="tag" class="align-text-bottom"></span>
                    Posisi
                </a>
            </li>
            @endif
        </ul>

        <form action="{{ route('auth.logout') }}" method="post" onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
            @method('DELETE')
            @csrf
            <button class="position-sticky mt-4 fw-bold btn btn-danger col-md-6 ms-3">Keluar</button>
        </form>
    </div>
</nav>