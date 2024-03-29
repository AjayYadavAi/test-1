<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <a class="navbar-brand mr-1" href="{{ url('/') }}">Expo></a>
  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#"aria-label="{{ __('Toggle navigation') }}">
    <i class="fas fa-bars"></i>
  </button>
  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    
  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow mx-1">
        
    </li>
    <li class="nav-item dropdown no-arrow">
      
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        @guest
          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
        @else
        <a href="{{ url('/home') }}" class="dropdown-item">Dashboard</a>
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Activity Log</a>
        <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          @endguest
        </div>

    </li>
  </ul>
</nav>