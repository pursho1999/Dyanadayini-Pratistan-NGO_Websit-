
<?php   

include("connect.php ");
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $query="DELETE FROM dnte WHERE id=$id";
    $data=mysqli_query($conn,$query);
    if($data)
    {
       echo '<script type="text/javascript"> alert("Deleted Successfully") </script>'  ;
   
       header("refresh:0;url=DonateReports.php");
    }
    else
     {
        echo "Failed".mysqli_connect_error();
     }
}
?>