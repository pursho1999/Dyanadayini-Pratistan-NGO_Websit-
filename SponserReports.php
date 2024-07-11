
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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>

      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php
$query="SELECT * FROM sponser";
$data=mysqli_query($conn,$query);

if($data)
{
 while($row=mysqli_fetch_assoc($data))
 {
$s_id=$row['s_id'];
$s_name=$row["s_name"];
$s_email=$row["s_email"];
$s_phno=$row['s_phno'];
$s_addr=$row["s_addr"];

echo ' <tr>
<th scope="row">'.$s_id.'</th>
<td>'.$s_name.'</td>
<td>'.$s_email.'</td>
<td>'.$s_phno.'</td>
<td>'.$s_addr.'</td>

<td>
<button class="btn btn-danger"><a href="DelSponserRep.php?deleteid='.$s_id.'"class="text-light">Delete</a></button>
</td>
</tr>';
}

}


?>

  </tbody>
</div>
  </body>
</html>
   


