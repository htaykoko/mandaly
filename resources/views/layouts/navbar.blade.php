<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-2 pr-4 align-items-center">
                <a class="navbar-brand" href="{{ route("home") }}">Mandalay</a>
            </div>
            <div class="col-lg-10 d-none d-md-block">
                <div class="row d-flex">
                    <div class="col-md-4 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">Email: youremail@email.com</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">Phone: + 1235 2355 98</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"></div>
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <p class="button-custom order-lg-last mb-0"><a href="{{ route("appointment") }}" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{ route("home") }}" class="nav-link pl-0">home</a></li>
                <li class="nav-item"><a href="{{ route("about") }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route("doctors") }}" class="nav-link">Doctor</a></li>
                <li class="nav-item"><a href="{{ route("services") }}" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="{{ route("pricing") }}" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="{{ route("blogs") }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route("contact") }}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route("history") }}" class="nav-link">History</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->