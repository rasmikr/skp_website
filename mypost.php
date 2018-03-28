<?php
$db_sitename="skp";
$db_hostname="localhost";
$db_username="root";
$db_password="";
$comment_on=$_POST['comment_on'];
$comment_by=$_POST['comment_by'];
$comment=$_POST['comment'];
 
/* Leave the script below as it is */
$db=mysqli_connect($db_hostname, $db_username, $db_password,"skp");
if (!$db)  {
                   die('Could not Connect : ' . mysqli_error());
                  }
else
             {

$query = "INSERT INTO commentbox (comment_by, comment_on, comment) VALUES ('$comment_by','$comment_on, comment')";}
if(mysqli_query($db, $query)) 
{
echo "Comment Inserted";
}
else {
echo "Error while inserting comment, Contact the <a href=\"http://shrikrishna.tk\">programmer</a> for any help.";
}
header("refresh:2; url=commentbox.html");
mysqli_close($db);
?>

