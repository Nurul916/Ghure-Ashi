<?php 
    ob_start();
    session_start();

    $nameA=$contactA=$passA=$emailA="";
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ghureashi');
      
    


if( isset($_POST['submitA'])){
    
    
    if(isset($_POST['emailA'])) $emailA= $_POST['emailA'];
    if(isset($_POST['passA'])) $passA= $_POST['passA'];


    $query= "SELECT * 
            FROM admin
            WHERE email LIKE '%$emailA%' and password = '$passA'";
    $queryfire = mysqli_query($con,$query);
    
    $num= mysqli_num_rows($queryfire);
    
    if ($num>0)
    {
        while($admin = mysqli_fetch_array($queryfire))
                {
            $_SESSION['Aname'] = $admin['name'];
            $_SESSION['Aid'] = $admin['id'];
            $_SESSION['Aemail'] = $admin['email'];
        }
    header("Location: indexA.php");
    }
    else
    {
//         
    }echo "<script>
 alert('Email or Password Incorrect');
 window.location.href='adminlog.php';
 </script>";
    
}


?>
    <!DOCTYPE html>
    
    <html>
        <body>
        <form action="adminlog.php" method="post">
        <h3>email</h3>
        <input name="emailA" type="text">
        <input name="passA" type="password">
        <h3>password</h3>
        <button name="submitA" type="submit">Log in </button>
        </form>
        </body>
    
    
    </html>
    