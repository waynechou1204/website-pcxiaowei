<?php
	session_start();

	require_once "class.phpmailer.php";
	require_once "setDB.php";

	function smtp_mail( $sendto_email, $subject, $body, $extra_hdrs, $user_name){    
	    $mail = new PHPMailer();    
	    $mail->IsSMTP();                  // send via SMTP    
	    $mail->Host = "smtp.sina.com";   // SMTP servers    
	    $mail->SMTPAuth = true;           // turn on SMTP authentication    
	    $mail->Username = "pcxiaowei@sina.com";     // SMTP username  注意：普通邮件认证不需要加 @域名    
	    $mail->Password = "891204"; // SMTP password    
	    $mail->From = "pcxiaowei@sina.com";      // 发件人邮箱    
	    $mail->FromName =  "拼车晓位";  // 发件人    
	  
	    $mail->CharSet = "utf-8";   // 这里指定字符集！    
	    $mail->Encoding = "base64";    
	    $mail->AddAddress($sendto_email,"Admin");  // 收件人邮箱和姓名    
	    $mail->AddReplyTo($extra_hdrs, $user_name);    
	    //$mail->WordWrap = 50; // set word wrap 换行字数    
	    //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件    
	    //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    
	    $mail->IsHTML(true);  // send as HTML    
	    // 邮件主题    
	    $mail->Subject = $subject;    
	    // 邮件内容    
	    $mail->Body = $body;                                                                          
	    $mail->AltBody ="text/html";    

	    if(!$mail->Send())    
	    {    
	        echo '<script>alert("Error, please try later");location.href="../index.php";</script>';
	        exit;    
	    }    
	    else {    
	        echo '<script>alert("OK!");location.href="../index.php";</script>';
	    }    
	}    
	
	// 参数说明(发送到, 邮件主题, 邮件内容, 用户邮箱, 用户名)    
	if(!isset($_GET['claimemail']))
	{
		smtp_mail("admin@pcxiaowei.com", "Suggestion", $_POST['textarea'], $_SESSION['useremail'], $_SESSION['username']);  
	}
	else{
		connectDB();
	
		// change pwd
		$password = substr(md5(time()), 0, 6);// new random password
		$email = $_GET['claimemail'];
		$encryp = md5($password);

		$str = "UPDATE CLIENT SET PWD = \"$encryp\" WHERE EMAIL=\"$email\"";

		$result=mysql_query($str) or die("Invalid query: " . mysql_error());
		
		$str = "拼车晓位网用户，您好! <br /><br /> 您的密码已经重置为：" . $password . 
		"<br />请及时登录<a href=\"http://www.pcxiaowei.com\">拼车晓位</a>进行修改! <br /><br /> 祝您度过美好的一天！<br />拼车晓位管理员";

		smtp_mail($_GET['claimemail'], "账户安全提醒：密码重置", $str, "admin@pcxiaowei.com", "拼车晓位管理员");  	
	}
?>
