<html>
<head>
	  <title> Employee : : Insert Records</title>
</head>
 <body>
 <form  method="post"><hr width="400">
  <table width="250" align="center" >
  <tr>
  <td align="center"  colspan="4">Enter Employee Information</td>
  </tr>
  <tr>
  <td align="right">Employee ID</td>
  <td align="left"><input type="text" name="txteid" placeholder="Enter Employee Id." required></td>
  </tr>
  <tr>
  <td align="right">Employee Name</td>
  <td align="left"><input type="text" name="txtempname" placeholder="Enter Employee Name." required></td>
  </tr>
  <tr>
  <td align="right">Department</td>
  <td align="left"><input type="text" name="txtdepartment" placeholder="Enter Department." required></td>
  </tr>
  <tr>
  <td align="right">City</td>
  <td align="left"><input type="text" name="txtcity" placeholder="Enter City." required></td>
  </tr>
  <tr>
<td align="right" colspan="4"><input type="submit" name="btninsert" value="Insert"></td>
</tr>
  </table>
  </form>
 </body>
</html>
<?php
error_reporting(0);
if(isset($_POST['btninsert']))
{
echo "btn press";


echo $a = $_POST['txteid'];
echo $b = $_POST['txtempname'];
echo $c = $_POST['txtdepartment'];
echo $d = $_POST['txtcity'];

$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("employee",$con);
 $sql="INSERT INTO empinfo (eid,empname,department,city) VALUES ($a,'$b','$c','$d')";

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