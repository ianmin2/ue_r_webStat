<?php 
	$expected =  array( "gender","position","visits","easy","accurate","explore","suited","appealing","efficiency","labeled","navigate","linkages","graphics","use","timely","satisfied","functionalities","dialogue","accessible","links","forms","broken","updated","available","services","communication","load","infrastructure","policies","protected","malicious","protects","secure","regularly","valid","understand","varied","quality","usability","functionality","reliability","eff","security","availability","q9","q10","q11"); 
		
	$posted = $_REQUEST;
	$data = "";
	foreach($expected as $element){
		
		if(@$posted[$element] == ""){
			echo "<script>alert('Please fill in all the fields!'); history.back(); </script>";
			die;
		}

		$data .= str_replace(',' , '',$posted[$element]).",";
		
	}
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
	
	

?>

