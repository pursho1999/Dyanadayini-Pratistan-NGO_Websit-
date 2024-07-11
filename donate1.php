
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

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $donationtype=$_POST['donationtype'];
        $email=$_POST['email'];
        $phno=$_POST['phno'];
        $addr=$_POST['addr'];
        $postalcode=$_POST['postalcode'];

$sql = "INSERT INTO dnte(firstname,lastname,donationtype,email,phno,addr,postalcode)VALUES ('$firstname','$lastname','$donationtype','$email','$phno','$addr','$postalcode')";


if ($conn->query($sql) === TRUE)
 {
   
  // echo '<script type="text/javascript"> alert("Data  Saved") </script>'  ;
   
     header("refresh:0;url=index.html");
 
} else
 {
   
   
    echo '<script type="text/javascript"> alert("Data Not Saved ") </script>';
    header("refresh:0;url=donate.html");

}
$conn->close();


?>
