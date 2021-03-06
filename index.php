<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<title>Simple Politics</title>
<meta name='description' content="Holding governments to account with transparency and facts."/>

<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="css/simplepolitics.css"/> 

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/home_ecma.js" type="text/javascript"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51089114-2', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

<header>
<?php 
	include("menu.html");

	function curl($url) {
	    // Assigning cURL options to an array
	    $options = Array(
	        CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
	        CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
	        CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
	        CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
	        CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
	        CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
	        CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
	        CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
	    );
	         
	    $ch = curl_init();  // Initialising cURL 
	    curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
	    $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
	    curl_close($ch);    // Closing cURL 
	    return $data;   // Returning the data from the function 
	}

	//Defining scrape between function
	function scrape_between($start, $end, $html) { 
		$scrape_from_start = stristr($html, $start);
		$scrape_end_to_start = stristr($scrape_from_start, $end, true); 
		return $scrape_end_to_start; //$start is included in the scrape; $end is not
	}

	// strip links
	function strip_links($html) {
		$html = str_replace('</a>', '', $html);
		$html = preg_replace('/<a[^>]+href[^>]+>/', '', $html);
		return $html;
	}


	$url = "http://services.parliament.uk/calendar/#!/calendar/Commons/MainChamber/2015/10/30/events.html";

	$raw_html = curl($url);

	$calendar = scrape_between("<div id=\"events-output\">", "</div>", $raw_html);
?>
</header>

<div class="content_wrapper">

<section id="home">
	<article>
		<div id="swapper_container">
			<h3><i>The Cabinet</i></h3>
			<div class="image_swapper">
				<button id="left_button"><--</button>
				<img id="selected_image" class="swap_image" src="the_parties/leaders/conservatives/david_cameron.jpg">
				<img class="swap_image" src="the_parties/leaders/conservatives/george_osborne.jpg">
				<img class="swap_image" src="the_parties/leaders/conservatives/theresa_may.jpg">
				<button id="right_button">--></button>
			</div>
			<div id="swapper_text">
				<h4>Prime Minister: David Cameron</h4>
				<p>The prime minister is considered to be the leader of cabinet and the party in power. He/she is able to organise the party anyway he sees fit, introduce policy changes, alter the party line, and put forward declerations of war. Any legislation or acts of aggression will have to pass the normal commons and Lords vote, and receive royal ascent from the Monarch. The Prime minister is also accountable to the monarch. This means that he must hold weekly meetings, where the monarch expresses her views on government matters.</p>

				<h4>Chancellor of the Exchequer: George Osborne</h4>
				<p>This minister is responsible for creating the annual budget which manages the economy, and implements taxation. The Chancellor of the Exchequer is usually considered the second most important position in the cabinet, being the right hand man/woman to the prime minister. </p>

				<h4>Home Secretary: Theresa May</h4>
				<p>The Home Secretary is responsible for all domestic matters in the country. This could be anything from rising school fees, police matters, and particulary the NHS, which is always a big issue in the country. The Home secretary deals with all these matters with increasing levels of bureacracy. Departments such as Transportation and Education are mostly subservient to the Home Secretary.

				<h4>Foreign Secretary: Philip Hammond</h4>	
				<p>The foreign secretary is responsible for dealing with any matters that involve other states or incidents abroad. Other than the Monarch or the Prime minister he/she is usually the only minister that will take part in state visits and is mainly responsible for being an ambassador of the country overseas.</p>	

				<h4>Work & Pensions Secretary: Ian Duncan Smith</h4>
				<p>In charge of overseeing and regulating state pensions, the legal age of retirement and laws against strike actions</p>

				<h4>Defence Secretary: Michael Fallon</h4>
				<p>Makes plans about the future size and strength of the armed forces. Sets the Defense budget, liasing closely with top members from the Ministry of Defense. Plays alot of Risk in his/hers spare time.</p>

				<h4>Education Secretary: Nicky Morgan</h4>
				<p>Responsible for the education of children and young adults in the country. This position covers everything from classroom sizes to the cost of tuition fees. This minister must approve the school curriculum for primary and secondary school. The minister has direct control over what can and can't be taught, aswell as the difficulty and frequency of tests.</p>
			</div>
		</div>

		<div id="commons_calendar">
			<h3><i>Commons Calendar</i></h3>
			<div id="schedule">
				<?php print_r($calendar); ?>
			</div>	
		</div>









	</article>
</section>

</body>
</html>