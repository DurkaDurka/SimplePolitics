 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - SNP</title>
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
            <a href="snp.php"><li id="active" class="sidebar_links"><i>SNP</i></li></a>
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
				<img class="party_logo" src="logos/snp.jpg">
				<h1 style="color: blue; margin-top: 13px;">SNP</h1>
				<p>The Scottish National Party is a social-democratic and Scottish nationalist[19][20] political party in Scotland which campaigns for Scottish independence. The SNP is the largest political party in Scotland in terms of membership, MSPs and local councillors.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/snp/nicola_sturgeon.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Equalities</h4>
						<img class="img_tiny" src="leaders/snp/tasmina_ahmed.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Scotland MEP</h4>
						<img class="img_tiny" src="leaders/snp/ian_hudghton.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/snp/stewart_hosie.jpg">
					</div>

					<div class="bottom_small">
						<h4>Moray MP</h4>
						<img class="img_small" src="leaders/snp/angus_robertson.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Scotland MEP</h4>
				<img src="leaders/snp/alyn_smith.jpg">
				<h4>An Iar MP</h4>
				<img src="leaders/snp/angus_macneil.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
                <br>
                <br>

				<h3>Manifesto</h3>

<h2 class="section-header" id="heading-1">Public services</h2>
      <p> - Freeze council tax throughout the next, five-year parliament.</p>
        <p> - Capital investment worth more than £11.5bn by 2014-15.</p>
        <p> - Keep Scottish Water in public ownership, freeze water bills for two years and deliver a £2.5bn investment programme.</p>
        <p> - Community Empowerment Bill to give local people greater say in their area, including taking over underused public buildings.</p>
        <p> - Direct "maximum funding" to the frontline services in next parliament, including £900m freed up by 3% public sector efficiencies in 2011-12.</p>
        <p> - Achieve 25% cut in quangos by the end of 2011.</p>
        <p> - Improvements to current planning system, including community involvement at earlier stage.</p>
        <p> - Committed to a policy of no compulsory redundancies in public sector, with agreement to deliver promise for the 30,000 staff within government and agencies in place.</p>

    <button id="expander">Show More</button>

	<div id="expanded" style="display: none;"><br>
  
<h2 class="section-header" id="heading-2">Health</h2>
      <p> - Protect the NHS budget with extra £1bn over four years.</p>
        <p> - £30m to increase number of cancers detected at first stage by 25%, starting with lung, breast and colorectal cancer.</p>
        <p> - NHS to make further £300m efficiency savings in the next year, to be retained by NHS Boards for reinvestment.</p>
        <p> - Cut NHS senior managers by 25% over the next parliament.</p>
        <p> - Guarantee of no compulsory redundancies in NHS.</p>
        <p> - Tackling hospital infection "a top priority" and bring forward new minimum standards for MRSA screening.</p>
        <p> - Increase number of people able to receive telecare services at home.</p>
        <p> - New hospitals and facilities in Edinburgh, Glasgow, Highland, Lanarkshire, Dumfries, Grampian and Dundee.</p>
        <p> - Roll out family nurse partnerships across Scotland, providing support for teenage mothers.</p>
        <p> - Keep prescriptions free of charges.</p>
        <p> - Four-year pilot to test the effectiveness of universal, face-to-face "over 40s MOTs".</p>
        <p> - Re-introduce legislation on minimum alcohol pricing.</p>
        <p> - Consult on new mental health legislation.</p>
        <p> - New strategies to cut smoking-related illness and death and obesity.</p>
        <p> - Maintain free personal care for the elderly.</p>
        <p> - Single, integrated system of health and social care across Scotland.</p>
        <p> - 20% of £70m change fund to support carers from 2012-13.</p>
        <p> - £6m to provide breaks for families with severely disabled children and maintain our commitment to an extra 10,000 weeks' respite provision per year for carers.</p>
        <p> - New autism strategy backed with £10m over four years.</p>
        <p> - Work towards maximum 12 month wait for IVF treatment.</p>
        <p> - Protect free eye tests in Scotland.</p>
  
<h2 class="section-header" id="heading-3">Justice</h2>
      <p> - Maintain police officer numbers, including 1,000 extra police delivered in last parliament.</p>
        <p> - Change the law to take more money from more criminals for investment back into communities.</p>
        <p> - New serious crime prevention orders to restrict the activities of those with known criminal connections, including getting involved in running a business.</p>
        <p> - Move towards single, national fire and rescue service in next parliament.</p>
        <p> - Cut number of police forces, currently at eight.</p>
        <p> - Tackle knife crime through increased stop-and-search policy and roll out No Knives, Better Lives scheme across the country.</p>
        <p> - "Zero-tolerance" approach to football-related violence and prejudice, including domestic abuse, alcohol misuse, racism and sectarianism.</p>
        <p> - Maintain funding for Scottish Women's Aid and Rape Crisis Scotland.</p>
        <p> - Maintain funding for Community Payback Orders so that offenders repay debt to society "through hard labour".</p>
        <p> - Commission review of female offending.</p>
        <p> - Look at measures to help victims get compensation more quickly.</p>
        <p> - Seek to introduce law of evidence of similar fact - commonly known as a "bad character law", meaning previous convictions are permissible in evidence in most serious cases, such as murder or rape.</p>
        <p> - Maintain investment at 2010-11 levels in frontline drug treatment services.</p>
        <p> - Propose to UK government new Ballistics 'DNA' Database so each and every firearm in Scotland can be tracked.</p>
        <p> - Modernise civil law system, including introducing form of class action to enable groups of small claimants to combine to seek redress through the courts.</p>
        <p> - Demand same rights for Scots law in relation to European human rights legislation as enjoyed by other jurisdictions.</p>
        <p> - Reform law on damages.</p>
        <p> - Legislate so that judges will direct juries not to take into account any delay in reporting a rape or any apparent lack of resistance from the victim when reaching their decision.</p>
  
<h2 class="section-header" id="heading-4">Economy</h2>
      <p> - Work to win new job-creating powers for the Scottish Parliament</p>
        <p> - Bring forward legislation for an independence referendum.</p>
        <p> - Offer 100,000 training opportunities each year, including £11.5m to fund 25,000 modern apprenticeships. (46,500 training opportunities in 2011-12, including 7,000 flexible training opportunities smaller firms.)</p>
        <p> - New £250m Scottish Futures Fund using the savings from cost of new Forth road bridge, focussing on young people and early years, rolling out superfast broadband to rural areas, a "warm homes" initiative and transport fund.</p>
        <p> - Next-generation broadband available to all by 2020 and rate of uptake in Scotland at or above the UK average by 2013, and highest among the UK nations by 2015.</p>
        <p> - Press Westminster for devolution of corporation tax, excise duty, enhanced borrowing powers, responsibility for the Crown Estate Commission and Job Centres.</p>
        <p> - Continue Small Business Bonus scheme, with 80,000 firms paying no or lower rates.</p>
        <p> - Focus on "growth" companies and markets, including green, financial, food and drink and life sciences.</p>
        <p> - Continue to match English business rates poundage.</p>
        <p> - No use of Scottish Variable Rate, or "tartan tax" in next parliament.</p>
        <p> - Specific support for small businesses looking to take on their first member of staff, including help setting up payroll systems, as part of £7.5m in year ahead.</p>
        <p> - Provide 2,000 new work opportunities for young people in voluntary sector.</p>
        <p> - Support Scottish exports under £2.5m initiative to help 100 companies break into overseas markets.</p>
        <p> - Deliver a 50% increase in exports over the next six years.</p>
        <p> - Support creation and entry of new retail banks.</p>
        <p> - Establish four new Enterprise Zones across Scotland.</p>
        <p> - £45m to support "nearmarket research and development" projects by smaller companies and £17m backing for life-sciences, digital and energy projects.</p>
        <p> - Extend scheme giving small firms access to public sector contracts.</p>
        <p> - Every company in receipt of "significant government contract, or public support" to produce a training and apprenticeship plan.</p>
        <p> - Protect our current level of investment in international development.</p>
        <p> - New cities agenda, overseen in government by the deputy first minister who will also become cities minister, to help cities flourish.</p>
        <p> - Continue to invest in Scotland's town centres.</p>
        <p> - In manufacturing,  open markets, help companies to innovate, make production efficiency savings and safeguard jobs.</p>
        <p> - Continue to support Interactive Scotland and other creative sector initiatives.</p>
        <p> - Increase computer gaming exports by 50% over next six years.</p>
        <p> - Long-term strategy for science and engineering and back introduction of legal status for commercial space flight and permission for the use of RAF Lossiemouth.</p>
  
<h2 class="section-header" id="heading-5">Energy/environment</h2>
      <p> - Increase domestic energy generation from renewables to 100% by 2020, ensuring 130,000 jobs are delivered in the low-carbon economy.</p>
        <p> - No to new nuclear power stations. </p>
        <p>- Keep the Forestry Commission as a publicly-owned body and forests in public hands.</p>
        <p> - Increase penalties for environmental and wildlife crime.</p>
        <p> - Consult on environmental court in Scotland.</p>
        <p> - Establish new Scottish Land Fund, with proposals by the end of 2011.</p>
        <p> - Support use of electric cars.</p>
        <p> - Press for the proposed green investment bank to be located in Scotland.</p>
        <p> - Demand release of £200m fossil fuel levy from UK government.</p>
        <p> - Look at legislation on tackling high hedges.</p>
        <p> - New coal-fired stations must demonstrate carbon capture and storage on at least 300 MW of its capacity from day one and retro-fitting for those stations by no later than 2025, with 100% CCS expected on new builds from 2020.</p>
        <p> - No energy need for additional thermal generation plants.</p>
  
<h2 class="section-header" id="heading-6">Education</h2>
      <p> - No university fees for Scottish students studying in Scotland, requiring additional funding of £93m a year.</p>
        <p> - Cut by half, or 60,000, the number of pupils taught in the worst the number of pupils in "crumbling" schools.</p>
        <p> - Expand pre-school support and create a new Sure Start Fund to improve life-chances for young Scots. </p>
        <p> - £10m to provide 50,000 college bursaries a year for the next five years.</p>
        <p> - £100,000 Youth Enterprise Scotland Challenge fund. </p>
        <p> - Bring in new university-level "graduate apprenticeship" and technical apprenticeship" for colleges.</p>
        <p> - Take forward plan to boost adult literacy.</p>
        <p> - Place 750 college and university students in IT companies.</p>
        <p> - Enable teachers and schools to deliver new learning through the Curriculum for Excellence, making it the "cornerstone of education".</p>
        <p> - New generation of national qualifications</p>
        <p> - Continue drive to cut class sizes, especially in P1-P3.</p>
        <p> - Deliver improvements to system following review of the 2001 McCrone agreement.</p>
        <p> - Further cut teacher unemployment.</p>
        <p> - Create new Scottish Education Quality and Improvement Agency, bringing work of Her Majesty's Inspectorate of Education and Learning and Teaching Scotland together.</p>
        <p> - Maintain the Education Maintenance Allowance.</p>
        <p> - Look at more help for low-income families such as help to meet costs of school uniforms and trips.</p>
        <p> - £1.25bn investment in new schools, with projects in every local authority area in Scotland.</p>
        <p> - Introduce Education Rights and Responsibilities Bill to set out in law what pupils and parents can expect from the education system.</p>
        <p> - Create conditions in which every child will learn two languages in addition to their mother tongue, to be rolled out across two sessions of parliament.</p>
        <p> - Support expansion of Gaelic medium education and examine entitlement to Gaelic-medium education "where reasonable demand exists".</p>
        <p> - Build on 2010 national child protection guidance.</p>
        <p> - Protect the Scottish Funding Council's research excellence grant in cash terms in academic year 2011-12.</p>
        <p> - Continue with increased support for college bursaries, providing 50,000 a year for each of the next five years.</p>
        <p> - Extend the council tax exemption to students moving undergraduate to post-graduate courses in intervening period.</p>
        <p> - Create 50, £5,000 bursaries for young Scots looking to advance in science and engineering.</p>
  
<h2 class="section-header" id="heading-7">Transport</h2>
      <p> - Take forward projects including Borders Railway, M8 Baillieston to Newhouse, M74 Raith Junction and M8, M73 and M74 network improvements.</p>
        <p> - Aberdeen Western Peripheral Route and A90 Balmedie.</p>
        <p> - Take forward Edinburgh-Glasgow rail improvement programme which will see the electrification of "much" of the central Scotland rail network.</p>
        <p> - Increase in train services on Airdrie to Bathgate line to four trains per hour.</p>
        <p> - Increase long-distance services to Inverness from nine to 11 trains per day.</p>
        <p> - Investigate re-integration of rail services in Scotland.</p>
        <p> - Continue strategy for improving A96 and fully dualling the A9 from Perth to Inverness.</p>
        <p> - New integrated ticketing system and increased investment in our ferries.</p>
        <p> - Continue with ferry Road Equivalent Tariff on current routes, and look to roll out to the Argyll and the Clyde islands in light of the Western Isles pilot.</p>
        <p> - No bridge tolls.</p>
  
<h2 class="section-header" id="heading-8">Housing</h2>
      <p> - Guarantee to retain secured tenancies at affordable rent and implement Tenant Deposit Scheme, to help the estimated 8,000 to 11,000 Scots who have their deposit wrongly withheld.</p>
        <p> - Tough tenancy rules for those who commit anti-social behaviour.</p>
        <p> - Private Rented Sector Strategy Group to improve the sector.</p>
        <p> - Publish a national strategy on housing for older people.</p>
  
<h2 class="section-header" id="heading-9">Sport/culture</h2>
      <p> - Use the 2014 Commonwealth Games in Glasgow to put Scotland on the path to a healthier and more successful future.</p>
        <p> - Demand return of lottery cash diverted (£114m) from Scottish good causes to help fund the London Olympics. The UK government has</p>
        <p> - £8m to fund elite athlete programme up to 2014.</p>
        <p> - Continue funding for Active Schools programme.</p>
        <p> - Open school estate over and above regular hours and.</p>
        <p> - Deliver, by 2014, at least two hours of PE in primary schools and at least two periods of PE in secondary schools for pupils in S1-S4.</p>
        <p> - Support Creative Scotland arts agency.</p>
        <p> - Establish a National Book Week from 2012.</p>
        <p> - Support Historic Scotland as they take forward their strategy for sustaining and developing traditional building skills.</p>
        <p> - New national strategy for museum and gallery sector, including the establishment of a National Development Body and direct government funding for Scottish Mining Museum, Scottish Maritime Museum, and Scottish Fisheries Museum.</p>
  
<h2 class="section-header" id="heading-10">Food and drink</h2>
      <p> - Grow Scotland's food and drink sector to £12.5bn by 2017.</p>
        <p> - Make case for for EU farming and fishing reform with UK ministers.</p>
        <p> - Cut bureaucracy facing farm businesses.</p>
  
<h2 class="section-header" id="heading-11">Human rights</h2>
      <p> - Consult on issues of same-sex marriage and registration of civil partnerships.</p>
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