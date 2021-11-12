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

    <!-- Custom Inline styles -->
    <style>
    .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        /* left: 0; */
        right: 0;
        width: 250px;
        z-index: 1000;
        display: block;
        /* padding: 20px; */
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
        background-color: #f5f5f5;
        border-right: 1px solid #eee;
        /* box-shadow: 0px 0px 10px #232931; */
    }

    @media (min-width: 768px) {
        .main {
            padding-right: 290px;
            /* 250 + 40 */
            padding-left: 40px;
        }
    }

    .vertical-menu {
        width: 100%;
        /* Set a width if you like */
    }

    .vertical-menu .prsec {
        background-color: #fff;
        /* Grey background color */
        color: black;
        /* Black text color */
        display: block;
        /* Make the links appear below each other */
        padding: 12px;
        /* Add some padding */
        text-decoration: none;
        /* Remove underline from links */
    }

    .vertical-menu .prsec:hover {
        background-color: #ccc;
        /* Dark grey background on mouse-over */
    }

    .vertical-menu .prsec.active {
        background-color: #4caf50;
        /* Add a green color to the "active/current" link */
        color: white;
    }

    .prsec {
        border-bottom: 4px solid #007BFF;
    }

    nav {
        box-shadow: 0px 0px 10px #232931;
    }

    .margin {
        margin-right: 250px;
    }

    @media (max-width: 360px) {
        body {
            background-color: lightblue;
        }

        .new {
            display: none;
        }

        .center {
            margin-left: -16px;
            width: 100vw;
            margin-top: -36px;
        }

        .center h4 {
            font-size: 12px;
        }

        .h4 {
            font-size: 11px;
        }

        body {
            background-color: white;
        }

        .margin {
            margin-right: 35px;
        }
    }
    </style>
    <title>ShareNotes - Notes Sharing Platform</title>
</head>

<body>
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

    <div class="container-fluid ">
        <div class="margin">
            <div class="d-flex justify-content-center align-items-center">
                <img src="./Images/logo.png">
                <h3 class="h4"> - Platform to share your notes</h3>
            </div>
            <div class="d-flex justify-content-center align-items-center center">
                <h4>Share your notes easily by uploading via form given below ...</h4>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8 main ">
                <form class="my-4 container shadow-lg" method="post" enctype="multipart/form-data">
                    <div class="form-floating my-4">
                        <input class="form-control my-2" type="text" name="heading" placeholder="Title of the notes"
                            required>
                        <textarea class="form-control" name="message" placeholder="Add description"
                            id="floatingTextarea2" style="height: 100px" required></textarea>

                        <input class="my-2" type="file" name="uploadfile" value="" required />
                    </div>
                    <button class="btn btn-success my-2" name="post" type="submit">Upload</button>
                </form>

            </div>
            <!-- Sidebar -->
            <div class="sidebar bg-secondary shadow-lg new">
                <div class="vertical-menu">
                    <h3 class="text-primary bg-white text-center p-4 m-0 prsec">All Users</h3>
                    <?php
                    include "../backend/users.php";
                    ?>
                </div>
            </div>
        </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>