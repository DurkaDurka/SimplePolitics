<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>

<title> Simple Politics - Policies </title>
<meta name='description' content="Recent policy changes since the current cabinet has been in office."/>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51089114-2', 'auto');
  ga('send', 'pageview');

</script>

</head>

<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>

<body>
<header>
	<?php 
		// include main menu
		include("../menu.html");

		/* Screen scrape all bills from http://services.parliament.uk/bills/ and prepare them in categories for lists */

		 // Defining the basic cURL function
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

		$url = "http://services.parliament.uk/bills/";

		$raw_html = curl($url);

		$bills_table = scrape_between("<tbody>", "</tbody>", $raw_html);

		// to match all Commons Bills and date and store in $commons_macthes
		preg_match_all("/href=\"([^\"]*?)\">\s*?\b([^\n]*?\bBill)\s+[^[<][^\d]*([0-3]\d\.[0-1]\d\.2\d{3})/", $bills_table, $commons_matches);

		// to match all House of Lord Bills and date and store in $lords_matches
		preg_match_all("/href=\"([^\"]*?)\">\s*?\b([^\n]*?\bBill)\s\[HL\][^\d]*([0-3]\d\.[0-1]\d\.2\d{3})/", $bills_table, $lords_matches);

		// to match all passed law "Acts" and date and store in $passed_matches
		preg_match_all("/href=\"([^\"]*?)\">\s*?\b([^\n]*?\bAct\s+[\d]+)[^\d]*([0-3]\d\.[0-1]\d\.2\d{3})/", $bills_table, $passed_matches);

		// count the size of commons and lords arrays to be used later in for loop. No need to count both groups in the array as they are the same size
		$commons_count = count($commons_matches[1]);

		$lords_count = count($lords_matches[1]);

		$passed_count = count($passed_matches[1]);
	?>
</header>

<div class="content_wrapper">
	<div class="sidebar">
		<ul class="menu">
			<li id="active" class="sidebar_links"><i>2014-2015</i></li>
		</ul>

	</div><!-- side_bar -->

	<section>
		<?php

		?>
		<section class="container">
			<h1 class="container_heading">Draft Bills</h1>
			<ul class="bill_list">
				<li><span class="left_span">Draft Governance of National Parks (England) and the Broads Bill</span></li>
				<li><span class="left_span">Draft Riot (Damages) Act Bill</span></li>
				<li><span class="left_span">Draft Protection of Charities Bill</span></li>
				<li><span class="left_span">Taxation of Pensions Bill</span></li>
			</ul>
		</section>
		<section class="container">
			<img class="policies_arrow" src="img/policies_arrow.jpg">
			<h1 class="container_heading">Pending Commons Vote</h1>
			<ul class="bill_list">
				<?php
				// put matches into ul 
				for ($i=0; $i < $commons_count; $i++) { 
					print_r("<a href=\"http://services.parliament.uk" . $commons_matches[1][$i] . "\" target=\"_blank\">" . "<li><span class=\"left_span\">" . $commons_matches[2][$i] . "</span><span class=\"right_span\">Date Updated:" . "&nbsp;&nbsp;" . $commons_matches[3][$i] . "</span></li></a>");
				}
				?>
			</ul>
		</section>
		<section class="container">
			<img class="policies_arrow" src="img/policies_arrow.jpg">
			<h1 class="container_heading">Pending Lords Vote</h1>
			<ul class="bill_list">
				<?php
				// put matches into ul 
				for ($i=0; $i < $lords_count; $i++) { 
					print_r("<a href=\"http://services.parliament.uk" . $lords_matches[1][$i] . "\" target=\"_blank\">" . "<li><span class=\"left_span\">" . $lords_matches[2][$i] . "</span><span class=\"right_span\">Date Updated:" . "&nbsp;&nbsp;" . $lords_matches[3][$i] . "</span></li></a>");
				}
				?>
			</ul>
			<img class="policies_arrow" src="img/policies_arrow.jpg">
			<div class="seperator">
			</div>
		</section>
		<section id="green_container" class="container">
			<h1 class="container_heading">Passed Law</h1>
			<ul id="passed_list" class="bill_list">
				<?php
				// put matches into ul 
				for ($i=0; $i < $passed_count; $i++) { 
					print_r("<a href=\"http://services.parliament.uk" . $passed_matches[1][$i] . "\" target=\"_blank\">" . "<li><span class=\"left_span\">" . $passed_matches[2][$i] . "</span><span class=\"right_span\">Date Updated:" . "&nbsp;&nbsp;" . $passed_matches[3][$i] . "</span></li></a>");
				}
				?>
			</ul>
		</section>
	</section>
</div> <!-- content_wrapper -->
</body>