<?php
session_start();
ob_start();
if(!isset($_SESSION['Aemail'])){ 
header("Location:login.php"); }
 $connect = mysqli_connect("localhost", "root","", "ghureashi");
$hid=$hname="";
 if(isset($_POST['ar']))
 {  
     $hid=$_POST['hdn'];
     $hname=$_POST['hnn'];
 }

$name=$address=$ht=$cn=$area="";

 if(isset($_POST['insert']))
 {  
     
     
     $name=$_POST['hname'];
     $address=$_POST['hadd'];
     $ht=$_POST['ht'];
     $cn=$_POST['cn'];
     $area=$_POST['area'];
     
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO hotel(id,name,password,h_name,address,type,contact_no,image,area)VALUES('','$name','p1234','$name','$address','$ht','$cn','$file','$area')";
     
      if(mysqli_query($connect,$query))  
      {  
           echo '<script>alert("Hotel Inserted into Database")</script>';
      ?>
<?php
      }

    header("Location:shotel.php");


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Ghure Ashi</title>
</head>

<body>
<?php include("navbar.php"); ?>
    <!-- upload blog start -->
<div class="text-center">
    <h1 class="mt-4">Write the description and upload photo</h1>
   <h3><form method="post" enctype="multipart/form-data">  
        <input class="mt-3 mb-2" type="file" name="image" id="image" required/><br>  
       <strong>Hotel Name : </strong>   
       <input class="mt-2 mb-2"style="margin-top:30px;" type="text" name="hname" required/>  <br>
       <strong style="margin-left:50px;">Address : </strong>   
       <input class="mt-2 mb-2" type="text" name="hadd" required/>  <br>
       <strong style="margin-left:20px;">Hotel Type : </strong>
       <input class="mt-2 mb-2" type="text" name="ht" id="bedt" required/>  <br>
       <strong class="mt-2 " style="margin-left:10px;">Contact No : </strong>
       <input class="mt-2" type="text" name="cn" required/>  <br> <br>
        <strong class="mb-2" style="margin-left:110px;">Area : </strong>
       <input  class=" mb-2 mr-2" type="text" name="area" required/>  <br><br> 
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