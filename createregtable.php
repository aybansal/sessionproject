<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";
	$con=new mysqli($servername,$username,$password,$dbname);
		if ($con->connect_error){
			die("could not connect" . $con->connect_error);
		}
		
		$sql1="CREATE TABLE reg(name VARCHAR(30) NOT NULL,username VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,email VARCHAR(30),address VARCHAR(30) NOT NULL)";
			if($con->query($sql1) == TRUE){
				echo "reg table is created  successfully";
			}
			else{
				echo "table is not created";
			}
			//echo "successfull";
			
	$con->close();	
?>