<?php
include('connection.php');
session_start();
$id=$_SESSION['id'];

if(isset($_POST['set'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $pass=$_POST['password'];

    // echo $name;
    $sql = "UPDATE user SET name='$name',email='$email',contact='$contact',address='$address',password='$pass' WHERE id = '$id'";
     $conn->exec($sql);
}
$sql="SELECT *
      FROM user
      WHERE '$id' LIKE id";

$returnvalue=$conn->query($sql);
// $rowcount=$returnvalue ->rowcount();
$r=$returnvalue->fetchALL(PDO::FETCH_NUM);
$_SESSION['name'] = $r[0][1];
$_SESSION['id'] = $r[0][0];
$_SESSION['email'] = $r[0][2];
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
      <?php  if(isset($_SESSION['Aname']))
    {
       include("navbar.php");
    } 
    else
    {
        include("navbaru.php");
    } ?>
    
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
                                placeholder="Password" />
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

    <!-- update profile -->

<?php
if(isset($_POST['update'])){
    $id=$_SESSION['id'];
$sql="SELECT *
      FROM user
      WHERE '$id' LIKE id";

$returnvalue=$conn->query($sql);
// $rowcount=$returnvalue ->rowcount();
$r=$returnvalue->fetchALL(PDO::FETCH_NUM);
?>
    <main role="main" class="container my-3">
      <div class="row">
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Update Information
          </h3>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->
 </main><!-- /.container -->
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
                <div class=" row col-md-4">
                    <input type="text" class="form-control" name="name" value="<?php echo $r[0][1]; ?>" id="inputPassword">
                </div>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
                <div class=" row col-md-4">
                    <input type="text" class="form-control" name="email" value="<?php echo $r[0][2]; ?>" id="inputPassword">
                </div>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Contact</label>
                <div class=" row col-md-4">
                    <input type="text" class="form-control" name="contact" value="<?php echo $r[0][3]; ?>" id="inputPassword">
                </div>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
                <div class=" row col-md-4">
                    <input type="text" class="form-control" name="address" value="<?php echo $r[0][4]; ?>" id="inputPassword">
                </div>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
                <div class=" row col-md-4">
                    <input type="text" class="form-control" name="password" value="<?php echo $r[0][5]; ?>" id="inputPassword">
                </div>
            </div>
            <button type="submit" name="set" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php }
else{
    ?>


    <!-- update profile -->
    
    <!-- profile view start -->
    <div>
        <main role="main" class="container my-3">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        Profile
                    </h3>

                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3"><?php echo $r[0][1]; ?></h3>
                        <h5>Email: </h5>
                        <p><?php echo $r[0][2]; ?></p>
                        <h5>Contact: </h5>
                        <p><?php echo $r[0][3]; ?></p>
            <!-- <pre><code>Example code block</code></pre> -->
                        <h5>Address:</h5>
                        <p><?php echo $r[0][4]; ?></p>
                        <h5>Gender:</h5>
                        <p><?php echo $r[0][6]; ?></p>
                        <h5>Password:</h5>
                        <p><?php echo $r[0][5]; ?></p>
                    </div><!-- /.blog-post -->

                </div><!-- /.blog-main -->


            </div><!-- /.row -->
            <form action="" method="post">
                <button type="submit" name="update" class="btn btn-primary pull-right">Update Profile</button>
            </form>
        </main><!-- /.container -->
    </div>
    <!-- profile view end -->

    <?php
}
?>
    <main role="main" class="container mt-5">
      <div class="row">
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Booking List
          </h3>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->
 </main>
<?php
$id=$_SESSION['id'];
$sql="SELECT *
      FROM booking
      WHERE '$id' = user_id";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0){
    ?>
    <!-- booking list view start -->

    <div>
        <main role="main" class="container ">
            <!-- <div class="row"> -->
                <div class=" blog-main">
                    <h3 class="pb-3 mb-4 font-italic">
                    </h3>
<?php 
$id=$_SESSION['id'];
$sql="SELECT *
      FROM booking
      WHERE '$id' = user_id AND booking_category LIKE 'Hotel%' AND payment_status='PAID'  ";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0)
{?>
                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3">Hotel</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col">Room No</th>
                                <th scope="col">Price</th>
                                <th scope="col">Payment status</th>
                                </tr>
                            </thead>
<?php 
for($i=0;$i<count($r);$i++){ $hname=explode("-",$r[$i][5]);   ?>
                            <tbody>
                                <tr>
                                <td><?php echo $r[$i][3] ?></td>
                                <td><?php echo $r[$i][4] ?></td>
                                <td><?php echo $hname[1] ?></td>
                                <td><?php echo $r[$i][6] ?></td>
                                <td><?php echo $r[$i][8] ?></td>
                                <td><?php echo $r[$i][10] ?></td>
                                </tr>
                            </tbody>
<?php }
?>                            
                                
                        </table>
                    </div><!-- /.blog-post -->


<?php
} 
$id=$_SESSION['id'];
$sql="SELECT *
      FROM booking
      WHERE '$id' = user_id AND booking_category LIKE 'Tour Guide%' AND payment_status='PAID' ";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0)
{?>
                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3">Tour Guide</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Tour Guide Name</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Price</th>
                                <th scope="col">Payment status</th>
                                </tr>
                            </thead>
<?php 
for($i=0;$i<count($r);$i++){ $hname=explode("-",$r[$i][5]);   ?>
                            <tbody>
                                <tr>
                                <td><?php echo $r[$i][3] ?></td>
                                <td><?php echo $r[$i][4] ?></td>
                                <td><?php echo $hname[1] ?></td>
                                <td><?php echo $r[$i][6] ?></td>
                                <td><?php echo $r[$i][8] ?></td>
                                <td><?php echo $r[$i][10] ?></td>
                                </tr>
                            </tbody>
<?php }
?>                            
                                
                        </table>
                    </div><!-- /.blog-post -->

<?php
}
?>                
<?php 
$id=$_SESSION['id'];
$sql="SELECT *
      FROM booking
      WHERE '$id' = user_id AND booking_category LIKE 'Local Vehicle%' AND payment_status='PAID'  ";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0)
{?>
                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3">Local Vehicle</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Driver Name</th>
                                <th scope="col">Vehicle Reg No</th>
                                <th scope="col">Price</th>
                                <th scope="col">Payment status</th>
                                </tr>
                            </thead>
<?php 
for($i=0;$i<count($r);$i++){ $hname=explode("-",$r[$i][5]);   ?>
                            <tbody>
                                <tr>
                                <td><?php echo $r[$i][3] ?></td>
                                <td><?php echo $r[$i][4] ?></td>
                                <td><?php echo $hname[1] ?></td>
                                <td><?php echo $r[$i][6] ?></td>
                                <td><?php echo $r[$i][8] ?></td>
                                <td><?php echo $r[$i][10] ?></td>
                                </tr>
                            </tbody>
<?php }
?>                            
                                
                        </table>
                    </div><!-- /.blog-post -->

<?php
}
?>
                </div><!-- /.blog-main -->


            <!-- </div>/.row -->

        </main><!-- /.container -->
    </div>
    <!-- booking list view end -->
<?php
}
else{
    ?>
    <h3 class="blog-post-title text-center mb-3">Empty Booking List.</h3>
<?php
}

?>



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