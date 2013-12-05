var result = document.getElementById("user_image");
var input = document.getElementById("button_user_image");

if (typeof FileReader === 'undefined') {
	result.innerHTML = "<p class='warn'>抱歉，你的浏览器不支持 FileReader</p>";
	input.setAttribute('disabled', 'disabled');
} else {
	input.addEventListener('change', readFile, false);
}

function readFile() {
	var file = this.files[0];
	if (!/image\/[png|jpg|gif]/.test(file.type)) {
		alert("请确保文件为图像类型");
		return false;
	}
	
	var size = file.size/1024; //kb
	size = size/1024 //mb;
	if(size>1){
		alert("图片大小不能超过1MB");
		return false;
	}
	var reader = new FileReader();
	reader.readAsDataURL(file);
	reader.onload = function(e) {
		result.src = this.result;
	}
}

