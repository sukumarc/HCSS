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
         <h2>Document Addition Failed!!!</h2>
            
            <?php
                $username = $_GET['username'];
                $title = $_GET['title'];
            ?>
            
            <p>
                Sorry, the document (<?php echo $title; ?>) already exists in your database... Document Addition Failed...
            </p>
			<br><br><br><br><br><br>
        
        </div>
		
		 <div id="sidebar_container">
        <div class="sidebar">
    
			
			<div class="sidebar_top"></div>
				<div class="sidebar_item">

			        <!-- insert the page content here -->
       		<ul>
            	<li><a href="documents.php?username=<?php echo $username; ?>">Documents</a></li>
                <li><a href="files.php?username=<?php echo $username; ?>">Files</a></li>
                <br />
                <li><a href="profile.php?username=<?php echo $username; ?>">View My Profile</a></li>
                <li><a href="index.php">logout</a></li>
            </ul>	
				</div>
				<div class="sidebar_base"></div>
        </div>
        
      </div>
		
    </div>
	
	</div>


<?php include("includes/footer.php"); ?>