<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

//header("Content-Type: application/json");

    class assesment{
        
        /* The Database connection object */
        public $connection;
        
        /* The abstract project schema */
        public $project_schema;
        
        /* NUMBER OF PARTICIPANTS BY GENDER */
        public $male_participants;
        public $female_participants;
        
        /* NUMBER OF PARTICIPANTS BY POSITION AT THE UNIVERSITY */
        public $student_participants;
        public $faculty_participants;
        public $staff_participants;
        
        /* NUMBER OF PARTICIPANTS BY USE FREQUENCY */
        public $daily_users;
        public $twice_users;
        public $once_users;
        
        /* DATA STORE GLOBAL VARIABLES */
        public $male_data;
        public $female_data;
        
        public $student_data;
        public $faculty_data;
        public $staff_data;
        
        /* THE CLASS CONSTRUCTOR */
        public function __construct(){
            
            /* RELOCATE TO THE FRAMEWORK DIRECTORY */
            chdir("1464");
            
            /* DEFINE ESSENTIAL VARIABLES AND INCLUDE THE MAIN FRAMEWORK FILE */
            $id = "assesment.php";
            $connect = true;
            include "r_main.php";
            
                    
            /* MAKE A GLOBALLY ACCESSIBLE COPY OF THE DATABASE CONNECTION OBJECT */
            $this->connection = $connection;
            
            /* GET THE BASIC PROJECT SCHEMA */
            $this->get_schema();
            
            /* DESTROY THE PRE-EXISTING CONNECTION OBJECT */
           // unset($connection);
            
            /* RUN THE VERY BASIC FUNCTIONS */
            $this->number_by_gender();
            $this->number_by_position();
            $this->number_by_users();
            
            /* GET THE AVAILABLE SURVEY RESPONSE DATA */
            $this->data_by_gender();
            $this->data_by_position();
            
        }
        
        /* GET THE GENERAL DESIRED SCHEMA FOR THE PROJECT DATA */
        public function get_schema( ){
            
        	//GET THE ACTUAL JSON OBJECT
            $this->project_schema =  json_decode( $this->connection->printQueryResults("SELECT struc FROM shema WHERE id=1", true)[0][0] ) ; 
            
        }
        
        
        /* GET THE NUMBER OF PARTICIPANTS PER GENDER */
        public function number_by_gender( ){
            
            $this->male_participants = $this->connection->num_rows("SELECT id FROM responses WHERE gender='male' ", true);
            $this->female_participants = $this->connection->num_rows("SELECT id FROM responses WHERE gender='female'", true);
            
        }
        
        /* GET THE NUMBER OF PARTICIPANTS PER GENERAL POSITION  HELD AT THE UNIVERSITY */
        public function number_by_position( ){
            
            $this->student_participants = $this->connection->num_rows("SELECT id FROM responses WHERE position = 'student' ", true);
            $this->faculty_participants = $this->connection->num_rows("SELECT id FROM responses WHERE position = 'faculty' ", true);
            $this->staff_participants = $this->connection->num_rows("SELECT id FROM responses WHERE position = 'staff' ", true);
            
        }
        
        /* GET THE NUMBER OF PARTICIPANTS BY THEIR WEBSITE VISIT FREQUENCY */
        public function number_by_users( ){
            
            $this->daily_users = $this->connection->num_rows("SELECT id FROM responses WHERE visits LIKE '%daily%' ", true);
            $this->twice_users = $this->connection->num_rows("SELECT id FROM responses WHERE visits LIKE '%twice%' ", true);
            $this->once_users = $this->connection->num_rows("SELECT id FROM responses WHERE visits LIKE '%once%' ", true);
                        
        }
        
        /* GET THE SURVEY DATA GROUPED BY GENDER */
        public function data_by_gender( ){
            
            $this->male_data = $this->connection->printQueryResults("SELECT * FROM responses WHERE gender = 'male'");
            $this->female_data = $this->connection->printQueryResults("SELECT * FROM responses WHERE gender = 'female'");
            
        }
        
        /* GET THE SURVEY DATA GROUPED BY GENERAL POSITION HELD AT THE UNIVERSITY */
        public function data_by_position( ){
            
            $this->student_data = $this->connection->printQueryResults("SELECT * FROM responses WHERE position = 'student'");
            $this->faculty_data = $this->connection->printQueryResults("SELECT * FROM responses WHERE position = 'faculty'");
            $this->staff_data = $this->connection->printQueryResults("SELECT * FROM responses WHERE position = 'staff'");
            
        }
        
        /*  THE GENERAL DATA DIGESTER / TRANSLATOR */
        public function digest( $gender_based_data ){

        	/*  BASIC REQUIREMENTS 
	            $this->male_data;
	            $this->female_data; 
            */    

        	/* ABSTRACT GENDER BASED DATA MANIPULATION */
        	
	        	//THE MAIN DATA ADDITION VARIABLE
	        	$survey_data = array();

	        	//Iterate through the project schema
	        	foreach( $this->project_schema as $schema_key => $schema_data ){
	        		
	        		//Convert the data from an stdObject to a standard array
	        		$schema_data = $this->object_convert($schema_data);

	        		//Iterate through the schema data 
	        		for( $z = 0; $z < count( $schema_data ); $z++ ){
	        			
	        			$resp_array = array();
	        			
	        			//Iterate through each item in the schema data array 
	        			foreach( $schema_data as $key => $value ){
	        				
	        				//String to store item data from the user responses concerning a particular reponse
	        				$key_data = "";
	        				
	        				//Loop through all the gender specific responses so as to capture the required data 
	        				for( $y = 0; $y < count ( $gender_based_data ); $y++ ){
	        					
	        					//Add each instance of an item specific response to a string
	        					$key_data .= $gender_based_data[$y][$key].",";
	        					
	        				}
	        				
	        				//$resp_array[$key] = rtrim($key_data, ",");
	        				$survey_data[$key] = explode( ",", rtrim($key_data ) );
	        				
	        			}
	        			        			
	        				        			
	        		}	
	        		
	        		
	        	}	        	
	        	
	        	//return  $survey_data;
	        	
	        	//Generate a grapical format 
	        	return $this->generate_display( $survey_data );
	        		        	
        }
        
        /* GENERATE A HTML LAYOUT FROM THE DIGESTATE */
        function generate_display( $data_digestate ){
        	
        	$analysis_fields = array(
        			   "gender",
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
        	
        			"gender" =>  "1. What is your Gender? ",
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
        	
        	$four_scale = array( "", "Strongly Disagree", "Disagree",  "Agree", "Strongly Agree");
        	$five_scale = array( "",  "Least Important", "Somewhat Important", "Negligible", "Important", "Very Important" );    
        	
        	        	
        	$html_layout = "";
        	
        	//Iterate through the items in the analysis fields array,
        	for( $z = 0; $z < count( $analysis_fields ); $z++  ){
        		//current data access key
        		$current_position = $analysis_fields[$z];
        		
        		//number of instances per result at the current key
        		$x_times = array_count_values( $data_digestate[$current_position] );
        		
        		//Generate the relevant charts
        	        		
        		
        		//Handle Gender Display Layout
        		if( $current_position == "gender" ):
        		
	        		//List out the current working gender
	        		//$html_layout .= $data_digestate["gender"][0];
        			
        		//Handle position display Layout
        		elseif( $current_position == "position" ):
        			
        			/* possible positions : 
        			 * 	-> student
        			 *  -> faculty
        			 *  -> staff
        			*/ 
        			        			        		
        			//Instances of all positions
        		    $student = ( @$x_times["student"] != null ) ? @$x_times["student"] : 0 ;
        			$faculty = ( @$x_times["faculty"] != null ) ? @$x_times["faculty"] : 0 ;
        			$staff   = ( @$x_times["staff"]   != null ) ? @$x_times["staff"]   : 0 ;
        			$total = $student + $faculty +$staff;
        			/*
        			 * 
        			 *  DRAW CHARTS
        			 *  
        			 */
        			
        			$html_layout .= '
        				<script type="text/javascript">
        			 		$(function(){
							( function () {
								var chart = new CanvasJS.Chart("'.$data_digestate["gender"][0].'_'.$current_position.'",
								{
									theme: "theme2",
									title:{
										text: " "
									},
									legend:{
										verticalAlign: "bottom",
										horizontalAlign: "center"
									},
									data: [
									{       
										type: "pie",
										showInLegend: true,
										toolTipContent: " #percent %",
										yValueFormatString: "#0.#,,. ",
										dataPoints: [
											{  y: '.$student.', legendText:"Student ['.$student.']", indexLabel: "Student" },
											{  y: '.$faculty.', legendText:"Faculty ['.$faculty.']", indexLabel: "Faculty" },
											{  y: '.$staff.', legendText:"Staff ['.$staff.']", indexLabel: "Staff" },											
											{ y: 0, legendText: "Total: '.$total.'", indexLabel: "" }
										]
									}
									]
								});
								chart.render();
							})();
        				});
							</script>
							<!-- <div id="'.$data_digestate["gender"][0].'_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->							
        			';
        			
        			
        			
        		
        			//Show the ratios of position for the given gender
        		
        		//Handle frequency of visits display
        		elseif( $current_position == "visits" ):
        		
        			//Show the website frequenting ratios for the given gender
	        		//Instances of all positions
        			$once  =  ( $x_times["once a trimester"] != null ) 	? $x_times["once a trimester"] : 0;
	        		$twice =  ( $x_times["twice a week"] != null ) 		? $x_times["twice a week"] : 0;
	        		$daily =  ( $x_times["daily"] != null ) 			? $x_times["daily"]  : 0;
        			$total =  $once + $twice + $daily;
	        		
	        		/*
	        		 *
	        		 *  DRAW CHARTS
	        		 *
	        		 */
        			
        			$html_layout .= '
        				<script type="text/javascript">
							$(function(){
	        		 			        		 		
	        		 		( function () {
								var chart = new CanvasJS.Chart("'.$data_digestate["gender"][0].'_'.$current_position.'",
								{
									theme: "theme2",
									title:{
										text: " "
									},
									legend:{
										verticalAlign: "bottom",
										horizontalAlign: "center"
									},
									data: [
									{
										type: "pie",
										showInLegend: true,
										toolTipContent: " #percent %",
										yValueFormatString: "#0.#,,. ",
										dataPoints: [
											{  y: '.$once.', legendText:"Once ['.$once.']", indexLabel: "Once a trimester" },
											{  y: '.$twice.', legendText:"Twice-weekly ['.$twice.']", indexLabel: "Twice a week" },
											{  y: '.$daily.', legendText:"daily ['.$daily.']", indexLabel: "Daily" },
											{ y: 0, legendText: "Total: '.$total.'", indexLabel: "" }
										]
									}
									]
								});
								chart.render();
							})();

						});
							
							</script>
							<!-- <div id="'.$data_digestate["gender"][0].'_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
        			';
        			
        		        			
        		//Handle the 1 in 5 display responses
        		elseif( $current_position == "usability" || $current_position ==  "functionality" || $current_position == "reliability" || $current_position == "eff" || $current_position == "security" || $current_position == "availability" ):
        		
        			//Instances of the: out of five's
        			$one 	= ( $x_times[1] != null ) ? $x_times[1] : 0 ;
        			$two 	= ( $x_times[2] != null ) ? $x_times[2] : 0 ;
        			$three 	= ( $x_times[3] != null ) ? $x_times[3] : 0 ;
        			$four 	= ( $x_times[4] != null ) ? $x_times[4] : 0 ;
        			$five 	= ( $x_times[5] != null ) ? $x_times[5] : 0 ;
        			$total  = $one + $two + $three + $four + $five; 
        			
        			$html_layout .= '
        				<script type="text/javascript">
        			 		$(function(){
							( function () {
								var chart = new CanvasJS.Chart("'.$data_digestate["gender"][0].'_'.$current_position.'",
								{
									theme: "theme2",
									title:{
										text: " "
									},
									legend:{
										verticalAlign: "bottom",
										horizontalAlign: "center"
									},
									data: [
									{
										type: "pie",
										showInLegend: true,
										toolTipContent: " #percent %",
										yValueFormatString: "#0.#,,. ",
										dataPoints: [
											{  y: '.$one.', legendText:"'.$five_scale["1"].' ['.$one.']", indexLabel: "'.$five_scale[1].'" },
											{  y: '.$two.', legendText:"'.$five_scale["2"].' ['.$two.']", indexLabel: "'.$five_scale[2].'" },
											{  y: '.$three.', legendText:"'.$five_scale["3"].' ['.$three.']", indexLabel: "'.$five_scale[3].'" },
											{  y: '.$four.', legendText:"'.$five_scale["4"].' ['.$four.']", indexLabel: "'.$five_scale[4].'" },
											{  y: '.$five.', legendText:"'.$five_scale["5"].' ['.$five.']", indexLabel: "'.$five_scale[5].'" },
											{ y: 0, legendText: "Total: '.$total.'", indexLabel: "" }
										]
									}
									]
								});
								chart.render();
							})();
        				});
							</script>
							<!-- <div id="'.$data_digestate["gender"][0].'_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
        			';
        		
        			
        		//Handle the 1 in 4 display responses
        		else:
        		
        			//Instances of the: out of four's
        			$ones 	= ( $x_times[1] != null ) ? $x_times[1] : 0 ;
        			$twos	= ( $x_times[2] != null ) ? $x_times[2] : 0 ;
        			$threes = ( $x_times[3] != null ) ? $x_times[3] : 0 ;
        			$fours 	= ( $x_times[4] != null ) ? $x_times[4] : 0 ;
        			
        			$html_layout .= '
        				<script type="text/javascript">
        			 		$(function(){
							( function () {
								var chart = new CanvasJS.Chart("'.$data_digestate["gender"][0].'_'.$current_position.'",
								{
									theme: "theme2",
									title:{
										text: " "
									},
									legend:{
										verticalAlign: "bottom",
										horizontalAlign: "center"
									},
									data: [
									{
										type: "pie",
										showInLegend: true,
										toolTipContent: " #percent %",
										yValueFormatString: "#0.#,,. ",
										dataPoints: [
											{  y: '.$ones.', legendText:"'.$four_scale["1"].' ['.$ones.']", indexLabel: "'.$four_scale[1].'" },
											{  y: '.$twos.', legendText:"'.$four_scale["2"].' ['.$twos.']", indexLabel: "'.$four_scale[2].'" },
											{  y: '.$threes.', legendText:"'.$four_scale["3"].'  ['.$threes.']", indexLabel: "'.$four_scale[3].'" },
											{  y: '.$fours.', legendText:"'. $four_scale["4"].' ['.$fours.'] ", indexLabel: "'.$four_scale[4].'" },
											{ y: 0, legendText: "Total: '.$total.'", indexLabel: "" }
										]
									}
									]
								});
								chart.render();
							})();
        				});
							</script>
							<!-- <div id="'.$data_digestate["gender"][0].'_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
        			';
        			
        		     		
        		
        		endif;
        		
        		
        		
        	}
        	
        	return $html_layout;
        	
        }
        
        
        /* HANDLING stdClass objects */
	    function object_convert($d) {
	    	
			 if (is_object($d)) {
			 	
				 // Gets the properties of the given object
				 // with get_object_vars function
				 $d = get_object_vars($d);
				 return $d;
				 
			 } else if (is_array($d)) {
			 	
				 /*
				 * Return array converted to object
				 * Using __FUNCTION__ (Magic constant)
				 * for recursive call
				 */
			 	return array_map(__FUNCTION__, $d);
				 
			 }
			 
		}
        
        
    }


    
$rec = new assesment();

$conveyed_data = @$_REQUEST['action'];

switch ( $conveyed_data ):

	case "get_female_data":
		echo $rec->digest( $rec->female_data );
	break;
	
	case "number_of_females":
		echo $rec->female_participants;
	
	case "get_male_data":
		echo $rec->digest( $rec->male_data );
	break;
	
	case "number_of_males":
		echo $rec->male_participants;
	break;
	
	default:
		echo "<h1><code> ERROR IN REQUEST COMMAND!</code></h1";

endswitch;


/*
echo "<br><pre>";
//echo count( $rec->digest($rec->male_data) );

if(  gettype($rec->male_data) ){ 
	print_r( $rec->digest($rec->male_data) ); 
}else{
	echo ($rec->digest($rec->male_data)) ;
}

//echo "<hr>".$rec->digest($rec->male_data)['title'];
//print_r( $rec->project_schema );
//print_r($rec->female_data);

 */

?>