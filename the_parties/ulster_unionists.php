 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Ulster Unionists</title>
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
            <a href="ulster_unionists.php"><li id="active" class="sidebar_links"><i>Ulster Unionists</i></li></a>
            <a href="scottish_green_party.php"><li class="sidebar_links"><i>Scottish Green Party</i></li></a>
            <a href="ni21.php"><li class="sidebar_links"><i>NI21</i></li></a>
            <a href="green_party_ni.php"><li class="sidebar_links"><i>Green Party in Northern Ireland</i></li></a>
            <a href="traditional_unionist_voice.php"><li class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo" src="logos/ulster_unionists.jpg">
				<h1 style="color: blue; margin-top: 13px;">Ulster Unionist Party</h1>
				<p>The Ulster Unionist Party (UUP) – sometimes referred to as the Official Unionist Party (OUP) or, in a historic sense, simply the Unionist Party – is the older of the two main unionist political parties in Northern Ireland. Before the split in unionism in the late 1960s, when the former Protestant Unionist Party began to attract more hardline support away from the UUP, it governed Northern Ireland between 1921 and 1972 as the sole major unionist party. It continued to be supported by most unionist voters throughout the period known as the Troubles.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/ulster_unionists/mike_nesbitt.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Employment</h4>
						<img class="img_tiny" src="leaders/ulster_unionists/robin_swann.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Education</h4>
						<img class="img_tiny" src="leaders/ulster_unionists/danny_kinahan.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Health</h4>
						<img class="img_small" src="leaders/ulster_unionists/roy_beggs.jpg">
					</div>

					<div class="bottom_small">
						<h4>Justice</h4>
						<img class="img_small" src="leaders/ulster_unionists/tom_elliott.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Social Development</h4>
				<img src="leaders/ulster_unionists/mike_copeland.jpg">
				<h4>Culture</h4>
				<img src="leaders/ulster_unionists/michael_mcgimpsey.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
				<br>
				<br>

			<h3>Manifesto</h3>

                <p><strong>Economy:</strong></p>

                <ul>
                	<p>The Ulster Unionist Party has a strong record on the economy, from being the first to hold the Enterprise, Trade and Investment portfolio following devolution to the importance of our current Ministerial post with responsibility for infrastructure.</p>
                </ul>

                <p><strong>Education:</strong></p>

                <ul>
                	<p>The Ulster Unionist Party believes that the provision of a stable, reliable and effective education system is one of the most important services which the state should provide for its people. We hold dearly Northern Ireland’s education system, but we believe that certain aspects of it desperately need reformed.</p>
                </ul>

                <button id="expander">Show More</button>

				<div id="expanded" style="display: none;"><br>

                <p><strong>Health:</strong></p>

                <ul>
                	<p>The Ulster Unionist Party’s understanding of the National Health Service in Northern Ireland is that it should remain free at the point of delivery, from the cradle to the grave, available to everyone based on need - not the ability to pay.</p>
                </ul>

				  <p><strong>Housing:</strong></p>

                <ul>
                	<p>We fundamentally believe the basic building block for a happy society is the citizen in his or her home and the relationships that exist within it and other homes in the vicinity.</p>
                </ul>
                

                <p><strong>Culture:</strong></p>

                <ul>
                	<p>The Ulster Unionist Party recognises the value of culture, arts and leisure in encouraging economic growth as well as maximising quality of life for the people of Northern Ireland.</p>
                </ul>

              	</div><!--Expanded-->

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