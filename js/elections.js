  $(document).ready(function() {

/***********COLOUR HEADINGS**************/

//Create a function to change the colour of party headings to match their colour.
function colour_headings() {
	$(".party_name h3").each(function() {
		//assign the current text of heading to a variable
		var heading_text = $(this).text();

		// Make a switch statement that will change colour of row
		switch (heading_text) {

			case "Conservative":
			$(this).parent().parent().css({color: "blue"});
			break;

			case "Labour":
			$(this).parent().parent().css({color: "red"});
			break;

			case "Liberal Democrats":
			$(this).parent().parent().css({color: "#FC0"});
			break;

			case "Green Party":
			$(this).parent().parent().css({color: "#00FF00"});
			break;

			case "Plaid Cymru":
			$(this).parent().parent().css({color: "#6C3"});
			break;

			case "Democratic Unionist Party":
			$(this).parent().parent().css({color: "brown"});
			break;

			case "Scottish National Party":
			$(this).parent().parent().css({color: "#FF0"});
			break;

			case "Sinn Fein":
			$(this).parent().parent().css({color: "#060"});
			break;

			case "Social Democratic and Labour Party":
			$(this).parent().parent().css({color: "#3C3"});
			break;

			case "Alliance Party":
			$(this).parent().parent().css({color: "#FFEE10"});
			break;

			case "UKIP":
			$(this).parent().parent().css({color: "purple"});
			break;

			case "Ulster Unionists":
			$(this).parent().parent().css({color: "#99F"});
			break;

			case "BNP":
			$(this).parent().parent().css({color: "midnightblue"});
			break;

			//Spending Sections

			case "Pensions":
			$(this).parent().parent().css({color: "#6ec138"})
			break;

			case "Health Care":
			$(this).parent().parent().css({color: "#ffe061"})
			break;

			case "Welfare":
			$(this).parent().parent().css({color: "#64b2df"})
			break;

			case "Education":
			$(this).parent().parent().css({color: "#ae1916"})
			break;

			case "Local Government":
			$(this).parent().parent().css({color: "#404040"})
			break;

			case "Interest on Debt":
			$(this).parent().parent().css({color: "#bfbfbf"})
			break;

			case "Defence":
			$(this).parent().parent().css({color: "#ff2d22"})
			break;

			case "Protection":
			$(this).parent().parent().css({color: "#6ec138"})
			break;

			case "Transport":
			$(this).parent().parent().css({color: "#175778"})
			break;

			case "Central Government":
			$(this).parent().parent().css({color: "#000000"})
			break;

		}
	});

} //End of colour_headings()

colour_headings();

/**********************************/

/******More/Less parties********/

function more() {
	$(".expander").animate({height: "290px"}, "slow");
	$(".expander").css({visibility: "visible"});
	$(".more_less").find("span").html("--------");
}

//Event listener for more/less expansion
$("section").on("click", ".more_less span", more); //Using a delegated event handler to bind to future elements after ajax

/*****************************/

/* Map tab click */

function maptab_click() {
	//get secondary img path from data attribute
	var data = $(".inner_container").find("img").attr("data-id");
	//get primary (UK) img from src
	var src = $(".inner_container").find("img").attr("data");
	//map tab event listener
	//Test which button was pressed
	if($(this).text() === "UK") {
		//set correct src attriube for map
		$(".election_map").attr("src", src);
		//add and remove active id as required
		$(".map_tabs tr:eq(0)").attr("id", "active_tab");
		$(".map_tabs tr:eq(1)").attr("id", "");
	} else {
		$(".election_map").attr("src", data);
		$(".map_tabs tr:eq(1)").attr("id", "active_tab");
		$(".map_tabs tr:eq(0)").attr("id", "");
	}
}

$("section").on("click", ".map_tabs tr", maptab_click);

/*-------------------*/

/******************TIMELINE COLOUR CHANGE*******************************/

function timeline_colour() {
	//Find colour of top heading
	var top_colour = $(".party_name h3").parent().parent().attr("style");
	console.log(top_colour);
}

timeline_colour();

/***********************************************************************/

/********CREATE ARRAYS FOR EURO, GENERAL ELECTIONS AND SPENDING*****************/

//To be used with ajax

var general_list = ["general_election1992.html", "general_election1997.html", "general_election2001.html", "general_election2005.html", "general_election2010.html", "general_election2015.html"];

var euro_list = ["euro1994.html", "euro1999.html", "euro2004.html", "euro2009.html", "euro2014.html"];		

var spend_list = ["2005.html", "2006.html", "2007.html", "2008.html", "2009.html", "2010.html", "2011.html", "2012.html", "2013.html", "2014.html"];

				 
//select which list to use based on whether in euro elections or general elections by checking url.
if (window.location.pathname.indexOf("general_elections") >= 1) {
	var selected_list = general_list;
} else if (window.location.pathname.indexOf("spending") >= 1) {
	selected_list = spend_list;
} else {
	selected_list = euro_list;
} 

/***********************************************************************/

/********LOAD CURRENT ELECTION YEAR***********/

$.ajax({
		url: selected_list[selected_list.length-1],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
}); // END OF AJAX

/*********************************************/

/*Time line AJAX */
//make on click event handlers for each year and giva appropriate ajax response
$("section").on("click", ".timeline td", function() {
	//Create switch statement to provide correct AJAX
	switch (this) { // Match DOM elements as cannot match objects

		case $(".timeline tr:eq(1) td:eq(0)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[0],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(1)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[1],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(2)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[2],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(3)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[3],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(4)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[4],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(5)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[5],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(6)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[6],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(7)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[7],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(8)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[8],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	

		case $(".timeline tr:eq(1) td:eq(9)").get(0): // Match DOM elements as cannot match objects
		$.ajax({
		url: selected_list[9],
		type: "GET",
		datatype: "html",
		cache: "false",

			success: function(returned) {
			$("#ajax").html(returned);
			colour_headings();
			}
		}); // END OF AJAX
		break;	
	}
});

}); //End of on ready function