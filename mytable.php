<?php
$user_name = "root";
$password = "";
$server = "localhost";
$db_handle = mysqli_connect($server, $user_name, $password, "skp");
if (!$db_handle)  {
                   die('Could not Connect : ' . mysqli_error());
                  }
else
             {
              $SQL= "CREATE TABLE comments(id INT PRIMARY KEY AUTO_INCREMENT,
 comment_on VARCHAR(100) ,
 comment_by VARCHAR(100) ,
 comment TEXT)";
              $select_query = mysqli_query($db_handle, $SQL);
              if(mysqli_query($db_handle, $SQL))
              {
               echo "Table creates successfully";
              }
              else{
               echo "error" . mysqli_error($db_handle);}
              }
mysqli_close($db_handle);
?>
