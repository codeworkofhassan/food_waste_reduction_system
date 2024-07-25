<?php
session_start();
include ("../config/connection.php");
include ("../core/functions.php");

if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    $query = "UPDATE users SET ";
    $allowed_columns = array('username', 'f_name', 'l_name', 'email', 'password', 'dietary_preference', 'allergy_info'); 
    foreach ($allowed_columns as $column) {
      if (isset($_POST[$column])) {  
        $query .= $column . " = '" . $_POST[$column] . "', ";
      }
    }
    $query = substr(trim($query), 0, -1);
    $query .= " WHERE user_id=$user_id";
    $update_profile = mysqli_query($connect, $query);
    if ($update_profile) {
        $_SESSION['message'] = "
            <div class='alert alert-success text-align:center' role='alert'>
                Profile Updated!
            </div>
        ";
        header("location: ../views/user_dashboard/manage_profile.php");
    }
}