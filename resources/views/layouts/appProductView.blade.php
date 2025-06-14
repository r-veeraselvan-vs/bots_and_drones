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
     <style>
        @media only screen and (max-width: 600px) {
          .d-sm-none {
            display:none;
          }
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
}
    </style>
    <style type="text/css">
        .card-header{
    border: none;
    background-color: #fff !important;
    color: #1d2e6f !important;
    padding: 15px;
    border-bottom: 1px solid rgba(0,0,0,.125);
} 
    /* Custom style */
    
    .bd-header .navbar-nav  .active .nav-link{
        color: red;
    }
    
    .accordion-item{
        border: none;
         margin-bottom: 10px;
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
         setValueFilter();
         filter();
          });
      </script>
      <script>
    function setValueFilter()
    {
        
       
        @if(Session::has('state'))
         document.getElementById('locations').value = "{{Session::get('state')}}";
        @endif
        
        @if(Session::has('uas_category'))
            const boxes = document.querySelectorAll('input[name="uas_category"]');
             for (const box of boxes) {
                console.log(box.value,"boxes");
                if (box.value == "{{Session::get('uas_category')}}") {
                  box.checked = true
                }
              }
          
        @endif
        @if(Session::has('uin'))
            const uinboxes = document.querySelectorAll('input[name="uin"]');
                for (const uinbox of uinboxes) {
                         if (uinbox.value == "{{Session::get('uin')}}") {
                          uinbox.checked = true
                        }
                }
                  
        @endif
        @if(Session::has('warranty_available'))
        const warranty_available_checkboxes = document.querySelectorAll('input[name="warranty_available_check"]');
            for (const warranty_available_checkbox of warranty_available_checkboxes) {
                     if (warranty_available_checkbox.value == "{{Session::get('warranty_available')}}") {
                      warranty_available_checkbox.checked = true
                    }
            }
              
    @endif
        @if(Session::has('type_certified'))
        const type_certifiedboxes = document.querySelectorAll('input[name="type_certified"]');
            for (const type_certifiedboxes of type_certifiedboxes) {
                     if (type_certifiedbox.value == "{{Session::get('type_certified')}}") {
                      type_certifiedbox.checked = true
                    }
            }
              
    @endif
        
        @if(Session::has('brand'))
        document.getElementById('brand').value = "{{Session::get('brand')}}";
        @endif
        @if(Session::has('application_type'))
            document.getElementById('application_type').value = "{{Session::get('application_type')}}";
        @endif
        @if(Session::has('location'))
            document.getElementById('locations').value = "{{Session::get('location')}}";
        @endif
        @if(Session::has('model'))
            document.getElementById('model').value = "{{Session::get('model')}}";
        @endif
        @if(Session::has('min_price'))
            document.getElementById('min_price').value = "{{Session::get('min_price')}}";
        @endif
        @if(Session::has('max_price'))
            document.getElementById('max_price').value = "{{Session::get('max_price')}}";
        @endif
        @if(Session::has('engine_type'))
           var engine_type =  document.getElementById('engine_type');
           if(engine_type!=null)
           {
           		engine_type.value= "{{Session::get('engine_type')}}";
           }
        @endif
        @if(Session::has('sort'))
            var sort =  document.getElementById('sort');
            if(sort!=null)
            {
                sort.value= "{{Session::get('sort')}}";
            }
        @endif
        
        @if(Session::has('application_used'))
            var application_used =  document.getElementById('application_used');
            if(application_used!=null)
            {
                application_used.value= "{{Session::get('application_used')}}";
            }
        @endif
        
        @if(Session::has('equipment_item_type'))
            var equipmentType =  document.getElementById('equipmentType');
            if(equipmentType!=null)
            {
                equipmentType.value= "{{Session::get('equipment_item_type')}}";
            }
        @endif
        @if(Session::has('usedFor'))
            var usedFor =  document.getElementById('usedFor');
            console.log(usedFor);
            if(usedFor!=null)
            {
                usedFor.value= {{Session::get('usedFor')}};
            }
        @endif
        @if(Session::has('robot_type'))
            var robot_type =  document.getElementById('robotType');
            if(robot_type!=null)
            {
                robot_type.value= "{{Session::get('robot_type')}}";
            }
        @endif
        @if(Session::has('propulsion'))
            var propulsion =  document.getElementById('propulsion');
            if(propulsion!=null)
            {
                propulsion.value= "{{Session::get('propulsion')}}";
            }
        @endif
        @if(Session::has('aircraft_type'))
            var AircraftType =  document.getElementById('AircraftType');
            if(AircraftType!=null)
            {
                AircraftType.value= "{{Session::get('aircraft_type')}}";
            }
        @endif
     
        
 
    }

    function filter()
    {
        var slug = document.getElementById('slug').value;
        var sub_slug = document.getElementById('sub_slug').value;
        var menu = document.getElementById('menu').value;
        var city = document.getElementById('city').value;
  

        var brand = document.getElementById('brand');
        var application_type = document.getElementById('application_type');
        var item_type = document.getElementById('item_type');
        var location = document.getElementById('locations');
        var model = document.getElementById('model').value;
        var uin = document.querySelector('input[name="uin"]:checked') ;  
        var uas_category = document.querySelector('input[name="uas_category"]:checked') ;
        var warranty_available_check = document.querySelector('input[name="warranty_available_check"]:checked') ;

        var type_certified = document.querySelector('input[name="type_certified"]:checked') ;
        var price_range_1 = document.getElementById('min_price');
        var price_range_2 = document.getElementById('max_price');
        var engine_type = document.getElementById('engine_type');
        var resolution = document.getElementById('resolution');
        var sort = document.getElementById('sort');
        var application_used = document.getElementById('application_used');
        var equipmentType = document.getElementById('equipmentType'); 
        var usedFor = document.getElementById('usedFor'); 
        var robotType = document.getElementById('robotType'); 
        var propulsion = document.getElementById('propulsion'); 
        var aircraft_type = document.getElementById('AircraftType'); 
        console.log(location.value,"locations");
        
        if(uin != null) {   
                uin = uin.value;   
        }   
        if(uas_category != null) {   
                uas_category = uas_category.value;   
        } 
        if(warranty_available_check != null) {   
                warranty_available_check = warranty_available_check.value;   
        } 

        if(type_certified != null) {   
                type_certified = type_certified.value;   
        }  

        if(brand != null) {   
              brand = brand.value;


        }  

       
        if(item_type != null) {   
                item_type = item_type.value;   
        }  

        if(location != null) {   
                location = location.value;   
                var category_id = document.getElementById('category_id'); 
                var subcategory_id = document.getElementById('subcategory_id');
                category_id = category_id.value;   
                subcategory_id = subcategory_id.value; 
                $('#city').empty();
                  
                 if(category_id=="1")
                 {
                     if(subcategory_id=="1")
                     {
                         var citiesArr = @json($citiesAjax1);
                     }
                     else
                     {
                         var citiesArr = @json($citiesAjax2);
                     }
                 }
                else if(category_id=="2")
                 {
                     
                         var citiesArr = @json($citiesAjax3);
                   
                 }
                 else if(category_id=="3")
                 {
                     
                         var citiesArr = @json($citiesAjax4);
                   
                 }
               
                    console.log(location,"location");
                     var filteredArray = citiesArr.filter(x => x.state == location);


                 $('#city').append('<option value="">Select City</option>');
                var options = filteredArray.forEach( function(item, index){
                    
                     var sel = '';
                      @if(Session::has('city'))
                        if(city == item.location)
                        {
                        
                             var sel = 'selected';
                        }
                        else if("{{Session::get('city')}}" == item.location){
                            var sel = 'selected';
                        }
                        else
                        {
                            var sel ="";
                        }
                    @else
                        if(city == item.location)
                        {
                        
                             var sel = 'selected';
                        }else
                        {
                            var sel ="";
                        }
                      @endif
            
                    $('#city').append('<option value="'+item.location+'"'+sel+'>'+item.location+'</option>');
                    
        
                });
                
        }  
        
        if(application_type != null) {   
                application_type = application_type.value;   
        }
        if(application_used != null) {   
                application_used = application_used.value;   
        }

        if(engine_type != null) {   
                engine_type = engine_type.value;   
        } 
        if(resolution != null) {   
                resolution = resolution.value;   
        } 
        if(price_range_1 != null) {   
                price_range_1 = price_range_1.value;   
        }  
         if(price_range_2 != null) {   
                price_range_2 = price_range_2.value;   
        }  
        if (price_range_1 != "" && price_range_2 != "") {

            if(Number(price_range_2) <= Number(price_range_1)) {   
                
            document.getElementById('preview_video_video-31').innerHTML="Maximim Price(₹) should not be Lower than than Minimum Price(₹)";
            
            } else{
                document.getElementById('preview_video_video-31').innerHTML=" ";
            }
        }
        
        if(sort != null) {   
                sort = sort.value;   
        } 
      
          if(usedFor != null) {   
                usedFor = usedFor.value;   
        } 
         
         if(robotType != null) {   
                robotType = robotType.value;   
        }
        if(propulsion != null) {   
                propulsion = propulsion.value;   
        } 
        
        if(aircraft_type != null) {   
                aircraft_type = aircraft_type.value;   
        } 
        if(equipmentType != null) {   
                equipmentType = equipmentType.value;   
        } 
        
         var url = '{{ route("products", [":menu", ":slug", ":sub_slug"]) }}';
            url = url.replace(':menu', menu);
            url = url.replace(':slug', slug);
            url = url.replace(':sub_slug', sub_slug);
        $.ajax({
          type : 'get',
          url : url,
          data : {'city':city,'brand':brand,'model':model,'uin':uin,'uas_category':uas_category,'location':location,'item_type':item_type,'application_type':application_type,'engine_type':engine_type,'warranty_available':warranty_available_check,'type_certified':type_certified,'min_price':price_range_1,'max_price':price_range_2,'resolution':resolution,'sort':sort,'application_used':application_used,'usedFor':usedFor,'robot_type':robotType,'propulsion':propulsion,'aircraft_type':aircraft_type,'equipment_item_type':equipmentType},
          success:function(data){
            console.log(data);
           $('#product_filter').empty();
           $('#product_filter').html(data['products']);
           console.log(screen.width,"screen.width");
           if(screen.width>=1280)
           {
                document.querySelector("#product-filter-container").classList.toggle("d-none");
           }
          
         } 
       });
    }

 
      function loadBrandModel(){
        
              $('#model').empty();
              var brand = $('#brand').val();
              var subCatArr = @json($brandModels);
              var filteredArray = subCatArr.filter(x => x.brand == brand);
              console.log(filteredArray,"filter");
               $('#model').append('<option value="">Select Model</option>');
              var options = filteredArray.forEach( function(item, index){
                  $('#model').append('<option value="'+item.model_name+'">'+item.model_name+'</option>');
              });
    }
    function loadManufacturerModel(){
        
              $('#model').empty();
              var manufacturer = $('#manufacturer').val();
              var subCatArr = @json($manufacturerModels);
              var filteredArray = subCatArr.filter(x => x.manufacturer == manufacturer);
              console.log(filteredArray,"filter");
               $('#model').append('<option value="">Select Model</option>');
              var options = filteredArray.forEach( function(item, index){
                  $('#model').append('<option value="'+item.model_name+'">'+item.model_name+'</option>');
                });
       
    }
</script>
 <script>
    function filterShowListener()
    {
        console.log("click");
          document.querySelector("#product-filter-container").classList.toggle("d-none");
    }
        
        // document.querySelectorAll(".filter-head").forEach(function(ele){
           
        //     ele.addEventListener("click",function(crfilter){
        //       console.log(crfilter);
        //       console.log(crfilter.getAttribute("href"));
        //     })
        // });
    </script>
</body>
</html>
