<?php
	
		session_start();	//here our session is started
		include("config.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$uname1=$_POST["uname"];
			$pwd1=$_POST["pwd"];
			
			$sql="SELECT * FROM reg WHERE username='$uname1; AND password='$pwd1'";
			$result=mysqli_query($con,$sql);
			//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//$active=$row['active'];
			
				if(mysqli_num_rows($result) > 1){
					echo "invalid username and pasword";
				}
				else{
					//session.register("uname1");
					$_SESSION['login_user']=$uname1;
					
					header("location: loginhome.php");
					
				}
		}
?>
		
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></link>
</head>
	<body>
		<h1>login form</h1>
		<form method="post" action="#">
			<table class="table">
				<tr>
					<td> Enter Username</td>
						<td> <input type="text" name="uname" required></td>
				</tr>
				
				<tr>
					<td>Enter password </td>
						<td><input type="password" name="pwd" required></td>
				</tr>
				
				
				<tr>
					<td> </td>
						<td><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>