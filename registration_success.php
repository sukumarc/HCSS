<?php include("includes/header.php"); ?>
<?php $username = $_GET['username']; ?>

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
        <h2>Registration Success!!!</h2>
        
        <p>
        	Congratulation, Your account "<?php echo $username; ?>" has been successfully created!!!
        </p>
        <p><a href="index.php">Click Here</a> to go to Login Page...</p>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        </div>
    </div>
	
	</div>


<?php include("includes/footer.php"); ?>