<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Confirmation</title>
</head>
<body>
    <h2>New Order Confirmation</h2>
    
    <p>Dear Seller,</p>
    
    <p>You have received a new order for the product: <strong>{{ $product->title }}</strong></p>
    
    <p>Order details:</p>
    <ul>
        <li>Buyer Name: {{ $buyer->name }}</li>
        <li>Buyer Email: {{ $buyer->email }}</li>
        <li>Buyer Mobile Number: {{ $buyer->mobile_no }}</li>
        <li>Delivery Address: {{ $order->delivery_address }}</li>
        <li>Country: {{ $order->country }}</li>
        <li>Quantity: {{ $order->quantity }}</li>
        <li>Company Name: {{ $order->company_name }}</li>
        <li>Usage: {{ $order->usage }}</li>
        <?php 
            $product = \App\Models\Products::where('id',$order->product_id)->first();
        ?>
          @if($product!=null) 
            <li>Product Name: {{ $product->title }}</li>
           <li>Price: £ {{ $product->price }}</li>
       @endif
        @if($order->company_name!=null) 
            <li>Company Name: {{ $order->company_name }}</li>
       @endif
        @if($order->tax_register_no!=null)
            <li>Tax Register No: {{ $order->tax_register_no }}</li>
      @endif
    </ul>

    <p>Please take necessary actions to fulfill the order.</p>
    
    <p>Thank you.</p>
</body>
</html>
