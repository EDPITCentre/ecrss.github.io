<?php     include "session.php";      include "phpfunc.php";        ?>
<link href="css/styleecrss1.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link href="css/styleecrss3.css" rel="stylesheet" type="text/css" charset="utf-8" />
<table class="para1">   <tr><th>   Tender/Contractor Report    <br>
<a href="loginsuccess.php" target="_self">
                    <button class="button"><font size="5">Home</font> </button> </a>
                                &nbsp; &nbsp; &nbsp; &nbsp;
                    <font size="4">      <?php     echo date("d-M-Y");         ?>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                    Welcome &nbsp; &nbsp; &nbsp; <?php   echo $_SESSION['name'];           ?>   </font>
</th></tr>
                </table>       


<table class="bdtbl">
            <tr class="bdtbltr1">
                    <td class="bdtbltr1td" >
                  
                    <p class="text-centre">   Select Report Type  <br>
        <input type="radio" name="reporttp" id="reportpfl" value='1'  required >Station Wise  &nbsp;  &nbsp;
        <input type="radio" name="reporttp" id="reportpf1" value='2'   required >Tender/Contract wises &nbsp;  &nbsp;
                </p>  
                 
                    </td> 
                    
            </tr>
            <tr class="bdtbltr1">
                    <td class="bdtbltr1td" >
                    <p class="text-centre">                  
                            
                    <select id="stnname" >   <option value="">Select Staion</option>	
                        <?php    $qry1="select distinct(stn),stn from catering";    fetchoption($qry1);                              ?>
                    </select>

                    <select id="partyname" >   <option value="">Select Staion</option>	
                        <?php    $qry2="select distinct(partyname),partyname from catering";    fetchoption($qry2);                              ?>
                    </select>
                        </p>  
                    </td> 
                    
            </tr>
            <tr class="bdtbltr2">
                    <td class="bdtbltr2td" >
                     <?php   //  include "loginform.php";         ?>   
                    </td> 
                    
            </tr>
            <tr class="bdtbltr1">
                    <td class="bdtbltr1td" >
                     &nbsp;  
                    </td> 
                    
            </tr>

    </table>
