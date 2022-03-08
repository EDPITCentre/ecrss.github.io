<?php $hostname = "localhost";
$username = "root";
$password = "edpecr";
$database = "ecrsems";
 
 
$conn = mysqli_connect("$hostname","$username","$password","$database") or die(mysqli_error());
// mysqli_select_db("$database", $conn);
/*
if(!mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db_name))
						{
							die("Cannot Connect To The Database");
						}   */
?>