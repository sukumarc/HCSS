<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php

	$uname = $_GET['username'];
	$filename = $_GET['filename'];
	$type = $_GET['type'];
	$filetype = $_GET['filetype'];
	$id = $_GET['id'];
	
	if($type == "Image"){
		header("Location: viewphoto.php?username=".$uname."&filename=".$filename."&id=".$id);
	}
	else if($type == "Audio"){
		header("Location: viewaudio.php?username=".$uname."&filename=".$filename."&filetype=".$filetype."&id=".$id);
	}
	else if($type == "Video"){
		header("Location: viewvideo.php?username=".$uname."&filename=".$filename."&filetype=".$filetype."&id=".$id);
	}
	else{
			header("Location: viewother.php?username=".$uname."&filename=".$filename."&id=".$id);
	}
?>