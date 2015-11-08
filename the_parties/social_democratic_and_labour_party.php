 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Social Democratic and Labour Party</title>
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
            <a href="social_democratic_and_labour_party.php"><li id="active" class="sidebar_links"><i>Social Democratic and Labour Party</i></li></a>
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
				<img class="party_logo2" src="logos/sdalp.jpg">
				<h1 style="color: blue; margin-top: 13px;">Social Democratic and Labour Party</h1>
				<p>The SDLP has fraternal links with other European social-democratic parties, including the Irish Labour Party and British Labour Party (neither of which contest elections in Northern Ireland), and is affiliated to the Socialist International and Party of European Socialists. The SDLP is also an Irish nationalist party. Its basic party platform advocates Irish unification, and the further devolution of powers while Northern Ireland remains part of the United Kingdom.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/social_democratic_and_labour_party/alasdair_mcdonnel.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Justice</h4>
						<img class="img_tiny" src="leaders/social_democratic_and_labour_party/alban_maginness.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Human Rights</h4>
						<img class="img_tiny" src="leaders/social_democratic_and_labour_party/alex_attwood.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Agriculture</h4>
						<img class="img_small" src="leaders/social_democratic_and_labour_party/joe_byrne.jpg">
					</div>

					<div class="bottom_small">
						<h4>Environment</h4>
						<img class="img_small" src="leaders/social_democratic_and_labour_party/colum_eastwood.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Housing</h4>
				<img src="leaders/social_democratic_and_labour_party/dolores_kelly.jpg">
				<h4>Finance</h4>
				<img src="leaders/social_democratic_and_labour_party/dominic_bradley.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
                <br>
                <br>

			<h3>Manifesto</h3>

                <p><strong>United Ireland:</strong></p>

                <ul>
                	<p>The SDLP believes in a United Ireland. We are the only party with the vision, the standing and the strategy to deliver unity. We believe that all the rights, protections, and inclusion that nationalists have sought within Northern Ireland while it is in the United Kingdom must equally be guaranteed to unionists within a United Ireland.</p>
                </ul>

                <p><strong>Acht na Gaeilge:</strong></p>

                <ul>

                	 <p>Tá an SDLP gníomhach ar son na Gaeilge agus ar son Acht speisialta a bhunú leis an teanga a chaomhnú agus a chothú. Tá sé thar a bheith riachtanach go mbeidh an tAcht bunaithe ar chearta Gaeilgeoirí a dteanga a úsáid sa saol poiblí gan bhac gan deacracht.</p>
                	 
                </ul>
                	<button id="expander">Show More</button>

					<div id="expanded" style="display: none;"><br>

				 <p><strong>Agriculture/Rural Communities:</strong></p>

				<ul>
                	 <p>The SDLP has been instrumental in securing "rural-proofing" of all government policies to ensure that rural communities are not disadvantaged. We are working in partnership with rural communities to address the serious difficulties presenting the agricultural industry at the moment. We want to see the agricultural industry re-structured, including the introduction of pensions for farmers. We are working to develop all-island approaches on key policies such as animal health</p>
                </ul>

                

                <p><strong>Education:</strong></p>

                <ul>
                	<p>It is our view that investing in educational excellence is key to achieving both social justice and long-term economic growth for our shared society. It is essential that the debate around the future of education is extended beyond the current Sinn Fein/DUP stalemate that is so damaging our children's future.</p>
                </ul>

                <p><strong>Elections 2014:</strong></p>

                <ul>
                	<p>On May 22nd polls will open in the European and Local government elections. For strength in Europe and change for the better at home- Vote SDLP. The forthcoming European and Local Government elections will be fought on the issues that affect hard pressed households, our farmers and fishermen, our young people and our small businesses.</p>
                </ul>

                <p><strong>Eleven Plus:</strong></p>

                <ul>
                	<p>The SDLP supports the decision to abolish the 11+ but Minister O'Dowd must introduce compromise proposals on a way forward. As it stands, the current situation brought about by the Minister will potentially create even greater inequality in educational attainment, with transferring children left to move schools in an unregulated system.</p>
                </ul>

                <p><strong>Employment and Learning:</strong></p>

                <ul>
                	<p>With over a fifth of Northern Ireland's young people out of work, much more must be done to create employment and educational opportunities. The SDLP are proud to be working with our sister parties across Europe to ensure the implementation of a strategy to halve youth unemployment by 2020 through a European Youth Guarantee and a European Youth Employment Programme.</p>
                </ul>

                 <p><strong>Environment and Climate Change:</strong></p>

                <ul>
                	<p>The SDLP continues to campaign for the highest environmental standards to manage the many pressing demands on our environment today: climate change, land use change, habitat destruction, pollution and waste disposal.

					Our view is that the current economic downturn must be used as a springboard to accelerate action to manage climate change. With thousands of jobs already lost across the North due to the recession, we will continue to work at all levels to persuade others that now is the time to create new jobs by moving from our present dangerous and expensive over-reliance on imported fossil fuels..</p>
                </ul>

                 <p><strong>Equality and Human Rights:</strong></p>

                <ul>
                	<p>The SDLP is committed to promoting equality, social justice and reconciliation, and to protecting human rights. These principles are not just slogans; they are a part of our founding philosophy.

					The SDLP is proud to stand up for the rights of all in our society, regardless of sex, race, ethnic or social origin, language, religion or belief, disability, age or sexual orientation.</p>
                </ul>

                <p><strong>Fighting Poverty:</strong></p>

                <ul>
                	<p>The SDLP has successfully championed the fight against poverty in our society for decades. We're committed to improving social inclusion for all, particularly those most at risk: children, older people, people with disabilities and those living in rural and isolated homes.</p>
                </ul>

                 <p><strong>Finance and Personnel:</strong></p>

                <ul>
                	<p>    We believe that direct and graded taxation must remain the primary method of funding such services but we want to explore the options for generating additional financial support on the condition that public benefit can be guaranteed in terms of transparency, accountability, and value for money.</p>
   					<p> We will work for increased and fairer funding for the North through a review of the Barnett formula and seek tax-varying powers for the Assembly.</p>
    				<p>We are campaigning to ensure that the criteria for awarding government contracts give value for money but also promote government policy such as targeting social need or protecting the environment.</p>
                </ul>

                 <p><strong>Health:</strong></p>

                <ul>
                	<p>The SDLP is committed to a well resourced National Health Service, with excellent and efficient healthcare, delivered free at the point of need.</p>
                </ul>

                 <p><strong>Housing:</strong></p>

                <ul>
                	<p>It was the SDLP in the 1970s that insisted that housing should be taken away from local authorities who had proved unfit to discharge their responsibilities. Local Government was reformed and responsibility for housing was vested in the Northern Ireland Housing Executive. Those reforms put an end to discrimination in housing. The SDLP has been at the forefront of many other housing reforms since then.</p>
                </ul>

                 <p><strong>Fighting Poverty:</strong></p>

                <ul>
                	<p>The SDLP has successfully championed the fight against poverty in our society for decades. We're committed to improving social inclusion for all, particularly those most at risk: children, older people, people with disabilities and those living in rural and isolated homes.</p>
                </ul>

                 <p><strong>International Affairs:</strong></p>

                <ul>
                	<p>The SDLP wants to see the EU continue as a frontrunner in advancing peace and sustainable social and economic development worldwide. We do not believe simply in a Europe of economies, but in a Europe of values and a Europe of influence - a real challenge to poverty, disease and war. </p>
                </ul>

                 <p><strong>Justice:</strong></p>

                <ul>
                	<p>Communities in the North want the rule of law and safer neighbourhoods. That's why the SDLP has been working for accountability and change on the Policing Board and Policing and Community Safety Partnerships.</p>
                </ul>

                 <p><strong>Older People:</strong></p>

                <ul>
                	<p>The SDLP believes that the good health, independence and well-being of senior citizens must be a top priority, and we're concerned that today's pensioners are being forced to live on insufficient pensions and often in fuel poverty.</p>
                </ul>

                <p><strong>Regional Development:</strong></p>

                <ul>
                	<p>The SDLP is committed to delivering balanced and sustainable regional development across the North.</p>
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