<?php
include ("../config/connection.php");
$username=$_POST['username'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$dietary_preference = $_POST['dietary_preference'];
$allergy_info = $_POST['allergy_info'];

$create_user_query = "INSERT INTO `users` 
                VALUES ('',
                    '$username',
                    '$f_name',
                    '$l_name',
                    '$dob',
                    '$gender',
                    '$email',
                    '$password',
                    '$dietary_preference',
                    '$allergy_info'
                ) ";

$create_user = mysqli_query($connect, $create_user_query);
if ($create_user) {
    echo "<script>alert('User created successfully! Now redirecting to login page.');";
    echo "setTimeout(function() {window.location.href='../pages/sign-in.php';}, 1) </script>";
}