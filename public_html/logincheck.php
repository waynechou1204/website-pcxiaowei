<?php

	include 'setDB.php';

	session_start();

	if (isset($_SESSION['islogin']) && $_SESSION['islogin']===true) 
	{
		//  这种方法是将原来注册的某个变量销毁
		unset($_SESSION['islogin']); 
		//  这种方法是销毁整个 Session 文件
		session_destroy();
		header("Location:index.php");
	} 
	else 
	{
		if (isset($_POST["loginemail"]) && isset($_POST["password"])) 
		{
			$useremail=$_POST["loginemail"]; // login
			//$password=md5($_POST['password']); //$password = md5($posts["password"]); 加密
			$password=md5($_POST['password']);

			connectDB();
			
			$sql="SELECT * from client WHERE email='$useremail' and pwd='$password'";
			$result=mysql_query($sql) or die("Invalid query: " . mysql_error());
			$row=mysql_fetch_array($result);
			
			if(mysql_num_rows($result)==1){
				
				$_SESSION["userid"]=$row['id'];
				$_SESSION["username"]=$row['name'];
				//$_SESSION['usersex']=$row['sex'];
				//$_SESSION['userbirthyear']=$row['birthyear'];
				//$_SESSION["usertype"]=$row['client_type'];
				$_SESSION['useremail']=$useremail;
				$_SESSION["userphone"]=$row['telephone'];
				$_SESSION["userpwd"]=$row['pwd']; // after encryption
				//$_SESSION["userphoto"]=$row['photo'];
				
				$_SESSION['islogin']=true;
				
				if ($_POST['remember']) {
					setcookie("useremail", $useremail, time()+3600*24*7);
					setcookie("password", $_POST['password'], time()+3600*24*7);
				}

				echo "1";
			}else{
				echo "0";
			}

			mysql_close();
		}
		
	}
	
	
?>