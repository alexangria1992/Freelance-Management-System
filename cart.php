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
    <link href="styles/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/owl.theme.default.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <?php include("includes/header.php"); ?>

        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="float-left">Your Cart (2)</h5>
                            <h5 class="float-right">
                                <a href="index.php">
                                    Keep Shopping
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="cart-show">
                <div class="col-md-7">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="cart-proposal">
                                <div class="row">
                                    <div class="col-lg-3 mb-2">
                                        <a href="proposals/proposal.php">
                                            <img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-9">
                                        <a href="proposals/proposal.php">
                                            <h6>I Will Do Viral Youtube Seo Social Media Promotion</h6>
                                        </a>
                                        <a href="cart.php?remove_proposal" class="remove-link text-muted">
                                            Remove Proposal
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="clearfix">
                                    Proposal Quantity
                                    <strong class="float-right price ml-2 mt-2">$20</strong>
                                    <input type="text" name="quantity" class="float-right form-control quantity" data-proposal_id=""
                                    value="1">  
                                </h6>
                                <hr>

                            </div>

                            <div class="cart-proposal">
                                <div class="row">
                                    <div class="col-lg-3 mb-2">
                                        <a href="proposals/proposal.php">
                                            <img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-9">
                                        <a href="proposals/proposal.php">
                                            <h6>I Will Do Viral Youtube Seo Social Media Promotion</h6>
                                        </a>
                                        <a href="cart.php?remove_proposal" class="remove-link text-muted">
                                            Remove Proposal
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="clearfix">
                                    Proposal Quantity
                                    <strong class="float-right price ml-2 mt-2">$20</strong>
                                    <input type="text" name="quantity" class="float-right form-control quantity" data-proposal_id=""
                                    value="1">  
                                </h6>
                                <hr>
                                
                            </div>

                            <h3 class="float-right">Total: $40</h3>
                        </div>
                    </div>
                </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body cart-order-details">
                                <p>
                                    Cart Subtotal <span class="float-right">$40</span>
                                </p>
                                <hr>
                                <p>Apply Couon Code</p>
                                <form action="" class="input-group" method="post">
                                    <input type="text" name="code" class="form-control apply-disabled" placeholder="Enter Coupon Code">
                                    <button type="submit" name="coupon-submit" class="input-group-addon btn btn-success">Apply</button>
                                </form>
                                <p class="coupon-response"></p>
                                <hr>
                                <p>Processing Fee <span class="float-right">$1</span></p>
                                <hr>
                                <p>Total <span class="font-weight-bold float-right">$1</span></p>
                                <hr>
                                <a href="card_payment_options.php" class="btn btn-lg btn-success btn-block">
                                    Proceed To Payment
                                </a>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
    <?php include("includes/footer.php"); ?>



 
</body>
</html>