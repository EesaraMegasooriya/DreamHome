<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $Qusestions_Number=$_GET['deleteid'];

    $sql="delete from `feedback` where Qusestions_Number=$Qusestions_Number";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:qatable.php');
    }else{
        die("Error");
  }

}

?>