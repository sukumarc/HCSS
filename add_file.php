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
       			<?php $username = $_GET['username']; ?>

			<h3>Select The File To Upload</h3>
            <?php $link = "upload_file.php?username=".$username; ?>
            <form action="<?php echo $link; ?>" method="post" enctype="multipart/form-data">
                <label for="file">Filename:</label>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        
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


<?php require("includes/footer.php"); ?>