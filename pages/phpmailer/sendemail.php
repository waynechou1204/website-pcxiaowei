<?php
	session_start();

	require_once "class.phpmailer.php";
	
	function smtp_mail( $sendto_email, $subject, $body, $extra_hdrs, $user_name){    
	    $mail = new PHPMailer();    
	    $mail->IsSMTP();                  // send via SMTP    
	    $mail->Host = "smtp.sina.com";   // SMTP servers    
	    $mail->SMTPAuth = true;           // turn on SMTP authentication    
	    $mail->Username = "pcxiaowei@sina.com";     // SMTP username  注意：普通邮件认证不需要加 @域名    
	    $mail->Password = "891204"; // SMTP password    
	    $mail->From = "pcxiaowei@sina.com";      // 发件人邮箱    
	    $mail->FromName =  "Client";  // 发件人    
	  
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
	        echo '<script>alert("Error, please try later");location.href="../search.php";</script>';
	        exit;    
	    }    
	    else {    
	        echo '<script>alert("OK!");location.href="../search.php";</script>';
	    }    
	}    
	
	// 参数说明(发送到, 邮件主题, 邮件内容, 用户邮箱, 用户名)    
	smtp_mail("admin@pcxiaowei.com", "Suggestion", $_POST['textarea'], $_SESSION['useremail'], $_SESSION['username']);  

?>
