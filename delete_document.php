<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$username = $_GET['username'];
	$title = $_GET['title'];
	$id = $_GET['id'];
	$new_title = $_POST['title'];
	$content = $_POST['content'];
?>

<?php
	$query = "DELETE FROM documents WHERE id='{$id}'";
	$result = mysql_query($query, $connection);
	confirm_query($result);
	
	$addr = "Location: documents.php?username=".$username;
	header($addr);
	exit;	
?>

<?php mysql_close($connection); ?>