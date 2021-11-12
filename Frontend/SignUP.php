<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Styles/Signup.css" media="all" rel="stylesheet" type="text/css" />

    <title>Create your new account</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
            <div class="col-lg-6 col-md-6 form-container">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <?php

                    include "../backend/signup.php";

                    ?>
                    <div class="logo">
                        <img src="./Images/logo.png" width="200px">
                    </div>
                    <div class="heading mb-4">
                        <h4>Create an account</h4>
                    </div>
                    <form method="post">
                        <div class="form-input">
                            <span><i class="fa fa-user"></i></span>
                            <input type="text" placeholder="Full Name" name="fname" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 d-flex">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cb1">
                                    <label class="custom-control-label text-white" for="cb1">By clicking Sign Up, you
                                        agree to our Terms, Data Policy and Cookie Policy.</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-left mb-3">
                            <button type="submit" class="btn" name="button">Sign Up</button>
                        </div>
                        <div class="text-center mb-2">
                            <div class="mb-3" style="color: #fff">or register with</div>

                            <a href="" class="btn btn-social btn-facebook">Facebook</a>

                            <a href="" class="btn btn-social btn-google">Google</a>

                            <a href="" class="btn btn-social btn-twitter">Twitter</a>
                        </div>
                        <div style="color: #fff">Already have an account
                            <a href="Login.php" class="login-link">Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>