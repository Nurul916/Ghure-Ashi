<?php
ob_start();
session_start();

    $did=null;
    if(isset($_POST['did'])) $did=$_POST['did'];
    
    $con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ghureashi');
    
        $query= "SELECT * 
            FROM blog
            WHERE id LIKE '$did' ";
//echo $did;
    $queryfire = mysqli_query($con,$query);
    
    $details = mysqli_fetch_array($queryfire);
//print_r ($details);
// echo '<img src="data:image/jpeg;base64,'.base64_encode( $details['image'] ).'"alt="" width="300" height="300" style="border:5px solid black/>';

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
                                            value="option1" checked />
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="option2" />
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
    
    <div class="col-lg-12 col-md-12 col-sm-12 mb-5 mt-3">
                <div class="card">
                    <h2 name="tittle" id="tittle" style="opacity:.9" class="card-title mt-1 text-center"> <strong> <?php echo 
                        $details['tittle']; ?></strong> </h2>
                    
                    <div class="card-body text-center" id="body">
                        
                        
                   <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $details['image'] ).'"alt="" width="300" height="300" style="border:5px solid black"/>'; ?>
                         
                        
                        
                    <p name="des" id="des" class="card-title text-top"><strong> <h3>Description :</h3> <?php echo 
                    $details['description']; ?></strong> </p>
                

                    </div>
            </div>
                 
                
            
            </div>
    
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