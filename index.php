<?php include("includes/header.php"); ?>


    
	<div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
         
          
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
     </div>
	 
    </div>
	
	<div id="content_header"> </div>
    <div id="site_content">
     
      <div id="content">
     
        <h2>Welcome to Highly Confidential Security System!</h2>
			<p>Here you can store the files and documents that you care about most, in the cloud. Access your files and documents from any 						computer with a browser. Your stuff is stored in a highly encrypted format to protect it from prying eyes. The security of your data is very important to us, and we take the utmost care in ensuring that your files are never get lost or stolen.</p>

			<p>Sign up for free and take advantage of our system today!</p>
      </div>
	  
	   <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
        
        	<h2>Login</h2>
            <p>Enter your Login Details Below:</p>
			<form method="POST" action="verification.php">
           	  <p>
                	<label>Username: </label><input type="text" id="username" name="username" maxlength="20" required autofocus>
                </p>
                <p>
                	<label>Password:&nbsp;</label>
                	<input type="password" id="password" name="password" maxlength="20" required>
                </p>
                <p>
                	<input type="submit" value="Sign In">
                    <input type="reset" value="Reset">
              </p>
            </form>
            <p>
	            <a href="forgot_password.php">Forgot Password!!!</a>
            </p>
            <p>
            	<a href="register.php">Don't Have a Account... Register Now!!!</a>
            </p>    
		
          </div>
          <div class="sidebar_base"></div>
        </div>
        
        
      </div>
	  
    </div>
   <br><br>
   
  </div>

<?php include("includes/footer.php"); ?>	