<?php
session_start();
include ("../config/connection.php");
$query="DELETE FROM fooditem";
$deleteAllItems=mysqli_query($connect, $query);
header("location: ../views/user_dashboard/view_inventory.php");
