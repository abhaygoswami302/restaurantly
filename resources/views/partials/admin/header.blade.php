<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente top-0">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="{{ route('items.index') }}">Admin</a></h1>
    
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        @auth
        <li><a class="nav-link scrollto active" href="{{ route('items.index') }}">View Menu</a></li>
        <li><a class="nav-link" href="{{ route('items.create') }}">Add Item</a></li>            
        @endauth
      </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    @auth
    <a class="book-a-table-btn scrollto d-none d-lg-flex" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>
    @else
    <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Login</a>
    @endauth

  </div>
</header><!-- End Header -->