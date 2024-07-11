
<?php   

include("connect.php ");
if(isset($_GET['deleteid']))
{
    $s_id=$_GET['deleteid'];

    $query="DELETE FROM sponser WHERE s_id=$s_id";
    $data=mysqli_query($conn,$query);
    if($data)
    {
       echo '<script type="text/javascript"> alert("Deleted Successfully") </script>'  ;
   
       header("refresh:0;url=SponserReports.php");
    }
    else
     {
        echo "Failed".mysqli_connect_error();
     }
}
?>