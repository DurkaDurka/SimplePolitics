<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title> Simple Politics - Debt</title>
	<meta name='description' content="Information on the different parties that make up the british political system, their manifestos, promises, and leaders."/>

	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="../js/debt.js" type="text/javaScript"></script>

	<!-- My flip counter script, REQUIRED -->
	<script type="text/javascript" src="../js/flipcounter.js"></script>
	<!-- Style sheet for the counter, REQUIRED -->
	<link rel="stylesheet" type="text/css" href="../css/counter.css" />

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
		include("../menu.html");
	 ?>
</header>

<div class="content_wrapper">
	<div class="sidebar">
		<ul class="menu">
			<a href="spending.php"><li class="sidebar_links"><i>Spending</i></li></a>
			<a href="debt.php"><li id="active" class="sidebar_links"><i>Debt</i></li></a>
			<a href="gdp.php"><li class="sidebar_links"><i>GDP</i></li></a>
			<a href="inflation.php"><li class="sidebar_links"><i>Inflation</i></li></a>
	</div><!-- side_bar -->

	<section>
		<article>

			<h1>Total Government Debt:</h1>

			<div class="counter_container"><div class="inner_container"><img class="pound" src="img/pound.png"><div class="wrapper"><div id="flip-counter" class="flip-counter"></div></div></div></div>

			<h1>Debt per Person:</h1>

			<div class="counter_container"><div class="inner_container"><img class="pound" src="img/pound.png"><div class="wrapper"><div id="flip-counter2" class="flip-counter"></div></div></div></div>

			<h1>History of Debt:</h1>

			<div id="history_left">
				<button id="total_debt" class="debt_button">Total Debt</button>
				<button id="debt_per_person" class="debt_button">Debt per Person</button>
				<button id="debt_to_gdp" class="debt_button">Debt to GDP</button>
			</div>

			<div id="history_right">
				<img class="debt_graph" src="img/debt.jpg">
			</div>

		</article>
	</section>



	<script type="text/javascript">	
		// Initialize a new counter
		var myCounter = new flipCounter('flip-counter', {value:1413666200001, inc:517, pace:100, auto:true});

		var myCounter = new flipCounter('flip-counter2', {value:23495, inc:1, pace:60000, auto:true});

	</script>
</body>
</html>
