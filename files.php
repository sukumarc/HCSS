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
                    }
                }
            ?>
            <h3>Files</h3>
	    	<?php $link = "add_file.php?username=".$uname; ?>
            <p><a class="linkstyle" href="<?php echo $link; ?>">Click Here</a> To Add New File</p>
            <ul>
            	<?php
					
					//3. Perform Database Query
					$result = mysql_query("SELECT * FROM files", $connection);
					confirm_query($result);
					
					//4. Use Returned Data
					$files = array();
					$type = array();
					$filetype = array();
					$id = array();
					$i = 0;
					while($row=mysql_fetch_array($result)){
						if($row["username"]==$uname){
							$files[$i] = $row["filename"];
							$type[$i] = $row["type"];
							$filetype[$i] = $row["filetype"];
							$id[$i] = $row["id"];
							$i++;
						}
					}
				?>
                <h4>Images</h4>
            	<?php
					$temp=1;
					for($j=0; $j<$i; $j++){
						$link = "view.php?username=".$uname."&filename=".urlencode($files[$j])."&type=".$type[$j]."&filetype=".$filetype[$j]."&id=".$id[$j];
						if($type[$j] == "Image"){
		                	echo "<li>".$temp.". <a href=".$link.">".$files[$j]."</a></li>";
							$temp = $temp+1;
						}
					}
				?>
                <h4>Audios</h4>
                <?php
					$temp=1;
					for($j=0; $j<$i; $j++){
						$link = "view.php?username=".$uname."&filename=".urlencode($files[$j])."&type=".$type[$j]."&filetype=".$filetype[$j]."&id=".$id[$j];
						if($type[$j] == "Audio"){
		                	echo "<li>".$temp.". <a href=".$link.">".$files[$j]."</a></li>";
							$temp = $temp+1;
						}
					}
				?>
                <h4>Videos</h4>
                <?php
					$temp=1;
					for($j=0; $j<$i; $j++){
						$link = "view.php?username=".$uname."&filename=".urlencode($files[$j])."&type=".$type[$j]."&filetype=".$filetype[$j]."&id=".$id[$j];
						if($type[$j] == "Video"){
		                	echo "<li>".$temp.". <a href=".$link.">".$files[$j]."</a></li>";
							$temp = $temp+1;
						}
					}
				?>
                <h4>Others</h4>
                <?php
					$temp=1;
					for($j=0; $j<$i; $j++){
						$link = "view.php?username=".$uname."&filename=".urlencode($files[$j])."&type=".$type[$j]."&filetype=".$filetype[$j]."&id=".$id[$j];
						if($type[$j] == "Other"){
		                	echo "<li>".$temp.". <a href=".$link.">".$files[$j]."</a></li>";
							$temp = $temp+1;
						}
					}
				?>
            </ul>
        
        <br><br><br><br><br><br><br><br><br><br><br>
        
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