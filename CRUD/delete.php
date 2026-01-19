<?php
include 'connection.php';
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_employee WHERE id='$id'";
    $execute=mysqli_query($conn,$delete);
    if($execute){
        header('location:table-connect.php');
    }else{
        echo "Error".mysqli_error($conn);
    }
}