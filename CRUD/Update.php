<?php
include 'connection.php';
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email']; 
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    $update="UPDATE tbl_employee SET name='$name', gender='$gender', email='$email', position='$position', salary='$salary' WHERE id='$id'";
    $execute=mysqli_query($conn,$update);
    if($execute){
        header('location:table-connect.php');
    }else{
        echo "Error".mysqli_error($conn);
    }
}
?>