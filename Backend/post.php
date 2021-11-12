<?php
error_reporting(0);
?>
<?php
$msg = "";
include "dbconnect.php";
session_start();
$set = $_SESSION['email'];


if (isset($_POST['post'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $size = $_FILES['uploadfile']['size'];
    mkdir("UserNotes/$set");

    $folder = "UserNotes/";


    $newfileName = date('dmyHis') . str_replace(" ", "", basename($filename));


    $message = $_POST['message'];
    $heading = $_POST['heading'];


    if (move_uploaded_file($tempname, $folder . $newfileName)) {
        $sql = "INSERT INTO `request` (`heading`, `message`, `filename`, `time`, `user`, `size`) VALUES ('$heading', '$message', '$newfileName', current_timestamp(), '$set', '$size');";

        $result = mysqli_query($con, $sql);
        $msg = "File uploaded successfully";
    } else {
        $msg = "Failed to upload file";
    }

    echo "<script>window.location.href='Profile.php'</script>";
}


?>