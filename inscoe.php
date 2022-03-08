<?php	
	if(isset($_POST["subworkentry"]))
		{ 	//echo "<script> alert('Submitted successfully.'); 	</script>";
			require 'phpfunc.php';				$conn 		= connectdb();		$i=0; 		$j=1;		$k=0; $l=0;		$preqry='';
					$msg1="<br> <button id='wgprtp' style='color:#000080; background-color: #FF0000; border-radius: 50%; font-size:50px; width:100px; height:100px; margin: 10% 15% 5% 6%;' disabled > &#10008;	</button>  <br> <br> ";	
					$msgad="<br><button id='rtprtp' style='color:#483D8B; background-color: #4CAF50; border-radius: 50%; font-size:50px; width:100px; height:100px; margin: 10% 15% 5% 6%;' disabled >&#x2714;	</button> <br> 	";
			$countrwdt= $_POST['countrwdt'];
	
		for($i=0;$i<$countrwdt;$i++){
			$abstract[$i]		= $_POST['abstract'.$j.''];			$abstractdtl[$i]	= $_POST['abstractdtl'.$j.''];	$minorhd[$i]		= $_POST['minorhd'.$j.''];			$minorhddtl[$i]		= $_POST['minorhddtl'.$j.''];
			$subhd[$i]			= $_POST['subhd'.$j.''];			$subhddtl[$i]		= $_POST['subhddtl'.$j.''];	
			$dtlhd[$i] 			= $_POST['dtlhd'.$j.''];			$dtlhddtl[$i]		= $_POST['dtlhddtl'.$j.''];		}		
			$actionby			= $_SESSION["name"];				$curid		= $_SESSION['id'];					$today			= date("Y-m-d");
						
			$preqry= "('$abstract[$k]','$abstractdtl[$k]','$minorhd[$k]','$minorhddtl[$k]','$subhd[$k]','$subhddtl[$k]','$dtlhd[$k]','$dtlhddtl[$k]',CURDATE(),'2','$curid')";
			$k=$k+1;
	for($k=1;$k<$countrwdt;$k++)		
	$preqry= $preqry.",('$abstract[$k]','$abstractdtl[$k]','$minorhd[$k]','$minorhddtl[$k]','$subhd[$k]','$subhddtl[$k]','$dtlhd[$k]','$dtlhddtl[$k]',CURDATE(),'2','$curid')";
				
	$insworkdone="INSERT INTO semsclassification (ABSTRACT,ABSTRACTDTL,MINORHEAD,MINORHEADDTL,SUBHEAD,SUBHEADDTL,DETAILHEAD,DETAILHEADDTL,INSERTDATE,STS,INSBY) VALUES".$preqry.";";
	
	 $insworksts = runqry($insworkdone);
	//	$insworksts=0;		echo $insworkdone;
			if($insworksts){ $msg= "<b>".$msgad."<br>0".$k." Records <br>Submitted Successfully.<br></b> ";
			?>
			<table name="workrecordsubmit" id="workrecordsubmit" width="100%" height="97" border="1" cellpadding="1" cellspacing="1" align="left" > 
			<tr style="background-color:grey;color:white;"> 
		<th> Sr. <br> No.						</th>
		<th style="width:10%;">	Abstract	</th>
		<th style="width:15%;">	Abstract Deatail	</th>
		<th style="width:6%;">	Minor<br> Head	</th>
		<th style="width:14%;">	Minor Head Detail	</th>
		<th style="width:6%;"> Sub <br> Head.	</th>
		<th style="width:14%;" >	Sub Head Detail	</th>
		<th style="width:6%;">	Detail <br> Head	</th>
		<th style="width:25%;">	Detail Head Description	</th>

		
  </tr>

					<?php
					for($l=0;$l<$countrwdt;$l++){ echo "<tr style='background-color:grey;color:white;'>";
						echo "<td align='centre'>		<button  style='color:white;align:centre;' disabled>  <b> ".($l+1)."	</b> </button>		</td>";
						echo "<td align='left'> 	".$abstract[$l]	."				</td>";
						echo "<td>					".$abstractdtl[$l]	."			</td>";
						echo "<td>					".$minorhd[$l]	."			</td>";
						echo "<td>					".$minorhddtl[$l]	."			</td>";
						echo "<td>					".$subhd[$l]	."			</td>";
						echo "<td>					".$subhddtl[$l]	."			</td>";
						echo "<td>					".$dtlhd[$l]	."			</td>";	
						echo "<td>					".$dtlhddtl[$l]		."			</td></tr>";		}
						?>
					
					</table>
					<br><br>
			
			
			<?php 
			}
			else            $msg= $msg1."<br> <br>Error in Submission.<br> ".$insworkdone;
	
		echo "<div class='outpt'> ".$msg."<br></div>";	
	
	
	/*	$vldtqry="select * from rovdirdata where PARTYID='$partyuniqueid' and COMPANYID='$companyuniqueid' and CHEQUENO='$chequeno' and CHEQUEDATE='$chequedate' and divyear='$divdyr' and '$cltfol'='$foliono' and STS='2'";	
		$insrovdiv="INSERT INTO rovdirdata (ROVDIV,COMPANYNAME,COMPANYID,COMPID,PARTYNAME,PARTYID,Demat_Physical,$cltfol,DIVYEAR,CHEQUENO,CHEQUEDATE, ACCTNO,IFSC,BRANCH,AMOUNT,DIVPERSHARE,SHARESQNTY,FILENO,PAYSTS,INSDATE,INSBY,STS) VALUES('$entrytp','$companyname','$companyuniqueid','$companyid','$partyname','$partyuniqueid','$dmtphy2','$foliono','$divdyr','$chequeno','$chequedate','$acctno','$ifsc','$branch','$amt','$divdprshre','$noofshares','$fileno','$paysts',CURDATE(),'$curid','2')";
		$msg1="<br> <button id='wgprtp' style='color:red;border-radius: 50%;' disabled >&#10008;	</button>  <br> <br> ";	
		$msgad="<br><button id='rtprtp' style='color:green;border-radius: 50%;' disabled >&#x2714;	</button> <br> 	";
		$vlds = vldtquery($vldtqry);
		if($vlds){			$insrovdivsts = runqry($insrovdiv);			  
			if($insrovdivsts) $msg= $msgad."<br> <br>Submitted Successfully.<br> ";
			else            $msg= $msg1."<br> <br>Error in Submission.<br> ";
		}	else 			$msg= $msg1."<br> <br>This data is already available.<br> ";
			echo "<div class='outpt'> ".$msg."<br></div>";	
		*/	
		//	echo $vldtqry."<br>".$insrovdiv;
		}

	
	
?>