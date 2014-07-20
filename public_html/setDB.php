<?php 

function connectDB(){
	$db = mysql_connect("localhost", "zhouxiaowei_xiaowei", "891204") or die("Could not connect: " . mysql_error());
	mysql_select_db("zhouxiaowei_tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	mysql_query('SET NAMES UTF8');
}

?>