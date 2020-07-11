<?php
	
	require("config.php");	// connection
	
	$id = $_GET['id'];	// get id ( which is passed by product-detail.php ) of product that is supposed to be updated
	
	if(isset($_POST['name'])){
		
		$name=$_POST['name'];	// get form values
		$price=$_POST['price'];
		$makerName=$_POST['makerName'];
		$bodyType=$_POST['bodyType'];
		$engineCapacity=$_POST['engineCapacity'];
		$color=$_POST['color'];
		$description=$_POST['description'];
		$imageName=$_FILES['image']['name'];
		$imageTempName=$_FILES['image']['tmp_name'];
		$imageFileType=$_FILES['image']['type'];
		
		$sql="UPDATE `tblproducts` SET `productName`='$name',`makerName`='$makerName',`productPrice`='$price',`bodyType`='$bodyType',`engineCapacity`='$engineCapacity',`productDetails`='$description' WHERE `productId`='$id'";
		
		$result=mysqli_query($connection,$sql);
		
		$sql="DELETE FROM `tblproducts_fk` WHERE `productId_fk`='$id'";	// delete previous colors of product which is supposed to be updated
		
		$result=mysqli_query($connection,$sql);
		
		for ($i=0; $i<sizeof($color); $i++){
			
			$sql="INSERT INTO `tblproducts_fk`(`productId_fk`, `colors`) VALUES ('$id','$color[$i]')";	// insert new colors
			
			$result=mysqli_query($connection,$sql);
		
		}
		
		$sql="DELETE FROM `imagetable` WHERE `imageId`='$id'";	// delete previous pictures of product which is supposed to be updated
		
		$result=mysqli_query($connection,$sql);
		
		for($i=0;$i<=count($imageTempName)-1;$i++){
		
			$imgName=addslashes($imageName[$i]);
			
			$tmp=addslashes(file_get_contents($imageTempName[$i]));
			
			$sql="INSERT INTO `imagetable`(`imageId`, `imageName`, `image`) VALUES ('$id','$imgName','$tmp')";	//  insert new pictures
			
			$result=mysqli_query($connection,$sql);
		
		}	
		
		if($result){
			header('Location: update-successful.php');	// go to update-successful.php page if successfully updated
			exit();
		}
		else{
			echo("Product Not Updated Successfully");
			exit();
		}
		
	}
	
?>





<!doctype html>
<html>
<head>
<title>UPDATE EXISTING PRODUCT</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
		
		<?php include("header.php"); ?>
		
		<div class="container class-content">
			<p class="display-4 text-center">Update Existing Product</p>
			
			<form method="POST" action="#" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Name of Your Product" required>
				</div>
		  
				<div class="form-group">
					<label>Price:</label>
					<input type="number" class="form-control" name="price" placeholder="Enter Price of Your Product" required>
				</div>
				
				<div class="form-group">
				
				<label>Maker Name:</label>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="makerName" value="Toyota" checked>
						Toyota
					</label>
				</div>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="makerName" value="Honda">
						Honda
					</label>
				</div>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="makerName" value="Suzuki">
						Suzuki
					</label>
				</div>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="makerName" value="Other">
						Other
					</label>
				</div>
				
				</div>
				
				<div class="form-group">
				
				<label>Body Type:</label>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="bodyType" value="RS/Sports" checked>
						RS/Sports
					</label>
				</div>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="bodyType" value="Hatchback">
						Hatchback
					</label>
				</div>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="bodyType" value="Sedan">
						Sedan
					</label>
				</div>
				
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="bodyType" value="Crossover">
						Crossover
					</label>
				</div>
		  
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="bodyType" value="Truck">
						Truck
					</label>
				</div>
				
				</div>
				
				<div class="form-group">
					<label for="exampleFormControlSelect1">Engine Capacity:</label>
					<select class="form-control" name="engineCapacity" id="exampleFormControlSelect1">
						<option>660cc</option>
						<option>800cc</option>
						<option>1000cc</option>
						<option>1300cc</option>
						<option>1500cc</option>
						<option>1800cc</option>
						<option>2500cc</option>
						<option>3000cc</option>
						<option>3500cc</option>
						<option>4000cc</option>
						<option>4500cc</option>
						<option>5000cc</option>
						<option>5500cc</option>
						<option>Others</option>
					</select>
				</div>
				
				<div class="form-group">
					
					<label>Colors:</label>
					
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox1" value="White" checked> White
						</label>
					</div>
					
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox2" value="Silver"> Silver
						</label>
					</div>
					
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox3" value="Black"> Black
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox4" value="Grey"> Grey
						</label>
					</div>
					
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox5" value="Blue"> Blue
						</label>
					</div>
					
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox6" value="Red"> Red
						</label>
					</div>
					
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="color[]" id="inlineCheckbox7" value="Other"> Other
						</label>
					</div>
					
				</div>
				
				<div class="form-group">	
					<label for="exampleFormControlTextarea1">Description:</label>
					
					<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" required></textarea>
				</div>
				
				<div class="form-group">
					<label for="exampleFormControlFile1">Upload Pictures:</label>
					
					<input type="file" class="form-control-file" name="image[]" id="exampleFormControlFile1" multiple required>
				</div>
				
				<button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
			</form>
			
		</div>
			
		<?php include("footer.php"); ?>

</body>