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
        <h2>Forgot Password!!!</h2>
        
        <p>
            <form method="post" action="retrievepass.php">
            <label>Enter Your E-Mail ID Below: </label><input type="email" id="email" name="email" required autofocus></input>
        </p>
        <p>
            <input type="submit" value="Submit"></input>
            <input type="reset" value="Reset"></input>
            </form>
        </p> 
	
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        </div>
    </div>
	
	</div>


<?php include("includes/footer.php"); ?>