
function checkEmail()
{
	var temp = document.getElementById("signupemail");
	//对电子邮件的验证
	var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;

	var hint= document.getElementById("hint-email");
		
	if(!myreg.test(temp.value))
	{
		hint.innerHTML="*请输入有效的E-mail";
		temp.style.borderColor="red";
		
		return false;
	}
	

	/*USE AJAX TO CHECK EXISTING EMAIL*/
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	  {
	    if(xmlhttp.responseText=="1"){
	    	hint.innerHTML="*该账号已经存在!";
	    	temp.style.borderColor="red";
	    	return false;
	    }
	  }
	}
	xmlhttp.open("GET","getemailhint.php?q="+temp.value,true);
	xmlhttp.send();

	
	hint.innerHTML="";
	temp.style.borderColor="#00c957";
	return true;
}


function checkPwd()
{
	var pwd1 = document.getElementById("signuppassword");
	var hint= document.getElementById("hint-pwd");
	var patrn=/^(\w){6,14}$/;	
	
	if(!patrn.test(pwd1.value))
	{
		hint.innerHTML="*密码格式不符合规定";
		pwd1.style.borderColor="red";

		return false;
	}
	
	hint.innerHTML="";
	pwd1.style.borderColor="#00c957";
	return true;
}

function checkPwdConf()
{
	var pwd1 = document.getElementById("signuppassword");
	var pwd2 = document.getElementById("signuppassword1");
	var hint= document.getElementById("hint-pwdconf");
	if(pwd1.value !== pwd2.value)
	{
		hint.innerHTML="*密码不一致";
		pwd2.style.borderColor="red";
		
		return false;
	}
	
	hint.innerHTML="";
	pwd2.style.borderColor="#00c957";
	return true;
}

function checkName()
{
	var hint=document.getElementById("hint-name");
	var re1 = new RegExp("^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[a-zA-Z0-9])*$");
	
	if(!document.getElementById("signupusername").value)
	{
		hint.innerHTML="*名字不能为空";
		document.getElementById("signupusername").style.borderColor="red";
		return false;
	}
	else
	{
		if(!re1.test(document.getElementById("signupusername").value))
		{
			hint.innerHTML="*请输入正确姓名";
			document.getElementById("signupusername").style.borderColor="red";
			return false;
		}
		else
		{
			hint.innerHTML="";
			document.getElementById("signupusername").style.borderColor="#00c957";
		}
	}
	return true;
}

function checkBirth(){
	hint=document.getElementById("hint-birth");
	if(document.getElementById("user_yob").value==0)
	{
		hint.innerHTML="*请选择出生年份";
		document.getElementById("user_yob").style.borderColor="red";
		return false;
	}
	else{
		hint.innerHTML="";
		document.getElementById("user_yob").style.borderColor="#00c957";
	}
	return true;
}

function checkPhone(){
	
	var ck=/^(13[0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8}$/;
	
	hint=document.getElementById("hint-phone");
	if(!ck.test(document.getElementById("signupphone").value))
	{
		hint.innerHTML="*请输入正确手机号";
		document.getElementById("signupphone").style.borderColor="red";
		return false;
	}
	else{
		hint.innerHTML="";
		document.getElementById("signupphone").style.borderColor="#00c957";
	}
	return true;
}

function checkForm()
{
	if(!checkName()){return false;}

	//if(!checkBirth()){return false;}

	if(!checkPhone()){return false;}

	if(!checkEmail()){return false;}
	
	if(!checkPwd()){return false;}

	if(!checkPwdConf()){return false;}
	
	/*var ischecklaw = 0;
	if(document.getElementById("check-law").checked) 
	{ 
		ischecklaw = document.getElementById("check-law").value; 
	}
	if(ischecklaw==0)
	{
	//	alert('提示\n请接收使用协议！');
		return false;
	}
	*/
	return true;
}

function checkLoginPwd()
{
	var login = document.getElementById("email");
	var pwd = document.getElementById("password");
	var hint = document.getElementById("hint-loginpwd");

	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	  {
	    if(xmlhttp.responseText=="1"){
	    	hint.innerHTML="*账号或密码错误!";
	    	pwd.style.borderColor="red";
	    	return false;
	    }
	  }
	}
	xmlhttp.open("POST","logincheck.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("l="+login.value+"&p="+pwd.value);

}