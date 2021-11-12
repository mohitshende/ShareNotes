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
        $size = $fetch['size'];
        $user = $fetch['user'];

        $q = "INSERT INTO `rejectednotes` (`filename`, `message`, `heading`, `time`, `user`, `size`) VALUES ('$filename', '$message', '$heading', CURRENT_TIMESTAMP, '$user', '$size');";

        $r = mysqli_query($con, $q);
    }
}
$query = "DELETE FROM `request` WHERE `request`.`id` = '$id'";
$result = mysqli_query($con, $query);
if ($result) {
    echo "Your Note has been rejected.";
} else {
    echo "Unknown error occured. Please try again.";
}
echo "<script>window.location.href='../Frontend/AdminPage.php'</script>";