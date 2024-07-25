<?php
session_start();
include ('../config/connection.php');
include ('../core/functions.php');

$item_id=$_POST['item_id'];
$user_id=$_SESSION['user_id'];
$sku=$_POST['sku'];
$user_id=$_SESSION['user_id'];
$item_name=$_POST['item_name'];
$quantity=$_POST['quantity'];
$expiry_date=$_POST['expiry_date'];
$storage_location=$_POST['storage_location'];

$query="UPDATE `fooditem` SET sku=$sku, user_id=$user_id, item_name='$item_name',quantity=$quantity,`expiry_date`='$expiry_date',`storage_location` ='$storage_location' WHERE item_id=$item_id";
$updateItem=mysqli_query($connect,$query);
if ($updateItem){
    header("location:../views/user_dashboard/view_inventory.php");
}