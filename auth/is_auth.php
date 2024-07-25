<?php
if (!isset($_SESSION['username'])){
    header("location: ./pages/sign-in.php");
}
else{
    header("location:./views/user_dashboard/user_dashboard.php");
}