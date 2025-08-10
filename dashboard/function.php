<?php
require("../connection.php");
ob_start();
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: ../signin.php");
}
$user_id = $_SESSION['user_id'];
$user_sql = "SELECT * FROM users WHERE id = '$user_id'";
$user_query = mysqli_query($conn, $user_sql);
$user = mysqli_fetch_assoc($user_query);
