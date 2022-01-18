<?php 
    ob_start();
    session_start();

    $name=$email=$contact=$address=$pass=$gender=$emaill=$passl="";
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ghureashi');
    
    

if( isset($_POST['submit'])){
    
    if(isset($_POST['name'])) $name= $_POST['name'];
    if(isset($_POST['email'])) $email= $_POST['email'];
    if(isset($_POST['contact'])) $contact= $_POST['contact'];
    if(isset($_POST['address'])) $address= $_POST['address'];
    if(isset($_POST['pass'])) $pass= $_POST['pass'];
    if(isset($_POST['gridRadios1'])) 
    {
        $gender= "Male";

    }
    else
    {
        $gender= "Female";
    }
    $query= "INSERT INTO user(id,name,email,contact,address,password,gender)
    VALUES('','$name','$email','$contact','$address','$pass','$gender')";
    $queryfire = mysqli_query($con,$query);
    
    header("Location: index.php");
}

elseif( isset($_POST['submitl'])){
    
    
    if(isset($_POST['emaill'])) $emaill= $_POST['emaill'];
    if(isset($_POST['passl'])) $passl= $_POST['passl'];


    $query= "SELECT * 
            FROM user
            WHERE email LIKE '%$emaill%' and password = '$passl'";
    $queryfire = mysqli_query($con,$query);
    
    $num= mysqli_num_rows($queryfire);
    
    if ($num>0)
    {
        while($user = mysqli_fetch_array($queryfire))
                {
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {      
    echo "<script>
    alert('Email or Password Incorrect');
    window.location.href='index.php';
    </script>";
    }
}

else
{
    if($_SESSION['Aname'])
    {
    session_destroy();
    header("Location: login.php");
    }
    else
    {
    session_destroy();
    header("Location: index.php");
    }
}
?>
