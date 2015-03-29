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
		<h1 align="center">Registration</h1>
          <form method="post" action="Login.php">
            <table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td  align="right">id</td>
    <td><input type="text" name="id" size="40"/></td>
  </tr>
  <tr>
    <td  align="right"> Name </td>
    <td><input type="text" name="name" size="40"/></td>
  </tr>
  <tr>
    <td  align="right">Your E-mail</td>
    <td><input type="text" name="E-mail" size="40"/></td>
  </tr>
  <tr>
    <td  align="right">Re-enter your  E-mail</td>
    <td><input type="text" name="RE-mail" size="40"/></td>
  </tr>
  <tr>
    <td  align="right">Password </td>
    <td><input type="password" name="Password" size="40"/></td>
  </tr>
  <tr>
    <td  align="right">Conformpassword</td>
    <td><input type="password" name="Conformpassword" size="40" /></td>
  </tr>
  <tr>
    <td align="right">Birthdate </td>
    <td><input type="text" name="Birthdate" /></td>
  </tr>
  <tr>
    <td  align="right">Location</td>
    <td><input type="text" name="Location" /></td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="center"><input id="button" type="submit" name="submit" value="Sing Up"/></td>
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
error_reporting(0);
if(isset($_POST['submit']))
{
echo "btn press";


$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['E-mail'];
$d = $_POST['RE-mail'];
$e = $_POST['Password'];
$f = $_POST['Conformpassword'];
$g = $_POST['Birthdate'];
$h = $_POST['Location'] ;

$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("project",$con);
 $sql="INSERT INTO reg (id,name,Email,ReEmail,Password,Conformpassword,Birthdate,Location) VALUES($a,'$b','$c','$d','$e','$f','$g','$h')";

$e=mysql_query($sql);
if (isset($e))
{
	echo"Data Has Been Successfully Inserted.";
}
else
  {
  die("Try Again.").mysql_error();
  }
mysql_close($con);
}
?> 
  
  
</div>
