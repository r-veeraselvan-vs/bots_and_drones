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
<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
  <link href="{{ asset('dashboardAssets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboardAssets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
     <link href="{{ asset('dashboardAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

      <link href="{{ asset('dashboardAssets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

    <style type="text/css">
        .card-header{
    border: none;
    background-color: #fff !important;
    color: #1d2e6f !important;
    padding: 15px;
    border-bottom: 1px solid rgba(0,0,0,.125);
} 
    /* Custom style */
    .accordion-button::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
      transform: scale(.7) !important;
    }
    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
    }
    .bd-header .navbar-nav  .active .nav-link{
        color: red;
    }
    
    .accordion-item{
        border: none;
         margin-bottom: 10px;
     }
     .accordion-header{
        border: 1px solid lightgrey;
     }
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
    word-wrap: break-word;
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
 .sidebar-nav .nav-link {
    color: black;
    font-weight: 500;
}
.sidebar-nav .nav-link i {
    color: black;
    font-weight: 500;
}
#outer
{
    width:100%;
    text-align: center;
}
.inner
{
    display: inline-block;
}
 @media only screen and (max-width: 600px) {
          .main{
             display: table-row; 
         }
         
    }   input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number]{
    -moz-appearance: textfield;
}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
   <div id="app">
        @include('layouts.sidebar')
       <main id="main" class="main">
           <div class="d-flex align-items-center justify-content-between">
                <a href="{{route('product.list')}}"><i class="bi bi-list toggle-sidebar-btn" style="font-size: 40px;
    color: red;"></i></a>
             </div><!-- End Logo -->
            @yield('content')
        </main>
    </div>
     <!-- custom js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
       <script src="{{ asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
        <script>
         $("input[type=number]").attr({
       "min" : 1          // values (or variables) here
    });
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
         onLoadSubcategory();
        onLoadCity();
        onLoadRobotCity();
        //loadView();
        onLoadConsumerCity();
onLoadCommercialCity();
onLoadAccesoriesCity();
         });
         
      </script>
      <script>
    function add_image(){
        var ikey = parseInt($('#image_table tr:last-child').attr('id')) + 1;
        var display_order = ikey + 1;
        var add_image = '<tr id="'+ikey+'" class="main">'+
                         '<td>'+
                            '<input type="hidden" name="data['+ikey+'][product_image_id]" value="0">'+
                             '<div class="input-group">'+
                                     '<input type="file" onChange="display_image_image(this, '+ikey+')" name="data['+ikey+'][image]" class="form-control" >'+
                                     '<input type="hidden" name="data['+ikey+'][product_id]" value="{{ $product->id }}">'+
                              '</div>'+
                        '</td>'+
                        '<td>'+
                            '<img src="/images/no_image.png" alt="" width="40px" height="40px" id="preview_image_image'+ikey+'">'+
                        '</td>'+
                       
                        '<td>'+
                            '<input class="form-control" type="number" name="data['+ikey+'][display_order]" value="'+display_order+'" >'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_image('+ikey+');" id="delete_image_'+ikey+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#image_table').append(add_image);
    }
    function remove_image(key){
        $('#delete_image_'+key).closest('tr').remove();
    }


    function add_specification(){
        var ikey1 = parseInt($('#specification_table tr:last-child').attr('id')) + 1;
         var add_specification = '<tr id="'+ikey1+'" class="main">'+
                                     '<input type="hidden" name="spec['+ikey1+'][product_spec_id]" value="0">'+
                                     '<input type="hidden" name="spec['+ikey1+'][product_id]" value="{{ $product->id }}">'+

                        '<td>'+
                            '<input type="text" class="form-control" name="spec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                            
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="spec['+ikey1+'][tech_value]"  placeholder="Enter Value">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_specification('+ikey1+');" id="delete_specification_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#specification_table').append(add_specification);
    }
    function remove_specification(key1){
        $('#delete_specification_'+key1).closest('tr').remove();
    }

</script>

<script>
    function triggerClickPromoImage(e) {
        document.querySelector('#image').click();
    }
    function display_image_image(e, id) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
            document.querySelector('#preview_image_image'+id).setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }

     function loadSubcategory(){
        $('#subcategory_id').empty();
        var category_id = $('#category_id').val();
        console.log(category_id,"category_id");
        var subCatArr = @json($subcategories);
        var filteredArray = subCatArr.filter(x => x.category_id == category_id);
        console.log('subcategory', filteredArray);
        $('#subcategory_id').append('<option value="">Select SubCategory</option>');
        var options = filteredArray.forEach( function(item, index){
            $('#subcategory_id').append('<option value="'+item.id+'">'+item.name+'</option>');
        });
    }

    function onLoadSubcategory(){
        $('#subcategory_id').empty();
        var category_id = $('#category_id').val();
        console.log(category_id,"category_id");
        var subCatArr = @json($subcategories);
        var filteredArray = subCatArr.filter(x => x.category_id == category_id);
        $('#subcategory_id').append('<option value="">Select SubCategory</option>');
        var options = filteredArray.forEach( function(item, index){
            var sel = '';
            if("{{$product->subcategory_id}}" == item.id){
                var sel = 'selected';
            }
            $('#subcategory_id').append('<option value="'+item.id+'"'+sel+'>'+item.name+'</option>');
        });
    }
    
      function getCity(){
        $('#location').empty();
        var location = $('#state').val();
        console.log(location,"location");
        var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
         $('#location').append('<option value="">Select City</option>');
        var options = filteredArray.forEach( function(item, index){
            $('#location').append('<option value="'+item.id+'">'+item.name+'</option>');
        });
    }
    
     function onLoadCity(){
        $('#location').empty();
        var location = $('#state').val();
        console.log(location,"location");
         var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
         $('#location').append('<option value="">Select City</option>');
         if (filteredArray != "") {
        var options = filteredArray.forEach( function(item, index){
            var sel = '';
            if("{{$product->location}}" == item.name){
                var sel = 'selected';
            }
            console.log(sel,"sel");
            $('#location').append('<option value="'+item.name+'"'+sel+'>'+item.name+'</option>');
        });
    }else{
        $('#location').append('<option value="Other" selected>Other</option>');
    }
}
    function onLoadRobotCity(){
        $('#robots_location').empty();
        var location = $('#robots_state').val();
          var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
         $('#robots_location').append('<option value="">Select City</option>');
         if (filteredArray != "") {
        var options = filteredArray.forEach( function(item, index){
            var sel = '';
            if("{{$product->location}}" == item.name){
                var sel = 'selected';
            }
             $('#robots_location').append('<option value="'+item.name+'"'+sel+'>'+item.name+'</option>');
        });
        $('#robots_location').append('<option value="Other">Other</option>');
    }else{
        $('#robots_location').append('<option value="Other" selected>Other</option>');
    }
}
     function onLoadAccesoriesCity(){
        $('#accessories_location').empty();
        var location = $('#accessories_state').val();
          var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
         $('#accessories_location').append('<option value="">Select City</option>');
         if (filteredArray != "") {
        var options = filteredArray.forEach( function(item, index){
            var sel = '';
            if("{{$product->location}}" == item.name){
                var sel = 'selected';
            }
             $('#accessories_location').append('<option value="'+item.name+'"'+sel+'>'+item.name+'</option>');
        });
        $('#accessories_location').append('<option value="Other">Other</option>');
    }else{
        $('#accessories_location').append('<option value="Other selected">Other</option>');
    }
}
     function onLoadCommercialCity(){
        $('#commercial_location_edit').empty();
        var location = $('#commercial_state').val();
         var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
          $('#commercial_location_edit').append('<option value="">Select City</option>');
         if (filteredArray != "") {
        var options = filteredArray.forEach( function(item, index){
            var sel = '';
            if("{{$product->location}}" == item.name){
                var sel = 'selected';
            }
             $('#commercial_location_edit').append('<option value="'+item.name+'"'+sel+'>'+item.name+'</option>');
        });
         $('#commercial_location_edit').append('<option value="Other">Other</option>');
    }else{
        $('#commercial_location_edit').append('<option value="Other" selected>Other</option>');
    }
}
    function onLoadConsumerCity(){
        $('#consumer_location').empty();
        var location = $('#consumer_state').val();
          var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
         $('#consumer_location').append('<option value="">Select City</option>');
          if (filteredArray != "") {
        var options = filteredArray.forEach( function(item, index){
            var sel = '';
            console.log('{{$product->location}}');
            if("{{$product->location}}" == item.name){
                var sel = 'selected';
            }
             $('#consumer_location').append('<option value="'+item.name+'"'+sel+'>'+item.name+'</option>');
        });
        $('#consumer_location').append('<option value="Other">Other</option>');
    }
else{
    $('#consumer_location').append('<option value="Other" selected>Other</option>');
}
}
</script>
 <script>
    function add_image(){
        var ikey = parseInt($('#image_table tr:last-child').attr('id')) + 1;
        var display_order = ikey + 2;
        var add_image = '<tr id="'+ikey+'" class="main">'+
                        '<td>'+
                            '<input type="hidden" name="data['+ikey+'][id]" value="0">'+
                             '<div class="input-group">'+
                                     '<input type="file" onChange="display_image_image(this, '+ikey+')" name="data['+ikey+'][image]" class="form-control" accept="image/*" >'+
                                     
                              '</div>'+
                               '<span class="text-danger">Upload images only . upload less than 500KB images</span>'+
                        '</td>'+
                        '<td>'+
                            '<img src="/images/no_image.png" alt="" width="40px" height="40px"  id="preview_image_image'+ikey+'">'+
                        '</td>'+
                       
                        '<td>'+
                            '<input class="form-control" type="number" name="data['+ikey+'][display_order]" value="'+display_order+'">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_image('+ikey+');" id="delete_image_'+ikey+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#image_table').append(add_image);
    }
    function remove_image(key){
        $('#delete_image_'+key).closest('tr').remove();
    }


    function add_specification(){
        var ikey1 = parseInt($('#specification_table tr:last-child').attr('id')) + 1;
         var add_specification = '<tr id="'+ikey1+'"  class="main">'+
                        '<td>'+
                            '<input type="text" class="form-control" name="spec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                            
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="spec['+ikey1+'][tech_value]"  placeholder="Enter Value">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_specification('+ikey1+');" id="delete_specification_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#specification_table').append(add_specification);
    }
    function remove_specification(key1){
        $('#delete_specification_'+key1).closest('tr').remove();
    }


    function add_package(){
        var ikey1 = parseInt($('#package_table tr:last-child').attr('id')) + 1;
         var add_package = '<tr id="'+ikey1+'">'+
                        '<td>'+
                            '<input type="text" class="form-control" name="pack['+ikey1+'][pack_parameter]" >'+
                            
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="pack['+ikey1+'][pack_value]">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_package('+ikey1+');" id="delete_package_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#package_table').append(add_package);
    }
    function remove_package(key1){
        $('#delete_package_'+key1).closest('tr').remove();
    }
</script>

<script>
    function triggerClickPromoImage(e) {
        document.querySelector('#image').click();
    }
    function display_image_image(e, id) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
            document.querySelector('#preview_image_image'+id).setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }

     function loadSubcategory(){
        $('#subcategory_id').empty();
        var category_id = $('#category_id').val();
        console.log(category_id,"category_id");
        var subCatArr = @json($subcategories);
        var filteredArray = subCatArr.filter(x => x.category_id == category_id);
        console.log('subcategory', filteredArray);
        $('#subcategory_id').append('<option value="">Select Sub Category</option>');
        var options = filteredArray.forEach( function(item, index){
            $('#subcategory_id').append('<option value="'+item.id+'">'+item.name+'</option>');
        });
        if(category_id=="")
        {
             document.getElementById('consumer').style.display="none";
            document.getElementById('commercial').style.display="none";
            document.getElementById('robots').style.display="none";
            document.getElementById('accessories').style.display="none";
            document.getElementById('submit-form').style.display="none";
        }
    
    }

     function loadView(){
        var subcategory_id = $('#subcategory_id').val();
        var category_id = $('#category_id').val();
        if(category_id==1 && subcategory_id==1)
        {
             document.getElementById('commercial_form').style.display="none";
            document.getElementById('consumer').style.display="block";
             //document.getElementById('robots').style.display="none";
          
            $('table#specification_consumer_table').find('input').prop("required", false);
            
        }
        else if(category_id==1 && subcategory_id==2)
        {
            console.log("commercial");
            document.getElementById('consumer').style.display="none";
            document.getElementById('commercial_form').style.display="block";
            document.getElementById('robots').style.display="none";
           
            document.getElementById("form-submission").action = "{{ route('product.update.commercial') }}";
            

        }
         else if(category_id==2)
        {
            document.getElementById('accessories').style.display="block";
            document.getElementById('consumer').style.display="none";
            document.getElementById('commercial_form').style.display="none";
            document.getElementById('robots').style.display="none";
           
            document.getElementById("form-submission").action = "{{ route('product.update.accessories') }}";

        }
         else if(category_id==3)
        {
            document.getElementById('consumer').style.display="none";
            document.getElementById('commercial_form').style.display="none";
            document.getElementById('robots').style.display="block";
             $('table#specification_robots_table').find('input').prop("required", false);
            document.getElementById("form-submission").action = "{{ route('product.update.robots') }}";
        }
        else
        {
            document.getElementById('consumer').style.display="none";
            document.getElementById('commercial_form').style.display="none";
            document.getElementById('robots').style.display="none";
            document.getElementById('accessories').style.display="none";
            document.getElementById('submit-form').style.display="none";
            
             document.getElementById("form-submission").action = "{{ route('product.update') }}";
        }
       
       
    }
    
    
     function getCity(){
        $('#location').empty();
        var location = $('#state').val();
         var subCatArr = @json($cities);
        var filteredArray = subCatArr.filter(x => x.state_id == location);
         $('#location').append('<option value="">Select City</option>');
        var options = filteredArray.forEach( function(item, index){
            $('#location').append('<option value="'+item.name+'">'+item.name+'</option>');
        });
        $('#location').append('<option value="Other">Other</option>');
    }
 function getCommercialCity(){
             $('#commercial_location_edit').empty();
            var location = $('#commercial_state').val();
            console.log(location);
             var subCatArr = @json($cities);
            var filteredArray = subCatArr.filter(x => x.state_id == location);
             $('#commercial_location_edit').append('<option value="">Select City</option>');
            var options = filteredArray.forEach( function(item, index){
                $('#commercial_location_edit').append('<option value="'+item.name+'">'+item.name+'</option>');
            });
            $('#commercial_location_edit').append('<option value="Other">Other</option>');
        }
        function getAccessoriesCity(){
            $('#accessories_location').empty();
            var location = $('#accessories_state').val();
             var subCatArr = @json($cities);
            var filteredArray = subCatArr.filter(x => x.state_id == location);
             $('#accessories_location').append('<option value="">Select City</option>');
            var options = filteredArray.forEach( function(item, index){
                $('#accessories_location').append('<option value="'+item.name+'">'+item.name+'</option>');
            });
             $('#accessories_location').append('<option value="Other">Other</option>');
        }

        function getConsumerCity(){
            $('#consumer_location').empty();
            var location = $('#consumer_state').val();
             var subCatArr = @json($cities);
            var filteredArray = subCatArr.filter(x => x.state_id == location);
             $('#consumer_location').append('<option value="">Select City</option>');
            var options = filteredArray.forEach( function(item, index){
                $('#consumer_location').append('<option value="'+item.name+'">'+item.name+'</option>');
            });
             $('#consumer_location').append('<option value="Other">Other</option>');
        }

        function getRobotsCity(){
            $('#robots_location').empty();
            var location = $('#robots_state').val();
             var subCatArr = @json($cities);
            var filteredArray = subCatArr.filter(x => x.state_id == location);
             $('#robots_location').append('<option value="">Select City</option>');
            var options = filteredArray.forEach( function(item, index){
                $('#robots_location').append('<option value="'+item.name+'">'+item.name+'</option>');
            });
             $('#robots_location').append('<option value="Other">Other</option>');
        }
</script>
 <script>
    function add_commercial_image(){
         var ikey = $("#image_commercial_table tr").length;
         if (ikey<=5) {
              var display_order = ikey;
        var add_commercial_image = '<tr id="'+ikey+'" class="main">'+
                        '<td>'+
                        '<input type="hidden" name="Commercialdata['+ikey+'][product_image_id]" value="0">'+
                            '<input type="hidden" name="Commercialdata['+ikey+'][id]" value="0">'+
                            '<input type="hidden" name="Commercialdata['+ikey+'][product_id]" value="{{ $product->id }}">'+
                             '<div class="input-group">'+
                                     '<input type="file" onChange="display_image_image(this, '+ikey+')" name="Commercialdata['+ikey+'][image]" class="form-control" accept="image/*" >'+
                                     
                              '</div>'+
                               '<span class="text-danger">Upload images only . upload less than 500KB images</span>'+
                        '</td>'+
                        '<td>'+
                            '<img src="/images/no_image.png" alt="" width="40px" height="40px"  id="preview_image_image'+ikey+'">'+
                        '</td>'+
                       
                        '<td>'+
                            '<input class="form-control" type="number" name="Commercialdata['+ikey+'][display_order]" value="'+display_order+'">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_commercial_image('+ikey+');" id="delete_commercial_image_'+ikey+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#image_commercial_table').append(add_commercial_image);
     $('#update_button').prop('disabled', false);
 }else{
    alert("You have reached the maximum limit of 5 images per product. Subscribe to add more images.");
 }
      

    }
    function remove_commercial_image(key){
         $('#delete_commercial_image_'+key).closest('tr').remove();
         var ikey = $("#image_commercial_table tr").length;
        if(ikey<=0)
        {
             $('#update_button').prop('disabled', true);
        }
       
      }
    

    function add_commercial_specification(){
        var ikey1 = parseInt($('#specification_commercial_table tr:last-child').attr('id')) + 1;
         var add_commercial_specification = '<tr id="'+ikey1+'"  class="main">'+
         '<input type="hidden" name="Commercialspec['+ikey1+'][product_spec_id]" value="0">'+'<input type="hidden" name="Commercialspec['+ikey1+'][product_id]" value="{{ $product->id }}">'+
                        '<td>'+
                            '<input type="text" class="form-control" name="Commercialspec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                            
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="Commercialspec['+ikey1+'][tech_value]"  placeholder="Enter Value">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_commercial_specification('+ikey1+');" id="delete_commercial_specification_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#specification_commercial_table').append(add_commercial_specification);
    }
    function remove_commercial_specification(key1){
        $('#delete_commercial_specification_'+key1).closest('tr').remove();
    }


   
    function remove_commercial_package(key1){
        $('#delete_commercial_package_'+key1).closest('tr').remove();
    }
</script>
 <script>
    function add_consumer_image(){
  
        var ikey = $("#image_consumer_table tr").length;
        if (ikey<=5) {
                var display_order = ikey;
        var add_consumer_image = '<tr id="'+ikey+'" class="main">'+
                        '<td>'+
                         '<input type="hidden" name="data['+ikey+'][product_image_id]" value="0">'+
                         '<input type="hidden" name="data['+ikey+'][product_id]" value="{{ $product->id }}">'+
                            '<input type="hidden" name="data['+ikey+'][id]" value="0">'+
                             '<div class="input-group">'+
                                     '<input type="file" onChange="display_image_image(this, '+ikey+')" name="data['+ikey+'][image]" class="form-control" accept="image/*" >'+
                                     
                              '</div>'+
                               '<span class="text-danger">Upload images only . upload less than 500KB images</span>'+
                        '</td>'+
                        '<td>'+
                            '<img src="/images/no_image.png" alt="" width="40px" height="40px"  id="preview_image_image'+ikey+'">'+
                        '</td>'+
                       
                        '<td>'+
                            '<input class="form-control" type="number" name="data['+ikey+'][display_order]" value="'+display_order+'">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_consumer_image('+ikey+');" id="delete_consumer_image_'+ikey+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#image_consumer_table').append(add_consumer_image);
                    $('#update_button').prop('disabled', false);

                }else{
                    alert("You have reached the maximum limit of 5 images per product. Subscribe to add more images.");
                }
     
    }
    function remove_consumer_image(key){
         $('#delete_consumer_image_'+key).closest('tr').remove();
         var ikey = $("#image_consumer_table tr").length;
        if(ikey<=0)
        {
             $('#update_button').prop('disabled', true);
        }
       
      }


    function add_consumer_specification(){
        var ikey1 = parseInt($('#specification_consumer_table tr:last-child').attr('id')) + 1;
         var add_consumer_specification = '<tr id="'+ikey1+'"  class="main">'+
                        '<input type="hidden" name="spec['+ikey1+'][product_spec_id]" value="0">'+
                        '<input type="hidden" name="spec['+ikey1+'][product_id]" value="{{ $product->id }}">'+
                        '<td>'+
                            '<input type="text" class="form-control" name="spec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                            
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="spec['+ikey1+'][tech_value]"  placeholder="Enter Value">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_consumer_specification('+ikey1+');" id="delete_consumer_specification_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#specification_consumer_table').append(add_consumer_specification);
    }
    function remove_consumer_specification(key1){
        $('#delete_consumer_specification_'+key1).closest('tr').remove();
    }
 
</script>
<script>
    function add_accessories_image(){
      
         var ikey = $("#image_accessories_table tr").length;
         if (ikey<=5) {
               var display_order = ikey;
        var add_accessories_image = '<tr id="'+ikey+'" class="main">'+
                        '<td>'+
                         '<input type="hidden" name="Accessoriesdata['+ikey+'][product_image_id]" value="0">'+
                            '<input type="hidden" name="Accessoriesdata['+ikey+'][id]" value="0">'+
                            '<input type="hidden" name="Accessoriesdata['+ikey+'][product_id]" value="{{ $product->id }}">'+
                             '<div class="input-group">'+
                                     '<input type="file" onChange="display_image_image(this, '+ikey+')" name="Accessoriesdata['+ikey+'][image]" class="form-control" accept="image/*" >'+
                                     
                              '</div>'+
                               '<span class="text-danger">Upload images only . upload less than 500KB images</span>'+
                        '</td>'+
                        '<td>'+
                            '<img src="/images/no_image.png" alt="" width="40px" height="40px"  id="preview_image_image'+ikey+'">'+
                        '</td>'+
                       
                        '<td>'+
                            '<input class="form-control" type="number" name="Accessoriesdata['+ikey+'][display_order]" value="'+display_order+'">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_accessories_image('+ikey+');" id="delete_accessories_image_'+ikey+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#image_accessories_table').append(add_accessories_image);
                    $('#update_button').prop('disabled', false);
                }else{
                    alert("You have reached the maximum limit of 5 images per product. Subscribe to add more images.");
                }
     

    }
    function remove_accessories_image(key){
         $('#delete_accessories_image_'+key).closest('tr').remove();
         var ikey = $("#image_accessories_table tr").length;
        if(ikey<=0)
        {
             $('#update_button').prop('disabled', true);
        }
       
      }
   
     


    function add_accessories_specification(){
        var ikey1 = parseInt($('#specification_accessories_table tr:last-child').attr('id')) + 1;
         var add_accessories_specification = '<tr id="'+ikey1+'"  class="main">'+
                        '<td>'+
                        '<input type="hidden" name="Accessoriesspec['+ikey1+'][product_spec_id]" value="0">'+
                            '<input type="text" class="form-control" name="Accessoriesspec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                            '<input type="hidden" name="Accessoriesspec['+ikey1+'][product_id]" value="{{ $product->id }}" placeholder="Enter Parameter">'+
                            
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="Accessoriesspec['+ikey1+'][tech_value]"  placeholder="Enter Value">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_accessories_specification('+ikey1+');" id="delete_accessories_specification_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#specification_accessories_table').append(add_accessories_specification);
    }
    function remove_accessories_specification(key1){
        $('#delete_accessories_specification_'+key1).closest('tr').remove();
    }
 
</script>
<script>
    function add_robots_image(){
      
        
         var ikey = $("#image_robots_table tr").length;
         if (ikey<=5) {
              var display_order = ikey;
        
        var add_robots_image = '<tr id="'+ikey+'" class="main">'+
                        '<td>'+
                         '<input type="hidden" name="Robotsdata['+ikey+'][product_image_id]" value="0">'+
                            '<input type="hidden" name="Robotsdata['+ikey+'][id]" value="0">'+
                            '<input type="hidden" name="Robotsdata['+ikey+'][product_id]" value="{{ $product->id }}">'+
                             '<div class="input-group">'+
                                     '<input type="file" onChange="display_image_image(this, '+ikey+')" name="Robotsdata['+ikey+'][image]" class="form-control" accept="image/*" >'+
                                     
                              '</div>'+
                               '<span class="text-danger">Upload images only . upload less than 500KB images</span>'+
                        '</td>'+
                        '<td>'+
                            '<img src="/images/no_image.png" alt="" width="40px" height="40px"  id="preview_image_image'+ikey+'">'+
                        '</td>'+
                       
                        '<td>'+
                            '<input class="form-control" type="number" name="Robotsdata['+ikey+'][display_order]" value="'+display_order+'">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_robots_image('+ikey+');" id="delete_robots_image_'+ikey+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#image_robots_table').append(add_robots_image);
                $('#update_button').prop('disabled', false);

            }else{
                alert("You have reached the maximum limit of 5 images per product. Subscribe to add more images.");
            }
      
    }
    function remove_robots_image(key){
         $('#delete_robots_image_'+key).closest('tr').remove();
         var ikey = $("#image_robots_table tr").length;
        if(ikey<=0)
        {
             $('#update_button').prop('disabled', true);
        }
       
      }

    
    function add_robots_specification(){
        var ikey1 = parseInt($('#specification_robots_table tr:last-child').attr('id')) + 1;
         var add_robots_specification = '<tr id="'+ikey1+'"  class="main">'+
                        +
                        '<td id="'+ikey1+'" class="main">'+
                                     '<input type="hidden" name="Robotsspec['+ikey1+'][product_spec_id]" value="0">'+
                                      '<input type="hidden" name="Robotsspec['+ikey1+'][product_id]" value="{{ $product->id }}">'+
                            '<input type="text" class="form-control" name="Robotsspec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                            
                        '</td>'+
                          '<td>'+
                            '<input class="form-control" type="text" name="Robotsspec['+ikey1+'][tech_parameter]"  placeholder="Enter Parameter">'+
                        '</td>'+
                        '<td>'+
                            '<input class="form-control" type="text" name="Robotsspec['+ikey1+'][tech_value]"   placeholder="Enter Value">'+
                        '</td>'+
                        
                        '<td>'+
                            '&nbsp; <a onclick="remove_robots_specification('+ikey1+');" id="delete_robots_specification_'+ikey1+'"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>'+
                        '</td>'+
                    '</tr>';
                    $('#specification_robots_table').append(add_robots_specification);
    }
    function remove_robots_specification(key1){
        $('#delete_robots_specification_'+key1).closest('tr').remove();
    }
 
</script>
<script>
     function consumerOtherlocation(consumerlocation)
 {
    if(consumerlocation=="Other")
    {
        document.getElementById('consumer_other_location').style.display="block";
    }
    else
    {
        document.getElementById('consumer_other_location').style.display="none";
    }
 }
 function commercialOtherlocation(commerciallocation)
 {
    if(commerciallocation=="Other")
    {
        document.getElementById('commercial_other_location').style.display="block";
    }
    else
    {
        document.getElementById('commercial_other_location').style.display="none";
    }
 }
 function accessoriesOtherlocation(accessorieslocation)
 {
    if(accessorieslocation=="Other")
    {
        document.getElementById('accessories_other_location').style.display="block";
    }
    else
    {
        document.getElementById('accessories_other_location').style.display="none";
    }
 }
 function robotsOtherlocation(robotslocation)
 {
    if(robotslocation=="Other")
    {
        document.getElementById('robots_other_location').style.display="block";
    }
    else
    {
        document.getElementById('robots_other_location').style.display="none";
    }
 }
 function consumerOtherbrand(consumerbrand)
 {
    if(consumerbrand=="Other")
    {
        document.getElementById('consumer_other_brand').style.display="block";
    }
    else
    {
        var id = $('#consumer_brand').val();
      var subArrayBrand =  @json($brands);
      var filteredArrayBrand = subArrayBrand.filter(x => x.name == id);
     console.log(filteredArrayBrand,"filteredArrayBrand");
      
      
      $('#consumer_model_name').empty();
      var id = $('#consumer_brand').val();
      var subArray =  @json($models);
      var filteredArray = subArray.filter(x => x.brand_id == filteredArrayBrand[0]['id']);
        $('#consumer_model_name').append('<option value="">Select Model</option>')
    
      var options = filteredArray.forEach( function(item, index){
        $('#consumer_model_name').append('<option value="'+item.name+'">'+item.name+'</option>');
      });
       $('#consumer_model_name').append('<option value="Other">Other</option>')
        document.getElementById('consumer_other_brand').style.display="none";
    }
 }


 function commercialOtherbrand(commercialbrand)
 {
    if(commercialbrand=="Other")
    {
        document.getElementById('commercial_other_brand').style.display="block";
    }
    else
    {
        
       var id = $('#commercial_brand').val();
      var subArrayBrand =  @json($commericalbrands);
      var filteredArrayBrand = subArrayBrand.filter(x => x.name == id);
     console.log(filteredArrayBrand,"filteredArrayBrand");
      
      
      $('#commercial_model_name').empty();
      var id = $('#commercial_brand').val();
      var subArray =  @json($commercicalmodels);
      var filteredArray = subArray.filter(x => x.brand_id == filteredArrayBrand[0]['id']);
        $('#commercial_model_name').append('<option value="">Select Model</option>')
    
      var options = filteredArray.forEach( function(item, index){
        $('#commercial_model_name').append('<option value="'+item.name+'">'+item.name+'</option>');
      });
       $('#commercial_model_name').append('<option value="Other">Other</option>')
        document.getElementById('commercial_other_brand').style.display="none";
    }
 }
 
  function commercialOtherModel(commercialmodel)
 {
    if(commercialmodel=="Other")
    {
        document.getElementById('commercial_other_model_name').style.display="block";
    }
    else
    {
        document.getElementById('commercial_other_model_name').style.display="none";
    }
 }


 function consumerOtherModel(consumermodel)
 {
    if(consumermodel=="Other")
    {
        document.getElementById('consumer_other_model_name').style.display="block";
    }
    else
    {
        document.getElementById('consumer_other_model_name').style.display="none";
    }
 }


 function accessoryOtherInnerSubCategory(InnerSubCategory)
 {
    if(InnerSubCategory=="Other")
    {
        document.getElementById('inner_subcategory_other').style.display="block";
    }
    else
    {
        document.getElementById('inner_subcategory_other').style.display="none";
    }
 }
 function RobotsOther(InnerSubCategory)
 {
    if(InnerSubCategory=="Other")
    {
        document.getElementById('robot_type_other').style.display="block";
    }
    else
    {
        document.getElementById('robot_type_other').style.display="none";
    }
 }
</script>
<script type="text/javascript">

    function imageDelete(value,category)
    {
        var url = '{{ route("product.image.delete") }}';
        $.ajax({
          type : 'get',
          url : url,
          data : {'id':value,'category':category},
          success:function(data){
                console.log(data);
                $('#image_'+category+'_table').empty();
                $('#image_'+category+'_table').html(data['product']);
            } 
       });
    }
    </script>
    <script type="text/javascript">

    function specificationDelete(value,category)
    {
        var url = '{{ route("product.specification.delete") }}';
        $.ajax({
          type : 'get',
          url : url,
          data : {'id':value,'category':category},
          success:function(data){
                console.log(data);
                $('#specification_'+category+'_table').empty();
                $('#specification_'+category+'_table').html(data['product']);
            } 
       });
    }
    </script>
</body>
</html>
