<header class="header" id="header">
  <div class="header_toggle">
    <i class="bx bx-menu" id="header-toggle"></i>
  </div>
  <div>
    
        <span class="nav_name">Welcome {{ Auth::user()->name }}  </span>
  </div>
{{-- <div class="header_img">
  <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
</div> --}}
  
</header>
<div class="l-navbar" id="nav-bar">
  <nav class="nav">
    <div>
      <a href="/" class="nav_logo">
        <i class="bx bx-layer nav_logo-icon"></i>
        <span class="nav_logo-name">BBBootstrap</span>
      </a>

    <div class="nav_list">
      
      <a href="/" class="nav_link {{ ($tittle === "Home" ? 'active' : '') }}">
        <i class="bx bx-grid-alt nav_icon"></i>
        <span class="nav_name">Dashboard</span>
      </a>
      <a href="/list-user" class="nav_link {{ ($tittle === "List User" ? 'active' : '') }}">
        <i class="bx bx-user nav_icon"></i>
        <span class="nav_name">List Users</span>
      </a>
      <a href="/about" class="nav_link {{ ($tittle === "About" ? 'active' : '') }}">
        <i class="bx bx-message-square-detail nav_icon"></i>
        <span class="nav_name">About</span>
      </a>
      <a href="/blog" class="nav_link {{ ($tittle === "Blog" ? 'active' : '') }}">
        <i class="bx bx-bookmark nav_icon"></i>
        <span class="nav_name">Blog</span>
      </a>
      <a href="/booking-rooms" class="nav_link">
        <i class="bx bx-door-open nav_icon"></i>
        <span class="nav_name">Room Booking</span>
      </a>
      <a href="/rooms" class="nav_link">
        <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
        <span class="nav_name">Rooms</span>
      </a>
      @if(auth()->user()->role_id == '1')
      <a href="/list-user" class="nav_link {{ ($tittle === "List User" ? 'active' : '') }}">
        <i class="bx bx-user nav_icon"></i>
        <span class="nav_name">List Users</span>
      </a>
      @endif
      <hr>
      @auth
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav_link w-100 btn">
          <i class="bx bx-log-out nav_icon"></i>
          Log out
        </button>
      </form>
      @endauth
    </div>
  </div>
  
    

  </nav>
</div>