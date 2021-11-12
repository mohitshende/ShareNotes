<?php
include "../backend/post.php";

if (!isset($_SESSION['email'])) {
    echo "<script>window.location.href='Login.php'</script>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Styles/Home.css">
    <title>Profile</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notes.php">All Notes</a>
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
                <a class="btn btn-danger" href="../backend/logout.php">Logout
                </a>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-success pt-3">Your Uploaded Notes</h2>
                <?php
                include "../backend/usernotes.php";
                ?>
            </div>
            <div class="col">
                <h2 class="text-warning pt-3">Pending Notes</h2>
                <?php
                include "../backend/pendingnotes.php";
                ?>
            </div>
            <div class="col">
                <h2 class="text-danger pt-3">Rejected Notes</h2>
                <?php
                include "../backend/rejectednotes.php";
                ?>
            </div>
        </div>
    </div>

</body>
<script src="JS/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>