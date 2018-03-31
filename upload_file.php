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
                
                if ($_FILES["file"]["error"] > 0)
                {
                    echo "Error: " . $_FILES["file"]["error"] . "<br>";
                }
                else
                {
                    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                    echo "Type: " . $_FILES["file"]["type"] . "<br>";
                    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                    
                    $link = "upload/" . $uname . "/";
                    $dir = $uname;
                    
                    if (!file_exists("upload/".$dir) && !is_dir("upload/".$dir)) {
                        mkdir("upload/".$dir);         
                    }
                    
                    if (file_exists($link . $_FILES["file"]["name"]))
                    {
                        echo "<br /><strong>".$_FILES["file"]["name"] . " already exists. "."</strong>";
                    }
                    else
                    {
                        move_uploaded_file($_FILES["file"]["tmp_name"], $link . $_FILES["file"]["name"]);
						
						$file = $_FILES["file"]["name"];
						$filetype = $_FILES["file"]["type"];
						
						if (($filetype == "image/gif") || ($filetype == "image/jpeg") || ($filetype == "image/jpg") || ($filetype == "image/pjpeg") || ($filetype == "image/x-png") || ($filetype == "image/png")){
							$type = "Image";
						}
						else if (($filetype == "audio/mp3") || ($filetype == "audio/ogg") || ($filetype == "audio/wav")){
							$type = "Audio";
						}
						else if (($filetype == "video/mp4") || ($filetype == "video/webm") || ($filetype == "video/ogg")){
							$type = "Video";
						}
						else {
							$type = "Other";	
						}
						
						$query = "INSERT INTO files (username, filename, type, filetype) VALUES ('{$uname}', '{$file}', '{$type}', '{$filetype}')";
						$res = mysql_query($query, $connection);
						
						if($res){
							//Success!!!
							echo "<br /><strong>" . "Stored in: " . $link . $_FILES["file"]["name"]."</strong>";
						}
						else{
							//Display error Message
							echo "<br /><strong>" . "Failed To Store File!!! Sorry For The Inconvenience Caused!!!" . "</strong>";
						}
                    }
                    
                }
            ?>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
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