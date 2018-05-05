<?php

/* Declaration of array and default responses */
	$response = 0;
	$message = '';
	
	$tempArray  = array();
	$finalArray = array();

		/* Fetch details from DB */
		$qryGetLikers = "SELECT * FROM score
						 inner join users on score.user_id= users.id 
						  ORDER BY  score DESC limit 5";
		$exeGetLikers=$database->query($qryGetLikers);

		while($fetchInfo = $database->fetch($exeGetLikers)){

				$tempArray['user_id'] = $fetchInfo['user_id'];
				$tempArray['name'] = $fetchInfo['name'];
				$tempArray['score'] = $fetchInfo['score'];				
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