 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Traditional Unionist Voice</title>
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
            <a href="green_party_ni.php"><li class="sidebar_links"><i>Green Party in Northern Ireland</i></li></a>
            <a href="traditional_unionist_voice.php"><li id="active" class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo" src="logos/traditional_unionist_voice.jpg">
				<h1 style="color: blue; margin-top: 13px;">Traditional Unionist Voice</h1>
				<p>Traditional Unionist Voice (TUV) is a unionist political party in Northern Ireland founded on 7 December 2007, as an anti-St Andrews Agreement splinter group from the Democratic Unionist Party (DUP). Its first and current leader is Jim Allister who, until 2009, sat as an independent Member of the European Parliament, having been elected for the DUP in 2004. In the 2009 European elections Allister lost his seat when he stood as a TUV candidate. In June 2008, it was announced that former Ulster Unionist Party (UUP) MP William Ross had been made party president.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/traditional_unionist_voice/jim_allister.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>?</h4>
						<img class="img_tiny" src="">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>?</h4>
						<img class="img_tiny" src="">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Chairman</h4>
						<img class="img_small" src="leaders/traditional_unionist_voice/ivor_mcconnell.jpg">
					</div>

					<div class="bottom_small">
						<h4>President</h4>
						<img class="img_small" src="leaders/traditional_unionist_voice/william_ross.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>?</h4>
				<img src="">
				<h4>?</h4>
				<img src="">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">

				<br>
				<br>
				<h3>Manifesto</h3>

	            <a href="http://tuv.org.uk/wp-content/uploads/2014/05/manifesto2014.pdf" target="blank">Click here for the TUV's 2014 election manifesto</a>
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