$(document).ready(function() {

//img locations 

var total_debt = "img/debt.jpg";

var debt_per_person = "img/debt_per_person.jpg";

var debt_to_gdp = "img/debt_to_gdp.jpg";

//Event listener for buttons

$("#history_left").on("click", "#total_debt", function() {
	$("#history_right").find("img").attr("src", total_debt);
	console.log("clicked");
});

$("#history_left").on("click", "#debt_per_person", function() {
	$("#history_right").find("img").attr("src", debt_per_person);
	console.log("clicked");
});

$("#history_left").on("click", "#debt_to_gdp", function() {
	$("#history_right").find("img").attr("src", debt_to_gdp);
	console.log("clicked");
});

console.log(debt_to_gdp);

}); //End of document ready