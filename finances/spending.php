<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>

	<title> Simple Politics - Spending</title>
	<meta name='description' content="Information on upcoming elections and how they affect the current political system."/>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="../js/elections.js" type="text/javascript"></script>
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
			<a href="spending.php"><li id="active" class="sidebar_links"><i>Spending</i></li></a>
			<a href="debt.php"><li class="sidebar_links"><i>Debt</i></li></a>
			<a href="gdp.php"><li class="sidebar_links"><i>GDP</i></li></a>
			<a href="inflation.php"><li class="sidebar_links"><i>Inflation</i></li></a>
	</div><!-- side_bar -->

	<section>
		<article>
			<div id="ajax">
				<!-- AJAX here -->
			</div>

			<div class="timeline_container">
				<table class="timeline">
					<tr class="years"><td id="first_year">2005</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td id="last_year">2015</td></tr>
					<tr class="coloured_row"><td class="pensions"></td><td class="pensions"></td><td class="health"></td><td class="health"></td><td class="health"></td><td class="health"></td><td class="pensions"></td><td class="pensions"></td><td class="pensions"></td><td class="pensions"></td></tr>
				</table>

			</div>

		</article>
	</section>
</div> <!-- content_wrapper -->
</body>
</html>
