           <!DOCTYPE html>
           <html>

           <head>
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">

               <!-- Bootstrap CSS -->
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
               <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                   rel="stylesheet">
               <link href="Styles/Login.css" media="all" rel="stylesheet" type="text/css" />
               <title>Login</title>
           </head>

           <body>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>

                       <div class="col-lg-6 col-md-6 form-container">
                           <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                               <?php
                                include "../backend/login.php";
                                ?>
                               <div class="logo">
                                   <img src="./Images/logo.png" width="200px">
                               </div>
                               <div class="heading mb-4">
                                   <h4>Login to your account</h4>
                               </div>
                               <form method="POST">
                                   <div class="form-input">
                                       <span><i class="fa fa-envelope"></i></span>
                                       <input type="email" name="email" placeholder="Email Address" required>
                                   </div>
                                   <div class="form-input">
                                       <span><i class="fa fa-lock"></i></span>
                                       <input type="password" name="password" placeholder="Password" required>
                                   </div>
                                   <div class="row mb-3">
                                       <div class="col-6 d-flex">
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" class="custom-control-input" id="cb1">
                                               <label class="custom-control-label text-white" for="cb1">Remember
                                                   me</label>
                                           </div>
                                       </div>
                                       <div class="col-6 text-right">
                                           <a href="Forget.php" class="forget-link">Forget Password</a>
                                       </div>
                                   </div>
                                   <div class="text-left mb-3">
                                       <button type="submit" class="btn" name="button">Login</button>
                                   </div>
                                   <div class="text-center mb-2">
                                       <div class="mb-3" style="color: #fff">or login with</div>

                                       <a href="" class="btn btn-social btn-facebook">facebook</a>

                                       <a href="" class="btn btn-social btn-google">google</a>

                                       <a href="" class="btn btn-social btn-twitter">twitter</a>
                                   </div>
                                   <div style="color: #fff">Don't have an account
                                       <a href="SignUP.php" class="register-link">Register here</a>
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