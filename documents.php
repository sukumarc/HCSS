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
                
                //3. Perform Database Query
                $result = mysql_query("SELECT * FROM documents", $connection);
                confirm_query($result);
                
                //4. Use Returned Data
				$title = array();
				$content = array();
				$id = array();
				$i = 0;
                while($row=mysql_fetch_array($result)){
                    if($row["username"]==$username){
                        $title[$i] = $row["title"];
						$content[$i] = $row["content"];
						$id[$i] = $row["id"];
						$i++;
                    }
                }
            ?>
            <h3>Documents</h3>
            <?php $link = "add_document.php?username=".$username; ?>
            <p><a class="linkstyle" href="<?php echo $link; ?>">Click Here</a> To Add New Document</p>
            <ul>
            	<?php
					for($j=0; $j<$i; $j++){
						$link = "view_document.php?username=".$username."&title=".urlencode($title[$j])."&id=".$id[$j];
						$temp = $j+1;
	                	echo "<li>".$temp.". <a href=".$link.">".$title[$j]."</a></li>";
					}
				?>
            </ul>
			
			 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>        
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