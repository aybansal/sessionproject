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
					while($row = $result->fetch_assoc()) { ?>
					<div class="col-sm-6">
						<table class="table">
							<tr>
								<td>Name</td> <td><?php echo $row["name"];?></td>
							</tr>
							
							
							<tr>
								<td>User Name</td> <td><?php echo $row["username"];?></td>
							</tr>
							
							
							
							
							
							<tr>
								<td>Email</td> <td><?php echo $row["email"];?></td>
							</tr>
							
							
							<tr>
								<td>Address</td> <td><?php echo $row["address"];?></td>
							</tr>
							
							
		
		
		
		<?php
					// here while loop ends	
					}
			} // here if loop ends
			else {
				echo "0 results";
			}
		?>
			
			
					<tr>
						<td><?php echo "<a href='edit.php'>Edit Profile</a>"?></td>
						<td><a href="logout.php">Sign Out</a></td>
					</tr>
				</table>
			</div>
			
			
      <!-- <h2><a href = "logout.php">Sign Out</a></h2> -->
   </body>
</html>
	