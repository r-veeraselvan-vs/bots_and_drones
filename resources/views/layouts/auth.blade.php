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
    <style type="text/css">
        .card {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgb(1 41 112 / 10%);
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}
 
.card-header, .card-footer {
    border-color: #ebeef4;
    background-color: #fff;
    color: #1d2e6f;
    padding: 15px;
}
.text-md-right {
    text-align: right !important;
}
.field-icon {
  float: right;
  margin-right: 15px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 600px) {
.text-md-right {
    text-align: left !important;
}
}
.btn-primary {
  color: #fff;
  background-color: #ed3c4a;
  border-color: #ed3c4a;
}
.btn-primary:hover {
  color: #fff;
  background-color: #ed3c4a !important;
  border-color: #ed3c4a !important;
}
.btn-danger {
    color: #fff;
    background-color: #1d2e6f !important;
    border-color: #1d2e6f !important;
}
.btn-danger:hover {
    color: #fff;
    background-color: #1d2e6f !important;
    border-color: #1d2e6f !important;
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
       <!-- <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
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
    </script>
 -->    
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
         function submitPhoneNumberAuth() {
        var phoneNumber = document.getElementById("company_phone").value;
        var mobile_number = "+44 " + phoneNumber;
        var url = '{{ route("seller.exist") }}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'phoneNumber': mobile_number},
            success: function(data) {
                if (data['success'] == false) {
                    $("#error").text("Mobile number already exists");
                    $("#error").show();
                } else {
                    var appVerifier = window.recaptchaVerifier;
                    firebase.auth().signInWithPhoneNumber(mobile_number, appVerifier)
                        .then(function(confirmationResult) {
                            $("#successAuth").text("OTP is sent to your entered mobile number");
                            $("#successAuth").show();
                            const btn = document.getElementById('verify_button');
                            btn.removeAttribute('disabled');
                            window.confirmationResult = confirmationResult;
                        })
                        .catch(function(error) {
                            // Display the specific error message from the JSON response
                            console.error(error);
                            $("#error").text(error.message);
                            $("#error").show();
                        });
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX error if necessary
                console.error(error);
                $("#error").text("Failed to communicate with the server. Please try again.");
                $("#error").show();
            }
        });


      }

      // This function runs when the 'confirm-code' button is clicked
      // Takes the value from the 'code' input and submits the code to verify the phone number
      // Return a user object if the authentication was successful, and auth is complete
      function submitPhoneNumberAuthCode() {
        var code = document.getElementById("verification_code").value;
        confirmationResult
          .confirm(code)
          .then(function(result) {
            var user = result.user;
            //console.log(user);
            $("#successOtpAuth").text("Verified successfully");
                $("#successOtpAuth").show();
                document.getElementById("verified_div").style.display = "block";
             window.AppInventor.setWebViewString(JSON.stringify(user));
          })
          .catch(function(error) {
            //$("#error").text(error.message);
               // $("#error").show();
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


 
    <script type="text/javascript">
        
        function verify() {
            var code = $("#company_phone").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Verified successfully");
                $("#successOtpAuth").show();
                document.getElementById("verified_div").style.display = "block";
               document.getElementById("checkbox_verify").style.display = "block";
            }).catch(function (error) {
              //  $("#error").text(error.message);
              //  $("#error").show();
            });
        }
    </script>
     <script>
        $(document).ready(function(){
   $(".toggle-password").click(function() {
    icon = document.getElementById('icon');
    $(this).removeClass();
  
  var input = document.getElementById('singin-password');
   if (input.type == "password") {
    $(this).toggleClass("fas fa-eye field-icon");
    input.type ="text"
  } else {
    input.type ="password"
    $(this).toggleClass("fas fa-eye-slash field-icon");
  }
});
});
</script>

  <script>
        $(document).ready(function(){
   $(".toggle-password-1").click(function() {
       console.log("click");
    icon = document.getElementById('icon');
    $(this).removeClass();
  
  var input = document.getElementById('password');
   if (input.type == "password") {
    $(this).toggleClass("fas fa-eye field-icon");
    input.type ="text"
  } else {
    input.type ="password"
    $(this).toggleClass("fas fa-eye-slash field-icon");
  }
});
});
</script>

  <script>
        $(document).ready(function(){
   $(".toggle-password-conf").click(function() {
    icon = document.getElementById('icon');
    $(this).removeClass();
  
  var input = document.getElementById('singin-conf-password');
   if (input.type == "password") {
    $(this).toggleClass("fas fa-eye field-icon");
    input.type ="text"
  } else {
    input.type ="password"
    $(this).toggleClass("fas fa-eye-slash field-icon");
  }
});
});
</script>
  <script>
        $(document).ready(function(){
   $(".toggle-password-buyer").click(function() {
       console.log("click");
    icon = document.getElementById('icon');
    $(this).removeClass();
  
  var input = document.getElementById('buyer-password');
   if (input.type == "password") {
    $(this).toggleClass("fas fa-eye field-icon");
    input.type ="text"
  } else {
    input.type ="password"
    $(this).toggleClass("fas fa-eye-slash field-icon");
  }
});
});
</script>
  <script>
        $(document).ready(function(){
   $(".toggle-password-conf-buyer").click(function() {
    icon = document.getElementById('icon');
    $(this).removeClass();
  
  var input = document.getElementById('buyer-singin-conf-password');
   if (input.type == "password") {
    $(this).toggleClass("fas fa-eye field-icon");
    input.type ="text"
  } else {
    input.type ="password"
    $(this).toggleClass("fas fa-eye-slash field-icon");
  }
});
});
var   seller =   document.querySelector('input[name="seller"]:checked')  ;
console.log(seller.value,"seller");
if(seller.value=="Y")
{
    //window.onload = showSellerDetails;
}
else
{
   // window.onload = hideSellerDetails;
}

</script>
 <script>
var langArray = [];
$('.vodiapicker option').each(function(){
  var img = $(this).attr("data-thumbnail");
  var text = this.innerText;
  var value = $(this).val();
  var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
  langArray.push(item);
})
 
   
    function setEmail(value)
    {
        document.getElementById('buyer_email').value = value; 
    }
     
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Define window.routes
    window.routes = {
        'checkemail': '{{ route("checkemail") }}'  // Adjust the URL accordingly
    };

    function checkEmailFormat() {
        var email = document.getElementById('email').value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var routeName = 'checkemail';
        var url = window.routes[routeName];

        console.log('Email:', email);
        console.log('Route Name:', routeName);
        console.log('URL:', url);

        // Clear previous error messages
        document.getElementById('emailFormatError').style.display = 'none';
        document.getElementById('emailUniqueError').style.display = 'none';

        if (!emailRegex.test(email)) {
            document.getElementById('emailFormatError').style.display = 'block';
        } else {
            // Perform an AJAX request to check email uniqueness
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    email: email
                },
                success: function (response) {
                    console.log('Response:', response);
                    if (!response.unique) {
                        document.getElementById('emailUniqueError').style.display = 'block';
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    }
</script>
<script>
    // Define window.routes
    window.routes = {
        'checkcompanyemail': '{{ route("checkcompanyemail") }}'  // Adjust the URL accordingly
    };

    function checkCompanyEmailFormat() {
        var companyEmail = document.getElementById('company_email').value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var routeName = 'checkcompanyemail';
        var url = window.routes[routeName];
document.getElementById('buyer_email').value = companyEmail;
        // Clear previous error messages
        document.getElementById('companyEmailFormatError').style.display = 'none';
        document.getElementById('companyEmailUniqueError').style.display = 'none';

        if (!emailRegex.test(companyEmail)) {
            document.getElementById('companyEmailFormatError').style.display = 'block';
        } else {
            // Perform an AJAX request to check company email uniqueness
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    company_email: companyEmail
                },
                success: function (response) {
                    if (!response.unique) {
                        document.getElementById('companyEmailUniqueError').style.display = 'block';
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    }
</script>

</body>
</html>
