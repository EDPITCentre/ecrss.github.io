<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!link href="css/styleecrss2.css" rel="stylesheet" type="text/css" charset="utf-8" />
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 10%;
  padding: 10px;
  height: 300px;
  background-color:#aaa; 	/* Should be removed. Only for demonstration */
}
.column2 {
  float: right;
  width: 90%;
  padding: 10px;
  height: 300px; 
  background-color:#bbb;	/* Should be removed. Only for demonstration */
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


<div class="row" name="mainarea" id="mainarea">
  <div class="column1" name="menuarea" id="menuarea">
  <table class="dashbrdsubtbl1"  > 
          <tr class="dashbrdsubtbl1tr1"  > 
        <td class="dashbrdsubtbl1tr1td1" >
        <a href="#" onclick="$('#workingarea').load('rptfrm.php');"> 
                    <button class="button"><font size="2">Tender/Contractors Report </font> </button>   </a>
            </td> 
        </tr>    
        <tr class="dashbrdsubtbl1tr2"    >
        <td class="dashbrdsubtbl1tr1td2" >
                    <button class="button">Click Me</button>
            </td> 
        </tr>    
        <tr class="dashbrdsubtbl1tr1"    > 
        <td class="dashbrdsubtbl1tr1td1" >
                    <button class="button">Click Me</button>
            </td> 
            </tr>    
        <tr class="dashbrdsubtbl1tr2"    >   
        <td class="dashbrdsubtbl1tr1td2" >
                    <button class="button">Click Me</button>
            </td> 
          </tr>
        </table> 
  </div>
  <div class="column2" name="workingarea" id="workingarea">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>

</body>
</html>
