<div class="container_fluid">
    <nav class="navbar navbar-expand-lg  header_area p-4">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Finansije života</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Besplatna predavanja</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-link"><a href="{{route('login')}}">Login</a></li>
                    <li class="nav-link"><a href="{{route('register')}}">Register</a></li>
                @endguest
                @auth
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{auth()->user()->name}}</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="">Profile</a></li>
                            @if(auth()->user()->isAdmin())
{{--                                <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>--}}
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </form>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>

