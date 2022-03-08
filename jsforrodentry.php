<div id="jsfordtarea">

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/jquery/jquery-ui-1.12.0/jquery-ui.min.js"></script>  
  <link rel="stylesheet" href="assets/jquery/jquery-ui.css">	
  <link rel="stylesheet" href="assets/jquery/style.css">
  <script>  

 function vldfrm3(){	return true;
	}	


  $(function() {

     /* global setting */
    var datepickersOpt = {
		 defaultDate: "+1w",		dateFormat: "dd-M-yy",		changeMonth: true,			changeYear: true,		numberOfMonths: 1,			 minDate: '-6M',	 maxDate: '0',
        minDate   : '-5Y'
    }

    $("#rqstdt1").datepicker($.extend({
        onSelect: function() {
            var minDate = $(this).datepicker('getDate');
            minDate.setDate(minDate.getDate()+0); //add two days
            $("#actdt1").datepicker( "option", "minDate", minDate);
			$("#rslvdt1").datepicker( "option", "minDate", minDate);
        }
    },datepickersOpt));

    $("#actdt1").datepicker($.extend({
        onSelect: function() {
            var minDate = $(this).datepicker('getDate');
            minDate.setDate(minDate.getDate()+0); //add two days
            $("#rslvdt1").datepicker( "option", "minDate", minDate);
			var maxDate = $(this).datepicker('getDate');
            maxDate.setDate(maxDate.getDate()-0);
            $("#rqstdt1").datepicker( "option", "maxDate", maxDate);
        }
    },datepickersOpt));
	$("#rslvdt1").datepicker($.extend({
        onSelect: function() {
            var maxDate = $(this).datepicker('getDate');
            maxDate.setDate(maxDate.getDate()-0);
            $("#rqstdt1").datepicker( "option", "maxDate", maxDate);
			$("#actdt1").datepicker( "option", "maxDate", maxDate);
        }
    },datepickersOpt));
	
}); 
  
  
 
  
 function rmksfocusout(){	
							var rwlgth = document.getElementById('workrecord').rows.length;
						if(rwlgth<=5)	document.getElementById('addrow').disabled = false;
	 
						}
 
 function addtotbl(a){
	 var x=a; 
	if(x<=5){  
	var countrwdata= document.getElementById("countrwdt");		var countrwdatavl = countrwdata.value;	
	 var table = document.getElementById("workrecord");
	var row = table.insertRow(x);
	row.innerHTML = "<td align='centre'>		<button name='srno' value="+x+" style='color:white;align:centre;' disabled>  <b> "+x+"	</b> </button></td>						<td>	<input type='text' name='abstract"+x+"' 		id='abstract"+x+"'	 	value='Z' required >							</td>									<td>	<input type='text' name='abstractdtl"+x+"' 		id='abstractdtl"+x+"' 			value='Sundry Other Earnings' required >										</td>		 <td align='left'> <input type='text' name='minorhd"+x+"' 	id='minorhd"+x+"' 	value=''  required >	</td>						<td>	<input type='text' name='minorhddtl"+x+"' 	id='minorhddtl"+x+"' 		value='' required >								</td>							<td>	<input type='text' name='subhd"+x+"' 		id='subhd"+x+"' 		value='' required >							</td>									<td>	<input type='text' name='subhddtl"+x+"' 	id='subhddtl"+x+"'		value='' required >							</td>									<td>	<input type='text' name='dtlhd"+x+"' 		id='dtlhd"+x+"' 	value='' required ></td>									<td>	<input type='text' name='dtlhddtl"+x+"' 		id='dtlhddtl"+x+"'	 	value='' onfocusout='rmksfocusout();' required >							</td>				";
	
	
	
	
	  $(function() {

     /* global setting */
	 var datepickersOpt= {
		 defaultDate: "+1w",		dateFormat: "dd-M-yy",		changeMonth: true,			changeYear: true,		numberOfMonths: 1,			 minDate: '-6M',	 maxDate: '0',
        minDate   : '-5Y'
    }

    $('#rqstdt'+x+'').datepicker($.extend({
        onSelect: function() {
            var minDate = $(this).datepicker('getDate');
            minDate.setDate(minDate.getDate()+0); //add two days
            $('#actdt'+x+'').datepicker( "option", "minDate", minDate);
			$('#rslvdt'+x+'').datepicker( "option", "minDate", minDate);
        }
    },datepickersOpt));

    $('#actdt'+x+'').datepicker($.extend({
        onSelect: function() {
            var minDate = $(this).datepicker('getDate');
            minDate.setDate(minDate.getDate()+0); //add two days
            $('#rslvdt'+x+'').datepicker( "option", "minDate", minDate);
			var maxDate = $(this).datepicker('getDate');
            maxDate.setDate(maxDate.getDate()-0);
            $('#rqstdt'+x+'').datepicker( "option", "maxDate", maxDate);
        }
    },datepickersOpt));
	$('#rslvdt'+x+'').datepicker($.extend({
        onSelect: function() {
            var maxDate = $(this).datepicker('getDate');
            maxDate.setDate(maxDate.getDate()-0);
            $('#rqstdt'+x+'').datepicker( "option", "maxDate", maxDate);
			$('#actdt'+x+'').datepicker( "option", "maxDate", maxDate);
        }
    },datepickersOpt));
	
}); 
	
	
	

	document.getElementById('countrwdt').value = countrwdatavl*1+1;  // alert(document.getElementById('countrwdt').value);
	}
	else 	document.getElementById('addrow').disabled = true;
			document.getElementById('addrow').disabled = true;			document.getElementById('Remove').disabled = false;
 }
 
 function rmvrw1(){
					var rwlgth = document.getElementById('workrecord').rows.length;			var dktrw = rwlgth - 1;	
					var countrwdata= document.getElementById("countrwdt");		var countrwdatavl = countrwdata.value;
				//	alert(rwlgth);
				if(rwlgth>=3){ document.getElementById("workrecord").deleteRow(dktrw);	
				countrwdata.value = (countrwdatavl-1);  // alert(document.getElementById("countrwdt").value);
				if(rwlgth==3)	document.getElementById('Remove').disabled = true;				
				}
				else	document.getElementById('Remove').disabled = true;
				
				}
				
	 
 
 
 
 
 

 
 
 
 
 
 /* 
  var curdt = new Date(); 
 function setmindt(){	var rqstdt1=document.getElementById("rqstdt1").value;				
	if(rqstdt1!=''){		
		var reportdt1val = new Date(rqstdt1);  	var timeDiff = Math.abs(curdt.getTime() - reportdt1val.getTime()); 		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24))-1;
	rqstst.innerHTML= "$('#actdt1').datepicker({       	   defaultDate: '+1w',		dateFormat: 'dd-M-yy',	changeMonth: true,		changeYear: true,		numberOfMonths: 1,	 minDate: '-'+diffDays+'D',		 maxDate: '0',    });	";						
	}	else {	document.getElementById("actdt1").value='';				document.getElementById("actdt1").placeholder='Request date.';			}	
 }
 }
 
 
function dtpclk(){
	$('#chequedate').datepicker({       
	   defaultDate: "+1w",			dateFormat: "dd-M-yy",			changeMonth: true,				changeYear: true,		numberOfMonths: 1,			 minDate: '-6M',					 maxDate: '+3M',
    });
}	*/
  </script>
  <?php	//	include 'js4rpt.php';		 ?>
  </div>