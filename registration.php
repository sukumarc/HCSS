<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$name = $_POST['name'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$dob = $_POST['dob'];
	$contact = $_POST['contact'];
?>

<?php
	$result = mysql_query("SELECT * FROM user", $connection);
	confirm_query($result);
	
	$test=0;
	
	//4. Use Returned Data
	while($row=mysql_fetch_array($result)){
		if($row["username"]==$username||$row["email"]==$email){
			$test=1;
			break;
		}
	}
?>

<?php
	if(!$test){
		$query = "INSERT INTO user (
					username, password, email, name, street, city, state, country, dob, contact
				 ) VALUES (
				 	'{$username}', '{$password}', '{$email}', '{$name}', '{$street}', '{$city}', '{$state}', '{$country}', '{$dob}', {$contact}
				 )";
		$res = mysql_query($query, $connection);
		if($res){
			//Success!!!
			$addr = "Location: registration_success.php?username=".$username;
			header($addr);
			exit;
		}
		else{
			//Display error Message
			echo "<p>Subject Creation Failed!!!</p>";
			echo "<p>" . mysql_error() . "</p>";	
		}
	}
	else{
		//Username or Email Already Exsts so cannot create account...
		$addr = "Location: registration_failed.php?username=".$username."&email=".$email;
		header($addr);
		exit;
	}
?>

<?php mysql_close($connection); ?>