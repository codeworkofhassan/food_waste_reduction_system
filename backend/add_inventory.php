<?php
include("../config/connection.php");
include("../core/functions.php");
include("../includes/header.php");
session_start();
if (isset($_POST['add_inventory'])){
    $sku=$_POST['sku'];
    $user_id=$_SESSION['user_id'];
    $item_name=$_POST['item_name'];
    $quantity=$_POST['quantity'];
    $expiry_date=$_POST['expiry_date'];
    $storage_location=$_POST['storage_location'];
    $query="INSERT into fooditem VALUE ('','$sku','$user_id','$item_name', '$quantity','$expiry_date','$storage_location')";
    $add_inventory=mysqli_query($connect,$query);
    if ($add_inventory){
        $_SESSION['message']="<div class='alert alert-success' role='alert' style='margin:5%'>Item Added Successfully!</div>";
        header("location: ../views/user_dashboard/add_inventory.php");
    }
}
else{
    echo "Nothing added! ";
    exit;
}