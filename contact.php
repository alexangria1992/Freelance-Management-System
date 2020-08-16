<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer-Fever Customer Support</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css"> 
    <link rel="stylesheet" href="styles/category_nav_style.css"> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="styles/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/owl.theme.default.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="js/jquery.min.js"></script>


</head>
<body>
    <?php include("includes/header.php"); ?>
  
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="alert alert-warning rounded-0 " role="alert">
                        <p class="lead mt-1 mb-1">
                            <strong>Warning !</strong>
                            You do not submit a support request, without logging in to this website.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header text-center">
                        <h2>Submit A Request</h2>
                        <p class="text-muted">
                           If you have any questions, pease feel free to contact us, Our customer service center is working for you 24/7.

                        </p>
                    </div>
                    <div class="card-body">
                        <center>
                            <form action="contact.php" method="post" enctype="multipart/form-data" class="col-md-8 contact-form">
                                <div class="form-group">
                                    <label class="float-left">Select Enquiry Type </label>
                                    <select name="enquiry_type" class="form-control select_tag" required>
                                    <option value="" url="contact.php">Select Enquiry</option>
                                    <option value="1" url="contact.php?enquiry_id">Order Support</option>
                                    <option value="2" url="contact.php?enquiry_id">Review Removal</option>
                                    <option value="3" url="contact.php?enquiry_id">Account Support</option>
                                    <option value="4" url="contact.php?enquiry_id">Report A Bug</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label class="float-left">Subject * </label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>

                                <div class="form-group">
                                    <label class="float-left">Message * </label>
                                    <textarea name="message"  rows="6" class="form-control" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="float-left">Order Number * </label>
                                    <input type="text" name="order_number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="float-left">Order Rule * </label>
                                    <select name="order_rule" class="form-control" required>
                                    <option class="hidden">Select Order Rule</option>
                                    <option>Buyer</option>
                                    <option>Seller</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label class="float-left">Attachment</label>
                                    <input type="file" class="form-control" name="file">
                                </div>

                                <div class="form-group">
                                    <label>Please Verify That You Are Human </label>
                                  <div class="g-recaptcha" data-sitekey="6LfQ-L4ZAAAAAHGw7rd1Fm2baI636jztABYZWJMH"></div>
                                </div>
                                <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                        <i class="fa fa-user-md"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>

        </div>

    <?php include("includes/footer.php"); ?>

    <script>

        $(document).ready(function(){
            $(".select_tag").change(function(){
                url = $(".select_tag option:selected").attr('url');
                window.location.href = url;
            })
        })
    </script>

 
</body>
</html>