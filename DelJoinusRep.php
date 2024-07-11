
<?php   

include("connect.php ");
if(isset($_GET['deleteid']))
{
    $j_id=$_GET['deleteid'];

    $query="DELETE FROM join_us WHERE j_id=$j_id";
    $data=mysqli_query($conn,$query);
    if($data)
    {
       echo '<script type="text/javascript"> alert("Deleted Successfully") </script>'  ;
   
       header("refresh:0;url=JoinusReports.php");
    }
    else
     {
        echo "Failed".mysqli_connect_error();
     }
}
?>