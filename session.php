<?php
session_start();
	//echo "<script> alert(".$_SESSION['auth'].");	</script>";
	if($_SESSION["auth"] == 1) {	// header('location:frame1.php'); 
		}
	else
	{	echo "Unauthorise access.";		header('location:index.php');
		}
?>

