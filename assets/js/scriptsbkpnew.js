jQuery(document).ready(function() {
	
    /*
        Background slideshow
    */
 //   $('.top-content').backstretch("assets/img/ir1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    
    /*
        Wow
    */
    new WOW().init();
	
});

/* *************      new added functions                  *************/	
	
$("#nav a").click(function(e){
    e.preventDefault();
    $(".right").hide();
    var toShow = $(this).attr('href');
    $(toShow).show();
});



/*       Datepicker Functions                         */
var dateToday = new Date();
var dates = $("#from, #datepicker1, #datepicker3").datepicker({
    defaultDate: "+1w",
	dateFormat: "dd-mm-yy",
    changeMonth: true,
     changeYear: true,
    numberOfMonths: 1,
    minDate: '0',
	maxDate: '+5Y',
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
	//	alert('Hello');
    }
});


/*	var dateToday = new Date();
	var dates = $(" #datepicker2").datepicker({
    defaultDate: "+1w",
	dateFormat: "dd-mm-yy",
    changeMonth: true,
     changeYear: true,
    numberOfMonths: 1,
    minDate: '0',
	maxDate: '+5Y',
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
		var sndt = selectedDate;
		//alert(sndt);
		 if(sndt){
		//	var date2=document.getElementById("datepicker2").value;	
            $.ajax({
                type:'POST',
                url:'ajaxDatadtl.php',
				data: {date2: sndt, dateonly: 'dateonly',},
                success:function(html){
                    $('#sectiondtl').html(html);
					 $('#blockdes').html('<option value="">Select Section first</option>');
				   } 
			}); 
        }else{
            $('#sectiondtl').html('<option value="">Select Date first</option>'); 
			$('#blockdes').html('<option value="">Select Date first</option>'); 
        }		
	    }				
	});     */


	$(document).ready(function () {
	   $("#datepicker4").datepicker({
            //dateFormat: "dd-M-yy",
			dateFormat: "dd-mm-yy",
			changeMonth: true,
			changeYear: true,
			maxDate: '+5Y',
	//  minDate: 0,
            onSelect: function (date) {
                var date2 = $('#datepicker4').datepicker('getDate');
                date2.setDate(date2.getDate()+1);
               // $('#datepicker4').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
               $('#datepicker5').datepicker('option', 'minDate', date2);

            }
        });
$("#datepicker5").datepicker({
            //dateFormat: "dd-M-yy",
			dateFormat: "dd-mm-yy",
			changeMonth: true,
			changeYear: true,
			
			maxDate: '+5Y',
          //  minDate: 0,
            onSelect: function (date) {
                var date2 = $('#datepicker5').datepicker('getDate');
                date2.setDate(date2.getDate()+1);
               // $('#datepicker4').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
               $('#datepicker6').datepicker('option', 'minDate', date2);

            }
        });
});


/*       Radio button Machine change Function..                    */
$(document).ready(function(){

	$('input[id="machine"]').on('change',function(){
        var machine = $(this).val();
		var x = document.getElementById('mdtl');
        if(machine=='NO'){
			document.getElementById("mcndtl").value = "";
			x.style.display = 'none';
			
		} 
		else if(machine=='YES'){ 
        x.style.display = 'block';
		}
		else{
			x.style.display = 'none';
		}
	});
	

	
	 $('#section').on('change',function(){
        var section = $(this).val();
			//alert(section);
        if(section){		
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'section='+section,
                success:function(html){
                    $('#fromstation').html(html);
                   $('#tostation').html('<option value="">Select From</option>'); 
                }
            }); 
        }else{
            $('#fromstation').html('<option value="">Select Section first</option>');
            $('#tostation').html('<option value="">Select from Station first</option>'); 
        }
    });
   
    $('#fromstation').on('change',function(){
        var fromstation = $(this).val();
        if(fromstation){
			var sectiona=document.getElementById("section").value;	
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
				data: {fromstation: fromstation, sectiona: sectiona,},
				// data:'fromstation='+fromstation,				
                success:function(html){
                    $('#tostation').html(html);
                }
            }); 
        }else{
            $('#tostation').html('<option value="">Select state first</option>'); 
        }
    }); 
	
	
/*	 $('#sectiondtl').on('change',function(){
        var sectiondtl = $(this).val();
			document.getElementById('demand').style.display = 'none';
			document.getElementById("grant").style.display = 'none';
			document.getElementById("avail").style.display = 'none';
			document.getElementById("reason").style.display = 'none';
		
        if(sectiondtl){
		
			var date2=document.getElementById("datepicker2").value;	
            $.ajax({
                type:'POST',
                url:'ajaxDatadtl.php',
				data: {sectiondtl: sectiondtl, date2: date2,},
				// data:'fromstation='+fromstation,				
                success:function(html){
                    $('#blockdes').html(html);
                }
            }); 
        }else{
            $('#blockdes').html('<option value="">Select Section first</option>'); 
			document.getElementById('demandv').style.display = 'none';
        }
    }); */
	//		$('input:radio[name=blockdes]').change(function()

/*	$('input[id="blockdes"]').on('change',function{
        var blockdes = $(this).val();
		var dem = document.getElementById('demand');
        if(blockdes != ""){
			dem.style.display = 'block';
			alert(blockdes); 
		} 
		else{			
			dem.style.display = 'none';
			document.getElementById("grant").style.display = 'none';
			document.getElementById("avail").style.display = 'none';
			document.getElementById("reason").style.display = 'none';
		}	
	});
	*/
	
		$('input[id="demandv"]').on('change',function(){
        var demandv = $(this).val();
        if(demandv=='NO'){
			document.getElementById("grant").style.display = 'none';
			document.getElementById("demt").style.display = 'none';
			document.getElementById("avail").style.display = 'none';
			document.getElementById("reason").style.display = 'block';
			document.getElementById("availv").value="";
			document.getElementById("grant").value="";
			document.getElementById("sdtl").style.display = 'block';
			document.getElementById("savedtl").disabled = false;
			
		} 
		else if(demandv=='YES'){ 
			document.getElementById("demt").style.display = 'block';
			document.getElementById("grant").style.display = 'block';
			document.getElementById("sdtl").style.display = 'none';
			document.getElementById("savedtl").disabled = true;
		}
		else{
			document.getElementById("grant").style.display = 'none';
			document.getElementById("demt").style.display = 'none';
			document.getElementById("avail").style.display = 'none';
			document.getElementById("reason").style.display = 'none';
			document.getElementById("savedtl").disabled = true;
		}
		});
	
		$('input[id="grantv"]').on('change',function(){
        var grantv = $(this).val();
        if(grantv=='NO'){
			document.getElementById("avail").style.display = 'none';
			document.getElementById("grntm").style.display = 'none';
			document.getElementById("reason").style.display = 'block';
			document.getElementById("sdtl").style.display = 'block';
			document.getElementById("savedtl").disabled = false;
		} 
		else if(grantv=='Partially' ){ 
			document.getElementById("avail").style.display = 'block';
			document.getElementById("grntm").style.display = 'block';
			document.getElementById("reason").style.display = 'block';
			document.getElementById("sdtl").style.display = 'none';
			document.getElementById("savedtl").disabled = true;
		}
		else if(grantv=='Fully'){ 
			document.getElementById("avail").style.display = 'block';
			document.getElementById("grntm").style.display = 'block';
			document.getElementById("sdtl").style.display = 'none';
			document.getElementById("savedtl").disabled = true;
		}
		else{
			document.getElementById("avail").style.display = 'none';
			document.getElementById("grntm").style.display = 'none';
		}
		});	

		$('input[id="availv"]').on('change',function(){
        var availv = $(this).val();
		 if(availv=='Fully' || availv=='Partially' ){
			document.getElementById("reason").style.display = 'block';
			document.getElementById("wd").style.display = 'block';
		}else{document.getElementById("wd").style.display = 'none';}
        if(availv=='NO' || availv=='Partially' ){
			document.getElementById("reason").style.display = 'block';
		} 
		else if(availv=='Fully' && document.getElementById("grantv").value=='Partially'){ 
			document.getElementById("reason").style.display = 'block';
			//document.getElementById("wd").style.display = 'block';
		}
		else{
			document.getElementById("reason").style.display = 'block';
		}
			document.getElementById("sdtl").style.display = 'block';
			document.getElementById("savedtl").disabled = false;			
		});
		
});




		
		



		

	





	