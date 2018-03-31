<?php
	require_once("includes/functions.php");
	require_once("includes/connection.php");
	
	//3. Perform Database Query
	$result = mysql_query("SELECT * FROM user", $connection);
	confirm_query($result);

	$uname = $_POST['username'];
	$pass = md5($_POST['password']);
	
	$test=0;
	
	//4. Use Returned Data
	while($row=mysql_fetch_array($result)){
		if($row["username"]==$uname&&$row["password"]==$pass){
			$test=1;
			break;
		}
	}
	if($test){
		$link = "Location: login_success.php?username=".$uname;
		header($link);
	}
	else{
		header("Location: login_fail.php");
	}
	require("includes/footer.php");
?>