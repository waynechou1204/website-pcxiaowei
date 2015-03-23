<?php 


function connectDB()
{
	// $db = mysql_connect("localhost", "xiaowei", "891204") or die("Could not connect: " . mysql_error());
	// mysql_select_db("tongjicovoit",$db) or die ('Can\'t use foo : ' . mysql_error());
	// mysql_query('SET NAMES UTF8');
	
	$servername = "localhost";
	$username = "xiaowei";
	$password = "891204";
	$dbname = "tongjicovoit";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->query("set names utf8");	

	return $conn;
 // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
 //    VALUES (:firstname, :lastname, :email)");
    
 //    $stmt->bindParam(':firstname', $firstname);
 //    $stmt->bindParam(':lastname', $lastname);
 //    $stmt->bindParam(':email', $email);

 //    // 插入行
 //    $firstname = "John";
 //    $lastname = "Doe";
 //    $email = "john@example.com";
 //    $stmt->execute();
    
}

?>