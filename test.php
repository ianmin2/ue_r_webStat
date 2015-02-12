<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

/* header("Content-Type: application/json"); */

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

    /* INITIAL PRE-DEFINED VARIABLES */
    private $analysis_fields, $questions, $four_scale, $five_scale;


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
        /* unset($connection); */

        /* RUN THE VERY BASIC FUNCTIONS */
        $this->number_by_gender();
        $this->number_by_position();
        $this->number_by_users();

        /* GET THE AVAILABLE SURVEY RESPONSE DATA */
        $this->data_by_gender();
        $this->data_by_position();


        /* SET UP GLOBAL VARIABLES */
        $this->analysis_fields = array(
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
            "prompt",
            "multidimensional",
            "effective",
            "languages",
            "synchronous",
            "usability",
            "functionality",
            "reliability",
            "eff",
            "security",
            "availability"

        );

        $this->questions = array(

            "gender" =>  "1. What is your Gender? ",
            "position" =>  "2. What is your status at UEAB? ",
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
            "prompt" => "The administrators responsiveness to users queries is prompt.",
            "muldimensional" => "The website has multidimensional online contact mechanism.",
            "effective" => "Guidelines to users on several online tools are very effective.",
            "languages" => "The website information is available in different languages.",
            "synchronous" => "Online synchronous communication facilities is available on the website.",                

            /* 9. What weight would you assign to each of these attributes given the range of 1-5 */
            "usability" => "Usability",
            "functionality" => "Functionality",
            "reliability" => "Reliability",
            "eff" => "Efficiency",
            "security" => "Security",
            "availability" => "Availability"

        );

        $this->four_scale = array( "", "Strongly Disagree", "Disagree",  "Agree", "Strongly Agree");
        $this->five_scale = array( "", "Least Important", "Somewhat Important", "Negligible", "Important", "Very Important" );

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

    public function last_three_data(){

        $fields = array( "q9", "q10", "q11" );

        $responses = array();


        for( $i = 0; $i < count( $fields ) ; $i++ ){

            $temps = array();

            foreach ( $this->male_data as $key => $val ){

                $temps[] = $val[ $fields[$i] ];

            }

            foreach ( $this->female_data as $key => $val ){

                $temps[] = $val[$fields[$i]];
                //print_r($val[$fields[$i]]);

            }

            $responses[ $fields[ $i ] ] = $temps;

        }

        return $responses;

    }

    /*  THE GENERAL DATA DIGESTER / TRANSLATOR */
    public function digest( $gender_based_data ){

        /*  BASIC REQUIREMENTS 
	            $this->male_data;
	            $this->female_data; 
            */    

        /* ABSTRACT GENDER BASED DATA MANIPULATION */

        /*THE MAIN DATA ADDITION VARIABLE*/
        $survey_data = array();

        //Iterate through the project schema
        foreach( $this->project_schema as $schema_key => $schema_data ){

            /*Convert the data from an stdObject to a standard array*/
            $schema_data = $this->object_convert($schema_data);

            /*Iterate through the schema data */
            for( $z = 0; $z < count( $schema_data ); $z++ ){

                $resp_array = array();

                /* Iterate through each item in the schema data array */
                foreach( $schema_data as $key => $value ){

                    /* String to store item data from the user responses concerning a particular reponse */
                    $key_data = "";

                    /* Loop through all the gender specific responses so as to capture the required data*/
                    for( $y = 0; $y < count ( $gender_based_data ); $y++ ){

                        /* Add each instance of an item specific response to a string */
                        $key_data .= $gender_based_data[$y][$key].",";

                    }

                    /* $resp_array[$key] = rtrim($key_data, ","); */
                    $survey_data[$key] = explode( ",", rtrim($key_data ) );

                }


            }	


        }	        	

        return  $survey_data;

        /* Generate a grapical format */
        /* return $this->generate_display( $survey_data ); */

    }

    /* GENERATE A HTML LAYOUT FROM THE DIGESTATE */
    function generate_display( $data_digestate ){



        $html_layout = "";

        /* Iterate through the items in the analysis fields array, */
        for( $z = 0; $z < count( $this->analysis_fields ); $z++  ){
            /* current data access key */
            $current_position = $this->analysis_fields[$z];

            /* number of instances per result at the current key */
            $x_times = array_count_values( $data_digestate[$current_position] );

            /* Generate the relevant charts */


            /* Handle Gender Display Layout */
            if( $current_position == "gender" ):

            /* List out the current working gender  */
            /* $html_layout .= $data_digestate["gender"][0]; */

            /* Handle position display Layout  */
            elseif( $current_position == "position" ):

            /* possible positions : 
        			 * 	-> student
        			 *  -> faculty
        			 *  -> staff
        			*/ 

            /* Instances of all positions  */
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
								var chart = new CanvasJS.Chart("joint_'.$current_position.'",
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
							<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->							
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
								var chart = new CanvasJS.Chart("joint_'.$current_position.'",
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
							<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
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
								var chart = new CanvasJS.Chart("joint_'.$current_position.'",
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
											{  y: '.$one.', legendText:"'.$this->five_scale["1"].' ['.$one.']", indexLabel: "'.$this->five_scale[1].'" },
											{  y: '.$two.', legendText:"'.$this->five_scale["2"].' ['.$two.']", indexLabel: "'.$this->five_scale[2].'" },
											{  y: '.$three.', legendText:"'.$this->five_scale["3"].' ['.$three.']", indexLabel: "'.$this->five_scale[3].'" },
											{  y: '.$four.', legendText:"'.$this->five_scale["4"].' ['.$four.']", indexLabel: "'.$this->five_scale[4].'" },
											{  y: '.$five.', legendText:"'.$this->five_scale["5"].' ['.$five.']", indexLabel: "'.$this->five_scale[5].'" },
											{ y: 0, legendText: "Total: '.$total.'", indexLabel: "" }
										]
									}
									]
								});
								chart.render();
							})();
        				});
							</script>
							<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
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
								var chart = new CanvasJS.Chart("joint_'.$current_position.'",
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
											{  y: '.$ones.', legendText:"'.$this->four_scale["1"].' ['.$ones.']", indexLabel: "'.$this->four_scale[1].'" },
											{  y: '.$twos.', legendText:"'.$this->four_scale["2"].' ['.$twos.']", indexLabel: "'.$this->four_scale[2].'" },
											{  y: '.$threes.', legendText:"'.$this->four_scale["3"].'  ['.$threes.']", indexLabel: "'.$this->four_scale[3].'" },
											{  y: '.$fours.', legendText:"'. $this->four_scale["4"].' ['.$fours.'] ", indexLabel: "'.$this->four_scale[4].'" },
											{ y: 0, legendText: "Total: '.$total.'", indexLabel: "" }
										]
									}
									]
								});
								chart.render();
							})();
        				});
							</script>
							<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
        			';



            endif;



        }

        return $html_layout;

    }



    /*******************/      
    /* GENERATE BAR GRAPHS LAYOUT FROM THE DIGESTATE */
    function generate_bar( $data_digestate ){



        $html_layout = "";

        //Iterate through the items in the analysis fields array,
        for( $z = 0; $z < count( $this->analysis_fields ); $z++  ){
            //current data access key
            $current_position = $this->analysis_fields[$z];

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

                        Morris.Bar({
                            element: "joint_'.$current_position.'" ,
                            data: [
                            { y: "student", a: '.$student.'  },
                            { y: "faculty", a: '.$faculty.' },
                            { y: "staff", a: '.$staff.'  }
                            ],
                            xkey: "y",
                                   ykeys: [ "a"],
                                   labels: ["people"]
                        });

                    })();

              });
              </script>
        									<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
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

                                    Morris.Bar({
                                        element: "joint_'.$current_position.'" ,
                                        data: [
                                        { y: "once", a: '.$once.' },
                                        { y: "twice a week", a: '.$twice.'  },
                                        { y: "daily",  c: '.$daily.'  }
                                        ],
                                        xkey: "y",
                                               ykeys: [ "a" ],
                                               labels: ["visitors" ]
                                    });

                                })();

                          });
                          </script>
							<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
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

                            Morris.Bar({
                                element: "joint_'.$current_position.'" ,
                                data: [
                                { y: "'.$this->five_scale[1].'", a: '.$one.' }, 
                                { y: "'.$this->five_scale[2].'", a: '.$two.' }, 
                                { y: "'.$this->five_scale[3].'", a: '.$three.' }, 
                                { y: "'.$this->five_scale[4].'", a: '.$four.' }, 
                                { y: "'.$this->five_scale[5].'", a: '.$five.' }
                                ],
                                xkey: "y",
                                       ykeys: [ "a" ],
                                       labels: [ "responses" ]
                            });

                        })();

                  });
                  </script>
        			<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
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

                        Morris.Bar({
                            element: "joint_'.$current_position.'" ,
                            data: [
                                { y: "'.$this->four_scale[1].'", a: '.$ones.' },
                                { y: "'.$this->four_scale[2].'", a: '.$twos.' },
                                { y: "'.$this->four_scale[3].'", a: '.$threes.' },
                                { y: "'.$this->four_scale[4].'", a: '.$fours.' }
                            ],
                                xkey: "y",
                            ykeys: [ "a" ],
                                labels: [ "responses" ]
                        });

            })();

        });
        </script>
							<!-- <div id="joint_'.$current_position.'" style="height: 300px; width: 100%;"></div> -->
        									';



            endif;



        }

        return $html_layout;

    }

   function all_data(){
        
        $all_dat = array();
        
        foreach( $this->male_data as $key => $val ){
            $all_dat[] = $val;
            
        }
        
        foreach( $this->female_data as $key => $val ){
            $all_dat[] = $val;
            ;
        }
        
      return $all_dat;
        
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

	
	case "get_bar":
		echo $rec->generate_bar( $rec->digest( $rec->all_data() ) );
	break;

	case "get_pie":
		//echo $rec->digest( $rec->male_data );
		echo $rec->generate_display( $rec->digest( $rec->all_data() ) );
	break;
	
	case "number_of_peeps":
		echo json_encode(  array( "male" => $rec->male_participants, "female" => $rec->female_participants, "total" => ($rec->male_participants + $rec->female_participants) ) );
	break;
	
	case "male":
		echo json_encode( $rec->male_data );
	break;

	case "female":
		echo json_encode( $rec->female_data );
	break;
	
	case "all":
		echo json_encode( $rec->all_data() );
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