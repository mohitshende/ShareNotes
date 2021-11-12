<?php
session_start();
require '../backend/dbconnect.php';
if (!isset($_SESSION['email'])) {
    echo "<script>window.location.href='Login.php'</script>";
}
if ($_SESSION['email'] != 'admin@gmail.com') {
    echo "<script>window.location.href='Home.php'</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

</head>

<body>

    <header>
        <div class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Hi, <?php echo $_SESSION['name'] ?></strong>
                </a>
                <div class="pull-right">
                    <?php
                    if (isset($_POST['logout'])) {
                        session_unset();
                        session_destroy();

                        echo "<script>window.location.href='Login.php'</script>";
                    }

                    ?>


                    <form method="post">
                        <a class="btn btn-primary" href="Home.php" role="button">Home</a>
                        <a class="btn btn-success ml-2" href="notes.php" role="button">All Notes</a>
                        <button name="logout" class="btn btn-danger ml-2">Logout</button>


                    </form>


                </div>
            </div>
        </div>
    </header>


    <main role="main my-5">

        <section class="text-center">

            <div class="container my-4">
                <h2>Pending Requests</h2>
            </div>

            <div class="container  my-5" style="overflow-x:auto;">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">FileName</th>
                            <th scope="col">Message</th>
                            <th scope="col">Uploaded By</th>
                            <th scope="col">Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM `request`";
                        $result = mysqli_query($con, $query);
                        $num = mysqli_num_rows($result);
                        $a = 1;



                        if ($num > 0) {

                            while ($fetch = mysqli_fetch_assoc($result)) {




                                echo  '<tr>
                  <td>' . $a . '</td>
                    <td>' . $fetch['filename'] . '</td>
                    <td>' . $fetch['message'] . '</td>
                    <td>' . $fetch['user'] . '</td>

                    <td>' . $fetch['time'] . '</td>
                    

                    <td><a href="../backend/accept.php?id=' . $fetch['id'] . '" class="btn btn-success my-2" name="accept">Accept</a></td>
                    <td><a href="../backend/reject.php?id=' . $fetch['id'] . '" class="btn btn-danger my-2">Reject</a></td>
                    <td><div class="d-grid gap-2 d-md-block">
                </div></td>      
                  </tr>';
                                $a = $a + 1;
                            }
                        } else {
                            echo "No Pending Requests.";
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>

</body>

</html>