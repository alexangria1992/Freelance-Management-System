<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Fever/ Proposals Sale Orders</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css"> 
    <link rel="stylesheet" href="styles/category_nav_style.css"> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="styles/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/owl.theme.default.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <?php include("includes/header.php"); ?>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Manage Proposals Sales Orders</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 mb-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#active" data-toggle="tab" class="nav-link active">
                                ACTIVE <span class="badge badge-success">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#delivered" data-toggle="tab" class="nav-link">
                                DELIVERED <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#completed" data-toggle="tab" class="nav-link">
                                COMPLETED <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#cancelled" data-toggle="tab" class="nav-link ">
                                CANCELLED <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#all" data-toggle="tab" class="nav-link ">
                                ALL <span class="badge badge-success">6</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="active">
                            <?php
                                include("manage_orders/order-active_selling.php");
                            ?>
                        </div>
                        <div class="tab-pane fade" id="delivered">
                            <?php
                                include("manage_orders/order_delivered_selling.php");
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    <?php include("includes/footer.php"); ?>



 
</body>
</html>