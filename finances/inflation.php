<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title> Simple Politics - Inflation</title>
	<meta name='description' content="Information on the different parties that make up the british political system, their manifestos, promises, and leaders."/>

	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>
	<script src="../js/inflation.js" type="text/javascript"></script>

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
			<a href="debt.php"><li class="sidebar_links"><i>Debt</i></li></a>
			<a href="gdp.php"><li class="sidebar_links"><i>GDP</i></li></a>
			<a href="inflation.php"><li id="active" class="sidebar_links"><i>Inflation</i></li></a>
	</div><!-- side_bar -->

	<section>
		<article>             

            <h1 class="gdp_heading">Inflation</h1>                 

			<div class="gdp_left"> 	

				<p>In economics, inflation is a sustained increase in the general price level of goods and services in an economy over a period of time.
				When the general price level rises, each unit of currency buys fewer goods and services. Consequently, inflation reflects a reduction in the purchasing 
				power per unit of money – a loss of real value in the medium of exchange and unit of account within the economy. A chief measure of price inflation is 
				the inflation rate, the annualized percentage change in a general price index (normally the consumer price index) over time.</p>             
			
			</div>

				<img class="gdp_logo" src="img/boe.jpg">


				<img class="gdp_graph" src="img/inflation_graph.jpg">

		</article>
	</section>

</body>
</html>
