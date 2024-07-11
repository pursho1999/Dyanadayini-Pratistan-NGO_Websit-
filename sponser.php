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
$s_name=$_POST['s_name'];
$s_email=$_POST['s_email'];
$s_phno=$_POST['s_phno'];
$s_addr=$_POST['s_addr'];

$sql = "INSERT INTO sponser(s_name,s_email,s_phno,s_addr)VALUES ('$s_name','$s_email','$s_phno','$s_addr')";


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