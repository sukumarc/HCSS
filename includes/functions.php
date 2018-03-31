<?php
	
	//File to store all basic functions
	function confirm_query($result_set){
		if(!$result_set){
			die("Database Query Failed: ".mysql_error());
		}
	}
	
?>