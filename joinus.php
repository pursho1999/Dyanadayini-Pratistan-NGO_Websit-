<?php   


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$j_name=$_POST['j_name'];
$j_email=$_POST['j_email'];
$j_phno=$_POST['j_phno'];
$j_availability=$_POST['j_availability'];
$j_thoughts=$_POST['j_thoughts'];

$sql = "INSERT INTO join_us(j_name,j_email,j_phno,j_availability,j_thoughts)VALUES ('$j_name','$j_email','$j_phno','$j_availability','$j_thoughts')";


if ($conn->query($sql) === TRUE)
 {
   
   echo '<script type="text/javascript"> alert("Data  Saved") </script>'  ;
   
     header("refresh:0;url=index.html");
 
} else
 {
   
   
    echo '<script type="text/javascript"> alert("Data Not Saved ") </script>';
    header("refresh:0;url=donate.html");

}
$conn->close();
?>