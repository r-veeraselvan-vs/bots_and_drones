<footer>
<div class="bd-footer">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-6 col-xl-2 mb-3">
        <h4 class="foot-head">Bot & Drone store</h4>
        @if(!Auth::check())
        <a href="{{route('register', [ 'seller' => 'Y'])}}" class="foot-link">Register as Seller</a>
        @endif
        <a href="https://botsanddrones.asia/about-store" class="foot-link" target="_blank">FAQ - User Guide</a>
         <a class="foot-link">Used Products (Coming soon)</a>
      </div>
     
      <div class="col-xl-2 mb-3 text-center">
        <img src="{{ asset('assets/img/bd-logo.png')}}" class="img-fluid" alt="" />
        <h6 class="follow-text">FOLLOW US</h6>
        <ul
          class="list-unstyled d-flex align-items-center justify-content-center foot-social-link-holder"
        >
          
          <li>
            <a href="https://www.instagram.com/botsanddrones/" target="_blank" class="foot-social-link"
              ><i class="fa-brands fa-instagram"></i
            ></a>
          </li>
           <li>
            <a href="https://www.youtube.com/channel/UCcYVMfoKN1Qaq3M3t6D0gvw/videos" target="_blank" class="foot-social-link"
              ><i class="fa-brands fa-youtube"></i
            ></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/bots-drones/" target="_blank" class="foot-social-link"
              ><i class="fa-brands fa-linkedin"></i
            ></a>
          </li>
         
        </ul>
      </div>
      <div class="col-6 col-xl-2 mb-3 right-foot text-end">
        <div>
          <h4 class="foot-head">Bots & Drones</h4>
          <a href="https://botsanddrones.asia/contact-us" target="_blank" class="foot-link">About Bots & Drones</a>
          <a href="https://botsanddrones.asia/privacy-policy" target="_blank" class="foot-link">Legal & Privacy</a>
          <a href="https://botsanddrones.asia/contact-us" target="_blank" class="foot-link">Contact Us</a>
        </div>
      </div>
    
    </div>
  </div>
</div>
<div class="copyrights container py-4">
  <div class="d-flex align-items-center flex-wrap flex-md-nowrap">
    <div class="mb-2 w-t-line">
      <p class="m-0 text text-center text-md-start">All Rights Reserved © 2021-2024 Bots & Drones</p>
    </div>
    <div class="mb-2 flex-grow-1 ps-2">
      <div class="line"></div>
    </div>
  </div>
</div>
</footer>