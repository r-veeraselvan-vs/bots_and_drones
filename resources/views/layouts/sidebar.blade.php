 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="#">
          <img src="http://botsanddrones.biz/assets/img/logo.png" width="120px">
        </a>
      </li><!-- End Dashboard Nav -->
      <?php
     use Illuminate\Support\Str;
      $path = Request::path();
     ?>
        <li class="nav-item {{ Str::contains($path, ['supplier']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('supplier.list')}}">
          <i class="bi bi-people-fill"></i>
          <span>Suppliers</span>
        </a>
      </li><!-- End Dashboard Nav -->
        <li class="nav-item {{ Str::contains($path, ['product']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('product.list')}}">
          <i class="bx bxl-product-hunt"></i>
          <span>Products</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item  {{ Str::contains($path, ['enquiry']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('enquiry.list')}}">
          <i class="bi bi-patch-question-fill"></i>
          <span>Product Enquiry</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item {{ Str::contains($path, ['service']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('service.list')}}">
         <i class="fa fa-hard-of-hearing"></i>

          <span>Services</span>
        </a>
      </li><!-- End Dashboard Nav -->
       <li class="nav-item {{ Str::contains($path, ['provider']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('service.provider.list')}}">
         <i class="fa fa-handshake-o"></i>

          <span>Service Providers</span>
        </a>
      </li><!-- End Dashboard Nav -->

       <li class="nav-item  {{ Str::contains($path, ['/service/enquiry']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('enquiry.service.list')}}">
          <i class="bi bi-patch-question-fill"></i>
          <span>Service Enquiry</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item {{ Str::contains($path, ['courses']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('courses.list')}}">
         <i class="fa fa-graduation-cap"></i>

          <span>Training Courses</span>
        </a>
      </li><!-- End Dashboard Nav -->
       <li class="nav-item {{ Str::contains($path, ['centers']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('training.centers.list')}}">
         <i class="fa  fa-align-center"></i>

          <span>Training Centers</span>
        </a>
      </li><!-- End Dashboard Nav -->
       <li class="nav-item  {{ Str::contains($path, ['/trainee/enquiry']) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('enquiry.trainer.list')}}">
          <i class="bi bi-patch-question-fill"></i>
          <span>Training Enquiry</span>
        </a>
      </li><!-- End Dashboard Nav -->

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