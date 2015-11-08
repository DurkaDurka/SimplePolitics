 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Labour</title>
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
            <a href="labour.php"><li id="active" class="sidebar_links"><i>Labour</i></li></a>
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
            <a href="traditional_unionist_voice.php"><li class="sidebar_links"><i>Traditional Unionist Voice</i></li></a>
		</ul>
	</div><!-- side_bar -->

	<section>
		<article>
			<div class="party_description">
				<img class="party_logo" src="logos/labour.jpg">
				<h1 style="color: blue; margin-top: 13px;">Labour</h1>
				<p>The Labour Party is a centre-left political party in the United Kingdom. It grew out of the trade union movement and socialist political parties of the nineteenth century and has been described as a broad church; containing a diversity of ideological trends from strongly socialist, to more moderately social democratic.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Foreign Affairs</h4>
						<img class="img_tiny" src="leaders/labour/hilary_benn.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Home Secretary</h4>
						<img class="img_tiny" src="leaders/labour/yvette_cooper.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/labour/harriet_harman.jpg">
					</div>

					<div class="bottom_small">
						<h4>Chancellor</h4>
						<img class="img_small" src="leaders/labour/chris_leslie.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Education</h4>
				<img src="leaders/labour/tristram_hunt.jpg">
				<h4>Health</h4>
				<img src="leaders/labour/andy_burnham.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
				<br>
				<br>
				<h3>Manifesto</h3>
		
    
	<div class="ch1"><b>ON THE ECONOMY</b></div>
    



<ul class="bulletList"><li>Secure the recovery by supporting the economy and halving the deficit by 2014 through growth, fair taxes and cuts to lower priority spending </li><li>A commitment not to raise any of the rates of income tax and not to extend VAT to food, children's clothes, books, newspapers and public transport fares </li>
	
			
	



<p></p><li>National Minimum Wage to rise in line with average earnings by the end of the next Parliament </li><li>Government as an employer committed to offering a living wage to staff in all departments. This is currently set at £7.60 - higher than the minimum wage </li><li>Promise to keep business taxes "as low as possible" </li><li>Realise stakes in publicly-controlled banks, introduce a global levy and reform banking rules </li><li>An option to turn Northern Rock into a mutual rather than privatising it as part of a wider commitment to building societies </li><p></p></ul>

<button id="expander">Show More</button>

<div id="expanded" style="display: none;"><br>
    
	<div class="ch1"><b>ON SCHOOLS AND FAMILIES</b></div>
    



<ul class="bulletList"><li>New rights for parents at schools in England to initiate change in school leadership, with under-performing schools taken over by more successful management teams </li><li>Expansion of free nursery places for two-year-olds and 15 hours a week of flexible, free nursery education for three and four-year-olds [England only] </li><li>One-to-one and small-group tuition for every primary school child falling behind, personal tutors and choice of "good" qualifications for secondary age children [England only] </li><li>Every young person guaranteed education or training until 18, with 75% going on to higher education or workplace training by the age of 30 [England only] </li><li>Commitment to raise living standards for the "squeezed middle" from 2012 with a "toddlers tax credit" equating to £4 a week extra for families with one and two-year-olds </li><li>Up to 70,000 advanced apprenticeships a year and Skills Accounts for workers to upgrade their skills [England only] </li><li>Paid paternity leave doubled to four weeks [England only] </li></ul><p><b>Big difference from 2005:</b></p><p><i>This time there is no mention of raising the share of national income devoted to education or freezing university tuition fees</i></p><p></p>
    
	<div class="ch1"><b>ON HEALTH</b></div>
    



<ul class="bulletList"><li>Patients in England guaranteed to get results of cancer tests within a week </li><li>Maximum 18-week wait for treatment after initial GP consultation - or private treatment will be offered [England only] </li><li>Routine health checks for those aged 40 to 74, aimed at preventing heart attacks and strokes [England only] </li><li>National Care Service to ensure free care in the home for those with the greatest needs and a cap on the costs of residential care [England only] </li><li>Every hospital to become a foundation trust, with more freedom to run its own affairs [England only] </li></ul><p><b>Big difference from 2005:</b></p><p><i>Back then, the smoking ban was just a proposal - and did not include pubs which served no food - now Labour say they will maintain the ban and have added sunbeds to the list of dangers they will protect children from</i></p><p></p>
    
	<div class="ch1"><b>ON CRIME, JUSTICE AND IMMIGRATION</b></div>
    



<ul class="bulletList"><li>Powers to sack chief constables if they fail to meet minimum standards within three years [England and Wales only] </li><li>As a "last resort", failing forces could be taken over by more successful constabularies [England and Wales only] </li><li>Funding to maintain police and community support officer numbers, with them spending 80% of their time on the beat [England and Wales only] </li><li>Family intervention projects to tackle anti-social behaviour, with financial support for victims to pursue injunctions - with the costs being met by police forces or councils "who let them down" [England and Wales only] </li><li>Laws to give any crime victims access to restorative justice - where they are able to tell offenders directly how their actions affected them and accept an apology </li><li>High-earning offenders to pay a proportion of their prison costs </li><li>Harder English tests to be taken by all migrants before they arrive; in the public sector, all employees who have contact with public to have "appropriate" level of English </li><li>The link between staying for a set period and being able to settle or gain citizenship will be broken - replaced by a points-based system </li></ul><p><b>Big difference from 2005:</b></p><p><i>No mention this time round for on-the-spot fines being extended - the last manifesto included a plan for parish council wardens to be able to issue such fines for disorder</i></p><p></p>
    
	<div class="ch1"><b>ON POLITICAL REFORM</b></div>
    



<ul class="bulletList"><li>Public right to recall MPs not disciplined in Parliament after being found guilty of gross financial misconduct </li><li>Referendums on the alternative vote method of electing MPs and proportional representation in an elected House of Lords, before 2011 </li><li>Fixed-term parliaments and free vote in the Commons on reducing the voting age to 16 </li><li>MPs banned from working for lobbying companies and independent body to rule on applications from MPs to take second jobs </li></ul><p><b>Big difference from 2005:</b></p><p><i>This is a much bigger issue in the wake of the expenses scandal, with Labour promising "a new politics" based on rebuilt trust</i></p><p></p>
    
	<div class="ch1"><b>ON PERSONAL FINANCE</b></div>
    



<ul class="bulletList"><li>No stamp duty for first-time buyers on all house purchases below £250,000 for two years, paid for by a 5% rate on homes worth more than £1m </li><li>New rules on the sale of financial policies to ban unfair terms in consumer contracts - partly in response to concerns over bank charges on unauthorised overdrafts </li><li>Responsible lending rules, meaning "instant loan" companies, and payday and doorstep lenders, risk losing their lending licences by charging very high interest rates - backed up by the threat of formal interest caps </li><li>Increased competition among energy suppliers to ensure wholesale gas price drops are passed on to customers. Social tariff and winter fuel payment policies expanded to lessen burden on poor and pensioners </li><li>Greater ease of switching accounts and cash ISAs between banks </li><li>Post Office to become a "people's bank" with much wider range of ordinary banking services, including access to accounts at other banks from Post Office branches </li><li>Legal right to a bank account, along with a bank levy to fund credit unions </li></ul><p><b>Big difference from 2005:</b></p><p><i>After a string of high-profile legal cases over bank charges, there is much more focus on people's relationships with banks this year</i></p><p></p>
    
	<div class="ch1"><b>IN OTHER AREAS</b></div>
    



<ul class="bulletList"><li>Labour appear to have dropped their commitment to privatising Royal Mail </li><li>Job or training place for young people out of work for six months but benefits cut at 10 months if they refuse a place. [Except Northern Ireland] Guarantee of work for anyone unemployed for more than two years </li><li>A right to request flexible working for older workers, ending default retirement at 65. [Except Northern Ireland] The link between the state pension and earnings re-established from 2012 </li><li>Commitment to high-speed rail linking London, Birmingham, the East Midlands, Manchester, northern England and Scotland </li><li>A goal that all young people contribute at least 50 hours to their communities by the age of 19 </li><li>Powers for supporters' trusts to be able to buy stakes in football clubs </li><li>About 40% low-carbon electricity by 2020, and 400,000 new green jobs by 2015 </li><li>Legislation for "Pay as you Save" schemes allowing people to fund home energy improvements through subsequent savings on utility bills </li><li>Biodegradable and recyclable materials banned from landfill </li></ul>
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