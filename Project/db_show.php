 <?php
        $con=mysql_connect("localhost","root");	
	mysql_select_db("project",$con);
                        $sql="select * from cafes";	
	$e=mysql_query($sql);
  	$retval = mysql_query( $sql, $con );
                      if(! $retval )
                       {
         	 die('Could not get data: ' . mysql_error());
	}
	 while($row = mysql_fetch_assoc($retval))
       	{
		 	 $lat = $row['location_lat']; 
		  	 echo "{$row['name']}  <br>";
                        } 
?>