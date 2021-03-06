<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Fever Shopping Payment Options</title>
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
                <div class="card">
                    <div class="card-body cart-order-details">
                        <p>Cart Subtotal <span class="float-right">$40</span></p>
                        <hr>
                        <p class="processing-fee">Processing Fee <span class="float-right">$1</span></p>
                        <hr class="processing-fee">
                        <p>Total <span class="float-right font-weight-bold total-price">$41</span></p>
                        <hr>
                        <form action="shopping_balance.php" method="post" id="shopping-balance-form">
                            <input type="hidden" name="amount" value="">
                            <button class="btn btn-lg btn-success btn-block" type="submit" name="cart_submit_order" 
                            onclick="return confirm('Do You Really Want To Order Proposals From Your Shopping Balance.')">
                            Pay With Shopping balance
                           </button>
                        </form>
                        <br>
                        <form action="http://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="upload" value="1">
                            <input type="hidden" name="handling_cart" value="1">
                            <input type="hidden" name="business" value="sad.ahmed22224@gmail.com">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="cancel_return" value="cart_payment_options.php">
                            <input type="hidden" name="return" value="paypal_order.php?cart_seller_id">
                            <input type="hidden" name="item_name_1" value="I Will Do Viral Youtube Seo Social Media Promotion">
                            <input type="hidden" name="item_number_1" value="1">
                            <input type="hidden" name="amount_1" value="20">
                            <input type="hidden" name="quantity_1" value="1">
                            <input type="hidden" name="item_name_2" value="I Will Do Viral Youtube Seo Social Media Promotion">
                            <input type="hidden" name="item_number_2" value="1">
                            <input type="hidden" name="amount_2" value="20">
                            <input type="hidden" name="quantity_2" value="1">
                            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                            Pay With Paypal
                            </button>
                        </form>

                        <form action="cart_charge.php" method="post" id="credit-card-form">
                            <input type="hidden" name="amount" value="">
                            <input type="submit" class="btn btn-lg btn-success btn-block strip-submit"
                            data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
                            value="Pay With Credit Card"
                            data-amount="1000"
                            data-currency="usd"
                            data-email = "fixmywebsite@gmail.com"
                            data-name="Computerfever.com"
                            data-image="images/logo.png"
                            data-description="All Cart Proposals Payment"
                            data-allow-remember-me="false"
                            >

                            <script>
                                $(document).ready(function() {
                                $('.strip-submit').on('click', function(event) {
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
        <script>
            $(document).ready(function()
            {
                $('.processing-fee').hide();
                $('.total-price').html('40');
                $('#paypal-form').hide();
                $('#credit-card-form').hide();

                $('#shopping-balance').click(function(){
                    $('.col-md-5 .card br').show();
                    $('.total-price').html('$40');
                    $('.processing-fee').hide();
                    $('#credit-card-form').hide();
                    $('#paypal-form').hide();
                    $('#shopping-balance-form').hide();

                });

                $('#paypal').click(function(){
                    $('.col-md-5 .card br').hide();
                    $('.total-price').html('$41');
                    $('.processing-fee').show();
                    $('#credit-card-form').hide();
                    $('#paypal-form').show();
                    $('#shopping-balance-form').hide();

                });

                $('#credit-card').click(function(){
                    $('.col-md-5 .card br').hide();
                    $('.total-price').html('$41');
                    $('.processing-fee').show();
                    $('#credit-card-form').show();
                    $('#paypal-form').hide();
                    $('#shopping-balance-form').hide();

                });
            });
        </script>
    <?php include("includes/footer.php"); ?>



 
</body>
</html>