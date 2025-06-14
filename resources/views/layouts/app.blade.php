<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bots and Drones</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <!-- fontawesome 6.2 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style type="text/css">

.added-button {
    background-color: green;
    color: white; /* Set text color to white for better visibility */
}


     .has-error  {
  border: 2px solid #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
}

.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 180px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
        .card-header{
    border: none;
    background-color: #fff !important;
    color: #1d2e6f !important;
    padding: 15px;
    border-bottom: 1px solid rgba(0,0,0,.125);
} 
    /* Custom style */
      @media only screen and (max-width: 600px) {
          .d-sm-none {
            display:none;
          }
        }
    .bd-header .navbar-nav  .active .nav-link{
        color: red;
    }
    
    .accordion-item{
        border: none;
         margin-bottom: 10px;
     }
     .mobile-view{
         display:none;
     }
       .desktop-view{
             display:table;
         }
     @media only screen and (max-width: 600px) {
          .mobile-view{
             display:table !important;
         }
          .desktop-view{
             display:none;
         }
    }
.offer-button {
  position: relative;
  cursor: pointer;
}

.offer-pop-up {
  display: none;
  position: absolute;
  top: -10px;
  left: 0;
  background-color: #fff;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  z-index: 1;
  white-space: wrap; /* Prevent line breaks within the content */
}

.offer-button:hover .offer-pop-up {
  display: block;
  width: max-content; /* Adjust the width to fit the content */
  min-width: 50%; /* Set a minimum width to avoid collapsing */
  max-width: 300px; /* Set a maximum width to limit the width of the pop-up */
  word-wrap: break-word; /* Make the content wrap if it exceeds the width */
  text-align: left; /* Align the text to the left */
}
        /* On screens that are 992px or less, set the background color to blue */
@media screen and (max-width: 992px) {
 .action-btns{
        margin-top:10px;
    }
}

/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 600px) {
  .action-btns{
         margin-top:10px;
    }
} @media only screen and (max-width: 600px) {
          .w-t-line {
width: max-content !important;
              
          }
        }
        
        .flex-container {
  display: flex;
  flex-wrap: wrap;
  gap:50px;
  }
input[readonly] {
    background-color: lightgrey;
}

    </style>
</head>
<body>
    <div id="app">
        @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>
         @include('layouts.footer')
    </div>
     <!-- custom js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
       <script src="{{ asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
      <!--  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>


<script>
        const firebaseConfig = {

    apiKey: "AIzaSyAQTIiLi4L9WWc6aLrsT49jVCP_F7EfUhY",

    authDomain: "bots-new-otp.firebaseapp.com",

    projectId: "bots-new-otp",

    storageBucket: "bots-new-otp.appspot.com",

    messagingSenderId: "596106842403",

    appId: "1:596106842403:web:e88d33339f3b8863487c96",

    measurementId: "G-6B0GQP28LC"

  };

        firebase.initializeApp(firebaseConfig);
    </script> -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
 <script>
        const firebaseConfig = {

    apiKey: "AIzaSyCJGmJKf_qkIkLjYBQB4QCOJsh43MkUEdg",

    authDomain: "otpverification-57a46.firebaseapp.com",

    projectId: "otpverification-57a46",

    storageBucket: "otpverification-57a46.appspot.com",

    messagingSenderId: "193180545531",

    appId: "1:193180545531:web:be96a84b2b014c49ce5b5e"

  };

        firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript">
        window.onload = function () {
            render();
        };
        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function sendOTP() {
        var buyer_town_city = document.getElementById("buyer_town_city").value;
        var buyer_country = document.getElementById("buyer_country").value;
        var buyer_quantity = document.getElementById("buyer_quantity").value;
        var buyer_requirement = document.getElementById("buyer_requirement").value;
          if(buyer_town_city=="")
        {
            alert("Must Enter City");
        }
        else if(buyer_country=="")
        {
             alert("Must Enter Country");
        }
        else  if(buyer_quantity=="")
        {
             alert("Must Enter Quantity");
        }
        else  if(buyer_requirement=="")
        {
             alert("Must Enter Requirement");
         }
        else
        {
             var form = document.getElementById("buyer_form");
            var rawPhoneNumber = document.getElementById("buyer_phone").value;
            var phoneNumber = '+' + rawPhoneNumber;
            firebase
              .auth()
              .signInWithPhoneNumber(phoneNumber, window.recaptchaVerifier)
              .then(function(confirmationResult) {
                  $("#successAuth").text("OTP has been sent to your registered mobile number");
                            $("#successAuth").show();
                            const btn = document.getElementById('verification_div');
                        btn.style.display="block";
                        window.confirmationResult = confirmationResult;
               }) 
              .catch(function(error) {
                    // Display the specific error message from the JSON response
                    console.error(error);
                    $("#bug").text(error.message);
                    $("#bug").show();
                }); 
        }
        

 
        

}
 // This function runs when the 'confirm-code' button is clicked
      // Takes the value from the 'code' input and submits the code to verify the phone number
      // Return a user object if the authentication was successful, and auth is complete
      function submitPhoneNumberAuthCode() {
         var form = document.getElementById("buyer_form");
        //form.submit();
        var code = document.getElementById("buyer_verification_code").value;
        confirmationResult
          .confirm(code)
          .then(function(result) {
            var user = result.user;
            form.submit();
            
           }) .then((result)=>{
                   form.submit();
              })
          .catch(function(error) {
             $("#error").text("Enter Valid OTP");
              $("#error").show();
          });
      }
     

   
         
      //This function runs everytime the auth state changes. Use to verify if the user is logged in
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          console.log("USER LOGGED IN");
        } else {
          // No user is signed in.
          console.log("USER NOT LOGGED IN");
        }
      });
    </script>


      <script>
         $(document).ready(function(){
         $(".owl-carousel").owlCarousel({
         loop:true,
         margin:10,
         responsiveClass:true,
         responsive:{
         0:{
             items:1,
             nav:false
         },
         400:{
             items:2,
             nav:false
         },
         600:{
             items:2,
             nav:false
         },
         1000:{
             items:4,
             nav:true,
             loop:false
         }
         }
         });
         });
         
         $(document).ready(function () {
            $(document).click(function (event) {
                var clickover = $(event.target);
                var _opened = $(".navbar-collapse").hasClass("navbar-collapse show");
                if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                    $("button.navbar-toggler").click();
                }
            });
         });
      </script>



<script>
    function showSellerDetails() {
        document.getElementById("seller-details").style.display = "block";
    }

    function hideSellerDetails() {
        document.getElementById("seller-details").style.display = "none";
    }

 
    function verifyOTP() {
        var enteredOTP = document.getElementById("otp_verify").value;

        axios.get('{{ route('order.add') }}')
            .then(function (response) {
                var storedOTP = response.data.otp;

                if (enteredOTP === storedOTP) {
                    document.getElementById("form").submit();
                } else {
                    alert("Invalid OTP. Please try again!");
                }
            })
            .catch(function (error) {
                console.error(error);
            });
    }

</script>
<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>
