 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="#">
          <img src="http://botsanddrones.biz/assets/img/logo.png" width="120px" style="height: 90px;">
        </a>
      </li><!-- End Dashboard Nav -->
      <?php
     use Illuminate\Support\Str;
      $path = Request::path();
     ?>
       @if (Auth::user()->seller == 'Y')
       <li class="nav-item {{ Str::contains($path, ['product']) ? 'active' : '' }}">
              <a class="nav-link "   href="{{route('product.list')}}">
                <i class="bi bi-house"></i>

                <span>My Products</span>
              </a>
            </li><!-- End Dashboard Nav -->
@endif

    
       <li class="nav-item {{ Str::contains($path, ['profile']) ? 'active' : '' }}">
              <a class="nav-link "   href="{{route('profile.index')}}">
                <i class="bi bi-people"></i>

                <span>My Profile </span>
              </a>
            </li><!-- End Profile -->
              <li class="nav-item {{ (request()->segment(1) == 'changePassword') ? 'active' : '' }}">
              <a class="nav-link "   href="{{route('profile.view.changePassword')}}">
                <i class="bi bi-lock"></i>

                <span>Change Password</span>
              </a>
            </li><!-- End Profile -->

              <li class="nav-item {{ (request()->segment(1) == 'notification') ? 'active' : '' }}">
              <a class="nav-link "   href="{{route('notification.list')}}">
                <i class="bi bi-list-check"></i>

                <span>Notifications</span>
              </a>
            </li><!-- End Profile -->
     @if (Auth::user()->seller == 'Y')
       <li class="nav-item  {{ (request()->segment(1) == 'drone_enquiries') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('enquiry.list')}}">
          <i class="bi bi-file-arrow-down"></i>

          <span>Buyer Enquiries</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endif
        <li class="nav-item  {{ (request()->segment(2) == 'buyer') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('enquiry.buyer.list')}}">
          <i class="bi bi-file-arrow-up"></i>

          <span>Sellers Contacted </span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item  {{ (request()->segment(2) == 'wishlist') ? 'active' : '' }}">
        <a class="nav-link " href="{{route('wishlist.list')}}">
          <i class="bi bi-heart-fill"></i>

          <span>Favourites</span>
        </a>
      </li><!-- End Dashboard Nav -->
       <li class="nav-item">
        <a class="nav-link " href="{{route('index')}}">
          <i class="bi bi-arrow-90deg-left"></i>

          <span>Visit Home page</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @if(Session::get('filter_url')!=null)
     <li class="nav-item">
        <a class="nav-link " href="{{Session::get('filter_url')}}">
          <i class="bi bi-arrow-90deg-left"></i>

          <span>Back to Search </span>
        </a>
      </li><!-- End Dashboard Nav -->
    @endif
    
      <li class="nav-item">
        <a class="nav-link " role="button"  href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </li><!-- End Dashboard Nav -->

      
    </ul>

  </aside><!-- End Sidebar-->