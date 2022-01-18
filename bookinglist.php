<?php
include('connection.php');
session_start();
/*
SELECT b.*,u.name,u.email FROM booking as b join user as u on b.user_id=u.ID
 */
if(isset($_POST['delete'])){
    $bid=$_POST['delete'];
    // echo $bid;
    $sql= "DELETE 
            FROM booking
            WHERE id = '$bid' "; 
    $conn->exec($sql);

}

$sql="SELECT *
      FROM booking" ;

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
//print_r($r);
//$hname=explode("-",$r[$i][5]);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Ghure Ashi</title>
  </head>
  <body>
        <?php
            include("navbar.php");
        ?>


 <div>
 <?php
$id=1;
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
$id=1;
$sql="SELECT b.*,u.name,u.email 
      FROM booking as b 
      join 
      user as u on b.user_id=u.ID 
      where b.booking_category LIKE 'Hotel%' ";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0)
{?>
                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3">Hotel</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col">Room No</th>
                                <th scope="col">Payment status</th>
                                <th scope="col">Click To Delete</th>
                                </tr>
                            </thead>
<?php 
for($i=0;$i<count($r);$i++){ $hname=explode("-",$r[$i][5]);   ?>
                            <tbody>
                                <tr>
                                <td><?php echo $r[$i][11] ?></td>
                                <td><?php echo $r[$i][12] ?></td>
                                <td><?php echo $r[$i][3] ?></td>
                                <td><?php echo $r[$i][4] ?></td>
                                <td><?php echo $hname[1] ?></td>
                                <td><?php echo $r[$i][6] ?></td>
                                <td><?php echo $r[$i][10] ?></td>
                                <td>
                                <form action="" method="post">
                                    <button type="submit" name="delete" value="<?php echo $r[$i][0] ?>" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                                </tr>
                            </tbody>
<?php }
?>                            
                                
                        </table>
                    </div><!-- /.blog-post -->


<?php
} 
$id=1;
$sql="SELECT b.*,u.name,u.email 
      FROM booking as b 
    join 
    user as u on b.user_id=u.ID 
    where b.booking_category LIKE 'Tour Guide%' ";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0)
{?>
                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3">Tour Guide</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Tour Guide Name</th>
                                <th scope="col">NID No.</th>
                                
                                <th scope="col">Payment status</th>
                                <th scope="col">Click To Delete</th>
                                </tr>
                            </thead>
<?php 
for($i=0;$i<count($r);$i++){ $hname=explode("-",$r[$i][5]);   ?>
                            <tbody>
                                <tr>
                                <td><?php echo $r[$i][11] ?></td>
                                <td><?php echo $r[$i][12] ?></td>
                                <td><?php echo $r[$i][3] ?></td>
                                <td><?php echo $r[$i][4] ?></td>
                                <td><?php echo $hname[1] ?></td>
                                <td><?php echo $r[$i][6] ?></td>
                                
                                <td><?php echo $r[$i][10] ?></td>
                                <td>
                                <form action="" method="post">
                                    <button type="submit" name="delete" value="<?php echo $r[$i][0] ?>" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
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
$id=1;
$sql="SELECT b.*,u.name,u.email 
      FROM booking as b 
      join 
      user as u on b.user_id=u.ID 
      where b.booking_category LIKE 'Local Vehicle%' ";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM); 
if(count($r)>0)
{?>
                    <div class="blog-post">
                        <h3 class="blog-post-title mb-3">Local Vehicle</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Driver Name</th>
                                <th scope="col">Vehicle Reg No</th>
                                
                                <th scope="col">Payment status</th>
                                <th scope="col">Click To Delete</th>
                                </tr>
                            </thead>
<?php 
for($i=0;$i<count($r);$i++){ $hname=explode("-",$r[$i][5]);   ?>
                            <tbody>
                                <tr>
                                <td><?php echo $r[$i][11] ?></td>
                                <td><?php echo $r[$i][12] ?></td>
                                <td><?php echo $r[$i][3] ?></td>
                                <td><?php echo $r[$i][4] ?></td>
                                <td><?php echo $hname[1] ?></td>
                                <td><?php echo $r[$i][6] ?></td>
                                
                                <td><?php echo $r[$i][10] ?></td>
                                <td>
                                <form action="" method="post">
                                    <button type="submit" name="delete" value="<?php echo $r[$i][0] ?>" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
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
 </div>

  <!-- footer start -->
  <section>
        <footer class="mt-3">
            <div class="containerf fb">
                <div class="sec aboutus">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolores debitis, modi animi
                        excepturi delectus porro doloribus consequatur, architecto nihil asperiores iste vero cupiditate
                        facere sequi vel! Doloremque, eveniet consequatur? Sapiente culpa maxime cupiditate facilis
                        nihil nemo itaque repellat beatae aliquam? Eveniet perspiciatis praesentium unde quae qui eos
                        accusantium beatae!</p>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>