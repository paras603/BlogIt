<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <div class="row">

                <div class="col-lg-3">
                    <form action="#" class="search-form">
                        <span class="fa fa-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search...">
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="/" class="logo text-uppercase">blog it</a>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-between">
                        <ul class="list-unstyled social me-auto">
                            <li><a href="#"><span class="fab fa-twitter" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook" aria-hidden="true"></span></a></li>
                        </ul>
                        
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
                            <li class="nav-item dropdown list-unstyled">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-logout" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>   
        </div>
    </div>
</nav>