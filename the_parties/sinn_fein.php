 <!DOCTYPE html>
<head>
	<meta charset="UTF-8"/>

	<title>Simple Politics - Sinn Féin</title>
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
            <a href="sinn_fein.php"><li id="active" class="sidebar_links"><i>Sinn Féin</i></li></a>    
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
				<img class="party_logo" src="logos/sinn_fein.jpg">
				<h1 style="color: blue; margin-top: 13px;">Sinn Féin</h1>
				<p>Sinn Féin is an Irish republican political party active in both the Republic of Ireland and Northern Ireland. The name is Irish for "ourselves" or "we ourselves", although it is frequently mistranslated as "ourselves alone". Originating in the Sinn Féin organisation founded in 1905 by Arthur Griffith, it took its current form in 1970 after a split within the party (the other party is the Workers' Party of Ireland), and has been associated with the Provisional Irish Republican Army. Gerry Adams has been party president since 1983.</p>
			</div>

			<div class="leaders_container">

				<div class="pic_main">

					<div class="pic_big">
						<h3>Leader</h3>
						<img class="img_main"  src="leaders/sinn_fein/gerry_adams.jpg">
					</div>

					<div id="left_tiny" class="pic_tiny">
						<h4>Education</h4>
						<img class="img_tiny" src="leaders/sinn_fein/john_odowd.jpg">
					</div>

					<div id="right_tiny" class="pic_tiny">
						<h4>Culture</h4>
						<img class="img_tiny" src="leaders/sinn_fein/caral_ni_chuilin.jpg">
					</div>

				</div> <!-- End of pic_main -->

				<div class="pic_small">

					<div class="top_small">
						<h4>Deputy Leader</h4>
						<img class="img_small" src="leaders/sinn_fein/marylou_mcdonald.jpg">
					</div>

					<div class="bottom_small">
						<h4>Agriculture</h4>
						<img class="img_small" src="leaders/sinn_fein/michelle_oneill.jpg">
					</div>
				</div>
				
			<div class="hidden_imgs">
				<h4>Environment</h4>
				<img src="leaders/sinn_fein/barry_mcelduff.jpg">
				<h4>Chief Whip</h4>
				<img src="leaders/sinn_fein/catriona_ruane.jpg">
			</div>	

			</div> <!-- End of leaders_container -->

			<div class="manifesto">
                <br>
                <br>

			<h3>Manifesto</h3>

                <p><strong>Advancing the Peace Process:</strong></p>

                <ul>
                	<a href="http://www.sinnfein.ie/files/2009/UnionistCharter.pdf" target="blank"><li>Unionist Charter:</a><p>Sinn Féin is committed to the achievement of a democracy based on a constitutional framework that will guarantee the protection of all the people on this island, their traditions and their communities: a democracy that affords maximum representation and participation.</p></li>

                	<a href="http://www.sinnfein.ie/files/2009/Collusion_Dossier.pdf" target="blank"><li>Collusion Dossier:</a> <p>For 30 years, the British government, through its agencies - MI5, British Military Intelligence and RUC/PSNI Special Branch - has been involved in the murder of citizens in Ireland. Together, they directed the activities of various unionist paramilitary death squads.</p></li>
                </ul>
                	<button id="expander">Show More</button>

					<div id="expanded" style="display: none;"><br>
				<ul>
                	<a href="http://www.sinnfein.ie/files/2009/goodfriday.pdf" target="blank"><li>The Good Friday Agreement:</a> <p>On May 22 1998, more than two million people across Ireland voted for the Good Friday Agreement, an international Agreement which was the collective product of inclusive negotiations and a compromise between political opponents.</p></li>
                </ul>

                <p><strong>Getting Ireland back To Work:</strong></p>

                <ul>

                	<a href="http://www.sinnfein.ie/files/2013/Sinn_Fe%CC%81in_Jobs_Plan_2012.pdf" target="blank"><li>Sinn Féin's Jobs Plan 2012 - Investing in Ireland’s Future:</a> <p>Sinn Féin has produced this document, Investing in Ireland’s future: Create jobs – Create growth, to set out exactly how we would use a major stimulus package to boost employment, increase GDP and further reduce the government deficit.</p></li>
                	 
                </ul>

                <p><strong>Economic Plan For Recovery - There Is A Better Way</strong></p>

                <ul>
                	<a href="http://www.sinnfein.ie/files/2013/Pre-Budget2014Submission.pdf" target="blank"><li>Sinn Féín's Alternative Budget 2014 - 'A Fair Budget'</li></a>
                </ul>

                <p><strong>Real Investment In Frontline Services:</strong></p>

                <ul>
                	<a href="http://www.sinnfein.ie/files/2013/Food_Safety_Authority_of_Ireland_Amendment_Bill_2013.pdf" target="blank"><li>Food Safety Authority of Ireland Amendment Bill 2013</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Health-pricing_and_supply_of_medical_goods_third_list_of_amendments_2013.pdf" target="blank"><li>Health Pricing and Supply of Medical Goods - Third list of amendments - 2013</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Health_alteration_of_Criteria_for_Eligibility_Bill_2013.pdf" target="blank"><li>Health Alteration of Criteria for Eligibility Bill - 2013</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Plan_for_Education_2012_Minister_John_ODowd.pdf" target="blank"><li>Plan for Education 2012 Minister John O'Dowd</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Home-Care-2012.docx" target="blank"><li>Home Care - 2012</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Deis_Schools_legislation.docx" target="blank"><li>Deis Schools legislation</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Education_Welfare_Amendment_Bill_2012.pdf" target="blank"><li>Education Welfare Amendment Bill - 2012</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Healthcare_in_Ireland_2011.pdf" target="blank"><li>Healthcare in Ireland - There is a Better Way - 2011</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Health_Assembly_2011.pdf" target="blank"><li>Health Proposals Assembly - 2011</li></a><br>
                	<a href="http://www.sinnfein.ie/files/2013/Education_and_Childcare_Platform_2007.pdf" target="blank"><li>Education and Childcare - Reaching our full potential - 2007</li></a><br>
                </ul>

                <p><strong>Rebuilding Rural Ireland</strong></p>

                <ul>
                	<a href="http://www.sinnfein.ie/files/2013/RuralIrelandDocument_Complete.pdf" target="blank"><li>Standing up for rural Ireland:</a> <p>This discussion document is the culmination of a year-long series of grassroots community engagements and consultation across rural Ireland led by the Sinn Féin leadership as part of it's 'Defending Rural Ireland' campaign.</p></li>

                	<a href="http://www.sinnfein.ie/files/2009/MartinFerrisReport.pdf" target="blank"><li>Sinn Féin Oireachtas Report on Future of Farming and Fishing in the West:</a> <p>I think that is particularly important in the context of the current economic situation and the opportunities as well as the problems facing farming and fishing. Indeed, one of the key themes running through the submissions that form the basis for the report and its recommendations is that there is major scope to place more emphasis on the indigenous rural economy.</p></li>

                	<a href="http://www.sinnfein.ie/files/2009/PearseDohertyReportWeb.pdf" target="blank"><li>“Awakening the West - Overcoming Social and Economic Inequality” 
                	</li></a>
                </ul>

                <p><strong>EU/International</strong></p>

                <ul>
                	<p>Sinn Féin is committed to an independent and progressive Irish international relations policy, with Irish neutrality at its core. In the European Union, we wish to see a true partnership of equal sovereign states, co-operating in social and economic development. </p>

                	<a href="http://www.sinnfein.ie/files/2013/IrishAidDoc2012.pdf" target="blank"><li>Irish Aid - 2012 
                	</li></a><br>

                	<a href="http://www.sinnfein.ie/files/2013/SFAusterityTreatyDoc.pdf" target="blank"><li>Austerity isn’t working - Vote No - 2012:</a> <p>he so-called Treaty on Stability, Coordination and Governance in the Economic and Monetary Union signed by EU leaders on 2nd March 2012 significantly reduces the ability of any future elected Irish Government to implement any policies of its own.</p></li>

                	<a href="http://www.sinnfein.ie/files/2013/NeutralityDocument_2009.pdf" target="blank"><li>Postitive Neutrality in Action:</a> <p>Support for Irish neutrality has been a core republican value since the time of the United Irishmen. But it has never been more relevant than in the 21st century.</p></li>

                	<a href="http://www.sinnfein.ie/files/2013/Gerry_Adams_Gaza_Report_2009.pdf" target="blank"><li>Gerry Adams Gaza Report 2009
                	</li></a><br>

                	<a href="http://www.sinnfein.ie/files/2009/EU09_ManifestoWeb1.pdf" target="blank"><li>EU Election Manifesto 2009 
                	</li></a>

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