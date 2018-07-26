<nav class="navbar mb-0 navbar-expand-md navbar-dark bg-dark" style="border-radius: 0px;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}" style="color:#777"><span style="font-size:15pt">&#9820;</span> Videoclub</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if(true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item {{ Request::is('VideoClub/catalog') && ! Request::is('VideoClub/catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{route('index')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo
                        </a>
                    </li>


                    @if(auth()->user())
                        <li class="nav-item {{  Request::is('VideoClub/catalog/create') ? 'active' : ''}}">
                            <a class="nav-link" href="{{route('createMovie')}}">
                                <span>&#10010</span> Nueva película
                            </a>
                        </li>
                    @endif

                </ul>

                <ul class="navbar-nav navbar-right">

                    @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>

                        <!-- <form action="" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Iniciar Sesion
                            </button>
                        </form> -->
                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>

                        <!-- <form action="#" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Registrarse
                            </button>
                        </form> -->

                    </li>

                    @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

<!--                <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li> -->

                    @endguest

                </ul>
            </div>
        @endif
    </div>
</nav>
