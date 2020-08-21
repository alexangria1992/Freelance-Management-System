<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Fever / Order Details</title>
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
        <div class="container mt-5 mb-5">
            <div class="row">
            <div class="col-md-7">
                   <div class="row">
                       <div class="col-md-12 mb-3">
                           <div class="card payment-options">
                               <div class="card-header">
                                   <h5>Available Shopping Balance</h5>
                               </div>
                                <div class="card-body">
                                  <div class="row">
                                      <div class="col-1">
                                          <input type="radio" id="shopping-balance" name="method" class="form-control radio-input" checked>
                                      </div>
                                      <div class="col-11">
                                        <p class="lead mt-2">
                                            Personal Balance - fixmywebsite
                                        <span class="text-success font-weight-bold">$198</span>
                                        </p>
                                      </div>
                                    </div>  
                                </div>
                           </div>
                       </div>

                       <div class="col-md-12 md-3">
                           <div class="card payment-options">
                               <div class="card-header">
                                   <h5>Payment Options</h5>
                               </div>
                               <div class="card-body">
                                   <div class="row">
                                    <div class="col-1">
                                        <input type="radio" id="paypal" class="form-control radio-input" name="method">
                                    </div>
                                    <div class="col-11">
                                        <img src="images/paypal.png" height="50" class="ml-2 width-xs-100" alt="">
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-1">
                                        <input type="radio" id="credit-card" class="form-control radio-input" name="method">
                                    </div>
                                    <div class="col-11">
                                        <img src="images/credit_cards.jpg" height="50" class="ml-2 width-xs-100" alt="">
                                    </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-5">
                   <div class="card checkout-details">
                       <div class="card-header">
                           <h5>
                               <i class="fa fa-money fa-fw"></i>Order Summary
                           </h5>
                       </div>
                       <div class="card-body">
                           <div class="row">
                               <div class="col-md-4 mb-3">
                                   <img src="proposals/proposal_files/youtube-seo-1.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="col-md-8">
                                   <h5>I Will Do Viral YouTube Seo Social Media Promotion</h5>
                               </div>
                           </div>
                           <hr>
                           <h6> Proposal Price: <span class="float-right">$20</span>
                           <hr>
                          <h6> Proposal Qty: <span class="float-right">2</span></h6>
                          <hr>
                          <h6 class="processing-fee"> Processing Fee : <span class="float-right">$1</span></h6>
                          <hr class="processing-fee">
                          <h6> Apply Coupon Code :</h6>
                          <form method="post" class="input-group">
                              
                          </form>
                       </div>
                   </div>
               </div>

            </div>
        </div>

    <?php include("includes/footer.php"); ?>



 
</body>
</html>