function gettrips() {

	var results = document.getElementById("search-results");

	// clear results list	
	//results.innerHTML="";

	var loadingdiv = document.getElementById("loadingdiv");

	// display loading gif
	loadingdiv.style.display="true";

	/*USE AJAX TO REFRESH RESULT LIST*/
	var xmlhttp;
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 ) {
			if (xmlhttp.status == 200) {
				
				// hide loading gif
				loadingdiv.style.display = "none"; 
				
				// show results of search
				results.innerHTML = xmlhttp.responseText;				
			}
		}
	}

	var start_loc = document.getElementById("select_start").options[document.getElementById("select_start").selectedIndex].text;
	var end_loc = document.getElementById("select_end").options[document.getElementById("select_end").selectedIndex].text

	var depart_date = document.getElementById("departdate").value;

	var type_takeman = document.getElementById("chk-pick").checked; 
	var type_bycar = document.getElementById("chk-gotpicked").checked;

	var radio_order = document.getElementsByName("rad-filter");
	var order_idx = -1;

	for (var i = 0; i < radio_order.length; i++) {
		if (radio_order[i].checked) {
			order_idx = i;		
			break;
		}
	}
		/*
	var depart_early = document.getElementById("select_start").value;
	var depart_late = document.getElementById("select_start").value;
	
	var price_up = document.getElementById("select_start").value;
	var price_down = document.getElementById("select_start").value;
	
	var pub_early = document.getElementById("select_start").value;
	var pub_late = document.getElementById("select_start").value;
	*/

	var geturl = "php_functions/getSearchResult.php?stloc=" + start_loc +
		"&edloc=" + end_loc + "&deptdate=" + depart_date + "&typtkm=" + type_takeman + "&typbcar=" + type_bycar +
		"&order=" + order_idx;
	
	geturl=encodeURI(encodeURI(geturl));

	xmlhttp.open("GET", geturl, false);
		//"&dperl=" + depart_early + "&deplt=" + depart_late + "&prxup=" + price_up +
		//"&prxdw=" + price_down + "&puberl=" + pub_early + "&publt=" + pub_late, false);
	xmlhttp.setRequestHeader("If-Modified-Since","0");
	xmlhttp.send();
}

function showFormByType(type){
	var setseat = document.getElementById("div-freeseats");
	var sethint = document.getElementById("div-price");
	
	if (type==1) {
		var seathtml = '<label>空余座位: </label><select id="select_free_seats"  name="freeseat">';
		for (var i = 1; i < 12; i++) {
			seathtml += '<option value="'+i+'">'+i+'</option>';
		}
		seathtml += "</select>";
		setseat.innerHTML=seathtml;
		
		sethint.innerHTML='<label>乘客单人价格: </label><input id="inp-price" name="price" onkeyup="checkPriceInput()" onafterpaste="checkPriceInput()"></input><span> 建议定价为每位乘客(不含司机)支付: (单程油费+高速路费)/3 </span>';
	}
	else{
		var seathtml = '<label>乘坐人数: </label><select id="select_free_seats"  name="freeseat">';
		for (var i = 1; i < 12; i++) {
			seathtml += '<option value="'+i+'">'+i+'</option>';
		}
		seathtml += "</select>";
		setseat.innerHTML=seathtml;

		sethint.innerHTML='<lable>期望单人价格: </lable><input id="inp-price" name="price" onkeyup="checkPriceInput()" onafterpaste="checkPriceInput()"></input><span> 建议乘客均摊出行成本 </span>';
	}
}