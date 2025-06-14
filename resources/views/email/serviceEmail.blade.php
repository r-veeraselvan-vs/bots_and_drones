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
 <p>You have received an inquiry from the following service provider, please find the details below.</p><br>
   <?php
    $service = \App\Service::where('id',$provider->service_id)->first();
    $serviceProvider = \App\ServiceProvider::where('id',$provider->provider_id)->first();
    ?>
<table id="customers">

  <tr>
    <td>Date</td>
    <td>{{ date('Y-m-d') }}</td>
  </tr>
   <tr>
    <td>Service</td>
    <td> {{ $service['name'] }}</td>
  </tr>
   <tr>
    <td>Name</td>
    <td> {{ $provider['contact_person_name'] }}</td>
  </tr>
   <tr>
    <td> E-Mail</td>
    <td>{{ $provider['email'] }}</td>
  </tr>
  <tr>
    <td>Mobile Number</td>
    <td>{{ $provider['mobile_no'] }}</td>
  </tr>
   <tr>
    <td>Service Provider Name</td>
    <td>{{ $serviceProvider['name'] }}</td>
  </tr>
   <tr>
    <td>City</td>
    <td>{{ $provider['city'] }}</td>
  </tr>
   <tr>
    <td>Country</td>
    <td>{{ $provider['country'] }}</td>
  </tr>
   <tr>
    <td>Company Name</td>
    <td>{{ $provider['company_name'] }}</td>
  </tr>
   <tr>
    <td>Expected Date</td>
    <td>{{ $provider['expected_date'] }}</td>
  </tr>
</table>
 <h1>Have a good day.</h1>
</body>
</html>