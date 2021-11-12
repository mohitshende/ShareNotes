<?php
require 'dbconnect.php';
session_start();
$set = $_SESSION['email'];
$id = $_GET['id'];
$query = "select * from `notes` where `id` = '$id' ";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);
if ($num > 0) {

    $query = "DELETE FROM `notes` WHERE `notes`.`id` = '$id'";
    $result = mysqli_query($con, $query);

    $status = unlink($filename, $path);
    if ($status) {
        echo "File deleted successfully";
    } else {
        echo "Sorry!";
    }
    echo "<script>window.location.href='../Frontend/AdminPage.php'</script>";
} else {
    echo "Error occured.";
}


$sql = "SELECT * FROM `notes`";
$result = mysqli_query($con, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Get files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to delete from database
    $sql = "SELECT * FROM `notes` WHERE `id`=$id";
    $result = mysqli_query($con, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../Frontend/UserNotes/' . $file['filename'];

    if (file_exists($filepath)) {

        readfile('../Frontend/UserNotes/' . $file['filename']);
        exit;
    }
}