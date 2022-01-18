<?php
session_start();
include("connection.php");
$sql="SELECT *
             FROM blog
             LIMIT 2";



$returnvalue=$conn->query($sql);
// $rowcount=$returnvalue ->rowcount();
$r=$returnvalue->fetchALL(PDO::FETCH_NUM);
//print_r($r);
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
        include("navbaru.php");
    ?>
    
    <!-- Navbar end -->

    <!-- login modal start -->
    <!-- Button trigger modal -->
    <!--login  Modal -->
    <div class="modal fade" id="logineModal" tabindex="-1" role="dialog" aria-labelledby="logineModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logineModalLabel">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action=LogSign.php>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="emaill" id="emaill" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="passl" id="passl" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password"  />
                        </div>

                        <button type="submit" class="btn btn-primary" name="submitl" id="submitl">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- login modal end -->

    <!-- sign up modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="LogSign.php">
                        <div class="form-group">
                            <label for="username" >Username</label>
                            <input name="name" id="name" type="text" class="form-control" id="username" aria-describedby="usernameHelp"
                                placeholder="Enter Username"  />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" >Email address</label>
                            <input name="email" id="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Password</label>
                            <input name="pass" id="pass" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="contactno" >Contact No.</label>
                            <input name="contact" id="contact" type="text" class="form-control" id="contactno" aria-describedby="contactnoHelp"
                                placeholder="Enter Your Contact Number" />
                        </div>
                        
                        <div class="form-group">
                            <label for="address" >Address</label>
                            <input name="address" id="address" type="text" class="form-control" id="contactno" aria-describedby="contactnoHelp"
                                placeholder="Enter Your Contact Number" />
                        </div>
                        
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0" >Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="Male" checked />
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="Female" />
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up modal end -->

    <!-- slide start -->
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/saintmartin.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Explore the Country</h5>
                        <p>Go, fly, roam, travel, voyage, exolore, journey, discover, advanture.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/chandergari2.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Transportation</h5>
                        <p>You can't understand a city without using its public transportation system.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/rest.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Navigation</h5>
                        <p>
                            Just search for your nearby local service and enjoy your travel.
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- slide end -->

    <!-- hotel card start -->
    <section class="container">
                <div class="my-5">
            <div class="py-3 ">
                <h2 class="text-center" style="font-style: italic;">Booking Section</h2>
            </div>
        </div>
        <!-- hotel cart start  -->
        <div class="card py-2 my-5" style="box-shadow: 5px 10px 10px 5px #888888;">
            <div class="row">
                <div class="col-md-6">
                    <img class="card-img-top ml-4 my-2" src="image/hotel.jpg" alt="Card image"
                        style="width: 100%; height: 250px !important" />
                </div>
                <div class="col-md-6">
                    <div class="card-body my-3 ml-4" style="width: 400px; height: 200px">
                        <h2 class="card-title">Hotel Booking</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        <form class="form-horizontal" action="shotel.php">
                            <div class="form-group">
                                <label for="areaname">Enter Destination:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="areaname" />
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
                    <div class="card-body my-3 ml-3" style="width: 400px; height: 200px">
                        <h2 class="card-title">Vehicle Booking</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        <form class="form-horizontal" action="srcvehicle.php">
                            <div class="form-group">
                                <label for="areaname">Enter Destination:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="areaname" required/>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="card-img-top ml-4 my-2" src="image/Chander_gari.jpg" alt="Card image"
                        style="width: 90%; height: 250px !important" />
                </div>
            </div>
        </div>
        <!-- vehicle cart end  -->
        <!-- Tour guide cart start  -->
        <div class="card py-2 my-5" style="box-shadow: 5px 10px 10px 5px #888888;">
            <div class="row">
                <div class="col-md-6">
                    <img class="card-img-top my-2 ml-4" src="image/guide.jpg" alt="Card image"
                        style="width: 100%; height: 250px !important" />
                </div>
                <div class="col-md-6">
                    <div class="card-body my-3 ml-4" style="width: 400px; height: 200px">
                        <h2 class="card-title">Tour Guide Booking</h2>
                        <!-- <p class="card-text">Enter Destination:</p> -->
                        <form class="form-horizontal" action="stour.php">
                            <div class="form-group">
                                <label for="email">Enter Destination:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter City"
                                    name="areaname" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- tour guide cartend  -->
    </section>



    <!-- nearby search section -->
    <section>
        <div class="my-5">
            <div class="py-3 ">
                <h2 class="text-center" style="font-style: italic;">Explore Nearby</h2>
            </div>
        </div>
        <div class="container my-3">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">NEARBY RESTAURANT </h2>
                    <h4><span class="text-muted">Hungry? Don't know where to eat?</span></h4>
                    <p class="lead">Explore your nearby popular restaurants and authentic foods .</p>
                    <form class="form-inline" action="s_restaurants.php">
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
                    <h2 class="featurette-heading">NEARBY TOURIST SPOTS </h2>
                    <h4><span class="text-muted">Hungry? Don't know here to eat?</span></h4>
                    <p class="lead">Explore your nearby popular restaurants and authentic foods .</p>
                    <form class="form-inline" action="s_touristspot.php">
                        <div class="form-group mb-2">
                            <!-- <label for="areaRes" class="sr-only">Password</label> -->
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

    <!-- nearby search section end -->



    <!-- nearby gallery start -->
    <section>
        <div class="my-2">
            <div class="py-5">
                <h2 class="text-center" style="font-style: italic;">BEAUTIFUL BANGLADESH</h2>
            </div>
        </div>
        
        <div class="mx-4 sg">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/ratargul.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Ratargul</h2>
                            <h5>Sylhet</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img style="width:100;height:100; " src="image/borokol.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Borokol</h2>
                            <h5>Rangamati</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/lalakhal.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Lalakhal</h2>
                            <h5>Sylhet</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/adamkathi.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Adamkathi</h2>
                            <h5>Pirojpur</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/amiakhum.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Amiakhum</h2>
                            <h5>Bandarbon</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/sajek.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Sajek</h2>
                            <h5>Khagrachori</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/Manasthangarh.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Mahasthan Garh</h2>
                            <h5>Bogura</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card1">
                        <img src="image/shorno mondir.jpg" alt="" />
                        <div class="card1-text">
                            <h2>Balaghata</h2>
                            <h5>Bandarban</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- nearby galley end -->

    <!-- blog start  -->
    <section>
        <div class="jumbotron img-jumbo p-3 p-md-5 text-white rounded bg-dark">
            <div class="container">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic"> BLOG </h1>
                    <p class="lead my-3 ">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                    <h3 class="font-italic "> <a href="blog.php" class="text-white mt-3">Read More...</a> </h3>
                </div>
            </div>
        </div>
          <div class="row mb-2 mx-3">

            <div class="col-md-5 ml-5 ">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0"><?php echo strtoupper($r[0][4]); ?></h3>
                  
                  <p class="card-text mb-auto"><?php echo $r[0][5]; ?></p>
                  <a href="blog.php" class="stretched-link">Read More Blog</a>
                  
                </div>
                <div class="col-auto  d-none d-lg-block my-2">
                <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300"
                    height="300" src="data:image/jpeg;base64,'.base64_encode( $r[0][3] ).'"alt="" style="border:5px solid black"/>';?>
        
                </div>
              </div>
            </div>


            <div class="col-md-5 ml-5">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0"><?php echo strtoupper($r[1][4]); ?></h3>
                  <p class="mb-auto"><?php echo $r[1][5]; ?></p>
                  <a href="blog.php" class="stretched-link">Read More Blog</a>
                </div>
                <div class="col-auto d-none d-lg-block my-2">
                <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300"
                    height="300" src="data:image/jpeg;base64,'.base64_encode( $r[1][3] ).'"alt="" style="border:5px solid black"/>';?>
        
                </div>
              </div>
            </div>
          </div>
    </section>
     <!-- blog end  -->

    <!-- footer start -->
    <section>
        <footer class="mt-3">
            <div class="containerf fb">
                <div class="sec aboutus">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolores debitis, modi animi excepturi delectus porro doloribus consequatur, architecto nihil asperiores iste vero cupiditate facere sequi vel! Doloremque, eveniet consequatur? Sapiente culpa maxime cupiditate facilis nihil nemo itaque repellat beatae aliquam? Eveniet perspiciatis praesentium unde quae qui eos accusantium beatae!</p>
                    <ul class="sci">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
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
            <p>Copyright @ 2021 Ghure Ashi team. All Rights Reserved.</p>
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