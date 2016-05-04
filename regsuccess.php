<?php
	if($_POST){
		$name1=($_POST["name"]);
		$uname1=($_POST["uname"]);
		$pwd1=($_POST["pwd"]);
		$email1=($_POST["email"]);
		$add1=($_POST["address"]);
	}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";
	$con=new mysqli($servername,$username,$password,$dbname);
		if ($con->connect_error){
			die("could not connect" . $con->connect_error);
		}
		
		$sql1="INSERT INTO reg(name,username,password,email,address)VALUES('$name1','$uname1','$pwd1','$email1','$add1')";
			if($con->query($sql1) == TRUE){
			
				
				echo "<h1>Your Data Is Successfully Added</h1><br>";
			
			echo "do you want to login then click on login<br>";
			echo "<a href='login.php'>Login</a>";
			}
			else{
				echo "failed please try again";
			}
			
			
			
			
			//echo "successfull";
			
	$con->close();	
?>