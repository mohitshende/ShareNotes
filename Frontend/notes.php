<?php
include '../backend/filesLogic.php';
// session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>window.location.href='Login.php'</script>";
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        session_unset();
        session_destroy();


        $message = urlencode("loggedout");

        echo "<script>window.location.href='Login.php'</script>";
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Notes</title>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <h5 class="mx-5 my-2" style="color:white;"><?php echo "Hii, " . $_SESSION['name']; ?></h5>
                </li>

            </ul>
            <ul class="navbar-nav mr-5">
                <?php
                if ($_SESSION['email'] == 'admin@gmail.com') {
                    echo ' <li><a href="AdminPage.php" class="btn btn-info mr-5">Requests</a></li>';
                }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Profile.php">Your Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../backend/logout.php">Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    </div>
    </div>


    <div class="container-md pt-2">
        <h2 class="text-center my-3 text-primary">Notes uploaded by all users</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">File Name</th>
                    <th scope="col">File Size</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Uploaded By</th>
                    <th scope="col">Download
                    <th>
                </tr>
            </thead>
            <tbody>
                <?php

                include "../backend/dbconnect.php";


                $sql = "SELECT * FROM `notes`";

                $result = mysqli_query($con, $sql);

                if ($result) {

                    $num = mysqli_num_rows($result);
                    $no = 1;

                    if ($num > 0) { //this is to catch unknown error.
                        while ($fet = mysqli_fetch_assoc($result)) {

                            echo ' <tr>
                <td>' . $no . '</td>
                  <td>' . $fet['filename'] . '</td>
                  <td>' . ($fet['size'] / 1000) . ' KB' . '</td>
                  <td>' . $fet['heading'] . '</td>
                  <td>' . $fet['message'] . '</td>
                  <td>' . $fet['user'] . '</td>
                  <td><a href="../backend/downloads.php?file_id=' . $fet['id'] . '">Download</a></td>
                  </tr> ';
                            $no++;
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    </body>

</html>