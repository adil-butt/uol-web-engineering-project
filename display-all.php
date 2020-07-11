<?php

	require("config.php");
	
	$sql="SELECT * FROM `tblproducts`";
	
	//$sql2="SELECT * FROM `imageTable` ";
	
	$result=mysqli_query($connection, $sql);
	
	//$result2=mysqli_query($connection, $sql2);
	
	

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
		
		<?php include("header.php"); ?>
		
		<div class="container class-content">
			<p class="display-4 text-center">All Products</p>
			
			<?php while($row=mysqli_fetch_array($result)){ ?>
						
					<div class="card" style="width: 20rem;">
					
					<div class="card-body">
						<h4 class="card-title"><?php echo $row['productName'] ?></h4>
						
						<a href="product details/suzuki-swift-2017.html" class="btn btn-primary">Details</a>
					</div>
				</div>
					
					
				<?php } ?>
		
		</div>
			
		<?php include("footer.php"); ?>

</body>