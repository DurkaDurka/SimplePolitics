<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>New Apple-Style Flip Counter Demo</title>
	<meta name="description" content="A more functional version of my Apple-Style Flip Counter." />
	<meta name="keywords" content="HTML,CSS,JavaScript,counter,apple-style,flip,animate,digit,demo" />
	<meta name="author" content="Chris Nanney" />

	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>
	<script src="../js/elections.js" type="text/javascript"></script>

	<!-- My flip counter script, REQUIRED -->
	<script type="text/javascript" src="../js/flipcounter.js"></script>
	<!-- Style sheet for the counter, REQUIRED -->
	<link rel="stylesheet" type="text/css" href="../css/counter.css" />
	

	<!-- NOT REQUIRED FOR COUNTER TO FUNCTION, JUST FOR DEMO PURPOSES -->
	<!-- jQuery from Google CDN, NOT REQUIRED for the counter itself -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<!-- jQueryUI from Google CDN, used only for the fancy demo controls, NOT REQUIRED for the counter itself -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
	<!-- Style sheet for the jQueryUI controls, NOT REQUIRED for the counter itself -->
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/vader/jquery-ui.css" />

</head>

<body>
<header>
	<?php 
		include("../menu.html");
	 ?>
</header>

	<div id="wrapper"><div id="flip-counter" class="flip-counter"></div></div>


	<script type="text/javascript">

		
		// Initialize a new counter
		var myCounter = new flipCounter('flip-counter', {value:10000, inc:123, pace:600, auto:true});

	</script>
</body>

</html>
