<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title> Simple Politics - GDP</title>
	<meta name='description' content="Information on the different parties that make up the british political system, their manifestos, promises, and leaders."/>

	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

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
			<a href="gdp.php"><li id="active" class="sidebar_links"><i>GDP</i></li></a>
			<a href="inflation.php"><li class="sidebar_links"><i>Inflation</i></li></a>
	</div><!-- side_bar -->

	<section>
		<article>             

            	<h1 class="gdp_heading">GDP: 2.435 trillion USD</h1>                 

			<div class="gdp_left"> 	

				<p>GDP estimates are commonly used to measure of the economic output of a whole
				country or region, but can also measure the relative contribution of an
				industry sector. This is possible because GDP is a measure of 'value added'
				rather than sales; it adds each firm's value added (the value of its output
				minus the value of goods that are used up in producing it). For example, a
				firm buys steel and adds value to it by producing a car; double counting would
				occur if GDP added together the value of the steel and the value of the car.</p>             
			
			</div>

				<img class="gdp_logo" src="img/gdp_logo">


				<img class="gdp_graph" src="img/gdp_graph.jpg">

		</article>
	</section>

</body>
</html>
