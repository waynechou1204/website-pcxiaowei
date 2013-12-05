function checkEmail()
{
	var temp = document.getElementById("inp_user_email");
	//对电子邮件的验证
	var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;

	var hint= document.getElementById("hint-email");
		
	if(!myreg.test(temp.value))
	{
		hint.innerText="*请输入有效的E-mail";
		temp.style.borderColor="red";
		
		return false;
	}
	
	/*var db_emails = document.getElementById("inp_db_emails").value;
	for (var dbe in db_emails) 
	{ 
		alert(dbe);
		if(dbe==temp.value)
		{alert('3');
			alert('此邮箱已被注册！请更换一个邮箱地址！');
			return false;
		}
	}*/
	
	hint.innerText="";
	temp.style.borderColor="#00c957";
	return true;
}

function checkPwd()
{
	var pwd1 = document.getElementById("inp_user_pwd");
	var hint= document.getElementById("hint-pwd");
	var patrn=/^(\w){6,14}$/;	
	
	if(!patrn.test(pwd1.value))
	{
		hint.innerText="*密码必须输入6-14个字母、数字、下划线";
		pwd1.style.borderColor="red";

		return false;
	}
	
	hint.innerText="";
	pwd1.style.borderColor="#00c957";
	return true;
}

function checkPwdConf()
{
	var pwd1 = document.getElementById("inp_user_pwd");
	var pwd2 = document.getElementById("inp_user_pwdconfirm");
	var hint= document.getElementById("hint-pwdconf");
	if(pwd1.value !== pwd2.value)
	{
		hint.innerText="*密码不一致";
		pwd2.style.borderColor="red";
		
		return false;
	}
	
	hint.innerText="";
	pwd2.style.borderColor="#00c957";
	return true;
}

function checkName()
{
	var hint=document.getElementById("hint-name");
	var re1 = new RegExp("^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[a-zA-Z0-9])*$");
	
	if(!document.getElementById("inp_user_name").value)
	{
		hint.innerText="*名字不能为空";
		document.getElementById("inp_user_name").style.borderColor="red";
		return false;
	}
	else
	{
		if(!re1.test(document.getElementById("inp_user_name").value))
		{
			hint.innerText="*请输入正确姓名";
			document.getElementById("inp_user_name").style.borderColor="red";
			return false;
		}
		else
		{
			hint.innerText="";
			document.getElementById("inp_user_name").style.borderColor="#00c957";
		}
	}
	return true;
}

function checkBirth(){
	hint=document.getElementById("hint-birth");
	if(document.getElementById("user_yob").value==0)
	{
		hint.innerText="*请选择出生年份";
		document.getElementById("user_yob").style.borderColor="red";
		return false;
	}
	else{
		hint.innerText="";
		document.getElementById("user_yob").style.borderColor="#00c957";
	}
	return true;
}

function checkPhone(){
	
	var ck=/^(13[0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8}$/;
	
	hint=document.getElementById("hint-phone");
	if(!ck.test(document.getElementById("inp_user_phone").value))
	{
		hint.innerText="*请输入正确手机号";
		document.getElementById("inp_user_phone").style.borderColor="red";
		return false;
	}
	else{
		hint.innerText="";
		document.getElementById("inp_user_phone").style.borderColor="#00c957";
	}
	return true;
}

function checkForm()
{
	if(!checkName()){return false;}

	if(!checkBirth()){return false;}

	if(!checkPhone()){return false;}

	if(!checkEmail()){return false;}
	
	if(!checkPwd()){return false;}
	
	var ischecklaw = 0;
	if(document.getElementById("check-law").checked) 
	{ 
		ischecklaw = document.getElementById("check-law").value; 
	}
	if(ischecklaw==0)
	{
	//	alert('提示\n请接收使用协议！');
		return false;
	}

	return true;
}