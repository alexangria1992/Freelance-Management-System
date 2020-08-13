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

</head>
<body class="bg-white">
    <?php include("includes/header.php"); ?>

    <div class="containter-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1>Search results</h1>
                    <p class="lead">" Youtube Video Promotion"</p>
                </center>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <?php include("includes/search_sidebar.php"); ?>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>

    <script>
        $(document).ready(function(){
            $(".get_cat_id").click(function(){
                if($('.get_cat_id:checked').length > 0)
                {
                    $('.clear_cat_id').show();
                }
                else 
                {
                    $(".clear_cat_id").hide();
                }
            });

            $(".get_delivery_time").click(function(){
                if($('.get_delivery_time:checked').length > 0)
                {
                    $('.clear_delivery_time').show();
                }
                else 
                {
                    $(".clear_delivery_time").hide();
                }
            });

            $(".get_seller_level").click(function(){
                if($('.get_seller_level:checked').length > 0)
                {
                    $('.clear_seller_level').show();
                }
                else 
                {
                    $(".clear_seller_level").hide();
                }
            });

            $(".get_seller_language").click(function(){
                if($('.get_seller_language:checked').length > 0)
                {
                    $('.clear_seller_language').show();
                }
                else 
                {
                    $(".clear_seller_language").hide();
                }
            });
        })
    </script>



 
</body>
</html>