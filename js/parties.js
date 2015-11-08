//On Document load:
$(document).ready(function() {

// Create function
function change_colour() {

var url = window.location.pathname; // store URL of page in url
var match = ""; // leave blank ready to match name with url

// create array of keywords to match with url
var keyword_array = ["conservative", "labour", "lib_dems", "green_party_en", "ukip", "respect", "bnp", "snp", 
"plaid", "democratic_and", "sinn_fein", "social_democratic", "alliance", "ulster", "scottish_green", "ni21", 
"green_party_ni", "traditional"];

// Set variables for hooks that need changing
var headings = $(".leaders_container, h1, h2, h3, h4, h5");
var images = $(".leaders_container, .big_portrait, .portrait_container").find("img");
var button = $("#expander");

console.log(headings);

	// match current url with array and store that match to 'var match'
	$.each(keyword_array, function(i, value) {
		if (url.indexOf(value) >= 1) {
			match = value;
			return false;
		}
	});	

	//  A switch is really saying "pick one of these based on this variables 
	// value" but an if statement is just a series of boolean checks.
	// Locates which case match corresponds to and changes css accordingly
	switch (match) {

		case keyword_array[0]:
			headings.css({color: "blue"});
			images.css({border: "2px solid blue"});
			button.css({color: "blue"});
			break;

		case keyword_array[1]:
			headings.css({color: "red"});
			images.css({border: "2px solid red"});
			button.css({color: "red"});
			break;

		case keyword_array[2]:
			headings.css({color: "#FC0"});
			images.css({border: "2px solid #FC0"});
			button.css({color: "#FC0"});
			break;

		case keyword_array[3]:
			headings.css({color: "#00FF00"});
			images.css({border: "2px solid #00FF00"});
			button.css({color: "#00FF00"});
			break;

		case keyword_array[4]:
			headings.css({color: "purple"});
			images.css({border: "2px solid purple"});
			button.css({color: "purple"});
			break;

		case keyword_array[5]:
			headings.css({color: "#F60"});
			images.css({border: "2px solid #F60"});
			button.css({color: "#F60"});
			break;

		case keyword_array[6]:
			headings.css({color: "midnightblue"});
			images.css({border: "2px solid midnightblue"});
			button.css({color: "midnightblue"});
			break;

		case keyword_array[7]:
			headings.css({color: "#FF0"});
			images.css({border: "2px solid ##FF0"});
			button.css({color: "##FF0"});
			break;

		case keyword_array[8]:
			headings.css({color: "#6C3"});
			images.css({border: "2px solid #6C3"});
			button.css({color: "#6C3"});
			break;

		case keyword_array[9]:
			headings.css({color: "brown"});
			images.css({border: "2px solid brown"});
			button.css({color: "brown"});
			break;

		case keyword_array[10]:
			headings.css({color: "#060"});
			images.css({border: "2px solid #060"});
			button.css({color: "#060"});
			break;

		case keyword_array[11]:
			headings.css({color: "#3C3"});
			images.css({border: "2px solid #3C3"});
			button.css({color: "#3C3"});
			break;

		case keyword_array[12]:
			headings.css({color: "#FFEE10"});
			images.css({border: "2px solid #FFEE10"});
			button.css({color: "#FFEE10"});
			break;

		case keyword_array[13]:
			headings.css({color: "#99F"});
			images.css({border: "2px solid #99F"});
			button.css({color: "#99F"});
			break;

		case keyword_array[14]:
			headings.css({color: "yellowgreen"});
			images.css({border: "2px solid yellowgreen"});
			button.css({color: "yellowgreen"});
			break;

		case keyword_array[15]:
			headings.css({color: "midnightblue"});
			images.css({border: "2px solid midnightblue"})
			button.css({color: "midnightblue"});;
			break;

		case keyword_array[16]:
			headings.css({color: "royalblue"});
			images.css({border: "2px solid royalblue"});
			button.css({color: "royalblue"});
			break;

		case keyword_array[17]:
			headings.css({color: "darkblue"});
			images.css({border: "2px solid darkblue"});
			button.css({color: "darkblue"});
			break;
	} 

}// End of change_colour function

change_colour(); //Perform function

/* Manifesto */
//Show/hide More/Less Button
$("#expander").on("click", function() {
	$("#expanded").toggle();
	if ($("#expander").html() == "Show More" ) {
		$(this).html("Show Less");
	} else {
		$(this).html("Show More");
	}
});


/* Leaders Pics */
// Set array of images from current page to assign to portrait page
var portrait_images = $(".leaders_container").find("img").map(function() {
	return $(this).attr("src");
}).get();

// Get headings for images and create an array
var headings = $(".leaders_container").find("h3, h4").map(function() {
	return $(this).text();
}).get();


$(".leaders_container").find("img").on("click", function() {

		//set clicked src to variable ready to put into main portrait
		var iclicked_img = $(this).attr("src"); 
		//Set heading of clicked image ready to put into main portrait
		var iclicked_heading = $(this).parent().find("h3, h4").text();
		
		//create a temp array of remaining images
		var itemp_portrait_images = jQuery.grep(portrait_images, function(value) { 
			return (value != iclicked_img); // - the one clicked
		});

		//create a temp array of remaining headings
		var itemp_headings = jQuery.grep(headings, function(value) {
			return (value != iclicked_heading);
		});




	
	//AJAX to bring in portraits page without a refresh
	$.ajax({
		url: "portraits.html",
		type: "GET",
		datatype: "html",

		success: function(returned) {
			$("article").html(returned);
			//Change headings and borders to correct colour
			change_colour(); 

			//Function to action change of images and headings on click
			function image_change(clicked_img, clicked_heading, temp_portrait_images, temp_headings) {
				//Set big portrait img to clicked image and heading
				$(".big_portrait").find("img").attr("src", clicked_img); 
				$("h3").text(clicked_heading);

				//Assign remainder images into portrait container 
				$(".portrait_container").find("img").each(function(i) { 
					$(this).attr("src", temp_portrait_images[i]);
				});

				//Assign remainder headings to images in portrait container
				$("h4").each(function(i) {
					$(this).text(temp_headings[i]);
				});
			} // End of image_change()

			//Perform image change
			image_change(iclicked_img, iclicked_heading, itemp_portrait_images, itemp_headings);

			//Shuffle pics around on click within portrait page
			$(".portrait_container").find("img").on("click", function() {
				
				//Store clicked img in variable
				var ajax_clicked_img = $(this).attr("src");

				//Store clicked img heading
				var ajax_clicked_heading = $(this).parent().find("h4").text();

				//take array of portrait images and remove the one that was clicked
				var ajax_temp_portrait_images = jQuery.grep(portrait_images, function(value) {
					return (value != ajax_clicked_img);
				});

				//Take clicked heading out of array
				var ajax_temp_headings = jQuery.grep(headings, function(value) {
					return (value != ajax_clicked_heading);
				});
			
				image_change(ajax_clicked_img, ajax_clicked_heading, ajax_temp_portrait_images, ajax_temp_headings);

			}); //End of portrait page on click

			// Attach an eventlistener to submit ro refresh submitted data
			document.getElementById("button").onclick = display_data;
			
		}
	}); // End of AJAX

}); // End of leaders on click


}); //End of on ready function

