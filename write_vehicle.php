<?php
session_start();
ob_start();
if(!isset($_SESSION['Aemail'])){ 
header("Location:login.php"); }
$connect = mysqli_connect("localhost", "root","", "ghureashi");

 if(isset($_POST["insert"]))  
 {   

     $name = $_POST['name'];
     $contact = $_POST['contact'];
     $d_l = $_POST['d_license'];
     $nid = $_POST['nid'];
     $v_num = $_POST['v_number'];
     $h_rate = $_POST['hire_rate'];
     $seat = $_POST['seat'];
     $area = $_POST['area'];
     $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); ;

     
     

     ?>
    <!-- <div class="container my-5">
        <h2 class="featurette-heading">Input vehicle </h2>
        <h2 class="featurette-heading"><?php echo $name ?></h2>
        <h2 class="featurette-heading"><?php echo $nid ?></h2>
        <h2 class="featurette-heading"><?php echo $contact ?></h2>
        <h2 class="featurette-heading"><?php echo $h_rate ?></h2>
        <h2 class="featurette-heading"><?php echo $area ?></h2>
        <h2 class="featurette-heading"><?php echo $d_l ?></h2>
        <h2 class="featurette-heading"><?php echo $v_num ?></h2>
    </div> -->
    <?php
     $query ="SELECT * 
              FROM lveh
              WHERE contact     LIKE '$contact' 
                    AND driver_name LIKE '$name' 
                    AND area        LIKE '$area'
                    AND hire_rate   LIKE '$h_rate' 
                    AND nid         LIKE '$nid'
                    AND v_number    LIKE '$v_num'
                    AND driver_license LIKE '$d_l'
                    AND seat LIKE '$seat' ";

    $queryfire = mysqli_query($connect,$query);
    $num = mysqli_num_rows($queryfire);
    ?>
   <!--  <div class="container my-5">
        <h2 class="featurette-heading">Num:<?php echo $num?> </h2>
    </div> -->
    <?php
    // $details = mysqli_fetch_array($queryfire);
    $n = null ;
    if($num == 0)
    {
          $query1 = "INSERT INTO `lveh` ( 
                                           `driver_name`, 
                                           `contact`, 
                                           `driver_license`, 
                                           `nid`, 
                                           `v_number`, 
                                           `hire_rate`,
                                            seat, 
                                           `area`,
                                            image
                                           )
                     VALUES ('$name', 
                              '$contact', '$d_l', '$nid', '$v_num', '$h_rate', 
                              '$seat','$area', '$image') ";
          if(mysqli_query($connect,$query1))
          {
            
            header("Location:add_remove_vehicle.php");
  
    
          }
          else
          {
               ?>
               <script>alert("Not Inserted!!!!") </script>
              <?php

          }
         
         header("Location:add_remove_vehicle.php");
    }
    else
    {
       ?>
       <script>alert("Alredy Exist") </script>
       <?php
    

    }

}    
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
    <!-- upload blog start -->
<div class="text-center">
    <h1 class="mt-5">Add Vehicle's Info </h1>
   <h3><form method="post" enctype="multipart/form-data">  
         <!-- <input class="mt-5 mb-2" type="file" name="image" id="image" required/><br>   -->
       <input class="mt-5 mb-2" type="file" name="image" id="image" required/><br> 
       <strong>Driver Name :</strong>    
       <textarea style="margin-top:30px; margin-right:135px" cols="44" type='text' name="name" id="name" required></textarea>  <br>
        <strong>Contact No  :</strong>
       <textarea style="margin-top:30px; margin-right:125px" cols="44" name="contact" id="contact" required></textarea>  <br>
       <strong>Driver's License :</strong>
       <textarea style="margin-top:30px; margin-right:190px" cols="44" name="d_license" id="d_license" required></textarea>  <br>
        <strong>NID  :</strong>
       <textarea style="margin-top:30px; margin-right:45px" cols="44" name="nid" id="nid" required></textarea>  <br>
       <strong>Vehicle's No :</strong>
       <textarea style="margin-top:30px; margin-right:150px" cols="44" name="v_number" id= "v_number" required></textarea>  <br>
       <strong>Hire Rate :</strong>
       <textarea style="margin-top:30px; margin-right:120px" cols="44" name="hire_rate" id="hire_rate" required></textarea>  <br>
       <strong>Capacity :</strong>
       <textarea style="margin-top:30px; margin-right:100px" cols="44" name="seat" id="seat" required></textarea>  <br>
       <strong>Area  :</strong>   
       <textarea style="margin-top:30px; margin-right:45px" cols="44" type='text' name=
       "area" id="area" required></textarea>  <br>
      
       <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info btn-lg" />  
    </form>
       </h3>
    </div>
    
    <!-- upload blog end -->
    
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