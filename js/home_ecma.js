//On Document load
window.onload = function() {

	function splice_array(variable, array)
	{
		var index = array.indexOf(variable);

		if(index >= 0) {
			array.splice(index, 1);
		}

	}

	function description_changer()
	{

		// Get array of minister text
		var all_descriptions = document.getElementById("swapper_text").querySelectorAll("h4, p");
		console.log(all_descriptions);

		// Make sure all tags in swapper_text are hidden
		for(i = 0; i < all_descriptions.length; i++) {
			all_descriptions[i].style.display = "none";
		}

		var image_src = document.getElementById("selected_image").src;

		console.log(image_src);

		switch (image_src) {

			case complete_image_array[0]:
				all_descriptions[0].style.display = "block";
				all_descriptions[1].style.display = "block";
				console.log(all_descriptions[0]);
				break;

			case complete_image_array[1]:
				all_descriptions[2].style.display = "block";
				all_descriptions[3].style.display = "block";
				console.log(all_descriptions[2]);
				break;

			case complete_image_array[2]:
				all_descriptions[4].style.display = "block";
				all_descriptions[5].style.display = "block";
				console.log(all_descriptions[4]);
				break;

			case complete_image_array[3]:
				all_descriptions[6].style.display = "block";
				all_descriptions[7].style.display = "block";
				console.log(all_descriptions[6]);
				break;

			case complete_image_array[4]:
				all_descriptions[8].style.display = "block";
				all_descriptions[9].style.display = "block";
				console.log(all_descriptions[8]);
				break;

			case complete_image_array[5]:
				all_descriptions[10].style.display = "block";
				all_descriptions[11].style.display = "block";
				console.log(all_descriptions[10]);
				break;

			case complete_image_array[6]:
				all_descriptions[12].style.display = "block";
				all_descriptions[13].style.display = "block";
				console.log(all_descriptions[12]);
				break;
		}

	}

	function image_swapper_left()
	{
		// grab src to change when button is clicked
		var first_image = document.getElementById("selected_image").src;
		var second_image = document.getElementsByClassName("swap_image")[1].src;
		var third_image = document.getElementsByClassName("swap_image")[2].src;

		// Take first image and enter as first image in array
		reserve_image_array.splice(0, 0, first_image);

		// Move images up one
		document.getElementById("selected_image").src = second_image;
		document.getElementsByClassName("swap_image")[1].src = third_image;
		document.getElementsByClassName("swap_image")[2].src = reserve_image_array[4];
		// Remove element four
		reserve_image_array.splice(4, 1);

		description_changer();

	}

	function image_swapper_right()
	{
		// grab src to change when button is clicked
		var first_image = document.getElementById("selected_image").src;
		var second_image = document.getElementsByClassName("swap_image")[1].src;
		var third_image = document.getElementsByClassName("swap_image")[2].src;

		// Take third image and enter as last image in array
		reserve_image_array.splice(4, 0, third_image);

		// Move images down one
		document.getElementById("selected_image").src = reserve_image_array[0];
		document.getElementsByClassName("swap_image")[1].src = first_image;
		document.getElementsByClassName("swap_image")[2].src = second_image;

		// Remove element zero (the first)
		reserve_image_array.splice(0, 1);

		description_changer();
	}

	// grab to add onclick event
	var left_button = document.getElementById("left_button");
	var right_button = document.getElementById("right_button");

	var complete_image_array = ["http://www.simplepolitics.net/the_parties/leaders/conservatives/david_cameron.jpg", "http://www.simplepolitics.net/the_parties/leaders/conservatives/george_osborne.jpg", "http://www.simplepolitics.net/the_parties/leaders/conservatives/theresa_may.jpg", 
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/philip_hammond.jpg",
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/michael_fallon.jpg",
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/duncan_smith.jpg",
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/nicky_morgan.jpg"];

	var reserve_image_array = ["http://www.simplepolitics.net/the_parties/leaders/conservatives/philip_hammond.jpg",
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/michael_fallon.jpg",
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/duncan_smith.jpg",
		"http://www.simplepolitics.net/the_parties/leaders/conservatives/nicky_morgan.jpg"];

	// two seperate functions for each button. May be able to consolidate into one later.
	left_button.onclick = image_swapper_left;
	right_button.onclick = image_swapper_right;

	

} //end of window.onload()