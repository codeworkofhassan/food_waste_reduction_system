<?php
session_start();
include ("../config/connection.php");
$item_id=$_GET['id'];
$query="DELETE FROM `fooditem` WHERE item_id=$item_id";
$delete_item=mysqli_query($connect,$query);
if ($delete_item){
    $_SESSION['message']='Item deleted successfully!';
    header("location:../views/user_dashboard/view_inventory.php");
}
