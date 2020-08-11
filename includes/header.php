<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php" class="navbar-brand">Computerfever</a>
        <a href="mobile_categories.php" class="navbar-toggler"><i class="fa fa-th-large"
        style = "font-size:1.5em;"></i></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <hr>

            <form action="" method="post" class="form-inline mr-auto">
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
                <li class="nav-item-active">
                    <a href="./index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-target="#register-modal">Become a Seller</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-target="#login-modal">Sign In</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn btn-primary btn-sm" data-target="#register-modal">Sign Up</a>
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

<div class="modal fade" id="register-modal">
    
</div>