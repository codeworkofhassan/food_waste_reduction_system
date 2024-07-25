<?php
session_start();
include ("../config/connection.php");
include("../core/functions.php");
$user_id = $_SESSION['user_id'];
$rating = $_POST['rating'];
$comment = mysqli_real_escape_string($connect, $_POST['comment']);
$feedback_type = $_POST['feedback_type'];
$sql = "INSERT INTO feedback (user_id, comment, rating, feedback_type) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $user_id, $comment, $rating, $feedback_type);
$add_feedback = mysqli_stmt_execute($stmt);
if ($add_feedback) {
  echo "<script>alert('Thanks for your valuable feedback');";
  echo "setTimeout(function() {window.location.href='../views/user_dashboard/user_dashboard.php';}, 1) </script>";
} else {
  echo "Error adding feedback: " . mysqli_error($connect);
}
mysqli_stmt_close($stmt);
