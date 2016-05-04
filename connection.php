<?php
	$con=new mysqli("localhost","root","");
		if($con->connect_error){
			die("could not connect".$con->connect_error);
		}
		$sql="create database project1";
			if($con->query($sql) == TRUE){
				echo "database create successfully";
			}
			else{
				echo "database is not created";
			}
			echo "connection successful";
	$con->close();	
?>