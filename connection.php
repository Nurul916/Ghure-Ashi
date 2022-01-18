<?php

try{
	///trying to establish connection with the MySQL database server
	$conn = new PDO("mysql:host=localhost:3306;dbname=ghureashi;","root","");
	///setting errormode so that when error occurs it will give us an exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// echo '<script>alert("Database Connected.")</script>'; 
	
}
catch(PDOException $ex){
	?>
		<script>
			window.alert("Database not connected");
		</script>
	<?php
}
?>