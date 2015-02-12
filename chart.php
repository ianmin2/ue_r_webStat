<?php 

$analysis_fields = array(
		//"gender",
		"position" ,
		"visits",
		"easy",
		"accurate",
		"explore",
		"suited",
		"appealing",
		"efficiency",
		"labeled",
		"navigate",
		"linkages",
		"graphics",
		"_use",
		"timely",
		"satisfied",
		"functionalities",
		"dialogue",
		"_accessible",
		"links",
		"forms",
		"broken",
		"updated",
		"available",
		"services",
		"communication",
		"_load",
		"infrastructure",
		"policies",
		"protected",
		"malicious",
		"protects",
		"secure",
		"regularly",
		"valid",
		"understand",
		"varied",
		"quality",
		"usability",
		"functionality",
		"reliability",
		"eff",
		"security",
		"availability"
            
);

$questions = array(

		//"gender" =>  "1. What is your Gender? ",
		"position" =>  "2. What is your position at UEAB? ",
		"visits" => "3. How often do you visit the UEAB website? ",
		/* 1. Usability of the website  */
		"easy" => "It is easy to find my way to information from the homepage",
		"accurate" => "I am able to accurately predict which section of the website contains the information that am looking for",
		"explore" => "The homepage content makes me want to explore the site further",
		"suited" => "The website is well suited to first time visitors",
		"appealing" => "The site has characteristics that make it appealing. ",
		/* 2. Functionality of the Website   */
		"efficiency" => "The website contains administration tools which enhance efficiency i.e. Help, FAQ",
		"labeled" => "All functionality is clearly labeled",
		"navigate" => "It is easy to navigate the websitei.e. options to return to home page, top of pages is provided.",
		"linkages" => "There are linkages to other sites that have discussions on similar topics",
		"graphics" => "The selected graphics serve a functional purpose. ",
		/*  3. Efficiency of the website */
		"_use" => "I find it easy to use the website.",
		"timely" => "The information posted on the website is always timely.",
		"satisfied" => "I am satisfied by the web content.",
		"functionalities" => "The web services and functionalities are perfect.",
		"dialogue" => "The website offers dialogue areas or feedback features for visitors",
		/* 4. Reliability of the website  */
		"_accessible" => "The website is accessible all the time.",
		"links" => "The links work well.",
		"forms" => "The forms on the website are working",
		"broken" => "The website contains some broken links",
		"updated" => "Information on the website is regularly updated",
		/* 5. Availability of the website  */
		"available" => "The website is available 24/7.",
		"services" => "I always get the information and services that I need from the website.",
		"communication" => "There is communication when the website is down.",
		"_load" => "The website takes a very short time to load.",
		"infrastructure" => "The network infrastructure in the institution is very good and so I can access the website from anywhere on campus.",
		/* 6. Security of the website  */
		"policies" => "I am aware of the security policies regarding information protection in the institution..",
		"protected" => "I believe that the website is well protected",
		"malicious" => "The website is protected from malicious attacks.",
		"protects" => "The website protects unauthorized modification to information.",
		"secure" => "The website is secure so as to avoid loss of information",
		/* 7. Service Quality(Quality of information)  */
		"regularly" => "The content on the website is regularly updated",
		"valid" => "The information posted on the website is valid and accurate",
		"understand" => "The information presented is easy to understand",
		"varied" => "The content on the website is varied and changing (dynamic)",
		"quality" => "The website shows that the institution considers service quality.",
		/* 8. What weight would you assign to each of these attributes given the range of 1-5 */
		"usability" => "Usability",
		"functionality" => "Functionality",
		"reliability" => "Reliability",
		"eff" => "Efficiency",
		"security" => "Security",
		"availability" => "Availability"

);

 
$male_div_list = "";
$female_div_list = "";

foreach( $analysis_fields as $div_id ){
	
	$male_div_list 		.= htmlentities( '<div class="bg-white"  style="min-height: 20px;"><div id="male_'.$div_id.'" style="height: 300px; width: 100%;"></div></div><br><div class="bg-warning" style="max-height: 30px; min-height: 30px; font-face: courier;">'.$questions[$div_id].' </div><br> ' )."<br><br>";
	$female_div_list 	.= htmlentities( '<div class="bg-white"  style="min-height: 20px;"><div id="female_'.$div_id.'" style="height: 300px; width: 100%;"></div></div><br><div class="bg-warning" style="max-height: 30px; min-height: 30px; font-face:courier;">'.$questions[$div_id].' </div><br> ' )."<br><br>";
	
}


//echo  $female_div_list;
?>

