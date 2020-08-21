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
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
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
                              <input type="hidden" name="proposal_id" value="">
                              <input type="hidden" name="proposal_qty" value="">
                              <input type="text" name="code" class="form-control apply-disabled" placeholder="Enter Coupon Code" >
                              <button type="submit" name="coupon_submit" class="input-group-addon btn btn-success">Apply</button>
                          </form>
                          <p class="coupon-response"></p>
                          <hr>
                          <h5 class="font-weight-bold">
                              Proposal Total : <span class="float-right total-price">$41
                          </h5>
                          <hr>
                          <form action="shopping_balance.php" method="post" id="shopping-balance-form">
                              <input type="hidden" name="proposal_id" value="">
                              <input type="hidden" name="proposal_qty" value="">
                              <input type="hidden" name="amount" value="">
                              <button type="submit" name="checkout_submit_order" class="btn btn-lg btn-success btn-block"
                              onclick="return confirm('Do you Really Want To Order This Proposal From Your Shopping Balance.')">
                              Pay With Shopping Balance
                              </button>
                          </form>
                          <br>
                          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form">                      
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="sad.ahmed22224@gmail.com">
                            <input type="hidden" name="tax" value="1">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="cancel_return" value="proposals/proposal.php">
                            <input type="hidden" name="return" value="paypal_order.php?checkout_seller_id=?proposal_id=&proposal_qty&proposal_price=">
                            <input type="hidden" name="item_name" value="I Will Do Viral Youtube Seo Social Media Promotion">
                            <input type="hidden" name="item_number" value="1">
                            <input type="hidden" name="amount" value="20">
                            <input type="hidden" name="quantity" value="2">
                            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                            Pay With Paypal
                            </button>
                         </form>
                         <form action="checkout_charge.php" method="post" id="credit-card-form">
                         <input type="hidden" name="proposal_id" value="">
                            <input type="hidden" name="proposal_qty" value="">
                            <input type="hidden" name="proposal_price" value="">
                            <input type="hidden" name="amount" value="">
                            <input
                            type="submit"
                            class="btn btn-lg btn-success btn-block stripe-submit"
                            value="Pay With Credit Card"
                            data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
                            data-amount="4000"
                            data-currency="usd"
                            data-email="fixmywebsite@gmail.com"
                            data-name="computerefever.com"
                            data-image="images/logo.png"
                            data-description="I Will Do Viral Youtube Seo Social Media Promotion"
                            data-allow-remember-me="false">

                            <script>
                                $(document).ready(function() {
                                $('.stripe-submit').on('click', function(event) {
                                    event.preventDefault();

                                    var $button = $(this),
                                        $form = $button.parents('form');

                                    var opts = $.extend({}, $button.data(), {
                                        token: function(result) {
                                            $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                                        }
                                    });

                                    StripeCheckout.open(opts);
                                });
                            });
                            </script>
                         </form>
                       </div>
                   </div>
               </div>

            </div>
        </div>

    <?php include("includes/footer.php"); ?>



 
</body>
</html>