window.onload = function() {
		function boe_request() {
			var request = new XMLHttpRequest();

			request.onreadystatechange = function() {
				if (request.readyState == 4) {
					if (request.status == 200) {
						document.getElementsByTagName("article")[0].innerHTML = request.responseText;
					} else if (request.status == 400) {
						alert("Error! Status: 400 returned!");
					} else {
						alert("There has been a readystatechange error!");
					}	
				}			
			}

		// Send the html in html, as the request body
			request.open("GET", "boe.html");
			request.setRequestHeader("Content-type", "text/html;charset=UTF-8");
			request.send(null);
			
		}

		function http_request() {
			var request;

			if (window.XMLHttpRequest) {
				request = new XMLHttpRequest();
			} else {
				request = new ActiveXObject("Microsoft.XMLHTTP");
			}

			request.onreadystatechange = function() {
				if (request.readyState == 4) {
					if (request.status == 200) {
						document.getElementById("test").innerHTML = request.responseText;
					} else if (request.status == 400) {
						alert("Error: status 400 was returned");
					} else {
						alert("Something other than status: 200 was returned");
					}
				}
			}
			request.open("GET", "boe.html", true);
			request.send();
		}

		var boe_logo = document.getElementsByClassName("gdp_logo")[0];

		boe_logo.addEventListener("click", boe_request, false);

} //End of window.onload