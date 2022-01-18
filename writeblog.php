<?php
session_start();
ob_start();
 $connect = mysqli_connect("localhost", "root","", "ghureashi");

if(isset($_SESSION['name'])) $name= $_SESSION['name'];
if(isset($_SESSION['id'])) $id= $_SESSION['id'];

 if(isset($_POST["insert"]))  
 {  
     $des=$_POST['des'];
     $area=$_POST['area'];
     $tittle=$_POST['tittle'];
     $time= date("Y-m-d h:i:sa",strtotime('+4 hour'));
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO blog(id,user_name,area,image,tittle,description,datetime,userid)VALUES ('','$name','$area','$file','$tittle','$des','$time','$id') ";
     
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      } 
     header("Location:blog.php");
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
       <?php  if(isset($_SESSION['Aname']))
    {
       include("navbar.php");
    } 
    else
    {
        include("navbaru.php");
    } ?>
    
    <!-- Navbar end -->
    <!-- Navbar end -->
    <!-- upload blog start -->
<div class="text-center">
    <h1 class="mt-5">Write the description and upload photo</h1>
   <h3><form method="post" enctype="multipart/form-data">  
         <input class="mt-5 mb-2" type="file" name="image" id="image" required/><br>  
       <strong> Area : </strong>   
       <input class="mt-5 mb-4"style="margin-top:30px; margin-left:150px" type="text" name="area" id="area" required/>  <br>
       <strong> Tittle : </strong>   
       <input style=" margin-left:140px" type="text" name="tittle" id="tittle" required/>  <br>
       <strong style="margin-right: 100px">Description : </strong>
       <textarea style="margin-top:30px; margin-right:35px" cols="24" name="des" id="des" required></textarea>  <br>
         <br />  
        
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