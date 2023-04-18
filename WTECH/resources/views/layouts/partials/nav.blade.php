<nav class="navbar navbar-expand-lg navbar-custom shadow fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand logo-custom" href="{{ route('home') }}">LOGO</a>
        <form class="d-flex">
            <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="d-flex">
            @if (Auth::check())
            <div class="dropdown ">
                <a href="#" class="d-block text-black me-3 fs-3" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-custom shadow" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item text-white dropdown-item-custom" href="#">Profile</a></li>
                    <li><a class="dropdown-item dropdown-item-custom" id="logout-btn" href="{{ route('logout') }}">Log Out</a></li>
                </ul>
            </div>
            @else
            <a href="{{ route('register') }}" class="me-3 fs-3 text-black"><i class="bi bi-person"></i></a>
            @endif
            <a href=".#" class="me-3 fs-3 text-black"><i class="bi bi-cart"></i></a>
        </div>
    </div>
</nav>