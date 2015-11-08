// Make sure javascript waits untill the page has loaded before running
window.onload = function() 
{

// Create sytling fuctions that cycle through the nodelist arrays created by grabbing headings and images - to be used in switch statement.
function style_array(array, color) 
{
	for(i = 0; i < array.length; i++) {
		array[i].style.color = color; 
	}
}

function image_array(array, border) {
	for(i = 0; i < array.length; i++) {
		array[i].style.border = border;
	}
}


function change_colour()
{
	var url = window.location.pathname; // store url of page in url	
	var match = ""; // defined for use later with switch

	// Create an array of keywords to match with url so the party that is being viewed can be determined
	var keyword_array = ["conservative", "labour", "lib_dems", "green_party_en", "ukip", "respect", "bnp", "snp", "plaid", "democratic_and",
	"sinn_fein", "social_democratic", "alliance", "ulster", "scottish_green", "ni21", "green_party_ni", "traditional"];

	//to make the switch statement easier to write/read set variables for class hooks that need their css changing to the correct colour
	var headings = document.querySelectorAll("h1, h3, h4");
	var images = document.querySelectorAll(".leaders_container, .main_portrait")[0].getElementsByTagName("img");
	var button = document.querySelectorAll("#expander, #button")[0];

	// Match the current address bar with the url variable and store the result in match variable. h1 h2 h3 h4 h5
	var i;

	for (i = 0; i < keyword_array.length; i++) {
		if(url.indexOf(keyword_array[i]) >= 1) {
			match = keyword_array[i];
		}
	}

	//  A switch is really saying "pick one of these based on this variables 
	// value" but an if statement is just a series of boolean checks.
	// Locates which case match corresponds to and changes css accordingly
	switch (match) {

		case keyword_array[0]:
			style_array(headings, "blue");
			image_array(images, "2px solid blue");
			button.style.color = "blue";
			break;

		case keyword_array[1]:
			style_array(headings, "red");
			image_array(images, "2px solid red");
			button.style.color = "red";
			break;

		case keyword_array[2]:
			style_array(headings, "#FC0");
			image_array(images, "2px solid #FC0");
			button.style.color = "#FC0";
			break;

		case keyword_array[3]:
			style_array(headings, "#00FF00");
			image_array(images, "2px solid #00FF00");
			button.style.color = "#00FF00";
			break;

		case keyword_array[4]:
			style_array(headings, "purple");
			image_array(images, "2px solid purple");
			button.style.color = "purple";
			break;

		case keyword_array[5]:
			style_array(headings, "#F60");
			image_array(images, "2px solid #F60");
			button.style.color = "#F60";
			break;

		case keyword_array[6]:
			style_array(headings, "midnightblue");
			image_array(images, "2px solid midnightblue");
			button.style.color = "midnightblue";
			break;

		case keyword_array[7]:
			style_array(headings, "#FF0");
			image_array(images, "2px solid #FF0");
			button.style.color = "#FF0";
			break;

		case keyword_array[8]:
			style_array(headings, "#6C3");
			image_array(images, "2px solid #6C3");
			button.style.color = "#6C3";
			break;

		case keyword_array[9]:
			style_array(headings, "brown");
			image_array(images, "2px solid brown");
			button.style.color = "#6C3";
			break;

		case keyword_array[10]:
			style_array(headings, "#060");
			image_array(images, "2px solid #060");
			button.style.color = "#060";
			break;

		case keyword_array[11]:
			style_array(headings, "#3C3");
			image_array(images, "2px solid #3C3");
			button.style.color = "#3C3";
			break;

		case keyword_array[12]:
			style_array(headings, "#FFEE10");
			image_array(images, " 2px solid #FFEE10");
			button.style.color = "#FFEE10";
			break;

		case keyword_array[13]:
			style_array(headings, "#99F");
			image_array(images, "2px solid #99F");
			button.style.color = "#99F";
			break;

		case keyword_array[14]:
			style_array(headings, "yellowgreen");
			image_array(images, "2px solid yellowgreen");
			button.style.color = "yellowgreen";
			break;

		case keyword_array[15]:
			style_array(headings, "midnightblue");
			image_array(images, "2px solid midnightblue");
			button.style.color = "midnightblue";
			break;

		case keyword_array[16]:
			style_array(headings, "royalblue");
			image_array(images, "2px solid royalblue");
			button.style.color = "royalblue";
			break;

		case keyword_array[17]:
			style_array(headings, "darkblue");
			image_array(images, "2px solid darkblue");
			button.style.color = "darkblue";
			break;
	} 
}

function expand_button() 
{
	//Change the text of the button when clicked
	if((this).innerHTML == "Show More") {
			(this).innerHTML = "Show Less";
	} else {
		(this).innerHTML = "Show More";
	}

	//toggle expanded div to display or hide when button is clicked
	if(document.getElementById("expanded").style.display == "none") {
		document.getElementById("expanded").style.display = "block";
	} else {
		document.getElementById("expanded").style.display = "none";
	}

}


function portraits_page() 
{
	function get_data(clicked_img) 
	{
		function submit_data() 
		{
			var name = document.getElementById("name").value;
			var age = document.getElementById("age").value;
			var education = document.getElementById("education").value;
			var salary = document.getElementById("salary").value;
			var traits = document.getElementById("traits").value;

			var parameters = "src=" + clicked_img + "&name=" + name + "&age=" + age + "&education=" + education + "&salary=" + salary + "&traits=" + traits;

			if(window.XMLHttpRequest) {
				// Code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// Code for IE5 and 6
				xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
			}
			/*
				xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				}
			}
			*/
			xmlhttp.open("POST", "postdata.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("Content-length", parameters.length);
			xmlhttp.send(parameters);
			document.getElementById("updated").innerHTML = "Record Updated Successfully.";
		}


		if(window.XMLHttpRequest) {
			// Code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// Code for IE5 and 6
			xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("info").innerHTML = xmlhttp.responseText;
				change_colour();
				document.getElementById("button").onclick = submit_data; 
			}
		}

		xmlhttp.open("GET", "getdata.php?src=" + clicked_img, true);
		xmlhttp.send();
	}


	function image_change()
	{	
		// Fuction to put the arrays of imgs and headings into remaining portrait elements
		function put_attributes_into_elements(element, attribute_array, attribute)
		{
			element_array = document.getElementsByClassName("portrait_container")[0].getElementsByTagName(element);

			var i;
			for(i = 0; i < element_array.length; i++) {
				document.getElementsByClassName("portrait_container")[0].getElementsByTagName(element)[i][attribute] = attribute_array[i];
			}
		}

		// Set main portrait img
		document.getElementsByClassName("portrait_main_img")[0].src = clicked_img;
		document.getElementsByTagName("h3")[0].innerHTML = clicked_heading;

		put_attributes_into_elements("img", portrait_imgs, "src");
		put_attributes_into_elements("h4", headings, "innerHTML");
	}


	function portraits_image_change() 
	{
		function put_attributes_into_elements(element, attribute_array, attribute)
		{
			element_array = document.getElementsByClassName("portrait_container")[0].getElementsByTagName(element); 

			var i;
			for(i = 0; i < element_array.length; i++) {
				document.getElementsByClassName("portrait_container")[0].getElementsByTagName(element)[i][attribute] = attribute_array[i];
			}
		}


		clicked_img = this.src;
		clicked_heading = this.parentNode.querySelectorAll("h3, h4")[0].innerHTML;


		// Get array of elements in portrait container
		var p_portrait_imgs = document.getElementsByClassName("main_portrait")[0].querySelectorAll("img");

		// Create empty element array to store attributes
		var np_portrait_imgs = [];
		// Get the attribute of each of those elements
		var i;
		for(i = 0; i < p_portrait_imgs.length; i++) {
			np_portrait_imgs.push(p_portrait_imgs[i].src); // would normally write .attribute instead of [attribute] but javascript does not allow a substitue of the property of an object with a variable in that way.
		}

		// Get array of elements in portrait container
		var p_headings = document.getElementsByClassName("main_portrait")[0].querySelectorAll("h3, h4");

		// Create empty element array to store attributes
		var np_headings = [];
		// Get the attribute of each of those elements
		var i;
		for(i = 0; i < p_headings.length; i++) {
			np_headings.push(p_headings[i].innerHTML); // would normally write .attribute instead of [attribute] but javascript does not allow a substitue of the property of an object with a variable in that way.
		}

		// Remove selected image and heading from both arrays to leave remaninder
		// Find position of clicked img in array
		var index = np_portrait_imgs.indexOf(clicked_img);
		// If clicked img exists in array remove it
		if(index >= 0) {
			np_portrait_imgs.splice(index, 1);
		}

		// Do the same with headings array
		var index = np_headings.indexOf(clicked_heading);

		if(index >= 0) {
			np_headings.splice(index, 1);
		}

		// Set main portrait img
		document.getElementsByClassName("portrait_main_img")[0].src = clicked_img;

		document.getElementsByTagName("h3")[0].innerHTML = clicked_heading;

		// Set remaining portrait images
		put_attributes_into_elements("img", np_portrait_imgs, "src");
		put_attributes_into_elements("h4", np_headings, "innerHTML");

		get_data(clicked_img);
	}


	// function to ajax portraits.html into article tag
	function portraits_ajax()
	{
		if(window.XMLHttpRequest) {
			// Code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// Code for IE5 and 6
			xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementsByTagName("article")[0].innerHTML = xmlhttp.responseText;
				image_change();
				get_data(clicked_img);

				portraits_node_list = document.getElementsByClassName("main_portrait")[0].getElementsByTagName("img");
				var i;
				for(i = 0; i < party_imgs.length; i++) {
					portraits_node_list[i].onclick = portraits_image_change;
				}
			}
		}

		xmlhttp.open("GET", "portraits.html", true);
		xmlhttp.send();
	}

	// To get the src of all images in the leaders container
	function get_element_attributes(attribute, selector)
	{
		// Get array of elements in leaders container
		var element_array = document.getElementsByClassName("leaders_container")[0].querySelectorAll(selector);

		// Create empty element array to store attributes
		var attribute_array = [];
		// Get the attribute of each of those elements
		var i;
		for(i = 0; i < element_array.length; i++) {
			attribute_array.push(element_array[i][attribute]); // would normally write .attribute instead of [attribute] but javascript does not allow a substitue of the property of an object with a variable in that way.
		}

	return attribute_array;
	}


	// Store the src of the clicked image and the innerHTML of the clicked heading to put as main portrait 
	var clicked_img = this.src;
	var clicked_heading = this.parentNode.querySelectorAll("h3, h4")[0].innerHTML;

	// Get an array of all portrait images on page and a seperate array of their headings
	var portrait_imgs = get_element_attributes("src" ,"img");
	var headings = get_element_attributes("innerHTML", "h3, h4");

	// Remove selected image and heading from both arrays to leave remaninder
	// Find position of clicked img in array
	var index = portrait_imgs.indexOf(clicked_img);

	// If clicked img exists in array remove it
	if(index >= 0) {
		portrait_imgs.splice(index, 1);
	}

	// Do the same with headings array
	var index = headings.indexOf(clicked_heading);

	if(index >= 0) {
		headings.splice(index, 1);
	}

	portraits_ajax();

}



change_colour();

//Expand More/less button
document.getElementById("expander").onclick = expand_button;

// Get an array of the portrait images on parties
var party_imgs = document.getElementsByClassName("leaders_container")[0].getElementsByTagName("img");

// Attach an onclick event handler to each element
var i;
for(i = 0; i < party_imgs.length; i++) {
	party_imgs[i].onclick = portraits_page;
}

} //End of Onload