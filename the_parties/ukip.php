 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - UKIP</title>
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
            <a href="ukip.php"><li id="active" class="sidebar_links"><i>UKIP</i></li></a>
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
            <a href="traditional_unionist_voice.php"><li class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo" src="logos/ukip.jpg">
				<h1 style="color: blue; margin-top: 13px;">UKIP</h1>
				<p>The UK Independence Party is a Eurosceptic right-wing populist political party in the United Kingdom, founded in 1993. The party describes itself in its constitution as a "democratic, libertarian party" and, as of May 2014, is reported to have a membership of over 38,000.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/ukip/nigel_farage.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Deputy Treasurer</h4>
						<img class="img_tiny" src="leaders/ukip/andrew_love.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Policy</h4>
						<img class="img_tiny" src="leaders/ukip/tim_aker.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/ukip/paul_nuttall.jpg">
					</div>

					<div class="bottom_small">
						<h4>Treasurer</h4>
						<img class="img_small" src="leaders/ukip/hugh_williams.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Chairman</h4>
				<img src="leaders/ukip/steve_crowther.jpg">
				<h4>Deputy Chairman</h4>
				<img src="leaders/ukip/neil_hamilton.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
				<br>
				<br>

				<h3>Manifesto</h3>
<p>				
UKIP believes that :
</p>
<ul>
	<li>Council tax should be as low as possible</li><br>
	<li>Immigration must be controlled to relieve pressure on our health,
	education, housing and welfare services</li><br>
	<li>Green spaces should be protected - we oppose excessive
	housing development, wind farms and HS2</li><br>
	<li>We need more police on the streets, cracking down on crime and
	anti-social behaviour</li><br>
	<li>Councils should cut highly paid council executives, not front-line
	staff and services</li><br>
	<li>Real decision-making should be given to local communities</li><br>
	<li>Money should be used for local services, not the EU, foreign aid
	and foreign wars</li><br>
</ul>

<button id="expander">Show More</button>

<div id="expanded" style="display: none;"><br>

<p>
6 UKIP PRIORITIES :
</p>
<ul>
	<p><strong><u>Local referendums</u></strong><br>
	It's time to bring power back to the people. So major decisions should be
	subject to binding local referendums if the people demand it. On the petition
	of 5% of the population within 3 months, major planning and service provision
	decisions should be put to a local vote.</p>
	<p><strong><u>Regain control over development</u></strong><br>
	Our housing, education, health and social services cannot cope with
	constantly rising numbers of people coming to live and work here. The
	government is now riding rough-shod over local people’s wishes with mass
	house building that has become a ‘Developers’ Charter’ - without the new
	services to go with it.</p>
	<p><strong><u> Prioritising services for local people</u></strong><br>
	We must end benefit and health tourism and give priority to local people for
	housing, education, health and social services. In planning, the local people's
	opinions should be respected and not overruled.</p>
	<p><strong><u>Moving government closer to the people</u></strong><br>
	We will provide incentives to encourage enterprise, attract jobs and regenerate
	town centres, including developing empty properties and brown-field sites to
	meet local housing needs.</p>
	<p><strong><u>Spending our money at home</u></strong><br>
	Our membership of the EU costs £55m a day – and another £23m a day
	goes out in foreign aid – while jobs, services and benefits are being cut at
	home. UKIP believes that we should save that money to help rebuild our debt-
	ridden economy.</p>
	<p><strong><u>Fighting crime and anti-social behaviour</u></strong><br>
	Britain's communities suffer from an unacceptable level of crime and anti-social
	behaviour. We should overhaul the system to make sentences meaningful,
	rehabilitate offenders, deport foreign criminals, free up the police from excessive
	form-filling and tackle nuisance neighbours and anti-social behaviour.</p>
</ul>
<p>
Here are just some of the ways we will save your money:
</p>
<ul>
	<li>Cut councillors’ excessive allowances and expenses</li><br>
	<li>Slash excessive pay deals for senior council staff</li><br>
	<li>Limit the number of highly-paid council employees</li><br>
	<li>Cut the councils’ advertising and self-promotion budgets</li><br>
	<li>Build partnerships to reduce costs</li><br>
	<li>Abolish non-essential and politically-correct jobs and red tape</li><br>
	<li>Leave the EU and save £55 million every day</li><br>
	<li>Drop the EU Landfill Directive to cut refuse disposal costs</li><br>
	<li>Control immigration to ease the burden on local services</li><br>
	<li>Close unnecessary central government departments and quangos</li><br>
	<li>End wasteful EU and UK subsidies to ‘renewable energy scams’,
	such as wind turbines and solar farms</li><br>
	<li>Require all visitors to show adequate health insurance at the point
	of entry into the UK</li><br>
	<li>Make it easier for schools to sack bad teachers</li><br>
	<li>Reduce bureaucracy in the education system</li><br>
	<li>Sell unused state-owned property and assets</li><br>
	<li>Oppose EU directives adding artificial and detrimental costs</li><br>
</ul>

			</div><!-- Expanded -->
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