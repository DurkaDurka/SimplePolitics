 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Plaid Cymru</title>
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
            <a href="plaid_cymru.php"><li id="active" class="sidebar_links"><i>Plaid Cymru</i></li></a>
            <a href="democratic_and_unionist_party.php"><li class="sidebar_links"><i>Democratic and Unionist Party</i></li></a>    
            <a href="sinn_fein.php"><li class="sidebar_links"><i>Sinn Féin</i></li></a>    
            <a href="social_democratic_and_labour_party.php"><li class="sidebar_links"><i>Social Democratic and Labour Party</i></li></a>
            <a href="alliance_party.php"><li class="sidebar_links"><i>Alliance Party</i></li></a>
            <a href="ulster_unionists.php"><li class="sidebar_links"><i>Ulster Unionists</i></li></a>
            <a href="scottish_green_party.php"><li class="sidebar_links"><i>Scottish Green Party</i></li></a>
            <a href="ni21.php"><li class="sidebar_links"><i>NI21</i></li></a>
            <a href="green_party_ni.php"><li class="sidebar_links"><i>Green Party in Northern Ireland</i></li></a>
            <a href="traditional_unionist_voice.php"><li class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo" src="logos/plaid_cymru.jpg">
				<h1 style="color: blue; margin-top: 13px;">Plaid Cymru</h1>
				<p>Plaid Cymru is a political party in Wales advocating an independent Wales within the European Union. Plaid Cymru was formed in 1925 and won its first seat in 1966. Plaid Cymru by 2012 had 1 of 4 Welsh seats in the European Parliament, 3 of 40 Welsh seats in the Parliament of the United Kingdom, 11 of 60 seats in the National Assembly for Wales, and 206 of 1,264 principal local authority councillors. Plaid is a member of the European Free Alliance.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/plaid_cymru/leanne_wood.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Education</h4>
						<img class="img_tiny" src="leaders/plaid_cymru/simon_thomas.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Energy</h4>
						<img class="img_tiny" src="leaders/plaid_cymru/llyr_gruffydd.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/plaid_cymru/elin_jones.jpg">
					</div>

					<div class="bottom_small">
						<h4>Economics</h4>
						<img class="img_small" src="leaders/plaid_cymru/rhun_iorwerth.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Plaid MEP</h4>
				<img src="leaders/plaid_cymru/jill_evans.jpg">
				<h4>Councilor</h4>
				<img src="leaders/plaid_cymru/ellie_silcox.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">

				<br>
				<br>
				<h3>Manifesto</h3>

                <a href="http://www.english.plaidcymru.org/uploads/Manifesto_2012/Plaid_ManiffestoLleol_2012_engWeb.pdf" target="blank"><p> Click here for a full breakdown of Plaid Cymrus policy targets. </p></a>
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