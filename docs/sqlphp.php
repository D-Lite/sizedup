<?php
	require_once('conn.php');
 
	$reply['status'] = "error";
	$reply['msg'] = "something went wrong";

	// //$_REQUEST['university']= 1;
	if (isset($_REQUEST['category'])) {
		$category = $_REQUEST['category'];

		$country = $sizeup->fetchAll('countries');

		if ($country) {
			$options = "";
			foreach ($country as $fkey => $fvalue) {
				$options .= "<option value='".$fvalue['sn']."'>".$fvalue['name']."</option>"; 
			}
			$reply = array(
				"status"=>"success",
				"msg"=>$options,
			);
		}
		else{
			$reply['msg'] = "An unexpected error OCCURED. Please reload the page";
		}
	}

	echo json_encode($reply);

?>