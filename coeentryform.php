<?php	//	require 'session.php';	 // require("phpfunc.php"); include 'slctsrch.php';
			include 'jsforrodentry.php';					
		?>

<style>
	input[type="text"]{
						padding: 7px 10px;	box-sizing: border-box;	background-color:   #e0e0bc;
						border: none;	width: 100%;	color: darkblue;	font-size: 16px;	font-weight: bold;	height: 35px;
						}
	input[type="text"]:hover {
						background-color: silver;	color: darkolivegreen;	height:36px;	align-content: center;
						}
	input[type="text"]:focus {
						background-color: whitesmoke;	color: darkviolet;	height: 38px;
						}
		</style>




<form id="form3" name="form3" onsubmit="return vldfrm3();" method="post" action="#">

<table name="workrecord" id="workrecord" width="100%" height="97" border="1" cellpadding="1" cellspacing="1" align="left" >
  <tbody>
 
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

    <tr>
		<td align='centre'>		<button name="srno" value="1" style="color:white;align:centre;" disabled>  <b> 1	</b> </button>		</td>
		<td>	<input type="text" name="abstract1" 	id="abstract1"	 	value="Z" required >										</td>
		<td>	<input type="text" name="abstractdtl1" 	id="abstractdtl1" 			value="Sundry Other Earnings"  required >		</td>
		<td align="left"> 
				<input type="text" name="minorhd1" 		id="minorhd1" 		value=""  required >		</td>	
		<td>	<input type="text" name="minorhddtl1" 	id="minorhddtl1"  	value="" required >										</td>
		<td>	<input type="text" name="subhd1" 		id="subhd1" 		value="" required >										</td>
		<td>	<input type="text" name="subhddtl1" 	id="subhddtl1"		value="" required >										</td>
		<td>	<input type="text" name="dtlhd1" 		id="dtlhd1" 		value="" required >			</td>
		<td>	<input type="text" name="dtlhddtl1"	 	id="dtlhddtl1" 		value="" onfocusout="rmksfocusout();" required >		</td>
		
	  </tr>
	</table>
	<br><br>
	
	<table name="workentrycontrol" id="workentrycontrol" width="100%" height="97" border="1" cellpadding="1" cellspacing="1" align="left">
	    	  
	  <tr>
		<td align="center" colspan="2"> 
		<input type="button" name="addrow" id="addrow" value="Add" onclick="addtotbl(document.getElementById('workrecord').rows.length);" style="width:200px;height:50px; color:navy;" disabled /> 					</td>
		<td align="center" colspan="2"> 
		<input type="button" name="Remove" id="Remove" value="Remove" onclick="rmvrw1();" style="width:200px;height:50px; color:navy;" disabled /> 					</td>
		<td align="center" colspan="2"> 
		<input type="reset" name="ncmpnyrst" style="width:200px;height:50px; color:navy;" /> 					</td>
		<td align="left" colspan="2"> 
		<input type="submit" name="subworkentry" value='Submit'   style="width:200px;height:50px;color:green;" /> 	</td> 
	  </tr>
   
  </tbody>
</table>
<input type="text" name="countrwdt" id="countrwdt" value=1 required hidden />
</form>
<?php		include 'inscoe.php';			?>