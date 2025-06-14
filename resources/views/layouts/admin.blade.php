<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bots and Drones</title>
      <link rel="icon"   href="/dashboardAssets/img/logo.png">
    <!-- Scripts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link href="{{ asset('dashboardAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboardAssets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboardAssets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <!-- Template Main CSS File -->
  <link href="{{ asset('dashboardAssets/css/style.css')}}" rel="stylesheet">
<style>
    .btn-custom {
        border-radius: 20px;
        background-color: #f8f9fa; /* Button background color */
        padding: 15px;
        margin-bottom: 10px;
        width: 100%;
        text-align: left;
        display: flex;
        align-items: center;
        transition: background-color 0.3s;
    }

    .btn-custom:hover {
        background-color: #e9ecef; /* Button background color on hover */
    }

    .btn-custom i {
        margin-right: 15px; /* Spacing between icon and text */
    }

    .btn-custom h5 {
        margin: 0;
        font-size: 18px;
    }

    .btn-custom p {
        margin: 0;
        font-size: 16px;
    }
    .verified-sticker {
    background-color: #38c172;
    color: white;
    padding: 5px 10px;
    border-radius: 20px;
}
</style>
<style>
#main {
    margin-top: 20px;
    padding: 20px 30px;
    transition: all 0.3s;
}
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
.btn-reseller {
    border: 1px solid #eb6e21;
    padding: 3px 15px;
    width: 100%;
    border-radius: 50px;
    color:#eb6e21;
    font-family: var(--lato);
    font-weight: bold;
}
.btn-reseller:hover {
    background-color: #eb6e21 !important;
    color: white !important;
}
</style>

</head>
<body>
    <div id="app">
        
         @include('layouts.admin.sidebar')
       <main id="main" class="main">
            <div class="d-flex align-items-center justify-content-between">
       
      <i class="bi bi-list toggle-sidebar-btn" style="font-size: 40px;
    color: red;"></i>
    </div><!-- End Logo -->
             @yield('content')
        </main>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="{{ asset('dashboardAssets/js/main.js')}}"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

   
</body>
</html>
