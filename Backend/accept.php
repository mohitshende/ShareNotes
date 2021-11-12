<?php
require 'dbconnect.php';
session_start();
$set = $_SESSION['email'];
$id = $_GET['id'];
$query = "select * from `request` where `id` = '$id' ";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);
if ($num > 0) {
    while (($fetch = mysqli_fetch_assoc($result))) {
        $filename = $fetch['filename'];
        $message = $fetch['message'];
        $heading = $fetch['heading'];
        $user = $fetch['user'];
        $size = $fetch['size'];



        $query = "INSERT INTO `notes` (`filename`, `heading`, `message`, `time`, `user`, `size`) VALUES ('$filename', '$heading', '$message', CURRENT_TIMESTAMP, '$user', '$size');";

        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Your Note has been accepted.";
        } else {
            echo "Unknown error occured. Please try again.";
        }
    }
    $query = "DELETE FROM `request` WHERE `request`.`id` = '$id'";
    $result = mysqli_query($con, $query);

    echo "<script>window.location.href='../Frontend/AdminPage.php'</script>";
} else {
    echo "Error occured.";
}