<?php
session_start();
if(!isset($_SESSION['Aemail'])){ 
header("Location:login.php"); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Ghure Ashi</title>
</head>

<body>
    
    <!-- Navbar started -->
     <?php
       include("navbar.php");
      ?>
    <!-- Navbar end -->

    <!-- hotel card start -->
    <section class="container">
        <!-- hotel cart start  -->
        <div class="card py-2 my-5" style="box-shadow: 5px 10px 10px 5px #888888;">
            <div class="row">
                <div class="col-md-6 my-3">
                    <img class="card-img-top" src="image/hotel.jpg" alt="Card image"
                        style="width: 100%; height: 250px !important" />
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card-body" style="width: 400px; height: 200px">
                        <h2 class="card-title">Hotel Information</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        <form class="form-horizontal" action="shotel.php">
                            <div class="form-group">
                                <label for="areaname">Enter Destination:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="areaname"  />
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- hotel cart end  -->

        <!-- vehicle cart start  -->
        <div class="card py-2 my-5" style="box-shadow: 5px 10px 10px 5px #888888;">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body mt-3" style="width: 400px; height: 200px">
                        <h2 class="card-title">Vehicle Information</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        
                        <form class="form-horizontal" action="add_remove_vehicle.php" method="get">
                            <div class="form-group">
                                <label for="areaname">Enter Destination:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="areaname" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="card-img-top ml-5" src="image/Chander_gari.jpg" alt="Card image"
                        style="width: 90%; height: 250px !important" />
                </div>
            </div>
        </div>
        <!-- vehicle cart end  -->
        <!-- Tour guide cart start  -->
        <div class="card py-2 my-5" style="box-shadow: 5px 10px 10px 5px #888888;">
            <div class="row">
                <div class="col-md-6">
                    <img class="card-img-top" src="image/guide.jpg" alt="Card image"
                        style="width: 100%; height: 250px !important" />
                </div>
                <div class="col-md-6">
                    <div class="card-body mt-3" style="width: 400px; height: 200px">
                        <h2 class="card-title">Tour Guide Information</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        <form class="form-horizontal" action="add_remove_tourguide.php">
                            <div class="form-group">
                                <label for="email">Enter Destination:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="areaname" required/>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- tour guide cartend  -->
        
        
                <!-- blog cart start  -->
        <div class="card py-2 my-5" style="box-shadow: 5px 10px 10px 5px #888888;">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body mt-3" style="width: 400px; height: 200px">
                        <h2 class="card-title">Blog Information</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        <form class="form-horizontal" method="post" action="Blog.php">
                            <div class="form-group">
                                <label for="areaname">Enter an Area:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="search" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="card-img-top ml-5" src="image/blog.png" alt="Card image"
                        style="width: 90%; height: 250px !important" />
                </div>
            </div>
        </div>
        <!-- blog cart end  -->
    
        
    </section>

    <!-- nearby search section -->
    <section>
        <div class="my-3">
            <div class="py-3 ">
                <h2 class="text-center">Explore Nearby </h2>
            </div>
        </div>
        <div class="container my-3">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Nearby Restaurant Information</h2>
                    <h4><span class="text-muted">Hungry? Don't know where to eat?</span></h4>
                    <p class="lead">Explore your nearby popular restaurants and authentic foods .</p>
                    <form class="form-inline" action="add_remove_restaurant.php">
                        <div class="form-group mb-2">
                           <!--  <label for="areaRes" class="sr-only">Password</label> -->
                            <input type="text" class="form-control" id="areaRes" placeholder="Enter city name" name="areaname" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 mx-3">Search</button>
                    </form>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="400" src="image/nerbyres.jpg">
                </div>
            </div>
        </div>

        <!-- nearby tourist spot start -->

        <div class="container my-5">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Nearby Tourist Spots Information</h2>
                    <h4><span class="text-muted">Hungry? Don't know here to eat?</span></h4>
                    <p class="lead">Explore your nearby popular restaurants and authentic foods .</p>
                    <form class="form-inline" action="add_remove_touristspot.php">
                        <div class="form-group mb-2">
                            <!--<label for="areaRes" class="sr-only">Password</label> -->
                            <input type="text" class="form-control" id="areaRes" placeholder="Enter city name" 
                            name="areaname" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 mx-3">Search</button>
                    </form>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" src="image/nearbyLocation.jpg">
                </div>
            </div>
        </div>
        <!-- nearby tourist spot end -->
    </section>


 
    <!-- footer start -->
    <section>
        <footer class="mt-3">
            <div class="containerf fb">
                <div class="sec aboutus">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolores debitis, modi animi excepturi delectus porro doloribus consequatur, architecto nihil asperiores iste vero cupiditate facere sequi vel! Doloremque, eveniet consequatur? Sapiente culpa maxime cupiditate facilis nihil nemo itaque repellat beatae aliquam? Eveniet perspiciatis praesentium unde quae qui eos accusantium beatae!</p>
                    <ul class="sci">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="sec quicklinks">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacr Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact </a></li>
                    </ul>
                </div>
                <div class="sec contact">
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span>GA-32/2 Shahzadpur Gulshan-1 Dhaka-1200<br>Bangladesh</span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <p><a href="tel:88017112233">+88 01723 456 789</a></p>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <p><a href="mailto:knowmore@email.con">knowmore@email.com</a></p>
                        </li>

                    </ul>

                </div>
            </div>
        </footer>
        <div class="copyright">
            <p>Copyright @ 2020 Ghure Ashi team. All Rights Reserved.</p>
        </div>
    </section>

    <!-- footer end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>