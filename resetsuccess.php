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
        $email = $_GET['email'];
        
        echo "<p>The E-Mail address (".$email.") has been successfully mailed with a link to Reset Your Password! Please refer to you email. Thank You!</p>";
		echo "<p><a href=\"index.php\">Click Here</a> to go back to HomePage!</p>";
    ?>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        </div>
    </div>
	
	</div>


<?php require_once("includes/footer.php"); ?>