
<!doctype html>
<html>
<head>
<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">					
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<?php include("header.php"); ?>
	
		<div class="container class-content">
			<form method="POST" action="user-login.php">
				<div class="form-group">
					<label>User Name:</label>
					<input type="text" class="form-control" name="username" placeholder="Enter User Name">
				</div>
		  
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
					<small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
					<small id="emailHelp" class="form-text text-muted">You Typed Incorrect Password.</br>Enter the Password Again</small>
				</div>
		  
				<button type="submit" name="submit" value="LOGIN" class="btn btn-primary">Submit</button>
			</form>
		</div>
	
	<?php include("footer.php"); ?>
	

</body>
</html>
