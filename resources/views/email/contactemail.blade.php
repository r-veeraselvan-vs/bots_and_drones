<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Confirmation</title>
</head>
<body>
    
<?php 
    $adId=sprintf("%05d", $product->id);
    $seller = \App\Models\User::where('id', $product->user_id)->first();
?>    

    <p><strong>Subject:</strong> Enquiry about {{ $adId }}  - {{ $product->title }} on Bots & Drones</p>
    <p><strong>To:</strong> {{ $seller->company_name }}</p>
    
    <p>Dear Seller,</p>
    
    <p>A buyer is interested in purchasing your product listed on Bots &
Drones. Please find the following details:</p>
    
    <p>Buyer details:</p>
    <ul>
          @if($buyer->seller!='Y')
         <li>Buyer Name: {{ $buyer->name }}</li>
        
          @endif
          <li>Company Name: {{ $buyer->company_name }}</li>
         @if($buyer->seller=='Y')
        <li>Buyer Email: {{ $buyer->company_email }}</li>
        @else
        <li>Buyer Email: {{ $buyer->email }}</li>
        @endif
        @if($buyer->seller=='Y')
        <li>Buyer Mobile Number: {{ $buyer->company_phone }}</li>
        @else
        <li>Buyer Mobile Number: {{ $buyer->mobile_no }}</li>
         @endif
           @if($buyer->city!=null)
        <li>City/Town: {{$buyer->city}}</li>
        @endif
        @if($buyer->country_id)
            <li>Country: {{ $buyer->countries->name }}</li>
        @else
            <li>Country: Not specified</li>
        @endif
    </ul>

    <p>Product Details:</p>
    <ul>
        <?php 
            $product = \App\Models\Products::where('id',$order->product_id)->first();
        ?>
        @if($product!=null) 
            <li>Product ID: {{ $adId }}</li>
           <li>Brand: {{ $product->brand }}</li>
            <li>Model Name: {{ $product->model_name }}</li>
            <?php
               $productUserId = $product['user_id'];
               $user = App\Models\User::find($productUserId);
               $userCountryId = $user ? $user->country_id : null;
               $country = App\Models\Countries::find($userCountryId);
               if ($country && $country->symbol) {
                   $symbol = $country->currency_symbol . ' ' . $country->symbol;
               } else {
                   $symbol = '-';
               }
              ?>
            <li>Price: 
                @if($product->pricing_request=="N")
                   USD ${{$product->usd_price}}<br>
                  @if(!empty($product->price))
                  <span><?php echo $symbol; ?></span>
                      {{$product->price}}
                  @endif
                @else
                    Price on request
                @endif
            </li>
        @endif
        <li>Quantity: {{ $order->quantity }}</li>
        <li>Requirement: {{ $order->requirement }}</li>
    </ul>
    <p>Your swift response will be greatly appreciated, as it will assist the
buyer in making an informed decision about this purchase.</p>
    
    <p>Thank you!</p>
</body>
</html>