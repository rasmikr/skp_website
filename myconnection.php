<?php
$user_name = "root";
$password = "";
$server = "localhost";
$db_handle = mysqli_connect ($server, $user_name, $password, "skp");
if (!$db_handle){
                 die('Could Not Connect :' .mysqli_error());
                } 
echo 'Connected Successfully';
mysqli_close($db_handle);
?>
