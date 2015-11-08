 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Democratic and Unionist Party</title>
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
            <a href="democratic_and_unionist_party.php"><li id="active" class="sidebar_links"><i>Democratic and Unionist Party</i></li></a>    
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
				<img class="party_logo2" src="logos/democratic_and_unionist_party.jpg">
				<h1 style="color: blue; margin-top: 13px;">Democratic and Unionist Party</h1>
				<p>The Democratic Unionist Party (DUP) is the larger of the two main unionist political parties in Northern Ireland. Founded by Ian Paisley and now led by Peter Robinson, it is the largest party in the Northern Ireland Assembly and the fourth-largest party in the House of Commons of the United Kingdom. The DUP has strong links to Protestant churches, particularly the Free Presbyterian Church of Ulster, the church Paisley founded. However this influence has reduced under the Robinson leadership in an attempt to reach out to non-Protestants.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/democratic_and_unionist_party/peter_robinson.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Work & Pensions</h4>
						<img class="img_tiny" src="leaders/democratic_and_unionist_party/ian_paisley.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Defence</h4>
						<img class="img_tiny" src="leaders/democratic_and_unionist_party/jeffrey_donaldson.png">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/democratic_and_unionist_party/nigel_dodds.jpg">
					</div>

					<div class="bottom_small">
						<h4>Health</h4>
						<img class="img_small" src="leaders/democratic_and_unionist_party/jim_shannon.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Business & Innovation</h4>
				<img src="leaders/democratic_and_unionist_party/david_simpson.jpg">
				<h4>Environment</h4>
				<img src="leaders/democratic_and_unionist_party/alastair_ross.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
				<br>
				<br>
				<h3>Manifesto</h3>

                <p><strong>Renewing Communities:</strong></p>

                <ul>
	<li>
		Introduce a Community Empowerment and Renewal Bill providing means to enable communities to acquire under-used public sector assets and deal with dormant land, strengthening communities and promoting social entrepreneurship</li>
	<li>
		Explore the potential to create a website called FixOurStreetNI for residents to report problems with streetlights, drainage,waste collection, road maintenance, etc</li>
	<li>
		One poorly maintained property can drag an entire estate or area down so we will explore means for agencies to carry out any necessary work and be compensated retrospectively when individuals persistently fail to maintain acceptable standards</li>
</ul>

	<button id="expander">Show More</button>

	<div id="expanded" style="display: none;"><br>

<ul>

	<li>
		Consult on outlawing election posters or limiting their use in terms of numbers, distance from polling stations, commencement date, etc</li>
	<li>
		Require car parks accessed by the public to have family parking spaces</li>
	<li>
		Appoint a Social Mobility Czar</li>
	<li>
		Continue efforts to reduce the levels of poverty particularly child poverty</li>


		<li>Establish a Social Protection Fund with an initial allocation of £20 million for the first year to assist those in the most severe hardship</li>
	<li>
		Explore the potential for a derelict land levy in urban areas to reduce land-banking and enhance the environmental appearance of areas</li>
	<li>
		Establish a Social Investment Fund that will provide £80 million to take forward specific area-improvement projects in disadvantaged communities across eight investment zones. The Fund will support communities to build pathways to employment, end dereliction, increase community services and tackle systemic issues linked to deprivation. The DUP will ensure the Fund is operated in a way that will benefit the whole community in those areas most in need</li>
	<li>
		Incentivise schools to allow their premises to be used outside school hours by the community</li>
	<li>
		Protect our network of local post offices</li>
	<li>
		Increase volunteering and active citizenship</li>
	<li>
		Ensure volunteers need only one criminal record check by making such checks portable</li>
	<li>
		Facilitate the community and voluntary sector including faith based organisations to deliver more services across government, and review the level of auditing and accounting systems and processes</li>
	<li>
		Extend provision of community allotments</li>
	<li>
		Recognise value of community development work, develop a Provincewide strategic overview, support training for groups and individuals to build capacity, and assist more groups to be able to provide services</li>
	<li>
		Take forward work on establishing a Unionist Academy</li>
</ul>

<p>
	<br>
	<strong>TOWN CENTRE REGENERATION</strong></p>
<ul>
	<li>
		Establish and enhance town centre partnerships involving the local Council, PSNI, Roads Service and the Housing Executive</li>
	<li>
		Legislate to establish Business Improvement Districts</li>
	<li>
		Establish a Town Centre Regeneration Fund which Councils, Chambers of Trade etc can bid for on an annual basis to help address the current regional disparity of funding</li>
	<li>
		Whilst valuing existing public art in the Province, introduce a moratorium on commissioning further projects in the current financial climate to maximise the funding available for streetscape work</li>
</ul>
<p>
	<br>
	<strong>LOCAL GOVERNMENT</strong></p>
<ul>
	<li>
		Ensure the highest quality services at the lowest possible rates</li>
	<li>
		Require Councils to justify and secure Ministerial approval for any increase in district rates beyond inflation</li>
	<li>
		Grant Councils a legal power to request reports from and question all providers of services within their area</li>
	<li>
		Swiftly legislate to confer community planning and the power of wellbeing on local government</li>
	<li>
		Press ahead rapidly with the reconfiguration of local government and transferring of extra powers from central Departments</li>
	<li>
		Enter into discussions with major chewing gum manufacturers to seek partnership arrangements with local government in dealing with discarded gum</li>
	<li>
		Explore new technologies including the ‘Poover’ to assist in keeping our communities free from dog waste</li>
	<li>
		Require fly posting associated with pubs or clubs to be considered in licensing decisions</li>
</ul>

<p><strong>Culture:</strong></p>

<ul>
	<li>
		Reduce the number of arms-length bodies associated with DCAL</li>
	<li>
		Separate the dual responsibilities of Northern Ireland Screen, with the international component coming under Invest NI and educational elements being the responsibility of DCAL</li>
</ul>
<p>
	<br>
	<strong>CULTURE AND THE ECONOMY</strong></p>
<ul>
	<li>
		Seek to build Northern Ireland’s reputation internationally as a centre for creative industries, and continue supporting the Creative Industries Innovation Fund</li>
	<li>
		Promote cultural tourism, enhancing collaboration between DCAL and DETI with a focus on developing facilities, activities and trails</li>
	<li>
		Enhance the role of the Public Records Office in promoting genealogical tourism</li>
	<li>
		Assist the arts sector to promote the Northern Ireland brand abroad and contribute to our economy</li>
</ul>
<p>
	<br>
	<strong>PARADES</strong></p>
<ul>
	<li>
		Support a new start on parades including abolition of the Parades Commission, working alongside the Loyal Orders to achieve this</li>
	<li>
		Promote and support the development of flagship Twelfth events and the Maiden City Festival</li>
</ul>
<p>
	<br>
	<strong>CULTURAL FACILITIES</strong></p>
<ul>
	<li>
		Maximise the use of the substantial number of new dedicated arts facilities which have been developed over the last few years</li>
	<li>
		Support high-quality library provision and extend the mobile library network including internet availability particularly for rural users</li>
	<li>
		Display appropriately our cultural assets at the Ulster Museum to promote the Northern Ireland brand</li>
</ul>
<p>
	<br>
	<strong>SPORTS FACILITIES</strong></p>
<ul>
	<li>
		Invest £138m in regional stadium development for football, rugby and GAA, and sub-regional facility improvements for football across the Province at all levels</li>
	<li>
		Support capital projects through the Community Sports Fund, promoting a shared and better future by ensuring facilities are open to all sports and the entire community</li>
</ul>
<p>
	<br>
	<strong>MAJOR EVENTS</strong></p>
<ul>
	<li>
		Ensure Northern Ireland maximises the benefits from the 2014 Glasgow Commonwealth Games and hosting the 2013 World Police and Fire Games</li>
	<li>
		Continue to offer high profile entertainment events to showcase the Province nationally and internationally</li>
	<li>
		Seek to commission an official history of Northern Ireland to be published for the Province’s centenary</li>
</ul>
<p>
	<br>
	<strong>CULTURE AND THE COMMUNITY</strong></p>
<ul>
	<li>
		Continue to support the Community Festival Fund</li>
	<li>
		Further develop our marching bands infrastructure and provide funding to replace instruments</li>
</ul>
<p>
	<br>
	<strong>ULSTER-SCOTS</strong></p>
<ul>
	<li>
		Support the work of the Ulster-Scots Academy in developing the culture, heritage and language</li>
</ul>

<p><strong>Education:</strong></p>

<ul>
	<li>Pursue the best education outcomes for young people in the Province</li>
	<li>
		Produce a comprehensive long-term plan for the education sector including a roadmap to create a single education system</li>
	<li>
		Introduce an Individual Education Plan for every pupil based on a simplified Pupil Profile</li>
	<li>
		Legislate to implement a Special Educational Needs strategy after overhaul of the outgoing Minister’s proposals</li>
	<li>
		Review the Revised Curriculum with a view to giving principals and teachers more freedom to adapt their offering to suit the pupils’ particular circumstances</li>
	<li>
		Conduct a value for money review of the Autism Centre at Middletown</li>
	<li>
		The Entitlement Framework to be considered aspirational rather than compulsory</li>
	<li>
		Assist unemployed teachers to take training modules permitting them to attain experience in the preschool sector or similarly in reading recovery schemes until they obtain a teaching post</li>
	<li>
		Ensure access to youth services particularly for disadvantaged young people</li>
	<li>
		Produce a comprehensive, cross-Departmental youth strategy</li>
</ul>
<p>
	<br>
	<strong>FOUNDATION YEARS</strong></p>
<ul>
	<li>
		Enhance spending on foundation years provision</li>
	<li>
		Introduce a Foundation Years Bill</li>
	<li>
		Integrate and implement the Childcare and Early Years strategies</li>
	<li>
		Identify and disseminate best practice to promote quality across the entire early years workforce</li>
	<li>
		Improve the delivery of early years services through enhancing the qualifications of staff</li>
	<li>
		Continue the one year funded preschool provision available to all children, and work towards delivering universal affordable childcare</li>
	<li>
		Strategic approach to co-ordinated provision of family and parent support services</li>
</ul>
<p>
	<strong>SHARING</strong></p>
<ul>
	<li>
		Work towards creating a single education system</li>
	<li>
		Establish a Commission harnessing international expertise to advise on a strategy for enhancing sharing and integration within our education system</li>
	<li>
		Establish schools as shared spaces</li>
	<li>
		Promote sharing of resources and assets between schools</li>
	<li>
		Give consideration to weighting funding towards Area Learning Communities that demonstrate cross-sectoral work</li>
	<li>
		Deepen the inclusive nature of area based planning ensuring it is citizen based rather than focused on organisations</li>
	<li>
		Require school development proposals to demonstrate that options for sharing have been fully explored</li>
	<li>
		Encourage stronger collaboration between the different teacher training institutions with the aim of consolidating into a single teacher training system</li>
	<li>
		Remove the exemption currently provided within the Fair Employment and Treatment Order for teacher recruitment</li>
	<li>
		Remove legislation which currently advantages specific education sectors over others</li>
</ul>
<p>
	<br>
	<strong>ADMINISTRATIVE STRUCTURES</strong></p>
<ul>
	<li>
		Rationalise immediately the five Education Boards into one, followed quickly by a single body subsuming the functions, assets and liabilities of Education Boards, the Council for Catholic Maintained Schools, Staff Commission and Youth Council</li>
	<li>
		Bring teacher recruitment exemptions from fair employment legislation to an end when a single employing authority is established</li>
	<li>
		Preserve the legislative entitlement of the Transferor Representative Council to membership of the ownership body for controlled schools</li>
	<li>
		Scrap plans for an Education Advisory Forum and multiple costly sectoral support bodies, with each existing sector represented on the new single body on the same basis as the Transferors</li>
</ul>
<p>
	<br>
	<strong>TRANSFER</strong></p>
<ul>
	<li>
		Support academic selection, matching pupils to the most appropriate post-primary school for their individual needs</li>
	<li>
		Preserve and promote grammar schools, with Boards of Governors free to determine admissions criteria</li>
	<li>
		Work to deliver a single robust form of assessment for post-primary transfer</li>
	<li>
		Ensure attractive vocational opportunities for those who do not wish to pursue an academic path</li>
	<li>
		Seek to re-image the post-primary sector emphasising parity of esteem amongst all schools</li>
</ul>
<p>
	<br>
	<strong>UNDERACHIEVEMENT</strong></p>
<ul>
	<li>
		Develop a strategy to assist Protestant working class boys who tend tohave the lowest level of achievement, addressing issues such as aspiration, parental involvement and the value placed on education</li>
	<li>
		Promote education ambassadors and role models in areas of educational underachievement</li>
	<li>
		Tackle disparity between outcomes from maintained and controlled non-selective schools</li>
	<li>
		Reduce the percentage of pupils leaving school with no qualifications</li>
	<li>
		Support alternative measures of social deprivation rather than the Free School Meals indicator</li>
	<li>
		Increase the focus on literacy and numeracy at primary level</li>
	<li>
		Encourage more schemes involving volunteers to help disadvantaged children with literacy</li>
	<li>
		Support extended schools programmes</li>
	<li>
		Ensure additional funding through the Social Investment Fund will be used to increase and expand interventions to tackle this key community challenge</li>
</ul>
<p>
	<br>
	<strong>FURTHER AND HIGHER EDUCATION</strong></p>
<ul>
	<li>
		Continue to oppose any rise in student fees beyond the routine year-on-year inflationary uplifts</li>
	<li>
		Seek to have the cap on student numbers in Northern Ireland removed</li>
	<li>
		Develop and implement a Further and Higher Education strategy</li>
	<li>
		Increase commercialisation of intellectual property from Northern Ireland’s university research base</li>
	<li>
		Assist in the formation of a business school locally linked to a U.S. institution</li>
	<li>
		Seek to create a specialist Technology Institute</li>
	<li>
		As occurs in Germany, explore funding partnerships with business where there is mutual interest in providing courses which will address identified key skills deficits</li>
	<li>
		Seek to improve the proportion of skilled craftsmen and technicians that Northern Ireland produces relative to mainland European nations</li>
	<li>
		Promote the skills required to compete in the global marketplace</li>
	<li>
		Improve opportunities for adults to enhance numeracy, literacy and ICT skills</li>
	<li>
		Increase the proportion of working age population with qualifications</li>
	<li>
		Break the cycle of multiple generations in unemployment</li>
	<li>
		Increase the numbers studying STEM subjects</li>
	<li>
		Offer student loan relief for individuals who commit to working in the Province for ten years</li>
	<li>
		Continue offering scholarships to high-achieving students remaining in Northern Ireland</li>
	<li>
		Seek to introduce a graduate home loan scheme for first time buyers with a degree in subjects crucial to improving our economy</li>
</ul>

<p><strong>Reforming Government:</strong></p>

<ul>
	<li>Cut the size of government, with Departments providing the policy and strategy framework within which services are delivered</li>
	<li>
		Seek to break down the silo mentality in Government Departments through incentivising cross-Departmental collaboration and requiring each Department to produce a collaboration plan</li>
	<li>
		Take forward plans to create an Executive Delivery Unit which would be a strong unit at the centre answerable to FM and DFM but working across and for the Executive. PEDU, SIB, ISID and Central Procurement could be amalgamated, with the new unit responsible across government for enhancing performance, delivery of PSAs,performance management, the Efficiency Review, all evaluation and consultancy for programmes, streamlined flexible procurement,development and ongoing assessment of the Programme For Government, the Investment strategy, and providing advice and expertise. Significant savings could be realised through reducing external consultancy, closure of SIB, heightened civil service performance management, greater cross-departmental working, increased efficiency and improved delivery</li>
	<li>
		Enhance partnership working with the voluntary and private sectors including re-engineering service delivery where appropriate</li>
	<li>
		Exploit where possible cloud computing</li>
	<li>
		Explore options for bulk buying across the public sector in areas such as energy- evidence from England indicates that up to one third could be outsourced for hospitals, prisons and larger schools with multimillion pound savings each year</li>
	<li>
		Maximise the capital spend available to Departments in the current economic climate through reclassifying resource allocations</li>
	<li>
		Promote sharing in education and across other public services,situating services strategically and reducing the duplication of having multiple offices of Government agencies such as the Housing Executive, in the same town</li>
	<li>
		Continue efforts to rationalise, sell off, secure sale and leaseback or develop other partnership arrangements for elements of the government estate</li>
	<li>
		Promote a single website similar to Public Contracts Scotland which brings together all tender opportunities in Departments, agencies and local government</li>
	<li>
		Review oversight arrangements of Northern Ireland Water</li>
	<li>
		Legislate to enable asset rich public sector service providers to raise private finance</li>
	<li>
		Amalgamate the Human Rights Commission, Equality Commission and the Office of the Children’s Commissioner</li>
	<li>
		Oppose a Northern Ireland Bill of Rights</li>
</ul>
<p>
	<br>
	<strong>CITIZEN-FOCUSED DEMOCRACY</strong></p>
<ul>
	<li>
		Make it easier for the public to engage with government</li>
	<li>
		Progress further the establishment of a single contact number for public services</li>
	<li>
		Explore the potential to create a website called FixOurStreetNI for residents to report problems with streetlights, drainage,waste collection, road maintenance, etc</li>
	<li>
		Work towards all benefit applications being made online, removing the need to attend a benefits office and allowing staff to be relocated in one or two large centres</li>
	<li>
		All public sector jobs to be advertised online</li>
	<li>
		Rolling out the Customer First pilot in Antrim has the potential to cut costs massively saving tens of millions of pounds- more efficient performance would place us in a better position to retain current contracts we have from Great Britain</li>
	<li>
		Introduce an automatic payment pilot for Pension Credit</li>
</ul>
<p>
	<br>
	<strong>ARMS-LENGTH BODIES</strong></p>
<ul>
	<li>
		Bring a Bill to rationalise arms-length bodies early in the next term, restoring more direct accountability</li>
	<li>
		Require an annual performance report from those arms-length bodies which remain, with the representatives of some called to appear before Stormont committees to account for performance- we would consult the public on what information they would like to see included in these reports</li>
	<li>
		Refashion some of the relationships between existing arms-length bodies and Government with their role focussing more on the implementation and managing of decisions taken centrally</li>
</ul>
<p>
	<br>
	<strong>CIVIL SERVICE REFORM</strong></p>
<ul>
	<li>
		Step up reform, resulting ultimately in fewer Civil Service grades</li>
	<li>
		Reduce the high administrative support ratio</li>
	<li>
		Seek to introduce meaningful pay progression commensurate with responsibilities, productivity and innovation rather than length of service</li>
	<li>
		Increasingly rigorous performance management</li>
	<li>
		Take forward plans to create an Executive Delivery Unit</li>
</ul>
<p>
	<strong>DEPARTMENTAL PRACTICE</strong></p>
<ul>
	<li>
		Continue an ‘invest to save’ approach</li>
	<li>
		Tackle culture of risk aversion among Departments and public authorities</li>
	<li>
		Reduce consultancy costs by creating a new unit to increase internal capacity and requiring specific advance Ministerial approval for all proposed spend on external consultants in excess of £10,000</li>
</ul>

<p><strong>A Safer Northern Ireland:</strong></p>

<ul>
	<li>Require a comprehensive review of sentencing policy to ensure it is effective in deterring crime, protecting the public and cutting reoffending</li>
	<li>
		Bring forward legislation to increase the maximum period of imprisonment for offences involving violence or neglect directed against the elderly or vulnerable</li>
	<li>
		Seek to increase sentences for child sex offences, rape and sexual assault</li>
	<li>
		Establish a Victims’ Charter placing victims at the heart of the justice process and ensuring proper communication and consultation from the PSNI and Public Prosecution Service with explanations for delays and failure to prosecute- reasons would have to be given for decisions to prosecute on lesser charges</li>
	<li>
		Increase transparency including clear indications of timeframes for cases, likely costs of actions and piloting online or televised coverage of cases</li>
	<li>
		Extend to Northern Ireland the Sarah’s Law provisions being practiced in England, allowing concerned parents to request whether individuals in contact with their child about whom they would have concerns, are on the Sex Offenders Register</li>
	<li>
		Amend self-defence legislation so householders are given greater protection and can only be prosecuted for use of force against intruders which is found to be disproportionate</li>
	<li>
		Produce a strategy to deal more effectively with white collar crime, ensuring that those who misappropriate or embezzle funds are properly pursued</li>
	<li>
		Implement legal aid reforms</li>
	<li>
		Introduce a website based on the CrimeMapper model across the water, so the public have accurate information about the level of crime in their neighbourhood</li>
	<li>
		Promote a ‘CashBack for Communities’ scheme based on the Scottish programme of diversionary activities for young people using funds recovered from criminals</li>
	<li>
		Support use of wire tap evidence in court</li>
	<li>
		Rigorously enforce legislation against begging</li>
	<li>
		Encourage mediation and alternative dispute resolution</li>
	<li>
		Support a three-month cooling off period to encourage reconciliation in divorce proceedings</li>
	<li>
		Promote mediation for couples who cannot agree how to divide up assets or share responsibility for children</li>
	<li>
		Introduce a strong presumption of father contact and involvement in all family cases</li>
	<li>
		Explore potential to replicate elements of the Sanctuary project from Nottingham designed to enable survivors of domestic abuse to remain in their homes and feel safe - the costs of relocating a family were estimated at £5,500 while the costs of added security measures were calculated at £3,000</li>
	<li>
		Attorney General to have greater oversight of the work of the Public Prosecution Service</li>
	<li>
		End the practice of imprisoning people who cannot pay fines and debts, exploring options such as seizing assets or acquiring the sum gradually from wages or welfare payments</li>
	<li>
		Explore outcomes-based contracts with partner organisations to help reduce reoffending</li>
	<li>
		Tackle ‘brick bandits’ by reversing the existing Housing Executive policy of not seeking prosecutions and requiring the issue to be taken more seriously by the courts</li>
	<li>
		Encourage public bodies to establish legal panels, providing clear guidance on upper payment limits for their legal representation</li>
	<li>
		Support our Armed Forces personnel serving in Afghanistan and their families</li>
</ul>
<p>
	<br>
	<strong>POLICING</strong></p>
<ul>
	<li>
		Review the future role of the Policing Board in light of the transfer of policing and justice functions to the Northern Ireland Assembly</li>
	<li>
		Establish a new police and fire service training centre</li>
	<li>
		Increase the proportion of time police officers spend on operational duties to levels comparable with the rest of the United Kingdom</li>
	<li>
		Root out administrative duplication in policing and emphasise the primacy of the quality of investigation over the requirement to record</li>
	<li>
		Maximise administrative duties carried out by civilian staff in order to free up officers for fighting crime</li>
	<li>
		Improve the performance of the firearms licensing section to match mainland levels</li>
	<li>
		Reduce the number of police officers required in court</li>
	<li>
		Limit the use of police speed cameras to accident blackspots</li>
</ul>
<p>
	<br>
	<strong>PRISONS</strong></p>
<ul>
	<li>
		Reduce the average annual costs per prisoner in Northern Ireland</li>
	<li>
		Seek to remove separated status for prisoners</li>
	<li>
		Have the power to grant separated status for individual prisoners devolved away from the Secretary of State</li>
	<li>
		Implement interventions to prevent reoffending, learning from projects such as the Prince’s Trust pilot initiative at Hydebank which aids the transition to independent living</li>
	<li>
		Explore potential for the Department of Justice to become involved in a social impact bond pilot such as that to reduce reoffending in Peterborough</li>
	<li>
		Ensure prisoners are not treated more favourably than law-abiding citizens</li>
</ul>
<p>
	<br>
	<strong>THE PAST</strong></p>
<ul>
	<li>
		Fund ongoing work of the Historic Enquiries Team until completion, conducting an interim review to monitor performance and cost effective practice</li>
	<li>
		Continue after the election period to build broader consensus around amending the definition of a victim to exclude perpetrators of terrorist acts</li>
	<li>
		Resist attempts by republicans and elements of the media to rewrite the history of the last four decades or justify terrorist campaigns</li>
	<li>
		Support the right to justice for bereaved victims of terrorism</li>
	<li>
		Continue to direct substantial funding to the new Victims’ Service, after more than trebling provision available to victims and survivors</li>
	<li>
		Carry forward the ten year strategy for the sector and complete the ambitious fundamental reform programme for victims and survivors’ services</li>
	<li>
		Seek to establish an oral and video archive for victims and survivors of the Troubles</li>
</ul>

<p><strong>Housing:</strong></p>

<ul>
	<li>Produce a comprehensive Homes and Communities strategy for Northern Ireland, agreed with the housing sector</li>
	<li>
		Take an early decision on the outcome of the Fundamental Review of the Northern Ireland Housing Executive, with the DUP preference for exploring models that would separate the strategic and landlord functions, and utilise assets to make social housing more self-financing</li>
	<li>
		Examine how a single regulator for the whole housing sector could be created</li>
	<li>
		Create certainty on future Housing Executive rent levels, targeting any revenue raised on reinstating properties, maintaining homes and installing energy efficiency measures</li>
	<li>
		Strike a better balance between funding new builds and maintaining existing social homes</li>
	<li>
		Instigate a review of the common selection scheme</li>
	<li>
		Introduce legislative changes that strengthen the powers of social landlords to deal with anti-social tenants and examine how the law could be extended to include private landlords and tenants</li>
	<li>
		Establish a light touch, mandatory register for private landlords</li>
	<li>
		Work with housing associations to scope out the potential to enhance their role in developing affordable housing and regenerating communities, whilst seeking to achieve optimum efficiency through consolidation and procurement</li>
	<li>
		Seek to extend the programme of installing carbon monoxide monitors in social homes</li>
	<li>
		Engage with telecommunications companies with a view to developing a roll out programme to provide affordable broadband access in social housing</li>
	<li>
		Set up a Northern Ireland Housing Forum involving all housing providers and representatives of those Government Departments involved including DSD, DFP and Planning</li>
	<li>
		Assist first time buyers including through a graduate home loan scheme for those with degrees in subjects crucial to improving our economy such as STEM, finance and business</li>
	<li>
		Promote shared ownership schemes and provide tenants with greater opportunity to own or part-own their home, including greater flexibility in the proportion stake required for co-ownership</li>
	<li>
		Explore how funding to assist the Co-Ownership scheme could be increased as well as the establishment of a government backed loan scheme for first time buyers</li>
	<li>
		Consult on a new process to review regularly the needs of tenants of social homes</li>
	<li>
		Place an increased focus on the housing needs of the vulnerable including the elderly and disabled, ensuring processes are more sympathetic to their particular needs</li>
	<li>
		Examine appropriate schemes to assist homeowners facing problems paying their mortgages and provide practical advice and support</li>
	<li>
		Produce a comprehensive, cross-Departmental homelessness strategy</li>
</ul>

<p><strong>A Healthier NI:</strong></p>

<ul>
	<li>Reconfigure provision to shift the 25-30% of care currently carried out inappropriately in hospitals, into the community- patients must be treated in the right place at the right time by the right people, not over-relying on the most specialised and expensive services</li>
	<li>
		Slash the excessive per capita spending on Departmental and administrative costs to the levels in the rest of the UK</li>
	<li>
		Overhaul commissioning to have budgets held at local level and all decisions on non-regional services taken locally- local commissioning with strong clinician involvement across the water has improved primary care services, made prescribing more efficient and created community-based alternatives to hospital care. There is also evidence that groups controlling real budgets were able to secure shorter waiting times, achieve lower referral rates and reduce emergency bed-days</li>
	<li>
		Transform the range of services which are tendered for including areas such as social care, asset management, transport, fleet maintenance and facilities management. External support could also be explored for human resources, accounting, data analysis and back-office functions</li>
	<li>
		Overhaul procurement in light of the National Audit Office Report which indicated that in England savings on consumables amounting to £500m per year could be achieved if trusts came together to buy products in a more collaborative way- some trusts were paying 50% more than others for the same medical equipment and other supplies</li>
	<li>
		Have 80% of domiciliary care provided by charities and other nonstatutory organisations by 2015, releasing savings extending to tens of millions of pounds per year</li>
	<li>
		Improve the productivity of all aspects of the health service by 2015 to start catching up with other comparable areas across Europe</li>
	<li>
		Incorporate the Public Health Agency within the Health and Social Care Board and review the role of the Business Services Organisation and Patient Client Council</li>
	<li>
		Allocate to public health an increasing percentage of the overall health budget with a view to increasing spend on health promotion and disease prevention beyond £100 million, to more than two and a half times the 2007 figure</li>
	<li>
		Introduce a Dignity Charter for Older People in Hospital</li>
	<li>
		Increase investment in intermediate care and rehabilitation to treat more patients with chronic illnesses at home rather than requiring hospital admission</li>
	<li>
		Restore the Minor Ailments Scheme, and establish the Province’s 531 community pharmacies, which every day are visited by close to 10% of the Province’s adult population, as a key component of our health promotion network</li>
	<li>
		Resolve Community Pharmacy Contract negotiations and implement swiftly</li>
	<li>
		Provide fair and reasonable funding for community pharmacies, particularly dispensing fees and Special Advance payments</li>
	<li>
		Provide sufficient resources for a range of modifications including fitting hand and grab rails in elderly people’s homes to prevent falls and the subsequent treatment costs for hip fractures</li>
	<li>
		Publish an Allied Health Professionals strategy and support a self referral scheme for physiotherapy which has provided annual savings of £2 million in Scotland</li>
	<li>
		Introduce a 24 hour Province-wide consultant-led thrombolysis service for stroke and work towards a target of conducting brain scans for stroke within three hours</li>
	<li>
		Restore the funding originally earmarked for the stroke strategy</li>
	<li>
		Carry out at least one hundred more cardiac operations per year in Northern Ireland making savings from sending less patients to Dublin or Great Britain</li>
	<li>
		Ensure everyone who needs cardiac rehabilitation can access it</li>
	<li>
		Co-ordinate research into multiple sclerosis and expand the network of neuro-physiotherapists across the Province</li>
	<li>
		Frontload funding for the first few years of life, investing in health promotion and preventative and early intervention measures</li>
	<li>
		Explore means including fixed penalty notices to reduce drunkenness and violence in Accident and Emergency departments and throughout the health care system</li>
	<li>
		Expand our addictions provision</li>
	<li>
		Utilise fully ICT including progressing a single electronic health record for each patient</li>
	<li>
		Continue vigilance against health care acquired infections</li>
	<li>
		Mnimise waiting times for assessment and treatment across the Northern Ireland health service</li>
	<li>
		Ensure patients’ review appointments are not delayed or cancelled in order to meet politically-driven targets- these have skewed resources and led to distorted clinical priorities</li>
	<li>
		Continue progress on reducing the number of deaths and injuries on our roads</li>
	<li>
		Require generic prescribing</li>
	<li>
		Develop more specialist nurses in diabetes, heart failure and respiratory disease, particularly in community based multidisciplinary teams - the Chronic Illness Management Service has seen bed days reduced by 59% and savings of £1,493 per patient realised</li>
	<li>
		Explore the potential for Northern Ireland to be included in the NHS Choices website which has provided a better service and saved close to £50 million in England</li>
	<li>
		Oppose extension of the 1967 Abortion Act to Northern Ireland</li>
	<li>
		Provide more respite packages and short breaks for those with disabilities and their families- one study calculated that £174 million could be saved annually in England through provision of short breaks</li>
	<li>
		Overhaul the Regional Autistic Spectrum Disorders Network and speed up diagnosis and intervention for autism</li>
	<li>
		Support quality standards in audiology</li>
	<li>
		Improve support for tinnitus sufferers</li>
	<li>
		Make progress in implementing the UK Vision Strategy, seek to eliminate avoidable sight loss and promote independence for blind and partially sighted people</li>
	<li>
		Support collaboration between statutory, private and voluntary bodies such as the example from Scotland of electronic images from High Street optometrists being assessed by hospital clinicians</li>
	<li>
		Review the bonus system for senior clinicians and management</li>
	<li>
		Reduce the number of children entering care</li>
	<li>
		Conduct a study into levels of malnutrition across Northern Ireland</li>
	<li>
		Greater transparency in funding for children’s services</li>
	<li>
		Encourage those with disabilities to participate in sport, including activities such as Special Olympics</li>
	<li>
		Support rolling out of emergency life skills training and development of a first responder network</li>
	<li>
		The DUP prefers individuals to have the maximum control over their lives. However there are aspects of personal behaviour which evidence clearly demonstrates are causing harm to individuals and others who come into contact with them, and which results in massive costs to the public purse. Consequently in such circumstances a DUP Minister will pursue the measures listed below:</li>
	<li>
		Promote uptake of screening and immunization programmes</li>
	<li>
		Support screening and public health messages for hearing and vision</li>
	<li>
		Reduce rate of teen pregnancy through expanding education and awareness raising programmes in schools</li>
</ul>
<p>
	<br>
	<strong>ALCOHOL</strong></p>
<ul>
	<li>
		Raise awareness of the long-term health risks associated with alcohol</li>
	<li>
		Support measures to reduce alcohol consumption including an end to promotions such as ‘happy hours’, banning the sale of alcohol below cost price and ensuring any introduction of minimum pricing is targeted at an appropriate level to impact on binge drinkers</li>
	<li>
		Explore the introduction of a rates levy on off licences and supermarkets selling alcohol at their premises- extra revenue generated could be used for dealing with adverse impacts of alcohol abuse in society</li>
	<li>
		Support planned interventions from specialist alcohol liaison nurses which have been shown to help 40% of dependent drinkers give up alcohol altogether</li>
	<li>
		Expand our addictions provision</li>
	<li>
		Consider extension of Designated Public Place Orders which have proved a success on the mainland</li>
</ul>
<p>
	<br>
	<strong>OBESITY</strong></p>
<ul>
	<li>
		Encourage fast food outlets, restaurants, sandwich chains, cafes, public houses and company canteens to display calorie counts on menus</li>
	<li>
		Seek to reduce salt content of bread, cereals, margarine and other processed foods and prevent the use of artificial trans-fats</li>
	<li>
		Explore measures to prevent inappropriate advertising and sponsorship for unhealthy foods targeted at young people</li>
	<li>
		Halt the erosion of sporting facilities in schools and communities</li>
	<li>
		Encourage physical activity and practical cookery classes in schools</li>
	<li>
		Increase the number of regular cyclists</li>
</ul>
<p>
	<br>
	<strong>TOBACCO</strong></p>
<ul>
	<li>
		Implement a new tobacco control strategy</li>
	<li>
		Approve tobacco regulations</li>
	<li>
		Outlaw smoking in cars with young children</li>
	<li>
		Increase the number of smoke-free homes</li>
	<li>
		Promote smoking cessation services</li>
	<li>
		Take further action to combat tobacco smuggling and trade in counterfeit cigarettes</li>
</ul>
<p>
	<br>
	<strong>CANCER CARE</strong></p>
<ul>
	<li>
		Implement a Service Framework for Cancer</li>
	<li>
		Establish cancer care pathways for patients</li>
	<li>
		Ensure early diagnosis and treatment</li>
	<li>
		Promote greater public awareness of early signs and symptoms of cancer</li>
	<li>
		Reduce mortality from bowel cancer through expansion of the screening programme</li>
	<li>
		Benchmark trusts’ performance against survival rates in Great Britain</li>
	<li>
		Open a new radiotherapy centre in Londonderry</li>
	<li>
		Develop brachytherapy services</li>
	<li>
		Expand the network of specialist cancer nurses</li>
	<li>
		Promote services offering financial advice for cancer sufferers and assistance to get them back to work</li>
	<li>
		Support expansion of the Winter Fuel Allowance to cancer sufferers</li>
	<li>
		Ensure all patients with a stoma have a named nurse</li>
	<li>
		Increase the number of patients participating in clinical trials</li>
	<li>
		Enhance provision of 24 hour palliative care support</li>
	<li>
		Support the World Health Organisation view that palliative care should incorporate physical, psychological and spiritual needs</li>
</ul>
<p>
	<br>
	<strong>MENTAL HEALTH</strong></p>
<ul>
	<li>
		Promote positive mental health and wellbeing</li>
	<li>
		Reduce the number of suicides and parasuicides</li>
	<li>
		Instil resilience and coping skills in young people</li>
	<li>
		Implement an effective dementia strategy</li>
	<li>
		Reconfigure services shifting resources from acute to community-based services as outlined in the Bamford report</li>
	<li>
		Improve access to Child and Adolescent Mental Health services</li>
	<li>
		Take forward mental capacity legislation</li>
	<li>
		Ensure faster access to psychotherapy services</li>
	<li>
		Explore means for the public sector to offer training and placement opportunities to people recovering from mental illness</li>
</ul>
<p>
	<br>
	<strong>VIOLENCE AGAINST STAFF</strong></p>
<ul>
	<li>
		Explore ways including fixed penalty notices to reduce drunkenness and violence in Accident and Emergency departments and throughout the health care system</li>
	<li>
		Patients with a history of violence to have a warning marker placed on their health record</li>
	<li>
		Training on how to deal with violent patients</li>
	<li>
		Enforce zero tolerance approach</li>
</ul>

<p><strong>Environment:</strong></p>

<ul>
	<li>Aim to secure 40% of our energy consumption from renewable sources by 2020, assisting small scale renewable energy generation, ensuring simplified processes to secure approval for renewable projects, publishing a Northern Ireland Offshore Renewable Energy Strategy and seeking to establish the Province as a renewable manufacturing hub</li>
	<li>
		Make our fair share of reductions in greenhouse gases, cutting emissions by 25% below 1990 levels by 2025</li>
	<li>
		Continue progress towards making the government estate carbon neutral</li>
	<li>
		Promote renewable heat working towards 10% of heat consumed coming from renewable sources by 2020</li>
	<li>
		Commence a Province-wide retrofit programme providing a range of energy efficiency measures, reducing carbon emissions and reducing our reliance on fossil fuels</li>
	<li>
		Explore opportunities for future retrofitting of public and commercial buildings</li>
	<li>
		Take advantage of the economic opportunities offered by a low carbon economy</li>
	<li>
		Support Research and Development in renewable and low carbon technologies</li>
	<li>
		Increase the number of schools involved in the Eco-Schools programme</li>
	<li>
		Continue annual increases in household waste recycling rates and reduce food waste</li>
	<li>
		Further implement the Water Framework Directive</li>
	<li>
		Rigorously tackle waterways pollution which presents a significant threat to local ecosystems, particularly in those areas which have seen repeated incidents of both deliberate and accidental pollution</li>
	<li>
		Promote car sharing and park and ride facilities</li>
	<li>
		Promote low energy lighting and fittings in public buildings</li>
	<li>
		Work to improve air quality</li>
	<li>
		Promote green spaces and wildlife corridors in order to halt the loss of habitats and biodiversity</li>
	<li>
		Prevent species decline, arrest the recent loss of wildlife by 2020 and support the retention and restoration of native forests</li>
	<li>
		Develop a partnership approach to increase woodland cover, enlarging existing native woodlands and creating links between them to encourage biodiversity and connectivity</li>
	<li>
		Stop the decline in farmland birds in Northern Ireland</li>
	<li>
		Facilitate the expansion of allotment provision</li>
</ul>

<p><strong>Agri-Food:</strong></p>

<ul>
	<li>Enhance Northern Ireland’s reputation as a region for exporting high quality food products, emphasising our grass-based production systems, traceability, animal welfare standards, food safety and access to key markets</li>
	<li>
		Position the agri-food sector as a central pillar of our economic platform, and draw up a roadmap for future growth of the industry</li>
	<li>
		Seek to improve the competitiveness of the agricultural sector</li>
	<li>
		Cut the administrative burden in the agri-food sector</li>
	<li>
		Focus on value added</li>
	<li>
		Support the development of viable rural businesses</li>
	<li>
		Improve animal health, reducing the levels of serious endemic animal and plant disease</li>
	<li>
		Seek to create a level playing field for Northern Ireland producers</li>
	<li>
		Develop strong links between tourism and our food produce and countryside, including initiatives such as food trails</li>
	<li>
		Support local produce and promote a network of farmers’ markets to encourage direct selling from producers to consumers</li>
	<li>
		Develop a template for the establishment of farm-gate shops</li>
	<li>
		Provide customers with the maximum information to make informed choices about products they are purchasing, including in restaurants and catering</li>
	<li>
		Local farmers should not have to compete with imports produced at much lower welfare and production standards</li>
	<li>
		The DUP will continue to lobby for the ban on Brazilian beef to be retained until it meets the standards expected of producers farming within Northern Ireland</li>
	<li>
		Explore opportunities to acquire protected geographical indicator status for indigenous products such as Comber potatoes- in comparison to other European regions we have not maximised the marketing potential from achieving this status</li>
	<li>
		Ensure the Province continues to produce high quality chefs, and promote cookery schools, specialist products and restaurants</li>
	<li>
		Add value through supporting innovation in new products and the development of new processes to improve productivity</li>
	<li>
		Seek to remove policies which create barriers to employment, and prioritise the economic value of planning applications</li>
	<li>
		Promote renewable energy generation on farms including wind, anaerobic digestion and biomass</li>
	<li>
		Promote utilisation of waste produced both in agriculture and the food processing sector to support the production of renewable energy</li>
	<li>
		Support a Competition Commission for supermarkets and other means of rebalancing power in the food chain, giving consumers fair prices for groceries and producers a fair price for their produce</li>
	<li>
		Assist graduate programmes in the agri-food sector</li>
	<li>
		Promote the Province as a hub for agri-food research</li>
	<li>
		Support the development of a facility to deal with the Province’s poultry litter</li>
	<li>
		Continue battling against attempts to alter Agricultural Property Relief on conacre land</li>
	<li>
		Work alongside our MEP and MPs in lobbying for and securing a future for our entire commercial fishing industry, and highlighting the issues of cod recovery, fish discards, our inshore and inland fisheries and the management of our fishery harbours. DUP opposition to a centralised European fisheries policy has been well documented for many years and at last has been vindicated with even Europe now admitting their approach has failed</li>
	<li>
		Improve the performance of the fisheries section in DARD to make it more responsive to the needs of the industry</li>
</ul>

<p><strong>Valuing Older People:</strong></p>

<ul>
	<li>Focus on the positive contribution and potential of older people</li>
	<li>
		Produce a Positive Ageing strategy</li>
	<li>
		Provide the opportunity for older people to play a full and active role in the community</li>
	<li>
		Recognise older people’s knowledge, experience and skills by supporting schemes such as the Prince’s Initiative for Mature Enterprise</li>
	<li>
		Seek to conduct an automatic payments pilot in the Province for Pension Credit, perhaps amongst females- an estimated 34% of those entitled do not claim Pension Credit, and automatic payment would address the barriers associated with low uptake and have the potential to add in excess of £1 million per week into the Northern Ireland economy</li>
	<li>
		Extension of the Warm Homes Scheme with a more flexible approach to permit those with oil or gas boilers to receive repairs or upgrades</li>
	<li>
		Ensure the effectiveness of the Older Person’s Commissioner role, making Northern Ireland an example of best practice internationally in dealing with the rights and interests of older people</li>
	<li>
		Legislate to increase sentences for attacks on older people</li>
	<li>
		Consider the case for legislation to protect vulnerable older people from abuse</li>
	<li>
		Continue to make the case at Westminster for a fairer state pension linked to earnings</li>
</ul>
<p>
	<strong>CARE OF OLDER PEOPLE</strong></p>
<ul>
	<li>
		Produce a long-term strategy for Caring for our Older People</li>
	<li>
		Introduce a Dignity Charter for Older People in Hospital</li>
	<li>
		Replicate elements of the Partnership for Older People Projects in Scotland which have promoted health, delayed any need for higher intensity care and reduced overnight hospital stays, use of Accident and Emergency Departments, therapist appointments, GP phone calls&nbsp;and appointments and visits to practice nurses- Laing and Buisson found in 2008 that postponing entry into residential care by adapting people’s homes saves over £28,000</li>
	<li>
		Explore potential local telecare interventions</li>
	<li>
		Reinforce teams to ensure care assessments are conducted swiftly</li>
	<li>
		Amend process so patients are not delayed in hospital waiting on confirmation of funding for a care bed</li>
	<li>
		Dedicated discharge teams to allow patients to leave hospital promptly</li>
</ul>

<p><strong>Making Progress:</strong></p>

<ul>
	<li>Strengthen the Union</li>
	<li>
		Make devolution work</li>
	<li>
		Work together with other parties for a better Northern Ireland- make Northern Ireland an economic success</li>
	<li>
		Build a shared and united community</li>
</ul>

<ul>
	<li>Separation in prisons</li>
	<li>
		Health facilities</li>
	<li>
		Expenditure on social housing</li>
	<li>
		Multiple offices for Government agencies in the same town</li>
	<li>
		Policing, security costs and civil disturbances</li>
	<li>
		Voluntary /community sector organisations.</li>
</ul>

<p><strong>Prioritising Our Economy:</strong></p>

<ul>
	<li>Jobs,</li>
	<li>
		Growth and exports of indigenous companies,</li>
	<li>
		Research and development,</li>
	<li>
		Foreign direct investment.</li>
</ul>

	<p><strong>STRATEGY FOR GROWTH</strong></p>
<ul>
	<li>
		Support the creation of over 20,000 new jobs</li>
	<li>
		Strive to make Northern Ireland the best place in the UK to do business</li>
	<li>
		Seek to increase exports by 50% over the next decade by supporting first-time exporters and assisting companies to diversify into new markets</li>
	<li>
		Seek in the short-term to maximise job creation by actions such as providing financial support for start-ups and grant assistance in the agri-food sector, targeting knowledge processing and contact centre FDI, boosting funding and procurement opportunities for social enterprises and extending the Propel programme for export starts</li>
	<li>
		Target over the course of the Assembly term more jobs in ICT, agri-food, financial services, health technology, tradable services, clean technology, business services, retail, tourism and construction</li>
	<li>
		Aim to expand aerospace, pharmaceuticals, medical devices and other high value advanced manufacturing</li>
	<li>
		Seek to reduce the private sector productivity gap with Great Britain</li>
	<li>
		Promote the Province’s historic reputation for innovation and invention</li>
	<li>
		Seek to build Northern Ireland’s reputation internationally as a centre for creative industries</li>
	<li>
		Continue to speed up and simplify planning processes, particularly for job-intensive projects assist in the creation of a business school in the Province linked to a major U.S. university</li>
	<li>
		Further develop relationships in India, China, South America, Canada and Russia</li>
	<li>
		Encourage firms from the Far East and elsewhere to locate European bases in Northern Ireland</li>
	<li>
		Provide greater operational freedom for Invest NI and further streamline support programmes</li>
	<li>
		Increase commercialisation of intellectual property from the local university and company research base</li>
	<li>
		Target resources to technology areas of greatest future potential and exploit niche strengths in our research, development and science bases</li>
	<li>
		Establish the Province as a renewable manufacturing hub</li>
	<li>
		Support employers in areas such as innovation, productivity, design and business development and incubation</li>
	<li>
		Increase the level of skills to aid productivity improvements in manufacturing and tradable services</li>
	<li>
		Further roll out broadband connectivity throughout Northern Ireland and increase e-business activity</li>
	<li>
		Support the digital economy, enhancing digital skills and assisting more businesses to get online</li>
	<li>
		Pursue banks to provide working capital and funds for growth to local businesses, demanding regular figures updating the levels of business lending including both renewals of facilities and new lending</li>
	<li>
		Establish Northern Ireland as a prime location to start and grow an innovative company, and to turn research and knowledge into jobs, products and services</li>
	<li>
		Seek to reduce crippling Air Passenger Duty rates introduced by the UK Government which risk diverting business away from the Province to the Irish Republic and placing long-haul routes such as Belfast-New York under threat</li>
	<li>
		Increase access to public sector procurement opportunities for SMEs and social economy enterprises</li>
	<li>
		Assist the social economy through increased start-up packages, training and support with business plans and hosting an international conference on social enterprise</li>
	<li>
		Investigate the potential for providing access to underutilised public property for entrepreneurs or business start-ups to use as incubation centres</li>
	<li>
		Foster cloud computing services and new application design, and attract new data centres</li>
	<li>
		Continue to press the Westminster Government for a fair fuel duty stabiliser</li>
	<li>
		Amend credit union legislation and promote microfinance initiatives</li>
	<li>
		Continue to explore the potential to acquire special economic or enterprise zone status for Northern Ireland</li>
	<li>
		Continue to press the case for initiatives such as tax breaks for research and development and a tax reduction for the film sector</li>
</ul>
<p>
	<br>
	<strong>MAXIMISING OUR TALENT</strong></p>
<ul>
	<li>
		Seek to introduce a graduate home loan scheme for first time buyers with a degree in subjects crucial to improving our economy such as STEM, finance and business</li>
	<li>
		We would investigate the potential for the Student Loans Company to be involved in operating the scheme</li>
	<li>
		Offer student loan relief for individuals who commit to working in the Province for ten years</li>
	<li>
		Continue offering scholarships to high-achieving students remaining in Northern Ireland</li>
	<li>
		Build on the work of several Government Departments to attract back to the Province talented individuals originally from Northern Ireland</li>
	<li>
		Facilitate unemployed skilled young people, such as trainee teachers to undertake conversion courses to find employment working in STEM areas</li>
</ul>
<p>
	<br>
	<strong>CUTTING BUSINESS COSTS</strong></p>
<ul>
	<li>
		Hold regional business rates to increases of no more than inflation</li>
	<li>
		Extend and improve the small business rates relief scheme</li>
	<li>
		Develop a local small business advice network providing business guidance and signposting, and promote closer relationships between Invest NI and local government</li>
	<li>
		Legislate to establish Business Improvement Districts</li>
	<li>
		Provide rate relief for businesses investing in energy efficiency measures</li>
	<li>
		Empower the Minister to cap district rates</li>
	<li>
		Maintain the 30% cap on manufacturing rates</li>
	<li>
		Seek to introduce a requirement for an upfront deposit or similar demonstration of commitment from claimants, to reduce spurious industrial tribunal cases</li>
</ul>
<p>
	<br>
	<strong>ENERGY</strong></p>
<ul>
	<li>
		Work to reduce energy costs for businesses and consumers</li>
	<li>
		Bring energy policy and strategy under a single Government Department</li>
	<li>
		Produce a strategic grid infrastructure development plan</li>
	<li>
		Support further interconnection on the electricity grid with the rest of the UK and the Irish Republic, enhancing our ability to import and export electricity</li>
	<li>
		Seek to reduce the delays experienced in gaining access to the grid</li>
	<li>
		Consult on how to improve the pricing structures for small-scale generators</li>
	<li>
		Publish a Northern Ireland Offshore Renewable Energy Strategy (that takes account of the Province’s fishing industry), promote wind and tidal stream projects and develop the Belfast harbour area as a major offshore logistics centre</li>
	<li>
		Ensure a simplified process to obtain planning approval for renewable technologies</li>
	<li>
		Produce a plan to develop the renewable energy potential for public buildings</li>
	<li>
		Promote renewable heat working towards 10% of heat consumed coming from renewable sources by 2020</li>
	<li>
		Explore potential for anaerobic digestion through co-digestion of wastewater treatment sludge and agricultural material</li>
	<li>
		Support the extension of the gas network</li>
	<li>
		Commence a Province-wide retrofit programme providing a range of energy efficiency measures thereby creating jobs, combating fuel poverty, reducing carbon emissions and cutting domestic energy bills</li>
	<li>
		Explore opportunities for future retrofitting of public and commercial buildings</li>
</ul>
<p>
	<br>
	<strong>INFRASTRUCTURE</strong></p>
<ul>
	<li>
		Maximise the amount of revenue spend which can be transferred to capital for investment</li>
	<li>
		Invest in employment-intensive projects</li>
	<li>
		Invest in our roads and transport network,water and waste water, schools and youth services, health and social care as well as social and affordable housing</li>
	<li>
		Continue to minimise road casualties through road safety engineering, collision remedial schemes, traffic calming, school safety zones and improved pedestrian and cycle networks</li>
	<li>
		Promote increased usage of public transport and make best use of the new bus and train fleets</li>
	<li>
		Seek to ensure that the Belfast-Londonderry rail link has commuters arriving before 9am</li>
	<li>
		Ensure public transport and car parking issues are fully taken into account in planning determinations</li>
	<li>
		Reaffirm long-term commitment to introduce a rapid transit system</li>
	<li>
		Establish Northern Ireland at the forefront in cloud computing and data centres</li>
	<li>
		Press for fair share from UK Broadband Fund to improve connection especially in rural areas</li>
	<li>
		Improve infill mobile technology, decreasing the number of blackspot areas for mobile communication in the Province</li>
	<li>
		Preparation for new generation technology</li>
</ul>
<p>
	<br>
	<strong>TOURISM</strong></p>
<ul>
	<li>
		Double tourism revenue to £1 billion over the next decade</li>
	<li>
		Maximise benefits from the significant capital investment in tourism, particularly in 2012 with the Titanic and Ulster Covenant anniversaries and the opening of a new Giant’s Causeway Visitor Centre, and Londonderry’s Year as the UK’s City of Culture in 2013</li>
	<li>
		Ensure dedicated campaigns for 2012 and 2013 to promote Northern Ireland as a region</li>
	<li>
		Produce a ten-year plan for showcasing Northern Ireland on the international stage in 2021, and incorporating a homecoming of the Northern Ireland diaspora</li>
	<li>
		Enter into discussions with the Irish Government about the effectiveness and long-term sustainability of the Tourism Ireland relationship</li>
	<li>
		Use hosting the MTV Europe Music Awards to promote the new Northern Ireland and Belfast as a City of Music</li>
	<li>
		Grow tourism in niche areas such as business tourism, golf, country sports,walking culture and heritage</li>
	<li>
		Work to develop a conference centre in the Province specifically to attract business tourism</li>
	<li>
		Increase visitor numbers by focussing on Great Britain and markets most likely to deliver growth</li>
	<li>
		Seek to reduce crippling Air Passenger Duty rates introduced by the UK Government which risk diverting passengers away from the Province to the Irish Republic</li>
	<li>
		Greater use of e-marketing</li>
	<li>
		Develop full weeks of high quality Province-wide activities to complement 12th July and St Patrick’s Day holidays</li>
	<li>
		Promote genealogical tourism across DETI and DCAL</li>
	<li>
		Continue progress on attracting major sporting events to the Province</li>
</ul>
<p>
	<br>
	<strong>EMPLOYABILITY</strong></p>
<ul>
	<li>
		Improve opportunities for adults to update numeracy, literacy and ICT skills</li>
	<li>
		Increase the proportion of the working age population with qualifications</li>
	<li>
		Increase the numbers studying STEM subjects</li>
	<li>
		Ensure sufficient training places for the unemployed, including apprenticeships and internships</li>
	<li>
		On-the-job training in public and private sectors and other labour market activation measures to assist redundant apprentices and craftsmen</li>
</ul>
<p>
	<br>
	<strong>CHILDCARE</strong></p>
<ul>
	<li>
		Work towards ensuring affordable childcare Province-wide from 8am to 6pm from Monday to Friday</li>
	<li>
		Make greater use of the schools estate for childcare aiming for schools to be able to use childcare tax credits, and ensuring varied use of time including breakfast clubs,homework clubs, sport and vocational and skills training</li>
	<li>
		Provide start-up grants and enhanced support for childminders</li>
	<li>
		Simplify the standardised system of registering and inspecting childminders - lengthy delays are a disincentive to people registering</li>
	<li>
		Support additional specialist childcare for children with disabilities</li>
	<li>
		Establish a lead department for childcare providing greater accountability</li>
	<li>
		Integrate the Childcare and Early Years strategies</li>
</ul>

<p><strong>Early Intervention:</strong></p>

<ul>
	<li>Embed early intervention at the heart of departmental strategies</li>
	<li>
		Invest in proven projects, particularly in the prenatal to three years age range</li>
	<li>
		Focus on social and emotional development and parenting programmes</li>
	<li>
		Seek to address the cycle of wasted potential across multiple generations of young people</li>
	<li>
		Incentivise cross-departmental working and budgeting</li>
</ul>
<p>
	The DUP proposes to:</p>
<ul>
	<li>
		Roll out across the Province the Family Nurse Partnership programme being implementing in the Western LCG area, providing intensive home visiting to every vulnerable teenage first-time mother in Northern Ireland</li>
	<li>
		Seek to establish cross-sectoral multidisciplinary teams to support the hardest to reach families in a co-ordinated manner- research has found that some families currently can have interventions from more than twenty different sources</li>
	<li>
		Pilot a number of other early interventions that demonstrate significant medium-term savings</li>
</ul>
<p>
	We will continue to monitor closely the outcomes of several interventions including the:</p>
<ul>
	<li>
		PATHS programme of school-wide activities currently being provided through one hour’s worth of lessons each week in primary schools in the Lurgan area</li>
	<li>
		Families and Schools Together, being delivered locally by Save the Children</li>
	<li>
		Incredible Years parent training intervention which has been used in Welsh Early Years Services and in Manchester</li>
	<li>
		Parent-Child Home project readying children for school in Dublin</li>
	<li>
		Total Place initiatives being piloted across 13 areas of England</li>
	<li>
		Literacy programmes such as Success for All, Reading Recovery and Business in the Community’s ‘Time to Read’ project</li>
	<li>
		Functional Family Therapy for which a randomised control trial is underway in Brighton</li>
	<li>
		Other interventions re drugs, alcohol, relationships and sexual behaviour</li>
</ul>

<p><strong>Social Impact Bonds:</strong></p>

<ul>
	<li>Develop a strategy for engaging investors and putting in place social impact bonds</li>
	<li>
		Institute a team within the Department of Finance and Personnel</li>
	<li>
		Require Departments to come forward with proposed areas where social impact bonds can be pursued</li>
</ul>

<p><strong>Helping Households:</strong></p>

<ul>
	<li>Work to keep household bills at a minimum, ensuring that Northern Ireland continues to have the lowest bills anywhere in the UK</li>
	<li>
		Conduct an inquiry into insurance costs- including car, contents and buildings insurance- in the Province compared with Great Britain, covering local insurance industry practice and the role of the legal sector</li>
	<li>
		Produce a Financial Capability strategy</li>
	<li>
		Explore partnership opportunities with organisations such as Charis to pilot an holistic financial capability programme for those who end up in debt arrears</li>
	<li>
		Prepare young people at school for managing finances</li>
	<li>
		Ensure availability of appropriate debt advice services</li>
	<li>
		Continue to press for a fair fuel stabiliser</li>
	<li>
		Address the poverty premium which results from poorer people not being able to buy in larger quantities or access potential savings through direct debit, energy metering etc</li>
	<li>
		Deliver a package extending to hundreds of millions of pounds for savers with the Presbyterian Mutual Society</li>
</ul>
<p>
	<br>
	<strong>FUEL POVERTY</strong></p>
<ul>
	<li>
		Drive down fuel poverty in the short term to a level comparable with the rest of the United Kingdom</li>
	<li>
		Refocus action on fuel poverty towards those in the most severe need since under the current definition almost half of the Province’s population is considered to be in fuel poverty</li>
	<li>
		Promote energy efficiency measures in homes of all tenure types</li>
	<li>
		Establish one single telephone point of contact for all energy efficiency and fuel poverty advice</li>
	<li>
		Adopt and develop an Energy Assistance Package approach to maximise the number of people in Northern Ireland who would receive good energy efficiency advice and assistance</li>
	<li>
		Promote energy brokering involving large public bodies and businesses willing to demonstrate corporate social responsibility</li>
	<li>
		Increase flexibility in the Warm Homes Scheme to allow for repairs and upgrades of existing broken or inefficient oil and gas heating systems</li>
	<li>
		Fully implement a Boiler Scrappage Scheme for Northern Ireland</li>
</ul>
<p>
	<br>
	<strong>WELFARE</strong></p>
<ul>
	<li>
		Fight the case with the Department for Work and Pensions that welfare reforms should not disproportionately impact on Northern Ireland in a negative way</li>
	<li>
		Support and implement logical welfare reforms that simplify the social security system and assist people to move from welfare to work</li>
	<li>
		Oppose any attempts to breach parity that would place at risk Northern Ireland’s annual £3 billion social security subvention</li>
	<li>
		Pilot automatic payment of benefits</li>
	<li>
		Develop collaborative, long-term benefit uptake campaigns which utilise data held by Government Departments and agencies, target groups and include outreach activities</li>
	<li>
		Further improve the processing system to take greater account of, and show more sensitivity to, the difficulties experienced by people with conditions such as autism</li>
	<li>
		Support expansion of the winter fuel allowance to cancer sufferers</li>
	<li>
		Increase the use of telephony and online benefit applications</li>
</ul>
			</div><!--End of Expanded-->
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