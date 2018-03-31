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
     
      
      <div id="content">
        <!-- insert the page content here -->
        <?php
                
                $uname = $_GET['username'];
                
                //3. Perform Database Query
                $result = mysql_query("SELECT * FROM user", $connection);
                confirm_query($result);
                
                //4. Use Returned Data
                while($row=mysql_fetch_array($result)){
                    if($row["username"]==$uname){
                        $name = $row["name"];
						$email = $row["email"];
						$street = $row["street"];
						$city = $row["city"];
						$state = $row["state"];
						$country = $row["country"];
						$dob = $row["dob"];
						$contact = $row["contact"];
                    }
                }
            ?>
            <h3><?php echo $name; ?>'s Profile</h3>
            <p>Username: <?php echo $uname; ?></p>
            <p>E-Mail ID: <?php echo $email; ?></p>
            <p>Name: <?php echo $name; ?></p>
            <p>Address</p>
            <p>Street: <?php echo $street; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City: <?php echo $city; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: <?php echo $state; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country: <?php echo $country; ?></p>
            <p>Date Of Birth(YYYY-MM-DD): <?php echo $dob; ?></p>
            <p>Contact: <?php echo $contact; ?></p>
        
        <br><br><br>
        
        </div>
		
		 <div id="sidebar_container">
        <div class="sidebar">
		
		<div class="sidebar_top"></div>
				<div class="sidebar_item">

				
            <!-- insert the page content here -->
       			<ul>
            	<li><a href="documents.php?username=<?php echo $uname; ?>">Documents</a></li>
                <li><a href="files.php?username=<?php echo $uname; ?>">Files</a></li>
                <br />
                <li><a href="profile.php?username=<?php echo $uname; ?>">View My Profile</a></li>
                <li><a href="index.php">logout</a></li>
            </ul>
			</div>
				<div class="sidebar_base"></div>
        </div>
        
      </div>
	  
    </div>
	
	</div>


<?php require("includes/footer.php"); ?>