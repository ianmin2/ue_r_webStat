<?php 

$expected =  array( "gender",
                   "position",
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
                   "availability",
                   "q9",
                   "q10",
                   "q11"
                  );



 
	$posted = $_REQUEST;
	$data = "";
	foreach($expected as $element){
		
		if(@$posted[$element] == ""){
			echo "<script>alert('Please fill in all the fields!'); history.back(); </script>";
			die;
		}

		//$data .= str_replace(',' , '',$posted[$element]).",";
		
	}

/*
	$data .= @str_replace(",", " ", @$posted['contributor']);
	
	$data = trim($data, ",");
	
	$da = explode(",", $data);
	
	$data = array();
	
	foreach($da as $dat){
		array_push($data, $dat);		
	}
	
	$handle = fopen("web_case_study_results.csv", "a");
	fputcsv($handle, $data);
	fclose($handle);
	
*/

chdir("1464");
$id = "test";
$connect = true;
include "r_main.php";

$add_response = "INSERT INTO responses ( gender , position , visits , easy , accurate , explore , suited , appealing , efficiency , labeled , navigate , linkages , graphics , _use , timely , satisfied , functionalities , dialogue , _accessible , links , forms , broken , updated , available , services , communication , _load , infrastructure , policies , protected , malicious , protects , secure , regularly , valid , understand , varied , quality , prompt, multidimensional, effective, languages, synchronous, usability , functionality , reliability , eff , security , availability, q9, q10, q11 ) VALUES ( ";

for($i = 0; $i <= ( count($expected) - 1 ); $i++ ){

    $add_response .=  " '".@$posted[$expected[$i]]."',";

} 

$add_response = rtrim($add_response, ",");
$add_response .= " )";

if( $connection->query("$add_response", true) ) {

    echo '<script>
		alert("Thank you for your time and input!");
		window.location = "index.php";
	      </script>';
    exit;
    
}



	
	

?>

