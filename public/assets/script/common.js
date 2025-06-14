let headerContent = document.querySelector("#headerContainer");
let footerContent = document.querySelector("#footerContainer");

headerContent.innerHTML = `
<header class="bd-header">
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
      <a class="navbar-brand ps-md-5" href="#"><img src="assets/img/bd-logo.png" alt="" class="img-fluid" width="130"></a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse navmenu" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-search text-red"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link login-link text-capitalize" href="#"><i class="fas fa-user-lock text-red"></i><span class="ps-2 text">Login / <br> Register</span> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
`;

footerContent.innerHTML = `<footer>
<div class="bd-footer">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-6 col-xl-2 mb-3">
        <h4 class="foot-head">Popular Locations</h4>
        <a href="javascript:void(0);" class="foot-link">Kolkata</a>
        <a href="javascript:void(0);" class="foot-link">Mumbai</a>
        <a href="javascript:void(0);" class="foot-link">Chennai</a>
        <a href="javascript:void(0);" class="foot-link">Pune</a>
      </div>
      <div class="col-6 col-xl-2 mb-3">
        <h4 class="foot-head">Trending Locations</h4>
        <a href="javascript:void(0);" class="foot-link">Kolkata</a>
        <a href="javascript:void(0);" class="foot-link">Mumbai</a>
        <a href="javascript:void(0);" class="foot-link">Chennai</a>
        <a href="javascript:void(0);" class="foot-link">Pune</a>
      </div>
      <div class="col-xl-2 mb-3 text-center">
        <img src="assets/img/bd-logo.png" class="img-fluid" alt="" />
        <h6 class="follow-text">FOLLOW US</h6>
        <ul
          class="list-unstyled d-flex align-items-center justify-content-center foot-social-link-holder"
        >
          <li>
            <a href="javascript:void(0);" class="foot-social-link"
              ><i class="fa-brands fa-facebook"></i
            ></a>
          </li>
          <li>
            <a href="javascript:void(0);" class="foot-social-link"
              ><i class="fa-brands fa-instagram"></i
            ></a>
          </li>
          <li>
            <a href="javascript:void(0);" class="foot-social-link"
              ><i class="fa-brands fa-twitter"></i
            ></a>
          </li>
          <li>
            <a href="javascript:void(0);" class="foot-social-link"
              ><i class="fa-brands fa-youtube"></i
            ></a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-xl-2 mb-3 right-foot text-end">
        <div>
          <h4 class="foot-head">Bots & Drones</h4>
          <a href="javascript:void(0);" class="foot-link">Help</a>
          <a href="javascript:void(0);" class="foot-link">Sitemap</a>
          <a href="javascript:void(0);" class="foot-link"
            >Legal & Privacy</a
          >
          <a href="javascript:void(0);" class="foot-link">information</a>
          <a href="javascript:void(0);" class="foot-link">Blog</a>
        </div>
      </div>
      <div class="col-6 col-xl-2 mb-3 right-foot text-end">
        <div>
          <h4 class="foot-head">About Us</h4>
          <a href="javascript:void(0);" class="foot-link"
            >About Bots & Drones</a
          >
          <a href="javascript:void(0);" class="foot-link">Careers</a>
          <a href="javascript:void(0);" class="foot-link">Contact Us</a>
          <a href="javascript:void(0);" class="foot-link">OLXPeople</a>
          <a href="javascript:void(0);" class="foot-link">Waah Jobs</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copyrights container py-4">
  <div class="d-flex align-items-center flex-wrap flex-md-nowrap">
    <div class="mb-2 w-t-line">
      <p class="m-0 text text-center text-md-start">All rights reserved © 2006-2022 Bots & Drones</p>
    </div>
    <div class="mb-2 flex-grow-1 ps-2">
      <div class="line"></div>
    </div>
  </div>
</div>
</footer>
`;