<?php

	include 'setDB.php';

	$q=$_GET["q"];

	connectDB();

	$sql="SELECT * from client WHERE email= '" .$q. "'";

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