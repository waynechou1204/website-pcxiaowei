<?php

//检查用户是否登录
function checklogin(){
	//检查一下session是不是为空
	if(empty($_SESSION['user_info'])){    
		
		//如果session为空，并且用户没有选择记录登录状
		if(empty($_COOKIE['username']) || empty($_COOKIE['password'])){  
			//转到登录页面，记录请求的url，登录后跳转过去，用户体验好。
			//header("location:login.php?req_url=".$_SERVER['REQUEST_URI']);  
		}
		
		//用户选择了记住登录状态
		else{   
			//去取用户的个人资料
			$user = getUserInfo($_COOKIE['username'],$_COOKIE['password']);   
			
			//用户名密码不对没到取到信息，转到登录页面
			if(empty($user)){    
				header("location:login.php?req_url=".$_SERVER['REQUEST_URI']);
			}else{
				//用户名和密码对了，把用户的个人资料放到session里面
				$_SESSION['user_info'] = $user;   
			}
		}
	}
}

?>