<?php 
	if(isset($_POST["submit"])){
	$userid = $_POST['userid'];							$pwd = $_POST['pwd'];
	$usertype='Not Defined';							include 'connection.php';
	
	$qry = ("SELECT  id,username,userid,usertype FROM login_master 	WHERE userid = '$userid' AND pwd = '$pwd' AND status='Active' ");
	// echo $qry;
	$query = $conn->query($qry);						$rowCount = $query->num_rows; 
		if($rowCount > 0){
			while($row = $query->fetch_assoc()){
              $usertype= $row['usertype']; 				$name = $row['username'];			$id = $row['id'];		
            }												session_start();
			$_SESSION["auth"] = 1;						$_SESSION['id'] = $id;				$_SESSION["userid"] = $userid;
			$_SESSION["pwd"] = $pwd;					$_SESSION["usertype"]= $usertype;	$_SESSION["name"] = $name;
		if($usertype=='admin')
			echo "<script> window.location.href = 'http://www.google.co.in';</script>";//header('location:loginsuccessadmin.php');       
		else
			echo "<script> window.location.href = 'loginsuccess.php';</script>"; //header('location:loginsuccess.php');       
            }
        else
		{	// session_destroy(); 
		?>
	<script>document.getElementById("lgnmsg").innerHTML='<b>&nbsp;Incorrect User ID or Password.</b>';</script>	<?php	}
	
	
	}	?>
