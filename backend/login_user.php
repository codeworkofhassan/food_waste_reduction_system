<?php
session_start();
include("../config/connection.php");
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $sql = "SELECT * FROM users WHERE username='$username' AND `password`='$password' ";
    $result = mysqli_query($connect, $sql) or die("Failed!");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['dietary_preference']=$row['dietary_preference'];
        $_SESSION['allergy_info']=$row['allergy_info'];
        $_SESSION['message']='';
        header("location: ../views/user_dashboard/user_dashboard.php");
    } else {
        echo "<script>alert('Invalid Credentials');";
        echo "setTimeout(function() {window.location.href='../pages/sign-in.php';}, 1) </script>";
    }
}
