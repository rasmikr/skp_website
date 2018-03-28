<?php
$db_sitename="skp";
$server="localhost";
$user_name="root";
$password="";
$no_of_comments="3";
 
/* Leave the script below as it is */
$db = mysqli_connect($server, $user_name, $password, "skp");

mysqli_select_db($db,$db_sitename);
$data = mysqli_query($db,"SELECT * FROM comments "); 
echo "				LATEST COMMANDS	<BR><br>";
  while($row = mysqli_fetch_assoc($data)){  

echo "command on:&nbsp&nbsp".$row['comment_on'].",<br>command by:&nbsp&nbsp".$row['comment_by'].",
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['comment']."<br><br>";
echo "-------------------------------------------------------------------------------------------------------<br>"; }
mysqli_close($db); ?>