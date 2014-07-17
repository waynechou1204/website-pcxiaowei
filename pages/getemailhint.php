<?php

	include 'setDB.php';

	$q=$_GET["q"];

	connectDB();

	$sql="select * from CLIENT WHERE EMAIL= '" .$q. "'";

	$result = mysql_query($sql);
	$row=mysql_fetch_array($result);
			
	if(mysql_num_rows($result)==1){
		echo "1";
	}
	else if(mysql_num_rows($result)==0){
		echo "0";
	}

	mysql_close();	
?>