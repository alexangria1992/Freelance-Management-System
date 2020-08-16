<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Fever Freelance Services Marketplace</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css"> 
    <link rel="stylesheet" href="styles/category_nav_style.css"> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>


</head>
<body>
    <?php include("includes/header.php"); ?>
   
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <h2 class="text-center">Login To Computerfever</h2>
                <div class="box-login mt-4">
                    <img src="images/logo.png" alt="" class="logo img-fluid">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="seller_user_name" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="seller_pass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="Login" >
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="" data-toggle="modal" data-target="#register-modal">Register</a>
                        <span class="ml-2 mr-2">|</span>
                        <a href="" data-toggle="modal" data-target="#forgot-modal"> Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>



 
</body>
</html>