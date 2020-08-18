<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Fever Freelance Services Marketplace</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css"> 
    <link rel="stylesheet" href="styles/user_nav_style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="styles/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/owl.theme.default.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <?php include("includes/user_header.php")?>
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <?php include("includes/dashboard_sidebar.php") ?>
                </div>

                <div class="col-md-8">
                    <div class="card rounded-0">
                        <div class="card-body p-0">
                            <div class="row p-2">
                                <div class="col-lg-3 col-sm-12 text-center">
                                    <img src="user_images/fixmywebsite.jpg" class="rounded-circle img-thumbnail" width="130" alt="">
                                </div>
                                <div class="col-lg-9 col-sm-12 text-lg-left text-center">
                                    <div class="row mb-2">
                                        <div class="col-6 col-lg-4 mt-3">
                                            <h6 class="text-muted">Positive Ratings</h6>
                                            <h6>92%</h6>
                                        </div>
                                        <div class="col-6 col-lg-8 mt-3">
                                            <h6 class="text-muted">Country</h6>
                                            <h6>United States</h6>
                                        </div>
                                    </div>  
                                   
                                        <div class="row">
                                            <div class="col-6 col-lg-4">
                                                <h6 class="text-muted">Recent Delivery</h6>
                                                <h6>December 1, 2017</h6>
                                            </div>
                                            <div class="col-6 col-lg-8">
                                                <h6 class="text-muted">Member Since</h6>
                                                <h6>April, 2017</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <hr>
                                    <div class="row pl-3 pr-3 pb-2 pt-3 mt-4">
                                        <div class="col-md-4 text-center border-box">
                                            <h5 class="text-muted">Orders Completed</h5>
                                            <h3 class="text-success">10</h3>
                                        </div>
                                        <div class="col-md-4 text-center border-box">
                                            <h5 class="text-muted">Delivered Orders</h5>
                                            <h3 class="text-success">5</h3>
                                        </div>
                                        <div class="col-md-4 text-center border-box">
                                            <h5 class="text-muted">Orders Cancelled</h5>
                                            <h3 class="text-success">3</h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row pl-3 pr-3 pb-2 pt-2">
                                        <div class="col-md-3 text-center border-box">
                                            <h5 class="text-muted">Open Purchases</h5>
                                            <h3>4</h3>
                                        </div>
                                        <div class="col-md-3 text-center border-box">
                                            <h5 class="text-muted">Balance</h5>
                                            <h3 class="text-success">$172</h3>
                                        </div>
                                        <div class="col-md-3 text-center border-box">
                                            <h5 class="text-muted">Sales In Queue</h5>
                                            <h3>2</h3>
                                        </div>
                                        <div class="col-md-3 text-center border-box">
                                            <h5 class="text-muted">Earned This Month</h5>
                                            <h3 class="text-success">$74</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 mt-3">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a href="#notifications" data-toggle="tab"  class="nav-link active">notifications
                                                <span class="badge badge-success">2</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#inbox" data-toggle="tab"  class="nav-link ">Messages
                                            <span class="badge badge-success">2</span></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body p-0">
                                        <div class="tab-content">
                                            <div id="notifications" class="tab-pane fade show active mt-3">
                                            <div class="header-message-div-unread">
                                                <a href="dashboard.php?delete_notification" class="float-right text-danger">
                                                    <i class="fa fa-times-circle fa-lg"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    <?php include("includes/footer.php"); ?>



 
</body>
</html>