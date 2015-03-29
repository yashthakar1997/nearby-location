<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div class="header" id="head">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>
  <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:919px;
	height:789px;
	z-index:1;
	left: 13px;
	top: 9px;
}

-->
</style>
  </head>
  <body>
  <div id="Layer1">
    <div class="header" style="float:left;height:100px;width:20px" >
	<img src="Google-Map-Logo.png" height="100px" alt="logo" />
	</div>
        <div class="header" style="height:100px"><p><h1 align="center">Near By Location</h1></p></div>
		
		
    <div class="menu" style="height:50px;">
		<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th height="45" scope="col">Home</th>
    <th scope="col">Log in</th>
    <th scope="col">Registration</th>
    <th scope="col">Offers</th>
    <th scope="col">About</th>
  </tr>
</table>
 </div>
        <div class="maincontent" style="float:left;height:400px;width:700px;">
		<h1 align="center">Log In </h1>
		<form method="post">
		
		<table width="100%"   cellspacing="1" cellpadding="1" >
  <tr>
    <td width="250" height="35" align="right">User Name  </td>
    <td><input type="text" name="user" size="40"/></td>
  </tr>
  <tr>
    <td height="38" align="right" width="250">Password </td>
    <td><input type="password" name="pass" size="40"/></td>
  </tr>
  <tr>
    <td height="47" colspan="2" align="center"><input id="button" type="submit" name="submit" value="Log In"/></td>
   
  </tr>
</table>

		
		
		 
		</form>
		
		</div>
        
		<div class="offers" style="height:400px;"><h1>Display Offers</h1></div>
		
  
  
        <div class="img" id="slide_img" style="height:135px"><h1>slide images</h1></div>
        <div class="footer" style="height:100px"><h1>Developer option</h1> </div>
  </div>
  </body>
  </html>
   <?php

if(isset($_POST['submit']))
{
echo "btn press";



$a = $_POST['user'];
$b = $_POST['pass'];


$con=mysql_connect("localhost","root");
mysql_select_db("Project");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
 $sql="SELECT * FROM reg WHERE name='$a' and password='$b'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "sucess";
//echo "<a href='index1.php'></a>";
header("Location:index1.php");
}
else {
echo "Wrong Username or Password";
} 
  
  
  

mysql_close($con);
}
?> 
  
  
</div>
  
</div>
