<?php

if(isset($_POST['ajaxwrapper'])){
	//create an object to return
	$echo_data 					= new stdClass();
	//decode the sendData
	$data 						= json_decode($_POST['ajaxwrapper']);
	//give it back to the frontend
	$echo_data->first_value 	= $data->value1;
	$echo_data->second_value 	= $data->value2;
	$echo_data->third_value		= "third value from php";
	//return the data
	echo json_encode($echo_data);
}

?>