<?php

include "dbconnect.php";
session_start();

if (isset($_SESSION['email'])) {
    echo '<script>window.location.href="Home.php"</script>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE `email`='$email'";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($fetch = mysqli_fetch_Assoc($result)) {


            if ($fetch['email'] == $email && $fetch['password'] == $password) {


                switch ($email) {
                    case "admin@gmail.com":

                        $_SESSION['email'] = 'admin@gmail.com';
                        $_SESSION['name'] = $fetch['name'];
                        echo "<script>window.location.href='AdminPage.php'</script>";
                        break;

                    case "$email":

                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $fetch['name'];
                        echo "<script>window.location.href='Home.php'</script>";
                        break;
                }
            } else {
                echo " <div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Invalid Credentials</strong>
              </div>";
            }
        }
    } else {
        echo " <div class='alert alert-danger alert-dismissible fade show'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>You don't have any account. Please create new account</strong>
      </div>";
    }
}