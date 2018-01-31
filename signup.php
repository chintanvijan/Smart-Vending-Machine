
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>HackVsit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    
</head>

<body>
	<div>
		<div class="jumbotron text-center">
		<h1>Vending Machines</h1>
		<p>Smart Vending Machines.</p>
		</div>
	</div>
    <form class="form-group" method="POST" action="register.php">
	
	<label for="usr">Email</label>
	<input type="text" class="form-control" id="usr" name="email">

	

  <label for="sel1">Sex:</label>
  <select class="form-control" id="sel1" name="sex">
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
        <option>KRAA DOOO</option>
</select>
  <br>
   <label>Contact No.:</label><br>
	  <input type="text" name="pno" class ="form-control"/><br>
<label for="pwd">Password:</label>
	<input type="Password" class="form-control" id="pwd" name="pwd">
	
    
	<label for="pwd">ReType Password:</label>
	<input type="Password" class="form-control" id="pwd" name="pass">


	<br>
	<button type="submit" class="btn btn-primary btn-md">SIGN UP</button>
	<br>
	
	<a href="index.php">Already Signed UP?</a>
	</form>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>