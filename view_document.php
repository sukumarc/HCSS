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
                
                $username = $_GET['username'];
				$title =  urldecode($_GET['title']);
				$id = $_GET['id'];
                
                //3. Perform Database Query
                $result = mysql_query("SELECT * FROM documents", $connection);
                confirm_query($result);

                //4. Use Returned Data
                while($row=mysql_fetch_array($result)){
                    if($row["username"]==$username&&strcmp($row["title"],$title)==0){
						$content = $row["content"];
						break;
                    }
                }
            ?>
            <h3>Document</h3>
            <?php $link = "edit_document.php?username=".$username."&title=".urlencode($title)."&id=".$id; ?>
            <p><a class="linkstyle" href="<?php echo $link; ?>">Click Here</a> To Edit This Document</p>
            <h2><?php echo $title; ?></h2>
            <p><?php echo $content; ?></p>
            <?php $link = "delete_document.php?username=".$username."&title=".urlencode($title)."&id=".$id; ?>
            <p><a class="linkstyle" href="<?php echo $link; ?>">Delete</a></p>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
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