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
 <p>You have received an inquiry from the following trainee, please find the details below.</p><br>
   <?php
    $service = \App\TrainingCourse::where('id',$provider->training_course_id)->first();
    ?>
<table id="customers">

  <tr>
    <td>Date</td>
    <td>{{ date('Y-m-d') }}</td>
  </tr>
   <tr>
    <td>Course</td>
    <td> {{ $service['name'] }}</td>
  </tr>
   <tr>
    <td>Name</td>
    <td> {{ $provider['name'] }}</td>
  </tr>
   <tr>
    <td> E-Mail</td>
    <td>{{ $provider['email'] }}</td>
  </tr>
  <tr>
    <td>Mobile Number</td>
    <td>{{ $provider['mobile_no'] }}</td>
  </tr>
</table>
 <h1>Have a good day.</h1>
</body>
</html>