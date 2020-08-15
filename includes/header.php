<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-login fixed-top">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php" class="navbar-brand">Computerfever</a>
        <a href="mobile_categories.php" class="navbar-toggler"><i class="fa fa-th-large"
        style = "font-size:1.5em;"></i></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <hr>

            <form  method="post" class="form-inline mr-auto">
                <div class="input-group">
                    <input type="text" class="form-control" required placeholder="Search Proposals" name="search_query">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" name="search" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <hr>

            <ul class="navbar-nav">
                <!-- <li class="nav-item-active">
                    <a href="./index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-target="#register-modal" data-toggle="modal">Become a Seller</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-target="#login-modal" data-toggle="modal">Sign In</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#register-modal">Sign Up</a>
                </li> -->
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">
                    <i class="fa fa-lg fa-dashboard"></i>
                    <span class="d-lg-none">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" data-toggle="dropdown" title="Notifications" class="nav-link dropdown-toggle mr-lg-2">
                        <i class="fa fa-fw fa-lg fa-bell"></i>
                        <span class="d-lg-none">
                            Notifications
                            <span class="badge badge-pill badge-danger">1 New</span>
                        </span>
                        <span class="new-indicator text-danger d-lg-block d-none">
                            <i class="fa fa-fw fa-circle"></i>
                            <span class="number">1</span>
                        </span>
                    </a>
                    <div class="dropdown-menu notifications-dropdown">
                        <h3 class="dropdown-header">
                            Notifications(1)
                            <a href="dashboard.php" class="float-right">View Dashboard</a>
                        </h3>
                        <div class="header-message-div">
                            <a href="dashboard.php?n_id">
                                <img src="user_images/salman.jpg" width="60" height="60" class="rounded-circle">
                                <strong class="heading">Salman Khan</strong>
                                <p class="message">Complete Your Order</p>
                                <p class="date text-muted">26:11: Nov 08 2020</p>
                            </a>
                            <a href="dashboard.php?n_id">
                                <img src="user_images/salman.jpg" width="60" height="60" class="rounded-circle">
                                <strong class="heading">Salman Khan</strong>
                                <p class="message">Complete Your Order</p>
                                <p class="date text-muted">26:11: Nov 08 2020</p>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php include "category_nav.php"; ?>

<!-- <div class="alert alert-danger text-center mb-0 h6">
 <i class="fa fa-exclamation-circle"></i>
 The Page Or User Account You Are Looking for Is No Longer Available
</div> -->

<div class="modal fade" id="register-modal"><!-- modal fade starts-->

<div class="modal-dialog">
    <div class="modal-form register modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Register Account

            </h5>
            <button class="close" data-dismiss="modal">
                <span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <label  class="form-control-label font-weight-bold">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Full">
                </div>
                <div class="form-group">
                    <label  class="form-control-label font-weight-bold">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Full">
                </div>
                <div class="form-group">
                    <label  class="form-control-label font-weight-bold">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                    <small class="form-text text-muted">
                    !Important Username can not be changed once an account is registered
                </small>
                </div>
        
                <div class="form-group">
                    <label  class="form-control-label font-weight-bold">Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                    <label  class="form-control-label font-weight-bold">Confirm Password</label>
                    <input type="password" class="form-control" name="con_pass" placeholder="Confirm Your Password">
                </div>
                <input type="submit" name="register" class="btn btn-success btn-block" value="Register Here">
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="login-modal">
    <div class="modal-dialog">
        <div class="modal-form modal-content">
            
                <div class="modal-header">
                    <h5 class="modal-title">Login To Your Account</h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>      
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="seller_user_name" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="seller_pass" placeholder="Password" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-success btn-block" value="Login">
                    <div class="text-center mt-3">
                        <a href="" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">
                            Register
                        </a>
                        &nbsp; &nbsp; | &nbsp; &nbsp;
                        <a href="" data-toggle="modal" data-target="#forgot-modal" data-dismiss="modal">
                            Forgot Password
                        </a>
                    </div>
                </div>    
          </div>
      </div>
</div>

<div class="modal fade" id="forgot-modal">
<div class="modal-dialog">
    <div class="modal-form modal-content">
        <div class="modal-header">
            <h5 class="modal-title"> Forgot Password

            </h5>
            <button class="close" data-dismiss="modal">
                <span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-muted text-center mb-2">
                Enter your Computerfever profile email & we'll send a password reset link.
            </p>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="forgot_email" placeholder="Enter Your Email">
                </div>
                <input type="submit" name="forgot" value="Submit" class="btn btn-success btn-block">
                <p class="text-muted text-center mt-2">
                    Not A Member Yet?
                </p>
                <a href="" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">
                    Join Now
                </a>
            </form>
        </div>
    </div>
</div>
</div>
</div>