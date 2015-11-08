 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Respect</title>
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
            <a href="respect.php"><li id="active" class="sidebar_links"><i>Respect</i></li></a>
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
				<img class="party_logo" src="logos/respect.jpg">
				<h1 style="color: blue; margin-top: 13px;">Respect</h1>
				<p>The Respect Party is a far-left political party in the United Kingdom founded in 2004. Its name is a contrived acronym standing for Respect, Equality, Socialism, Peace, Environmentalism, Community and Trade Unionism.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/respect/george_galloway.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>National Council</h4>
						<img class="img_tiny" src="leaders/respect/yvonne_ridley.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>co-founder</h4>
						<img class="img_tiny" src="leaders/respect/salma_yaqoob.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/respect/dawud_islam.jpg">
					</div>

					<div class="bottom_small">
						<h4>Chairman</h4>
						<img class="img_small" src="leaders/respect/aboj_miah.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4></h4>
				<img src="">
				<h4></h4>
				<img src="">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
				<br>
				<br>

				<h3>Manifesto</h3>

					<p><strong>AGAINST WAR AND THE ASSAULT ON CIVIL LIBERTIES:</strong></p>

					<ul>
						<li>Self-determination for the people of Iraq</li><br>
						<li>End the occupation of Iraq; bring the troops home now</li><br>
						<li>End the attacks on civil and human rights</li><br>
						<li>No detention without trial or charge in Guantanamo Bay or
						elsewhere</li><br>
						<li>Defend the right to trial by jury</li><br>
						<li>Oppose Islamaphobia and the demonisation of Muslim
						communities</li><br>
						<li>Repeal New Labour and Tory restrictions on assembly and
						association and all the anti-terrorism legislation</li><br>
					</ul>

					<button id="expander">Show More</button>

					<div id="expanded" style="display: none;"><br>

					<p><strong>RESPECT FOR THE ENVIRONMENT:</strong></p>

					<ul>
						<li>Emergency steps to reduce the use of fossil fuels, alongside
						massively increased investment in sustainable energy —including
						solar, biological and wind and wave power</li><br>
						<li>A cheap and integrated transport system to provide an
						alternative to car use, making the current road-building
						programme unnecessary</li><br>
						<li>Tough action against corporate polluters</li><br>
						<li>Public accountability of the oil companies</li><br>
						<li>End the £9 billion tax-break to the airlines</li><br>
						<li>No return to nuclear energy, close all nuclear plants</li><br>
						<li>Stop the import and export of nuclear waste and the dumping of
						it on third world countries</li><br>
						<li>The introduction of clean-burn technologies into fossil fuelled
						power stations</li><br>
						<li>Increased public investment to make homes energy efficient</li><br>
						<li>Bring the water industry back into public ownership under
						democratic control; invest in a clean-up of rivers lakes and sea</li><br>
						<li>High quality recycling facilities to maximise recycling, no new
						incinerators</li><br>
						<li>Stop the commercial use of GM foods; a moratorium on trials
						pending further research</li><br>
					</ul>

					<p><strong>RESPECT AT WORK:</strong></p>

					<ul>
						<li>The repeal of the anti-union laws</li><br>
						<li>Migrant workers and asylum seekers to have the right to work,
						with the full protection of employment laws and regulations</li><br>
						<li>Full employment rights for all workers from day one</li><br>
						<li>The minimum wage to be raised to £7.40 per hour, which is the
						European Union decency threshold</li><br>
						<li>The automatic right to union recognition</li><br>
						<li>The right to hold trade union meetings during working hours</li><br>
						<li>Employment tribunals to have the powers to enforce
						reinstatement and protect trade union representatives</li><br>
						<li>End work-place discrimination on the basis of age, ethnicity,
						gender or life style choices</li><br>
						<li>End the discrimination against women at work during pregnancy.
						Extend parental leave entitlements to all employees regardless of
						size of workforce</li><br>
						<li>Full enforcement of equal pay legislation. Fine employers who
						flout this legislation</li><br>
						<li>Universal childcare in publicly-funded nurseries for the full
						working day, as well as after-school clubs for all children up to
						11 years old</li><br>
					</ul>

					<p><strong>Health and safety at work:</strong></p>

					<ul>
						<li>Current cuts to the HSE to be reversed and new resources put
						into it</li><br>
						<li>The Rail Inspectorate to be returned to the HSE</li><br>
						<li>A renewed emphasis on inspection and enforcement</li><br>
						<li>Full protection for health and safety representatives to do their
						job; full protection for whistle-blowers on health and safety
						issues</li><br>
						<li>Statutory powers for health and safety representatives to shut
						down dangerous workplaces and to take out private
						prosecutions of employers over safety issues</li><br>
						<li>Labour’s 1997 manifesto commitment to legislate on corporate
						killing should be implemented</li><br>
						<li>Legal obligations on named directors and a massive increase in
						penalties for breaches of health and safety legislation, including
						imprisonment of directors</li><br>
						<li>Support for the TUC call for the right of trade unions to appoint
						roving safety representatives with powers to inspect non-
						unionised workplaces</li><br>
					</ul>

					<p><strong>RESPECT FOR THE NHS:</strong></p>

					<ul>
						<li>A fully-funded, publicly-owned NHS, delivering care free at the
						point of use</li><br>
						<li>Opposition to PFI schemes; all privatised services to be brought
						back into the NHS</li><br>
						<li>No further closure of local hospitals or specialist units</li><br>
						<li>Bring all agencies administering care services into public
						ownership under NHS or local government control</li><br>
						<li>he abolition of charges for prescriptions, foot care, dentistry,
						eye and hearing services</li><br>
						<li>The expansion of psychiatric health services</li><br>
						<li>An expansion of training opportunities for doctors, nursing and
						related services</li><br>
					</ul>

					<p><strong>RESPECT FOR PUBLIC TRANSPORT:</strong></p>

					<ul>
						<li>Bring the railways back into public ownership, under democratic
						control, and integrate the railways, bus services and urban light rail</li><br>
						<li>Invest in a cheap and integrated transport system to reduce the
						need to use cars, making the current road-building programme
						unnecessary</li><br>
						<li>New road building only with the agreement of the communities
						affected</li><br>
						<li>More frequent passenger journeys and better staffing of stations,
						trains and buses (guards and conductors) to encourage people
						back onto public transport</li><br>
						<li>A full programme of cycle routes in our towns and cities</li><br>
						<li>Hefty taxes on company cars and on company parking spaces</li><br>
						<li>Bring air traffic control back into public ownership</li><br>
					</ul>

					<p><strong>RESPECT FOR EDUCATION:</strong></p>

					<ul>
						<li>A fully comprehensive school system providing a common core
						curriculum for all until 18. End selection. Scrap SATs and other
						unnecessary tests</li><br>
						<li>Education free at point of use, from pre-school to FE, to
						university and adult learning</li><br>
						<li>A radical reduction in class size</li><br>
						<li>A qualified teacher for every class</li><br>
						<li>Better pay for teachers and other education workers.</li><br>
						<li>An end to specialist school status, schools can come together in
						order to share facilities and expertise where feasible</li><br>
						<li>Free after-school clubs and play centres for all that need them</li><br>
						<li>Full and part-time nursery and day-care places as a right, for all
						who want them</li><br>
						<li>An end to charitable status and tax breaks for private schools</li><br>
						<li>Abolish tuition fees and student loans. Free education and a
						living grant for all further and higher education students.</li><br>
						<li>Free and life-long access for all to high quality vocational
						education and adult education</li><br>	
					</ul>

					<p><strong>RESPECT FOR DISABILITY:</strong></p>

					<ul>
						<li>Equal opportunities for all at work</li><br>
						<li>Equal access to education</li><br>
						<li>Fully accessible public transport</li><br>
						<li>An overhaul of Disability Living Allowance and other benefits</li><br>
						<li>Reverse all cuts and higher investment in care services</li><br>
					</ul>

					<p><strong>RESPECT FOR YOUNG PEOPLE:</strong></p>

					<ul>
						<li>Votes at 16</li><br>
						<li>The provision of a fully-funded youth service</li><br>
						<li>The scrapping of Anti-Social Behaviour Orders</li><br>
						<li>Increased investment into community facilities that fulfil the
						needs of young people. End the privatisation of such services</li><br>
						<li>Decent, secure jobs at adult rates of pay. Investment in
						apprenticeships, with jobs on completion</li><br>
					</ul>

					<p><strong>RESPECT FOR DECENT HOUSING:</strong></p>

					<ul>
						<li>No privatisation of council housing</li><br>
						<li>End the right to buy scheme</li><br>
						<li>Publicly-owned land should be used to build council housing, not
						sold off to property speculators to build houses local people
						can’t afford</li><br>
						<li>Provide the financial means for local authorities to invest directly
						in council housing</li><br>
						<li>Give council tenants, who have been forced to privatise to gain
						investment in their homes, the right to return to local authority
						ownership</li><br>
						<li>Give local authorities powers to enforce repairs and
						improvements on private sector landlords and ensure they are
						more effectively regulated</li><br>
						<li>Legislate to prevent landlords from setting excessive rents</li><br>
						<li>Abolish the Council Tax and replace it with a progressive local
						income tax. Review the business rate system</li><br>
					</ul>

					<p><strong>RESPECT FOR PENSIONERS:</strong></p>

					<ul>
						<li>An immediate rise in the basic state pension to £110 per week
						for all pensioners</li><br>
						<li>Restoration of the link between the state pension and average
						earnings</li><br>
						<li>Annual increases in the state pension in line with wages or
						prices—whichever is the greater</li><br>
						<li>Reduction of the age for receipt of the state pension to sixty for
						men and women</li><br>
						<li>Free long term care for all pensioners</li><br>
						<li>A national free travel scheme for all pensioners</li><br>
						<li>End attacks on occupational pension scheme; final salary
						schemes for all employees</li><br>
						<li>Statutory occupational pension schemes covering all employees
						in both the public and private sector with compulsory
						contributions by employers plus full liability by employers in the
						event of bankruptcy</li><br>
						<li>An end to age discrimination in the provision of all goods and
						services</li><br>
					</ul>

					<p><strong>RESPECT FOR A MULTIRACIAL BRITAIN</strong></p>

					<ul>
						<li>Purge racists from the police and prison services</li><br>
						<li>Make the police accountable to the community</li><br>
						<li>Justice for all those who have been killed in custody</li><br>
						<li>A complete overhaul of the criminal justice system to end
						discrimination</li><br>
						<li>An end to police harassment and racist stop and search</li><br>
						<li>Urgent action to address the underachievement of black
						children and others in schools</li><br>
						<li>Full involvement of teachers, parents and pupils in tackling
						inequality in education</li><br>
						<li>Tougher penalties for employers who discriminate</li><br>
					</ul>

					<p><strong>RESPECT FOR ASYLUM AND IMMIGRATION</strong></p>

					<ul>
						<li>Defend the rights of refugees to political asylum; oppose any
						new legislation designed to further undermine it</li><br>
						<li>Oppose the EU’s ‘Fortress Europe’ policy</li><br>
						<li>Reinstate the right of asylum seekers to seek employment; an
						amnesty for all ‘illegal workers’</li><br>
						<li>End the policy of dispersal</li><br>
						<li>End the use of detention centres for asylum seekers</li><br>
						<li>End the White List of ‘safe’ countries and end deportations</li><br>
						<li>Give asylum seekers and refugees the right to food and shelter,
						plus access to education, health and social services</li><br>
					</ul>

					<p><strong>RESPECT AND CRIME</strong></p>

					<ul>
						<li>A serious attack on the causes of crime</li><br>
						<li>Build supportive communities and tackle social exclusion</li><br>
						<li>More resources for drug treatment and rehabilitation</li><br>
					</ul>

					<p><strong>RESPECT FOR RURAL BRITAIN</strong></p>

					<ul>
						<li>nvestment in the infrastructure of rural communities;
						healthcare, education, leisure facilities and environmental
						developmen</li><br>
						<li>Regulation of the large supermarket chains to ensure that food
						production and food prices are in the interests of all, not the
						large farmers and businesses</li><br>
						<li>Secure rights of tenure for small farmers and small businesses at
						affordable rents</li><br>
						<li>Provision of finance at low interest rates for small businesses and
						small farmers</li><br>
						<li>Grants for small farmers to switch to organic farming</li><br>
						<li>Incentives for small farmers to form co-operatives to reduce
						costs</li><br>
						<li>Re-establish the marketing boards</li><br>
						<li>Grants and incentives for rural communities to undertake
						environmental protection</li><br>
						<li>Greatly improved rural public bus and rail transport at affordable
						fares</li><br>
						<li>Abolish council tax relief on second homes, and ensure that
						people can afford to live in their local area</li><br>
						<li>Reintroduce council house building to rural communities and
						stop council house sales</li><br>
						<li>Improve health and education facilities for rural communities</li><br>
						<li>A review of coastal erosion with the costs for beach and other
						coastal improvements to be met from direct government funding</li><br>
					</ul>

					<p><strong>Animal Welfare:</strong></p>

					<ul>
						<li>Implementation of the ban on hunting with dogs</li><br>
						<li>An end to factory or intensive farming</li><br>
						<li>An end to animal experimentation for cosmetic or other
						unnecessary purposes</li><br>
						<li>For non-animal research methods to be properly funded</li><br>
						<li>The proper enforcement of animal protection</li><br>
						<li>Control sea fishing to allow stocks to recover</li><br>
						<li>End sea-fishing methods, such as long-line fishing, which kill sea
						mammals and birds</li><br>
						<li>Strict regulation of the pet trade</li><br>
					</ul>

					<p><strong>RESPECT FOR CULTURE, SPORT AND RECREATION:</strong></p>

					<ul>
						<li>A major increase in the funding of the arts</li><br>
						<li>Free admission to all government-funded cultural and artistic
						events</li><br>
						<li>A review of government support for the film industry</li><br>
						<li>An end to the privatisation of local authority leisure services</li><br>
						<li>Stop the sale of playing fields</li><br>
						<li>Substantially increased spending on school sporting facilities</li><br>
						<li>Equal access to sporting resources and facilities irrespective of
						gender or ethnicity. Full access for disabled people</li><br>
						<li>Opposition to all forms of racism and discrimination in sport</li><br>
					</ul>

					<p><strong>GLOBALISATION:</strong></p>

					<ul>
						<li>Cancel the third world debt, with no strings or conditions</li><br>
						<li>End the ‘structural adjustment’ conditions, which impoverish
						third world peoples</li><br>
						<li>For a major increase in aid spending in the impoverished
						countries on health education and welfare</li><br>
						<li>Introduce a tax on currency speculation</li><br>
						<li>Take action to curb the power of the multinationals</li><br>
						<li>Restrict the relocation of jobs without protection for the local
						workforce</li><br>
					</ul>

					<p><strong>WHERE WILL THE MONEY COME FROM?</strong></p>

					<ul>
						<li>A massive cut in military spending. Disband Britain’s weapons of
						mass destruction, scrap nuclear weapons, decommission Trident</li><br>
						<li>Transfer resources from military to useful production,
						nationalise the arms industry</li><br>
						<li>Abolish VAT, as an indirect tax, and replace it with increased
						direct taxation</li><br>
						<li>Raise the top rate of income tax </li><br>
						<li>Raise the tax threshold to ensure that no one on the minimum
						wage pays income tax</li><br>
						<li>A big increase in corporation tax, with an additional tax on the
						super-profits profits of the oil companies and the banks</li><br>
						<li>A turnover tax on multinationals doing businesses in Britain</li><br>
						<li>Raise the top rate of inheritance tax whilst putting higher duties
						on other transfers of wealth and financial transaction</li><br>
						<li>Increased stamp duty on stocks and shares</li><br>
						<li> crack down on tax evasion by big companies and action
						against offshore tax havens</li><br>
						<li>Abolish the ceiling on National Insurance contributions</li><br>
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