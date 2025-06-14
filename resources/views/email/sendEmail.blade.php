<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Hello</h1>
 <p>You have received an inquiry from the following user, please find the details below.</p><br>
  <?php
    $product = \App\Models\Products::where('id',$enquiries->product_id)->first();
    $customer = \App\Models\User::where('id',$enquiries->buyer_id)->first();
    ?>
<table id="customers">

  <tr>
    <td>Date</td>
    <td>{{ date('Y-m-d') }}</td>
  </tr>
   <tr>
    <td>Product</td>
    <td> {{ $product['title'] }}</td>
  </tr>
   <tr>
    <td>Name</td>
    <td> {{ $customer['name'] }}</td>
  </tr>
   <tr>
    <td> E-Mail</td>
    <td>{{ $customer['email'] }}</td>
  </tr>
  <tr>
    <td>Mobile Number</td>
    <td>{{ $customer['mobile_no'] }}</td>
  </tr>
  

</table>
 <h1>Have a good day.</h1>
</body>
</html>