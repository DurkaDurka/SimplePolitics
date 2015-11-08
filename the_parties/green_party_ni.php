 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Green Party in Northern Ireland</title>
	<meta name='description' content="Information on the different parties that make up the british political system, their manifestos, promises, and leaders."/>

	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/simplepolitics.css"/>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="../js/parties_ecma.js" type="text/javascript"></script>
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
			<a href="conservatives.php"><li class="sidebar_links"><i>Conservatives</i></li></a>
            <a href="labour.php"><li class="sidebar_links"><i>Labour</i></li></a>
            <a href="lib_dems.php"><li class="sidebar_links"><i>Lib Dems</i></li></a>                              
            <a href="green_party_en.php"><li class="sidebar_links"><i>Green Party</i></li></a>                        
            <a href="ukip.php"><li class="sidebar_links"><i>UKIP</i></li></a>
            <a href="respect.php"><li class="sidebar_links"><i>Respect</i></li></a>
            <a href="bnp.php"><li class="sidebar_links"><i>BNP</i></li></a>        
            <a href="snp.php"><li class="sidebar_links"><i>SNP</i></li></a>
            <a href="plaid_cymru.php"><li class="sidebar_links"><i>Plaid Cymru</i></li></a>
            <a href="democratic_and_unionist_party.php"><li class="sidebar_links"><i>Democratic and Unionist Party</i></li></a>    
            <a href="sinn_fein.php"><li class="sidebar_links"><i>Sinn Féin</i></li></a>    
            <a href="social_democratic_and_labour_party.php"><li class="sidebar_links"><i>Social Democratic and Labour Party</i></li></a>
            <a href="alliance_party.php"><li class="sidebar_links"><i>Alliance Party</i></li></a>
            <a href="ulster_unionists.php"><li class="sidebar_links"><i>Ulster Unionists</i></li></a>
            <a href="scottish_green_party.php"><li class="sidebar_links"><i>Scottish Green Party</i></li></a>
            <a href="ni21.php"><li class="sidebar_links"><i>NI21</i></li></a>
            <a href="green_party_ni.php"><li id="active" class="sidebar_links"><i>Green Party in Northern Ireland</i></li></a>
            <a href="traditional_unionist_voice.php"><li class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo2" src="logos/green_party_in_northern_ireland.jpg">
				<h1 style="color: blue; margin-top: 13px;">Green Party in Northern Ireland</h1>
				<p>The Green Party in Northern Ireland works in co-operation with green parties across Britain and Ireland, Europe and even globally. Like many green parties around the world, its origins lie in the anti-nuclear, labour and peace movements of the 1970s and early 1980s. The party has a youth wing operating in Northern Ireland, the Young Greens.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/green_party_ni/steven_agnew.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Fermanagh</h4>
						<img class="img_tiny" src="leaders/green_party_ni/tanya_jones.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>W-Tyrone</h4>
						<img class="img_tiny" src="leaders/green_party_ni/ciaran_mcclean.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/green_party_ni/clare_bailey.jpg">
					</div>

					<div class="bottom_small">
						<h4>Belfast Councilor</h4>
						<img class="img_small" src="leaders/green_party_ni/ross_brown.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Councilor</h4>
				<img src="leaders/green_party_ni/martin_gregg.jpg">
				<h4>Councilor</h4>
				<img src="leaders/green_party_ni/john_barry.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
			<br>
			<br>

			<h3>Manifesto</h3>

            <a href="http://www.greenpartyni.org/www/wp-content/uploads/2014/05/GPNI.pdf" target="blank"><P>Click here for a full break down of the Green Party in Northern Ireland's policies</P></a>   
            <button id="expander" style="display: none;" value="hidden">So javascript doesn't fail</button>
             

			</div><!--Manifesto-->

			
			<div class="promises">
				<br>
				<br>
				<h3>Pre-election Promises</h3>
			</div>

		</article>
	</section>
</div> <!-- content_wrapper -->
</body>
</html>