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
        $email = $_POST['email'];
        
        //3. Perform Database Query
        $result = mysql_query("SELECT * FROM user", $connection);
        confirm_query($result);

        $test=0;
        
        //4. Use Returned Data
        while($row=mysql_fetch_array($result)){
            if($row["email"]==$email){
				$uname = $row["username"];
                $test=1;
                break;
            }
        }
        if($test){
            $resetlink = "http://www.skybox.com/resetpass.php?username=".$uname;

			// Email the user their activation link
			$to = "$email";							 
			$from = "support@skybox.com";
			$subject = 'SkyBox Password Retrieval';
			$message = 'Dear User,<br />Please Click on the Link below to reset the password of your account: <br />'.$resetlink;
			
			$headers = "From: $from\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			mail($to, $subject, $message, $headers);
			
			//Link to redirect to after successful mailing
			$link = "Location: resetsuccess.php?email=".$email;
            header($link);
        }
        else{
            header("Location: doesnotexist.php?email=".$email);
        }
    ?>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        </div>
    </div>
	
	</div>


<?php require_once("includes/footer.php"); ?>