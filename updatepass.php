<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>


	<div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
     </div>
	 
    </div>

  <div id="content_header"> </div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
            <!-- insert the page content here -->
       			
        </div>
        
      </div>
      
      <div id="content">
        <!-- insert the page content here -->
        <?php
        $uname = $_GET['username'];
		$pass = $_POST['passw'];
		$repass = $_POST['repassword'];
		
		
		
		//3. Perform Database Query
		$result = mysql_query("SELECT * FROM user", $connection);
		confirm_query($result);
		
		//4. Use Returned Data
		while($row=mysql_fetch_array($result)){
			if($row["username"]==$uname){
				$id=$row["id"];
				break;
			}
		}
		
		
		
		if($pass==$repass){
			$encpass = md5($pass);
			$query = "UPDATE user SET password = '{$encpass}' WHERE id = '{$id}'";
			$result = mysql_query($query, $connection);
			confirm_query($result);
    ?>
    <h2>Congratulation!</h2>
    <p>Your new password has been updated into our database.</p>
    <p><a href="index.php">Click Here</a> to go back to HomePage and try with your new Login Details!</p>
	<?php
		}
		else{
	?>
    <h2>Sorry!</h2>
    <p>The passwords you have entered MisMatched... Please Try Again!</p>
    <p><a href="resetpass.php?username=<?php echo $uname; ?>">Click Here</a> to go back to reset form Again!</p>
    <?php
		}
	?>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        </div>
    </div>
	
	</div>


<?php include("includes/footer.php"); ?>