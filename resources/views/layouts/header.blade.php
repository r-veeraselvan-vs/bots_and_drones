<header class="bd-header homepage-header">
<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand ps-md-5" href="{{route('index')}}"><img src="{{ asset('assets/img/bd-logo.png')}}" alt="" class="img-fluid" width="130"></a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse navmenu" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
           <?php
     use Illuminate\Support\Str;
      $path = Request::path();
    //  dd($path);
      ?>
          <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
            <a class="nav-link active" aria-current="page"  href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    ><img src="{{ asset('assets/img/ind.png')}}" width="25">

                      Location

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="http://botsanddrones.biz/india/">India &nbsp <img src="{{ asset('assets/img/ind.png')}}" width="25">
</a></li>
                        <li><a class="dropdown-item" href="http://botsanddrones.biz/uk/">United Kingdom &nbsp <img src="{{ asset('assets/img/uk.png')}}" width="25"></a></li>
                        <li><a class="dropdown-item" href="http://botsanddrones.biz/asia/">Asia &nbsp <img src="{{ asset('assets/img/asia.png')}}" width="25"></a></li>

                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                            $categories = App\Models\Category::where('status','Active')->where('show_in_home','Y')->get();
                        ?>
                        <li><a class="dropdown-item" href="{{ route('products', [ 'menu' => 'categories', 'slug' => 'used-Accessories-1181', 'sub_slug' => 'all' ]) }}">Accessories & Equipment</a></li>
                        <li><a class="dropdown-item" href="{{ route('products', [ 'menu' => 'categories', 'slug' => 'Used-Drones-9282', 'sub_slug' => 'all','item_type'=>'Commercial-drones-9222' ]) }}">Commercial Drones</a></li>
                        <li><a class="dropdown-item" href="{{ route('products', [ 'menu' => 'categories', 'slug' => 'Used-Drones-9282', 'sub_slug' => 'all','item_type'=>'Consumer-drones-9987' ]) }}">Consumer Drones</a></li>
                        <li><a class="dropdown-item" href="{{ route('products', [ 'menu' => 'categories', 'slug' => 'used-Robots-4046', 'sub_slug' => 'all' ]) }}">Robots</a></li>                        
                    </ul>
                  </li>
        
          @if(!Auth::check())
           <li class="nav-item">
            <a class="nav-link"  href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item {{ Str::contains($path, ['login']) ? 'active' : '' }}">
            <a class="nav-link login-link text-capitalize" href="{{route('register', [ 'seller' => 'N'])}}"><i class="fas fa-user-lock text-red"></i> &nbsp SIGN UP</a>
          </li>
          @else
          <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    ><i class="fas fa-user text-red"></i>
                      My Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="{{route('enquiry.buyer.list')}}"><span class="ps-2 text">Dashboard</span> </a></li>
                        <li><a class="dropdown-item" role="button"  href="{{route('logout')}}" onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                              <span class="ps-2 text">Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>

                    </ul>
          </li>
           
          @endif
 
        </ul>
      </div>
    </div>
  </nav>
</header>