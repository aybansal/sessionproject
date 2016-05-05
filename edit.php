<?php
	include('session.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></link>
</head>
	<body>
      <h1>Welcome <?php echo $login_session; ?></h1>
		<?php
			//require ("config.php"); // require function include config.php if there is any error then it show here further didnot proceed.
			$name1=$_SESSION['login_user'];
			$sql="SELECT * FROM reg WHERE username='$name1'";
			$result= $con->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row

$row = $result->fetch_assoc();
				 ?>
					<form method="post" action="">
					
						<div class="col-sm-6">
							<table class="table">
								<tr>
									<td>Name</td> <td><input type="text" name="name1" value="<?php echo $row["name"];?>"></td>
								</tr>
							
							
								<tr>
									<td>User Name</td> <td><input type="text" name="uname2" value="<?php echo $row["username"];?>"></td>
								</tr>
							
							
								<tr>
									<td>Password</td> <td><input type="password" name="pwd2" value="<?php echo $row["password"];?>"></td>
								</tr>
							
							
								<tr>
									<td>Email</td> <td><input type="text" name="email" value="<?php echo $row["email"];?>"></td>
								</tr>
							
							
								<tr>
									<td>Address</td> <td><input type="text" name="add" value="<?php echo $row["address"];?>"></td>
								</tr>
							
							
		
		
		
		<?php
					// here while loop ends	
					
			} // here if loop ends
			else {
				echo "0 results";
			}
		?>
			
			
								<tr>
									<td><input type="submit" name="update" value="Update Detail"></td>
									<td><a href="logout.php">Sign Out</a></td>
								</tr>
							</table>
						</div>
					</form>
		<?php			
			if(isset($_POST['update'])){
				$uname1=$_SESSION['login_user'];
				//echo $uname1;
				$sql="UPDATE reg SET name='$name1',username='$uname1',password='$pwd2',email='$email',address='$add' WHERE username='$uname1'";
					if($con->query($sql) == TRUE){
						header("location: loginhome.php");
					}
					else{
						echo "update fails";
					}
				
			}
		?>
			
      <!-- <h2><a href = "logout.php">Sign Out</a></h2> -->
   </body>
</html>
	