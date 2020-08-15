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
<body>
    <?php include("includes/header.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 mb-5">
                    <div class="card change-pass">
                        <div  class="card-header text-center">
                            <h3>Dear Fixmywebsite, Change Password</h3>
                        </div>
                        <div style="margin-left: -114px;" class="card-body d-flex justify-content-center">
                            <form method="post"  class="col-md-8">
                                <div class="form-group">
                                    <label>Enter Your Password</label>
                                       <div class="input-group">
                                    <span class="input-group-addon">                               
                                        <i class="fa fa-check tick1 text-success"></i>
                                        <i class="fa fa-times cross1 text-danger"></i>
                                    </span>
                                    <input type="password" name="new_pass" id="password" class="form-control" required>
                                    <span class="input-group-addon">
                                        <div id="meter_wrapper">
                                        <span id="pass_type"></span>
                                        <div id="meter"></div> 
                                        </div>
                                    </span>                           
                                </div>
                            </div>

                            <div style="margin-left: 1px;" class="form-group">
                                    <label>Enter Your New Password</label>
                                       <div class="input-group">
                                    <span class="input-group-addon">                               
                                        <i class="fa fa-check tick2 text-success"></i>
                                        <i class="fa fa-times cross2 text-danger"></i>
                                    </span>
                                    <input type="password" name="new_pass_again" id="confirm_password" class="form-control" required>
                                    </div>
                                    </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <i class="fa fa-user md"></i> Change Password
                                    </button>
                                </div>
                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include("includes/footer.php"); ?>

    <script>

$(document).ready(function(){

$("#password").keyup(function(){

check_pass();

});

});

function check_pass() {

var val = document.getElementById("password").value;

var meter = document.getElementById("meter");

var no=0;

if(val!=""){

// If the password length is less than or equal to 6
if(val.length<=6)no=1;

// If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

// If the password length is greater than 6 and contain alphabet,number,special character respectively
if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

// If the password length is greater than 6 and must contain alphabets,numbers and special characters
if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

if(no==1){

$("#meter").animate({width:'50px'},300);

meter.style.backgroundColor="red";

document.getElementById("pass_type").innerHTML="Very Weak";

}

if(no==2){

$("#meter").animate({width:'100px'},300);

meter.style.backgroundColor="#F5BCA9";

document.getElementById("pass_type").innerHTML="Weak";

}

if(no==3){

$("#meter").animate({width:'150px'},300);

meter.style.backgroundColor="#FF8000";

document.getElementById("pass_type").innerHTML="Good";

}

if(no==4){

$("#meter").animate({width:'200px'},300);

meter.style.backgroundColor="#00FF40";

document.getElementById("pass_type").innerHTML="Strong";

}

}

else{

meter.style.backgroundColor="";

document.getElementById("pass_type").innerHTML="";

}

}

</script>



<!--- Password Strength checker code Ends  --->


<!--- Tick and Cross code starts  --->

<script>

$(document).ready(function(){

$('.tick1').hide();

$('.cross1').hide();

$('.tick2').hide();

$('.cross2').hide();

$('#confirm_password').focusout(function(){

var password = $('#password').val();

var confirmPassword = $('#confirm_password').val();

if(password == confirmPassword){

$('.tick1').show();

$('.cross1').hide();

$('.tick2').show();

$('.cross2').hide();

}
else{

$('.tick1').hide();

$('.cross1').show();

$('.tick2').hide();

$('.cross2').show();

}

});

});

</script>



 
</body>
</html>