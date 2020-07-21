<nav id="navbar" class="navbar navbar-expand-lg navbar-light  fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex d-md-none mx-5" href="{{route('homepage')}}"><img src="/media/logo.png" alt="" width="190" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link mx-5 h6 mt-2" href="{{route('prices')}}">Prezzi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mx-5 h6 mt-2" href="{{route('rooms.index')}}">Camere</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mx-5 h6 mt-2" href="{{route('services')}}">Servizi</a>
          </li>

          <a class="navbar-brand d-none d-md-flex mx-5" href="{{route('homepage')}}"><img src="/media/logo.png" alt="" width="190" height="50"></a>

          <li class="nav-item active">
            <a class="nav-link mx-5 h6 mt-2" href="{{route('clients.create')}}">Prenota</a>
          </li>
          
            <!-- Authentication Links -->
            @guest
                <li class="nav-item active">
                    <a class="nav-link mx-5 h6 mt-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item active">
                        <a class="nav-link mx-5 h6 mt-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
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
            @endguest
        
        </ul>
      </div>
    </div>
  </nav>