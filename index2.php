<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>

<title>Simple Politics</title>
<meta name='description' content="Holding governments to account with transparency and facts."/>

<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="css/simplepolitics.css"/> 

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
	include("menu.html");
?>
</header>

<div class="content_wrapper">
	<div class="sidebar">
		
	</div><!-- side_bar -->

<section>
	<article>
		<div class="text_container">
			<div id="heading_home"><img id="flags" src="imgs/union_flag.jpg"><h1 class="h1_home">United Kingdom of somewhat Great Britain</h1><img id="flags" src="imgs/union_flag.jpg"></div>
			<div class="quatro">
				<i><h2 class="h2_home">Ideology:</h2></i><br>
				<a href="http://en.wikipedia.org/wiki/Plutocracy" target="_blank"><img class="home_img" src="imgs/plutocracy.jpg"></a>
				<i><h3 class="h3_home">Plutocracy</h3></i>
			</div>
			<div class="quatro">
				<i><h2 class="h2_home">Elected Party:</h2></i><br>
				<a href="the_parties/conservatives.php"><img class="home_img" src="the_parties/logos/conservatives.jpg"></a>
				<i><h3 class="h3_home">Conservatives</h3></i>
			</div>
			<div class="quatro">
				<i><h2 class="h2_home">Recently enacted Law:</h2></i><br>
				<div class="feed">
					<script language="JavaScript" src="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Fwww.legislation.gov.uk%2Fnew%2Fuksi%2Fdata.feed&chan=y&desc=1&utf=y"  charset="UTF-8" type="text/javascript"></script>

					<noscript>
					<a href="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Fwww.legislation.gov.uk%2Fnew%2Fuksi%2Fdata.feed&chan=y&desc=1&utf=y&html=y">View RSS feed</a>
					</noscript>
					</script>
				</div>
			</div>
			<div class="quatro">
				<i><h2 class="h2_home">Latest Budget:</h2></i><br>
				<a href="https://www.gov.uk/government/news/budget-2015-some-of-the-things-weve-announced" target="_blank"><img class="home_img" src="imgs/budget2015.jpg"></a>
				<i><h3 class="h3_home">Budget of 2015</h3></i>
			</div>
		</div> 
	</article>
</section>

</body>
</html>