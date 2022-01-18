<!-- Navbar started -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">GHURE ASHI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- col-auto start -->
            <div class="col-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="index.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="shotel.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="shotel.php">Hotel</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="srcvehicle.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="srcvehicle.php">Vehicle</a>
                        </li>
                       <li <?php if(basename($_SERVER['PHP_SELF'])=="stour.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="stour.php">Tour Guide</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="blog.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="s_restaurants.php" ||basename($_SERVER['PHP_SELF'])=="s_touristspot.php" )
                        {?> class="nav-item dropdown active"<?php } else{?> class="nav-item dropdown" <?php } ?> >
                            
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nearby Search
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="s_restaurants.php">Restaurant</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="s_touristspot.php">Tourist Spots</a>
                            </div>
                            </li>
                            <?php
                        if(isset($_SESSION['email']))
                            { ?>
                            
                            
                        <img name="image" class="ml-2" id="image" src="image/user7.png" alt="phone" height="30" width="30">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['name']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php">Booking History</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" name="logout" id="logout" href="LogSign.php">Log out</a>
                            </div>
                            </li>
                        <?php
                        }
                            else { ?>
                            
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#logineModal" href="#">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#signupModal" href="#">Sign Up</a>
                        </li>
                        
                        <?php } ?> 
                    </ul>
                </div>
            </div>
            <!-- col-auto end -->
        </div>
    </nav>
    <!-- Navbar end -->