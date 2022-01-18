 <!-- Navbar started -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="indexA.php">GHURE ASHI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- col-auto start -->
            <div class="col-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="indexA.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="indexA.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="shotel.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="shotel.php">Hotel</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="add_remove_vehicle.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="add_remove_vehicle.php">Vehicle</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="add_remove_tourguide.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="add_remove_tourguide.php">Tour Guide</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="blog.php")
                        {?> class="nav-item active"<?php } else{?> class="nav-item" <?php } ?> >
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li <?php if(basename($_SERVER['PHP_SELF'])=="add_remove_restaurant.php" ||basename($_SERVER['PHP_SELF'])=="add_remove_touristspot.php" )
                        {?> class="nav-item dropdown active"<?php } else{?> class="nav-item dropdown" <?php } ?> >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nearby Attractions
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="add_remove_restaurant.php">Restaurant</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="add_remove_touristspot.php">Tourist Spots</a>
                            </div>
                            </li>
                            <?php
                        
                        if(isset($_SESSION['Aemail']))
                            { ?>
                            
                            
                        <img name="image" class="ml-2" id="image" src="image/admin.jpg" alt="phone" height="30" width="30">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['Aname']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="bookinglist.php">Booking History</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" name="logout" id="logout" href="LogSign.php">Log out</a>
                            </div>
                            </li>
                       <?php } 

                            else { ?>
                            
                        
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                        
                        <?php } ?> 
                        
                        
                        
                    </ul>
                </div>
            </div>
            <!-- col-auto end -->
        </div>
    </nav>
    <!-- Navbar end -->