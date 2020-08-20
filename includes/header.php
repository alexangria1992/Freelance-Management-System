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
                        <div class="header-message-div-unread">
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
                <li class="nav-item dropdown">
                    <a href="" title="Inbox Messages" data-toggle="dropdown" class="nav-link dropdown-toggle mr-lg-2">
                        <i class="fa fa-fw fa-lg fa-envelope"></i>
                        <span class="d-lg-none">Messages <span class="badge badge-pill badge-danger">1 New</span></span>
                        <span class="new-indicator text-danger d-lg-block d-none">
                            <i class="fa fa-fw fa-circle"></i>
                            <span class="number">1</span>
                        </span>
                    </a>
                    <div class="dropdown-menu messages-dropdown">
                        <h3 class="dropdown-header">
                            Inbox(1)
                            <a href="conversations/inbox.php" class="float-right">View Inbox</a>
                        </h3>
                        <div class="header-message-div-unread">
                            <a href="conversations/insert_message.php?single_message_id">
                                <img src="user_images/brock.jpg" width="60" height="60" class="rounded-circle" alt="">
                                <strong class="heading"></strong>
                                <p class="message text-truncate">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <p class="date text-muted">26:11: Nov 26 2020</p>
                            </a>
                        </div>

                        <div class="header-message-div">
                            <a href="conversations/insert_message.php?single_message_id">
                                <img src="user_images/brock.jpg" width="60" height="60" class="rounded-circle" alt="">
                                <strong class="heading"></strong>
                                <p class="message text-truncate">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <p class="date text-muted">26:11: Nov 26 2020</p>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="favourites.php" title="Favourites" class="nav-link mr-lg-2">
                    <i class="fa fa-fw fa-lg fa-heart"></i>
                    <span class="d-lg-none">
                        Favourites <span class="badge badge-pill badge-success">4</span>
                    </span>
                    <span class="new-indicator text-success d-lg-block d-none">
                        <i class="fa fa-fw fa-circle"></i>
                        <span class="number">4</span>
                    </span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="cart.php" title="Cart" class="nav-link mr-lg-2">
                    <i class="fa fa-fw fa-lg fa-shopping-cart"></i>
                    <span class="d-lg-none">
                        Cart <span class="badge badge-pill badge-success">7</span>
                    </span>
                    <span class="new-indicator text-success d-lg-block d-none">
                        <i class="fa fa-fw fa-circle"></i>
                        <span class="number">7</span>
                    </span>
                    </a>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                            <img src="user_images/fixmywebsite.jpg" width="27" height="27" alt="" class="rounded-circle">
                            fixmywebsite <span class="badge badge-success"> $172</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="dashboard.php" class="dropdown-item">
                                Dashboard
                            </a>
                            <a href="#" data-target="#selling" data-toggle="collapse" class="dropdown-item dropdown-toggle">
                                Selling
                            </a>
                        
                        <div id="selling" class="dropdown-submenu collapse">
                            <a href="selling_orders.php" class="dropdown-item">
                                Orders
                            </a>
                            <a href="proposals/view_proposals.php" class="dropdown-item">
                                View Proposals
                            </a>
                            <a href="requests/buyer_requests.php" class="dropdown-item">
                                Buyer Requests
                            </a>
                            <a href="revenue.php" class="dropdown-item">
                                Revenues
                            </a>
                        </div>
                        <a href="" data-target="#buying" data-toggle="collapse" class="dropdown-item dropdown-toggle">
                            Buying
                        </a>
                        <div id="buying" class="dropdown-submenu collapse">
                            <a href="buying_orders.php" class="dropdown-item">
                                Orders
                            </a>
                            <a href="purchases.php" class="dropdown-item">
                                Payments
                            </a>
                            <a href="favourites.php" class="dropdown-item">
                                Favourites
                            </a>
                        </div>
                        <a href="" data-toggle="collapse" data-target="#requests" class="dropdown-item dropdown-toggle">
                            Requests
                        </a>
                        <div id="requests" class="dropdown-submenu collapse">
                            <a href="requests/post_request.php" class="dropdown-item">
                        Post A Request
                            </a>
                            <a href="requests/manage_requests.php" class="dropdown-item">
                            Manage Requests
                            </a>
                        </div>
                            <a href="requests/manage_requests.php" data-target="#contacts" data-toggle="collapse" class="dropdown-item dropdown-toggle">
                            Contacts
                            </a>
                            <div id="contacts" class="dropdown-submenu collapse">
                                <a href="manage_contacts.php?my_buyers" class="dropdown-item">
                                    My Buyers
                                </a>
                                <a href="manage_contacts.php?my_sellers" class="dropdown-item">
                                    My Sellers
                                </a>
                            </div>

                            <a href="my_referrals.php" class="dropdown-item">
                                My Referrals
                            </a>
                            <a href="conversations/inbox.php" class="dropdown-item">
                                inbox Conversations
                            </a>
                            <a href="user.php" class="dropdown-item">
                                My Profile
                            </a>
                            <a href="#" class="dropdown-item dropdown-toggle" data-toggle="collapse" data-target="#settings">
                                Settings
                            </a>
                            <div id="settings" class="dropdown-submenu collapse">
                                <a href="settings.php?profile_settings" class="dropdown-item">
                                    Profile Settings
                                </a>
                                <a href="settings.php?account_settings" class="dropdown-item">
                                    Account Settings
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item">
                                    Logout
                                </a>
                            
                        </div>
                    </div>
                </li>



               
            </ul>
        </div>
    </div>
</nav>

<?php include "category_nav.php"; ?>

<div class="alert alert-danger text-center mb-0 h6">
 <i class="fa fa-exclamation-circle"></i>
 The Page Or User Account You Are Looking for Is No Longer Available
</div>

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