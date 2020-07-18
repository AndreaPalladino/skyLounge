<nav id="navbar" class="navbar navbar-expand-lg navbar-light  fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex d-md-none mx-5" href="{{route('home')}}"><img src="/media/logo.png" alt="" width="190" height="50"></a>
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

          <a class="navbar-brand d-none d-md-flex mx-5" href="{{route('home')}}"><img src="/media/logo.png" alt="" width="190" height="50"></a>
        

          <li class="nav-item active">
            <a class="nav-link mx-5 h6 mt-2" href="#">Servizi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mx-5 h6 mt-2" href="#">Prenota</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>