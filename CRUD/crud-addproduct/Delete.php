<?php
require 'con-db.php';
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_product WHERE id='$id'";
    $execute=$conn->query($delete);
    if($execute){
        header('location: addproduct.php');
    }