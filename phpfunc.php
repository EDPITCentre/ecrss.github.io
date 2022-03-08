 
<?php
	function connectdb() {
		$hostname = "localhost";	$username = "root";	$password = "edpecr";	$database = "ecrsems";
		$conn = mysqli_connect("$hostname","$username","$password","$database") or die(mysqli_error());
			if (!$conn) {	echo "Database connection Error...";	}
			else	return $conn;			}
		
	function fetchoption($qry1){	$conn=connectdb();			$qry = $qry1;	
		$results=mysqli_query($conn, $qry); 
		if(mysqli_num_rows($results)>=1)
			{	while($row=mysqli_fetch_array($results))	{
				echo " <option value='".$row[0]."'>".$row[1]."</option>";	}	mysqli_close($conn);	return true;		} 
		else	{	 echo " <option value=''>Not Available</option>"; mysqli_close($conn); return false;	}				 	
		}	
		
	function vldtquery($vlqryf){	$vlqry=$vlqryf;		$conn=connectdb();		 $vlstid =mysqli_query($conn, $vlqry);		
   if(mysqli_num_rows($vlstid)>=1){	mysqli_close($conn);	return false;					}
	else { 							mysqli_close($conn);	return true; }					}
	
	function runqry($insqry){			$conn=connectdb();		 $vlstid =mysqli_query($conn, $insqry);	
		if(!$vlstid)	{	mysqli_close($conn);		return false;		}	
		else { 				mysqli_close($conn);		return true;		}			
	}
		
		
		
	function gtmnt($yrmnt2){ $mntvl=$yrmnt2;
		switch ($mntvl) {
		case "01": $mntvl='January';      return $mntvl;	
		case "02": $mntvl='February';     return $mntvl;	
		case "03": $mntvl='March';		  return $mntvl;	
		case "04": $mntvl='April';		  return $mntvl;	
		case "05": $mntvl='May';		  return $mntvl;	
		case "06": $mntvl='June';		  return $mntvl;	
		case "07": $mntvl='July';		  return $mntvl;	
		case "08": $mntvl='August';		  return $mntvl;	
		case "09": $mntvl='September';    return $mntvl;	
		case "10": $mntvl='October';	  return $mntvl;	
		case "11": $mntvl='November';     return $mntvl;	
		case "12": $mntvl='December';     return $mntvl;	
	}	}
				?>	