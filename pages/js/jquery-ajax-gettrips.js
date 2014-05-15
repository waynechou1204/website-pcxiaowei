function gettrips() {

	var results = document.getElementById("search-results");

	/*USE AJAX TO REFRESH RESULT LIST*/
	var xmlhttp;
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			// show results of search
			results.innerHTML = xmlhttp.responseText;

		}
	}

	var start_loc = document.getElementById("select_start").options[document.getElementById("select_start").selectedIndex].text;
	var end_loc = document.getElementById("select_end").options[document.getElementById("select_end").selectedIndex].text

	var depart_date = document.getElementById("departdate").value;

	var type_takeman = document.getElementById("chk-pick").checked; //????? value?
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
	xmlhttp.open("GET", "getSearchResult.php?stloc=" + start_loc +
		"&edloc=" + end_loc + "&deptdate=" + depart_date + "&typtkm=" + type_takeman + "&typbcar=" + type_bycar +
		"&order="+order_idx, false);
		//"&dperl=" + depart_early + "&deplt=" + depart_late + "&prxup=" + price_up +
		//"&prxdw=" + price_down + "&puberl=" + pub_early + "&publt=" + pub_late, false);
	xmlhttp.send();
}