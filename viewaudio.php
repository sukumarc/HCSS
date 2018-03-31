<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php
	$id = $_GET['id'];
	$uname = $_GET['username'];
	$filename = $_GET['filename'];
	$filetype = $_GET['filetype'];
?>

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
          <h3><?php echo $filename; ?></h3>
            <?php $link = "delete_file.php?username=".$uname."&filename=".$filename."&id=".$id; ?>
            <?php $downlink = "upload/".$uname."/".$filename; ?>
            <p><a class="linkstyle" href="<?php echo $downlink; ?>">Download</a> (Right Click & Save Link/Target As)</p>
            <p><a class="linkstyle" href="<?php echo $link; ?>">Delete</a></p>
            <center>
                <audio controls autoplay>
                    <source src="<?php echo "upload/".$uname."/".$filename; ?>" type="<?php echo $filetype; ?>">
                    Your browser does not support the audio element.
                </audio>
            </center>
        
        <br><br><br><br><br><br><br><br>
        
        </div>
		
		 <div id="sidebar_container">
        <div class="sidebar">
		
		<div class="sidebar_top"></div>
				<div class="sidebar_item">

				
            <!-- insert the page content here -->
       		<ul>
            	<li><a href="documents.php?username=<?php echo $uname; ?>">Documents</a></li>
                <li><a href="files.php?username=<?php echo $uname; ?>">Files</a></li>
           
                <br>
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