<!doctype html>
<html>
<head>
<title>CONTACT US</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<div class="contact-us-background">
		<?php include("header.php"); ?>
	</div>
	
	<div class="container">
		<div class="row">
  
			<div class="col-md-6">
					<form>
						<div class="form-group row">
							<label class="control-label col-sm-3 col-form-label" for="name">First Name:</label>
								
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-sm-3 col-form-label" for="name">Last Name:</label>
								
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-sm-3 col-form-label" for="email">Email:</label>
								
							<div class="col-sm-6">
								<input type="email" class="form-control" placeholder="abc@mail.com">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-sm-3 col-form-label" for="phone">Phone:</label>
								
							<div class="col-sm-6">
								<input type="tel" class="form-control" placeholder="+92XXXXXXXXXX">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-sm-3 col-form-label" for="gender">Gender:</label>
							<label class="custom-control custom-radio">
								<input id="radio1" name="radio" type="radio" class="custom-control-input" checked>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">Male</span>
							</label>
							
							<label class="custom-control custom-radio">
								<input id="radio1" name="radio" type="radio" class="custom-control-input">
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">Female</span>
							</label>
							
							<label class="custom-control custom-radio">
								<input id="radio1" name="radio" type="radio" class="custom-control-input">
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">Other</span>
							</label>
							
						</div>
						
						<div class="form-group row">
							<label class="control-label col-sm-3 col-form-label" for="country">Country:</label>
								
							<div class="col-sm-6">
								<select name="country list"
										size="1"
										
								>
									<option value="1" selected>Pakistan
									<option value="2">Austrailia
									<option value="3">Canada
									<option value="4">China
									<option value="5">France
									<option value="6">Germany
									<option value="7">Japan
									<option value="8">UK
									<option value="9">USA
									<option value="10">Other
								</select>
							</div>
						</div>
					
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Message:</label>
    
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
						</div>
	
						<div class="col-auto">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				
			</div>

			<div class="col-md-6">
				<div class="text-center">
					<h3 class="display-4">ADDRESS</h3>
		
					<p>1020 Block B Sabzazar Scheme, Lahore, Pakistan<br>Contact no +923424137740, +92456399855
					</p>
					
					<h6>Email:</h6> 
					<a href="#">shakeel@gmail.com</a>
				
					<h1 class="mt-5">GOOGLE SITE MAP</h1>
						
					<div class="mt-5">
						<div id="map" style="width:400px;height:400px">
						
						<script>
							function myMap() {
								var mapOptions = {
								center: new google.maps.LatLng(51.5, -0.12),
								zoom: 10,
								mapTypeId: google.maps.MapTypeId.HYBRID
								}
							var map = new google.maps.Map(document.getElementById("map"), mapOptions);
							}
						</script>

						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php include("footer.php"); ?>
	

</body>
</html>
