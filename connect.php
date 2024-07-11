<?php   


/*$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn)
{
    
}
else
{

    die(mysqli_error($conn));
    
}

$conn=mysqli_connect('localhos t:3308','root','','test');
if(!$conn){
    echo"connection Successful";
}
else{
    die(mysqli_error($conn));
}
*/

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn)
{
    //echo "Successful";
}
else
{
    echo "Failed".mysqli_connect_error();
}
?>