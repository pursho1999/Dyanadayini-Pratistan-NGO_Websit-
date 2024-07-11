
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
      <th scope="col">Availability</th>
      <th scope="col">Thoughts</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php
$query="SELECT * FROM join_us";
$data=mysqli_query($conn,$query);

if($data)
{
 while($row=mysqli_fetch_assoc($data))
 {
$j_id=$row['j_id'];
$j_name=$row["j_name"];
$j_email=$row["j_email"];
$j_phno=$row['j_phno'];
$j_availability=$row["j_availability"];
$j_thoughts=$row["j_thoughts"];

echo ' <tr>
<th scope="row">'.$j_id.'</th>
<td>'.$j_name.'</td>
<td>'.$j_email.'</td>
<td>'.$j_phno.'</td>
<td>'.$j_availability.'</td>
<td>'.$j_thoughts.'</td>

<td>
<button class="btn btn-danger"><a href="DelJoinusRep.php?deleteid='.$j_id.'"class="text-light">Delete</a></button>
</td>
</tr>';
}

}


?>

  </tbody>
</div>
  </body>
</html>
   


