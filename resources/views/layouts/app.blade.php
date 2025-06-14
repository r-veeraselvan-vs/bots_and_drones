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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
<style>
@charset "UTF-8";
:root {
  --nav-content-width: 1000px;
  --nav-height: 90px;
  --nav-link-height: 16px;
  --nav-background: #005;
  --nav-font-color: #FFF;
  --link-hover-color: #28D;
}

.card-header{
        color: #1d2e6f;

}
/* Some text */
article {
  max-width: var(--nav-content-width);
  margin: 0 auto;
  padding: 10px;
  margin-top: 50px;
}
.card-title {
  font-size: 22px;
  
}
.col-form-label {
  font-size: 18px;
}
p{
  font-size: 18px;
}
.btn-primary {
  color: #fff;
  background-color: #ed3c4a;
  border-color: #ed3c4a;
}
.btn-primary:hover {
  color: #fff;
  background-color: #ed3c4a;
  border-color: #ed3c4a;
}
.btn-info {
  color: #fff;
  background-color: #ed3c4a;
  border-color: #ed3c4a;
}
.btn-info:hover {
  color: #fff;
  background-color: #ed3c4a;
  border-color: #ed3c4a;
}
</style>

</head>
<body>
    <div id="app">
    
        <article>
            @yield('content')
        </article>
    </div>
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script type="text/javascript">
  

    $(document).ready(function(){
       
      
         $('#quantity').keypress(function (e) {
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          $("#errmsgMonth").html("Digits Only").show().fadeOut("slow");
          return false;
      }
  });
     
    });
</script>

  
    <script type="text/javascript">
        function agree(element)
        {
            if(element.checked) {
                document.getElementById("submit_button").disabled = false;
               }
               else  {
                document.getElementById("submit_button").disabled = true;
              }
        }

    </script>
 
</html>
