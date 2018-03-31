<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$uname = $_GET['username'];
	$filename = $_GET['filename'];
	$id = $_GET['id'];
?>

<?php
	$test = 0;
	if(unlink("upload/".$uname."/".$filename)){
		$test = 1;
	}

	if($test == 1){
		$query = "DELETE FROM files WHERE id='{$id}'";
		$result = mysql_query($query, $connection);
		confirm_query($result);
		
		$addr = "Location: files.php?username=".$uname;
		header($addr);
		exit;
	}
	else{
		echo "ERROR";
	}	
?>

<?php mysql_close($connection); ?>