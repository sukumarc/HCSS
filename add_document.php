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

			<h3>Enter Document Details</h3>
            <?php $link = "add_docu.php?username=".$username; ?>
            <form method="POST" action="<?php echo $link; ?>">
                <p>
                    <label>Title: </label><input type="text" id = "title" name="title" autofocus required>
                </p>
                <p>
                    <label>Content: </label><textarea class="lock" name="content" id="content" rows="10" cols="60" required>Enter Your Content Here...</textarea>
                </p>
                <p>
                	<input type="submit" value="Add">
					<input type="reset" value="Reset">
                </p>
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
                <br>
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