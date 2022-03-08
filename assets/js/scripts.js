
function pinc(){
	var pincv=document.getElementById("pinno").value;		var nc=pincv.length; 
	if(nc=='6'){ 
		$.ajax({	type:'POST',   url:'ajaxData.php',   data:'pincv='+pincv,         
		   success:function(html){  $('#city').html(html);
	}	});
	}  else $('#city').html('<option value=""> Enter a correct PIN. </option>');
		}
		
	function getdist(dist,stt){
		document.getElementById("district").value=dist; document.getElementById("state").value=stt; 
	}	





		
	
	/*
	$(document).ready(function(){
	$('#state').on('change',function(){ 
        var stt = $(this).val(); 	
        if(stt){	
           $.ajax({	type:'POST',   url:'ajaxData.php',   data:'state='+stt,         
		   success:function(html){  $('#district').html(html);	$('#city').html('<option value="">  </option>');
		   }             }); 
        }else{ 		$('#district').html('<option value="">Select State first</option>');	}
	});	
	 $('#district').on('change',function(){ 
        var distv = $(this).val();  var sttv = document.getElementById("state").value ;	
        if(distv){	
           $.ajax({	type:'POST',   url:'ajaxData.php',    data: {sttv: sttv, distv: distv,},
            success:function(html){  $('#city').html(html);           }            }); 
        }else{   $('#city').html('<option value="">Select District first</option>');  }
    });	
	});
	*/	
