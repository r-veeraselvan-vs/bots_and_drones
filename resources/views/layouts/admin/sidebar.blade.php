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
        <li class="nav-item {{ Str::contains($path, ['dashboard']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('dashboard')}}">
          <i class="bi bi-house-fill"></i>

          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->
       
         <li class="nav-item {{ Str::contains($path, ['buyers']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('admin.buyers.list')}}">
          <i class="bi bi-people-fill"></i>

          <span>Buyers</span>
        </a>
      </li><!-- End Dashboard Nav -->
       

         <li class="nav-item {{ Str::contains($path, ['sellers']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('admin.sellers.list')}}">
          <i class="bi bi-people-fill"></i>

          <span>Sellers</span>
        </a>
      </li><!-- End Dashboard Nav -->
       
         <li class="nav-item {{ Str::contains($path, ['enquiry']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('admin.enquiry.list')}}">
          <i class="fas fa-question-circle mr-2"></i>

          <span>Enquiries</span>
        </a>
      </li><!-- End Enquiries Nav -->

      <li class="nav-item {{ Str::contains($path, ['products']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('admin.products.list')}}">
          <i class="bi bi-slack mr-2"></i>

          <span>Products</span>
        </a>
      </li><!-- End Product Nav -->

       <li class="nav-item {{ Str::contains($path, ['subscription_new']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('subscription_new.list')}}">
          <i class="bi bi-people"></i>

          <span>Premium Subscription</span>
        </a>
      </li>

       <!-- <li class="nav-item {{ Str::contains($path, ['subscriptions']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('subscriptions.list')}}">
          <i class="bi bi-people-fill"></i>

          <span>Subscriptions</span>
        </a>
      </li> -->
      
       <li class="nav-item {{ Str::contains($path, ['notification']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('notifications.index')}}">
          <i class="bi bi-tag"></i>

          <span>Notifications</span>
        </a>
      </li>

       <li class="nav-item {{ Str::contains($path, ['configurations']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('configurations.list')}}">
          <i class="bi bi-tags"></i>

          <span>Configurations</span>
        </a>
      </li>

       <li class="nav-item {{ Str::contains($path, ['usermanagement']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('usermanagement.list')}}">
          <i class="bi bi-people"></i>

          <span>User Management</span>
        </a>
      </li>

       <li class="nav-item {{ Str::contains($path, ['unverifiedusers']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('unverifiedusers.list')}}">
          <i class="bi bi-people"></i>

          <span>Unverified Users</span>
        </a>
      </li>

      <!-- <li class="nav-item {{ Str::contains($path, ['category']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('category.list')}}">
          <i class="bi bi-tag"></i>

          <span>Category</span>
        </a>
      </li>

       <li class="nav-item {{ Str::contains($path, ['subcategory']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('subcategory.list')}}">
          <i class="bi bi-tags"></i>

          <span>SubCategory</span>
        </a>
      </li>

       <li class="nav-item {{ Str::contains($path, ['banner']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('banner.list')}}">
          <i class="bi bi-images"></i>

          <span>Banner</span>
        </a>
      </li>
      <li class="nav-item {{ Str::contains($path, ['brand']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('brand.list')}}">
          <i class="bi bi-slack"></i>

          <span>Brands</span>
        </a>
      </li>
        <li class="nav-item {{ Str::contains($path, ['models']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('models.list')}}">
          <i class="bi bi-slack"></i>

          <span>Models</span>
        </a>
      </li> 
        <li class="nav-item {{ Str::contains($path, ['state']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('state.list')}}">
          <i class="bi bi-flag"></i>

          <span>States</span>
        </a>
      </li>
    <li class="nav-item {{ Str::contains($path, ['city']) ? 'active' : '' }}">
        <a class="nav-link "  href="{{route('city.list')}}">
          <i class="bi bi-flag"></i>

          <span>Cities</span>
        </a>
      </li>-->

       
      
       
       <?php
        $admin = Auth::guard('admin')->user();
       ?>
     
      <li class="nav-item">
          <a href="{{request()->getSchemeAndHttpHost()}}/admin/autologin?email={{ $admin->email}}&api_token=token" class="nav-link text-center"><i class="bi bi-box-arrow-right"></i>
        <span>Back</span></a>
      </li><!-- End Dashboard Nav -->

      
    </ul>

  </aside><!-- End Sidebar-->