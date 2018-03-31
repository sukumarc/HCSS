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
		
    ?>
    <h2>New Password Form</h2>
    <form action="updatepass.php?username=<?php echo $uname; ?>" method="post">
    	<p>
            <label>Password: </label><input type="password" id="passw" name="passw" maxlength="20" required>
        </p>
        <p>
            <label>Retype Password: </label><input type="password" id="repassword" name="repassword" maxlength="20" required>
        </p>
        <p>
            <input type="submit" value="Register">
            <input type="reset" value="Reset">
        </p>
    </form>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        </div>
    </div>
	
	</div>


<?php require_once("includes/footer.php"); ?>