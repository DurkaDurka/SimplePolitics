<!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Alliance Party of Northern Ireland</title>
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
            <a href="alliance_party.php"><li id="active" class="sidebar_links"><i>Alliance Party</i></li></a>
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
				<img class="party_logo2" src="logos/alliance_party.jpg">
				<h1 style="color: blue; margin-top: 13px;">Alliance Party of Northern Ireland</h1>
				<p>The Alliance Party of Northern Ireland is a political party in Northern Ireland. It is Northern Ireland's fifth-largest party overall, with eight seats in the Northern Ireland Assembly and one in the House of Commons. Founded in 1970 from the New Ulster Movement, the Alliance Party originally represented moderate and non-sectarian Unionism. However, over time, particularly in the 1990s, it moved towards neutrality on the Union, and has come to represent wider liberal and non-sectarian concerns. It opposes consociational power sharing as deepening the sectarian divide, and, in the Northern Ireland Assembly, it is designated as neither unionist nor nationalist, but 'Other'.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/alliance_party/david_ford.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Finance</h4>
						<img class="img_tiny" src="leaders/alliance_party/judith_cochrane.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Deputy Leader</h4>
						<img class="img_tiny" src="leaders/alliance_party/naomi_long.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Chief Whip</h4>
						<img class="img_small" src="leaders/alliance_party/stewart_dickinson.jpg">
					</div>

					<div class="bottom_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/alliance_party/naomi_long.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>E-Belfast MLA</h4>
				<img src="leaders/alliance_party/chris_lyttle.jpg">
				<h4>S-Belfast MLA</h4>
				<img src="leaders/alliance_party/anna_lo.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
        <br>
        <br>

			<h3>Manifesto</h3>

                <p><strong>Economy:</strong></p>

                <ul>
                	<li>Opposing steep cuts in UK public spending, including seeking to exempt Northern Ireland from cuts as far as possible in return for local commitment to reform.</li><br>

              		<li>Lobbying for a lower rate of Corporation Tax for Northern Ireland, to facilitate a step change in economic growth.</li><br>

              		<li>Campaigning for the introduction of a UK Regional Policy.</li><br>

              		<li>Re-balancing the Northern Ireland economy away from an over-
					reliance on the public sector.</li><br>

              		<li>Introducing a Green New Deal.</li><br>
                </ul>

                <button id="expander">Show More</button>

				<div id="expanded" style="display: none;"><br>

                <p><strong>Finance & Public Services:</strong></p>

                <ul>

                	<li>Addressing the £1bn annual costs of managing a divided society.</li><br>

              		<li>Pushing a reform agenda for public services.</li><br>

              		<li>Supporting a levy on Bank profits.</li><br>
                	 
                </ul>

				 <p><strong>Tackling Poverty and Social Exclusion:</strong></p>

				<ul>
                	<li>Delivering a fair deal for pensioners, including restoration of the pensions link to earnings.</li><br>

              		<li>Supporting more flexible parental leave.</li><br>

              		<li>Campaigning for a standard minimum wage from age 16 upwards.</li><br>
                </ul>

                

                <p><strong>Sustainable Development:</strong></p>

                <ul>
                	<li>Supporting robust action against climate change.</li><br>

              		<li>Encouraging sustainable development at all levels of government.</li><br>

              		<li>Campaigning for a revised UK aviation strategy.</li><br>
                </ul>

                <p><strong>Shared Society:</strong></p>

                <ul>
                	<li>Continuing to deliver on Shared Future.</li><br>

              		<li>Working a Single Equality Act.</li><br>

              		<li>Supporting a realistic Northern Ireland Bill of Rights, with cross- community support.</li><br>

              		<li>Working for an open, fair and effective system of immigration.</li><br>
                </ul>

                <p><strong>Justice:</strong></p>

                <ul>
                	<li>Delivering an effective local criminal justice system that provides community safety and accessible justice.</li><br>

              		<li>Supporting a comprehensive approach to dealing with the legacy of the past in Northern Ireland.</li><br>

              		<li>Taking a civil liberties approach to national security.</li><br>
                </ul>

                <p><strong>Good Governance:</strong></p>

                <ul>
                	<li>Campaigning for changes in the Assembly Voting System.</li><br>

              		<li>Supporting a negotiated power-sharing coalition.</li><br>

              		<li>Endorsing votes at 16.</li><br>

              		<li>Calling for a UK written Constitution.</li><br>

              		<li>Advocating electoral reform with the introduction of Single Transferable Vote to Westminster.</li><br>

              		<li>Considering recall system for MPs in breach of their obligations.</li><br>
                </ul>

                 <p><strong>European and Global Affairs:</strong></p>

                <ul>
                	<li>Working for positive engagement with the European Union.</li><br>

              		<li>Providing peace and security through a global system that supports
					democracy, human rights and the rule of law.</li><br>

              		<li>Campaigning for international development, including free and fair trade, increased international aid, and a new climate change treaty.</li><br>

              		<li>Endorsing a Strategic Defence Review for the United Kingdom.</li><br>
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