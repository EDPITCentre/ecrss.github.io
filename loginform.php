<!--p id="lgnmsg" style="color:red;background-color:yellow;width:260px;margin: 2% 20% 0% 40% ">					</p-->
<div align="center" style = "padding:50px">
    <div style = "width:350px; border: solid 1px #333333; " align = "left">
					<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
			<div style = "margin:25px">
						
                        <form name="loginform" id="loginform" action = "#" method = "post">
						<p id="lgnmsg" style="color:red;background-color:yellow;width:260px; "></p>
							<table>
							  <tr>
								<td>
								  <label>User ID:</label></td><td colspan="2">		
							<input type="text" name="userid" id="userid" value="" style=" color: black; background-color: Silver; width:200px;" required >	  
				</td>
							  </tr>
							  <tr>
								<td>
								  <label>Password:&nbsp;</label></td><td><input type = "password" align="left" name = "pwd" id="pwd" value="" style=" color: black; background-color: Silver; width:200px;" required /><font color="red">*</font>
								</td>
							  </tr>
							  <tr>
							    <td></td>
							    <td align="center">
								<br>
								
								<input type="reset" name="Reset" value="Reset" onclick="ResetText()" style=" color: black; background-color: Silver; width:80px;" />
								  &nbsp; &nbsp; 								  
								  <b>
								  <input type="submit" name="submit" value="Login" name="Login" style=" color: black; background-color: Silver; width:80px;"/>
								  </b>
							    </td>
							  </tr>
								<!--<tr><td><a href="Forgot.php"><font color="blue">Forgot Password</font></td></tr-->
							</table>
						</form>
					<div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
			</div>
	</div>
</div>  
<?php 	include "authentication.php";	 ?>