 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Green Party</title>
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
            <a href="green_party_en.php"><li id="active" class="sidebar_links"><i>Green Party</i></li></a>                        
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
            <a href="traditional_unionist_voice.php"><li class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo" src="logos/green_party.jpg">
				<h1 style="color: blue; margin-top: 13px;">Green Party</h1>
				<p>The Green Party of England and Wales is a political party in England and Wales. It is the largest Green party in the United Kingdom and contains within it various regional divisions, including the semi-autonomous Wales Green Party. The party has one Member of Parliament in the House of Commons, Caroline Lucas, who represents the constituency of Brighton Pavilion after winning her seat in the 2010 general election. Lucas was the party's first leader, serving from 2008 until 2012, when she was succeeded by Natalie Bennett. The Green Party also has one life peer, three MEPs in the European Parliament, two members of the London Assembly, and 178 councillors in various local councils across England and Wales.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/green_party/natalie_bennet.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Deputy Leader</h4>
						<img class="img_tiny" src="leaders/green_party/amelia_womack.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Green MEP</h4>
						<img class="img_tiny" src="leaders/green_party/jean_lambert.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">
					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/green_party/shahrar_ali.jpg">
					</div>

					<div class="bottom_small">
						<h4>Brighton MP</h4>
						<img class="img_small" src="leaders/green_party/caroline_lucas.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Green MEP</h4>
				<img src="leaders/green_party/keith_taylor.jpg">
				<h4>Lon Assembley</h4>
				<img src="leaders/green_party/darren_johnson.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
				<br>
				<br>
				<h3>Manifesto</h3>
		
    
	<div class="ch1"><b>ENVIRONMENT</b></div>
    



<p>• £44bn to be spent on investing in renewable energy sources, transport, insulation, housing and waste management </p><p>• An end to the use of nuclear power </p><p>• £30bn allocated to building and repairing roads will be redirected to public transport, with a ban on the construction of new roads </p><p>• Free insulation for homes which need it, as a way of reducing emissions </p><p></p>

<button id="expander">Show More</button>

<div id="expanded" style="display: none;"><br>
    
	<div class="ch1"><b>EMPLOYMENT</b></div>
    



<p>• A "living wage" of £8.10 an hour would be introduced, compared with the current minimum wage of £5.80 an hour. This would be equivalent to 60% of net national average earnings </p><p>• An extra million jobs and training places would be created, for occupations such as carers, midwives, plumbers, builders, engineers and public transport workers </p><p>• Cuts to budgets and jobs in the public sector would be opposed, in an effort to accelerate the economic recovery </p><p>• The upper 50p rate of income tax would apply to all earnings over £100,000, rather than the current threshold of £150,000, with the extra revenue this generates going towards the creation of jobs </p><p>• A permanent tax would be introduced for all bonuses paid to bankers </p><p>• Efforts would begin to implement a 35-hour working week, to improve people's work-life balance and to help to share out jobs </p><p>• A greater emphasis on equality in the workplace, reducing the pay gap between men and women </p><p>• Periods of maternity and paternity leave for new parents would be extended </p><p></p>
    
	<div class="ch1"><b>SOCIETY</b></div>
    



<p>• Rural post offices which have been closed would be reopened </p><p>• There would be less paperwork and fewer layers of bureaucracy for teachers </p><p>• The party would support the NUT teaching union in its efforts to scrap Sats tests </p><p>• Tuition fees in further and higher education would end </p><p>• Business would have less of a role to play in education, such as through academies </p><p>• Local health centres would be retained, rather than introducing larger polyclinics </p><p>• Hospitals would no longer be funded through PFI projects </p><p>• The replacements for Trident nuclear submarines would be cancelled, saving £80bn </p><p></p>
    
	<div class="ch1"><b>HEALTH</b></div>
    



<p>• All plans for closures, cuts and privatisation within the NHS would be opposed, with an emphasis on ensuring people can access services locally, rather than regionally </p><p>• Prescription charges to be abolished </p><p>• All eye tests would become free </p><p>• Free dental care, with the choice of an NHS dentist for everyone </p><p>• Free social care to be available to all </p><p></p>
    
	<div class="ch1"><b>PENSIONS</b></div>
    



<p>• Those eligible for the party's "citizen's pension" would receive £170 a week if single and £300 as a couple, which would not be means-tested - this would apply to about 12 million pensioners living in the UK and a further million living abroad </p><p>• The annual £110bn cost would be covered by abolishing pension credits and ending tax relief on pension contributions </p><p></p>
    
	<div class="ch1"><b>HOUSING</b></div>
    



<p>• About 37,000 empty council homes would be renovated to help to cut waiting lists </p><p>•  Another 300,000 private-sector properties which are unoccupied would be put back into use
</p>
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