<?php
session_start();
ob_start();
if(!isset($_SESSION['Aemail'])){ 
header("Location:login.php"); }
$connect = mysqli_connect("localhost", "root","", "ghureashi");

 if(isset($_POST["insert"]))  
 {   

     $name = $_POST['name'];
     $area = $_POST['area'];
     $r_adr = $_POST['r_address'];
     $contact_no = $_POST['contact'];
     $type = $_POST['type'];
     $f = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
     $lat = $_POST['latitude'];
     $long = $_POST['longitude'];

     
     $query ="SELECT * 
              FROM nearby_restaurants 

              WHERE '$contact_no' LIKE contact_no 
                    AND name like '$name' 
                    AND area LIKE '$area'
                    AND r_address LIKE '$r_adr' 
                    AND type LIKE '$type' 
                    AND latitude LIKE '$lat'
                    AND longitude LIKE '$long' ";

    $queryfire = mysqli_query($connect,$query);
    $num = mysqli_num_rows($queryfire);
  
    if($num == 0)
    {
          $query1 = "INSERT INTO nearby_restaurants 
                              (name,
                               area, 
                               r_address,
                               contact_no,
                               type, 
                               image,
                               latitude,
                               longitude)
                         VALUES ('$name','$area','$r_adr','$contact_no', '$type', '$f', '$lat', '$long' ) ";
       
         if(mysqli_query($connect, $query1))  
         {  
              echo '<script>alert("Image Inserted into Database")</script>';  
         } 
        header("Location:add_remove_restaurant.php");
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
    <h1 class="mt-5">Add Restaurant's Info </h1>
   <h3><form method="post" enctype="multipart/form-data">  
         <input class="mt-5 mb-2" type="file" name="image" id="image" required/><br>  
       <strong>Name :</strong>   
<!-- <input class="mt-5 mb-4"style="margin-top:30px; margin-left:150px" type="text" name="name" id="name" required/>  <br>-->   
       <textarea style="margin-top:30px; margin-right:35px" cols="44" type='text' name="name" id="name" required></textarea>  <br>
       <strong class="ml-3">Area  :</strong>   
       <!-- <input style=" margin-left:140px" type="text" name="area" id="area" required/>  <br> -->
       <textarea style="margin-top:30px; margin-right:28px" cols="44" type='text' name="area" id="area" required></textarea>  <br>
       <strong class="ml-5">Address  :</strong>
       <textarea style="margin-top:30px; margin-right:100px" cols="44" name="r_address" id="r_address" required></textarea>  <br>
       <strong class="ml-1">Contact No  :</strong>
       <textarea style="margin-top:30px; margin-right:107px" cols="44" name="contact" id="contact" required></textarea>  <br> 
       <strong>Restaurant type :</strong>
       <textarea style="margin-top:30px; margin-right:160px" cols="44" name="type" id="type" required></textarea>  <br>

        <strong class="ml-5">Latitude :</strong>
       <textarea style="margin-top:30px; margin-right:107px" cols="44" name="latitude" id="latitude" required></textarea>  
       <br> 
        <strong class="ml-3">Longitude :</strong>
       <textarea style="margin-top:30px; margin-right:107px" cols="44" name="longitude" id="longitude" required></textarea>  <br> 
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