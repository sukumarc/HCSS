<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$username = $_GET['username'];
	$title = $_POST['title'];
	$content = $_POST['content'];
?>

<?php
	$result = mysql_query("SELECT * FROM documents", $connection);
	confirm_query($result);
	
	$test=0;
	
	//4. Use Returned Data
	while($row=mysql_fetch_array($result)){
		if($row["title"]==$title&&$row['username']==$username){
			$test=1;
			break;
		}
	}
?>

<?php
	if(!$test){
		$query = "INSERT INTO documents (
					username, title, content
				 ) VALUES (
				 	'{$username}', '{$title}', '{$content}'
				 )";
		$res = mysql_query($query, $connection);
		if($res){
			//Success!!!
			$addr = "Location: document_addition_success.php?username=".$username."&title=".$title;
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
		$addr = "Location: document_addition_failed.php?username=".$username."&title=".$title;
		header($addr);
		exit;
	}
?>

<?php mysql_close($connection); ?>