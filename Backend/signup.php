<?php

include "dbconnect.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE `email`='$email'";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if ($num > 0) {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Account already exists</strong>
              </div>";
    } else {

        $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<div class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Account created successfully</strong>
          </div>";

            echo "<script>window.location.href='Login.php'</script>";
        } else {
            echo "Please try again";
        }
    }
}