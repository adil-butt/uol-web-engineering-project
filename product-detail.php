<?php

	require('config.php');
	
	$sql="SELECT * FROM `tblproducts`";	// select all products from database
	
	$result=mysqli_query($connection, $sql);


	

	if(isset($_POST['menu'])) {
		header('Location: crud-products.php'); // if user clicks menu button then go to crud-products.php page
	}
	
	
	
?>




<!doctype html>
<html>
<head>
<title>DISPLAY PRODUCTS</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php include ('header.php'); ?>
		
		<div class="container class-content">
		
			<p class="display-4 text-center">Product Details</p>
			
			<form method="POST" action="#">
			
				<button type="submit" name="menu" class="btn btn-secondary btn-lg btn-block">Main Menu</button>
			
			</form>
			
			<?php while($row=mysqli_fetch_array($result)){	// loop will run and take each product from database ?>	

				<div class="row" style="margin-top:100px">
				
					<div class="col">
					
						<div class="row">
						
							<div class="col">
								
								<table>
									<tr>
										<th><h4>Id:</h4></th>
									</tr>
						
									<tr>
										<th><h4>Name:</h4></th>
									</tr>
									
									<tr>
										<th><h4>Maker Name:</h4></th>
									</tr>
									
									<tr>
										<th><h4>Price:</h4></th>
									</tr>
									
									<tr>
										<th><h4>Body Type:</h4></th>
									</tr>
									
									<tr>
										<th><h4>Engine Capacity:</h4></th>
									</tr>
									
									<tr>
										<th><h4>Available Colors:</h4></th>
									</tr>
						
								</table>
								
							</div>
							
							<div class="col">
								
								<table>
									<tr>
										<th><h4><?php echo $row['productId']; ?></h4></th>
									</tr>
						
									<tr>
										<th><h4><?php echo $row['productName']; ?></h4></th>
									</tr>
									
									<tr>
										<th><h4><?php echo $row['makerName']; ?></h4></th>
									</tr>
									
									<tr>
										<th><h4><?php echo $row['productPrice']; ?></h4></th>
									</tr>
									
									<tr>
										<th><h4><?php echo $row['bodyType']; ?></h4></th>
									</tr>
									
									<tr>
										<th><h4><?php echo $row['engineCapacity']; ?></h4></th>
									</tr>
									
									<tr>
										<th><h4> <?php 

										$sql2="SELECT colors FROM tblproducts_fk WHERE productId_fk='".$row['productId']."'";	// select all colors of current product
	
										$result2=mysqli_query($connection, $sql2);
										
										while($row2=mysqli_fetch_array($result2)){
										
											echo $row2['colors'] . " ";	// display all colors one by one of current product
										
										}

										?> </h4></th>
									</tr>
						
								</table>
								
							</div>
					
						</div>
					
					</div>
					
					<div class="col">
						<table>
							<tr>
								<th> <?php
								
									$sql2="SELECT image FROM imagetable WHERE imageId='".$row['productId']."'"; // select all pictures of current product
	
									$result2=mysqli_query($connection, $sql2);

									while($row2=mysqli_fetch_array($result2)){
									
										echo '<img class="detail-layout-image-php" src="data:image/jpeg;base64,'.base64_encode( $row2['image'] ).'"	// display all pictures one by one of current product/>';
								
									}
								
								?> </th>
							</tr>
						</table>
					</div>
				
				</div>
				
				<div class="row" style="margin-top:50px">
					<div class="col">
						<p><?php 
						
							echo $row['productDetails'];
						
						?></p>
					</div>
				</div>
				
				<div class="row">
					<div class="col">						
						<?php echo "<a href='update.php?id=".$row['productId']."'>Update</a>"	// go to update page if user want to update current product ?>
						<?php echo "<a href='delete.php?id=".$row['productId']."'>Delete</a>"	// go to delete page if user want to delete current product ?>
					</div>
				</div>
				
				
			<?php } ?>
		
		</div>
		
	<?php include ('footer.php'); ?>
	
</body>
		