<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bots and Drones</title>
      <link rel="icon"   href="/assets/img/logo.png">
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
<style>
    .sidebar-nav .nav-link {
        color: black;
        font-weight: 500;
    }
    .sidebar-nav .nav-link  i {
        color: black;
        font-weight: 500;
    }
    
    .sidebar-nav  .active a {
color: #4154f1;
}
.sidebar-nav  .active i {
color: #4154f1;
}

.badge-primary {
  color: #fff;
  background-color: #1d2e6f;
  border-color: #1d2e6f;
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
.card-text{
    color: #1d2e6f;
}

.badge-info {
  color: #fff;
  background-color: #ed3c4a;
  border-color: #ed3c4a;
}
.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 100%;
  border: 1px solid #ced4da;
border-radius: .25rem;
height: 40px;
}

.bootstrap-select > .dropdown-toggle {
  position: relative;
  width: 100%;
  z-index: 1;
  text-align: right;
  white-space: nowrap;
  height: 38px;
}

.btn-danger {
  color: #fff;
  background-color: #1d2e6f;
  border-color: #1d2e6f;
}
.btn-danger:hover {
  color: #fff;
  background-color: #1d2e6f;
  border-color: #1d2e6f;
}
</style>

</head>
<body>
    <div id="app">
        @include('layouts.sidebar')
       <main id="main" class="main">
            @yield('content')
        </main>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="{{ asset('assets/js/main.js')}}"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

   
</body>
</html>
