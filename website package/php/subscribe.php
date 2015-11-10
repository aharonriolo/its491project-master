<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
        <title>Subscribe Result</title>
        <style>
    	body {
    		padding: 10px;
    		background-color: #F5F5F5;
    		border: 3px solid black;
    		width:50%;
 		    margin: 30px auto;
		}
	
    </style>
</head>

<body>
	<?php
	extract($_REQUEST);
	
	// Validate inputs
	if (empty($email) || empty($first_name) || empty($last_name) || empty($carBrand)) {
		$error = "<h1>Invalid product data. Check all fields and try again.</h1>";
		echo $error;
	}
	else {
		echo "<h1>Your data is saved in my database</h1> ";
		echo "<dt>First name:</dt>";
		echo "<dd>". $first_name. "</dd>";
		echo "<dt>Last name:</dt>";
		echo "<dd>". $last_name. "</dd>";
		echo "<dt>Car brand:</dt>";
		echo "<dd>". $carBrand. "</dd>";
		echo "<dt>email :</dt>";
		echo "<dd>". $email ."</dd>";
		// If valid, add the subscribe data to the database
		include ('database.php');
		$query = "INSERT INTO subscribe (email, first_name, last_name, carBrand, not_listed, comments)
			VALUES ('$email', '$first_name', '$last_name', '$carBrand', '$not_listed', '$comments')";
		$db->exec($query);
	}
	?>
</body>
</html>
