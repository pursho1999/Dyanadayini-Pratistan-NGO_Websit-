
<?php   

include("connect.php ");

    

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
   

    <title>Donate Report</title>
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  </head>
  <body>
<!-- button -->
<div class="container-fluid">
  <button class="btn btn-primary my-5"> <a href="index.html" class="text-light">Logout</a> 


  </button>
  <!-- Tables -->
<table class="table table-sm">
<table class="table table-hover">


  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Donation Type</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Postal Code</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php
$query="SELECT * FROM dnte";
$data=mysqli_query($conn,$query);

if($data)
{
 while($row=mysqli_fetch_assoc($data))
 {
$id=$row['id'];
$firstname=$row["firstname"];
$lastname=$row["lastname"];
$donationtype=$row['donationtype'];
$email=$row['email'];
$phno=$row['phno'];        
$addr=$row['addr'];        
$postalcode=$row['postalcode'];
echo ' <tr>
<th scope="row">'.$id.'</th>
<td>'.$firstname.'</td>
<td>'.$lastname.'</td>
<td>'.$donationtype.'</td>
<td>'.$email.'</td>
<td>'.$phno.'</td>
<td>'.$addr.'</td>
<td>'.$postalcode.'</td>
<td>
<button class="btn btn-danger"><a href="DelDonateRep?deleteid='.$id.'"class="text-light">Delete</a></button>
</td>
</tr>';
}

}


?>

  </tbody>
</div>
  </body>
</html>
   


