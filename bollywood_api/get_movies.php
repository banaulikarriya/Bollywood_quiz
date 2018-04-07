<?php

/* Declaration of array and default responses */
	$response = 0;
	$message = '';
	
	$tempArray  = array();
	$finalArray = array();

		/* Fetch details from DB */
		$qryGetLikers = "SELECT * FROM movie ORDER BY name";
		$exeGetLikers=$database->query($qryGetLikers);

		while($fetchInfo = $database->fetch($exeGetLikers)){

				$tempArray['id'] = $fetchInfo['id'];
				$tempArray['name'] = $fetchInfo['name'];
				$tempArray['year'] = $fetchInfo['year'];
				
				array_push($finalArray,$tempArray);
		}

/* End of Fetch details from DB */

/* Check DB details is returning some values */
  if($finalArray != Null)
 {

    $responseArray['message'] = "Success";
	$responseArray['response'] = 1;
	$responseArray['data'] = $finalArray;
 }
 /* End of Check DB details is returning some values */

 /* Check DB details is not returning any values */
 else if($finalArray == Null)
 {

				$responseArray['message'] = 'Failure';
				$responseArray['response'] = 0;
				$responseArray['data'] = "No records found movie";
 }
/* End of Check DB details is not returning any values */
 ?>