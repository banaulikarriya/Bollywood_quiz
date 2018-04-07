<?php

/* Declaration of array and default responses */
	$response = 0;
	$message = '';
	$tempArray = array();
	$finalArray = array();
/* End of Declaration of array and default responses */

/*  End of validation for Null values */

/* Declaration of post parameters from application */ 
	$stream_id 	  	   =	isset($_REQUEST['stream_id']) ? $_REQUEST['stream_id'] : null;
	$subject_id 	   =	isset($_REQUEST['subject_id']) ? $_REQUEST['subject_id'] : null;
	
/* End of Declaration of post parameters from application */	

/*  validation for Null values */	
	if($subject_id != 'Null' && $stream_id != 'Null' )
/*  End of validation for Null values */
		{


		/* Fetch details from DB */
		 		$qryGetLikers = "SELECT * FROM paper where stream_id='$stream_id' and subject_id='$subject_id' and deleted = 0";
		 		$exeGetLikers=$database->query($qryGetLikers);

		 		while($fetchInfo = $database->fetch($exeGetLikers)){

		 						$tempArray['paper_id'] = (int)$fetchInfo['paper_id'];
								$tempArray['stream_id'] = $fetchInfo['stream_id'];
								$tempArray['subject_id'] = $fetchInfo['subject_id'];
								$tempArray['description'] = $fetchInfo['description'];
								$tempArray['file_url'] = $fetchInfo['file_url'];
								array_push($finalArray,$tempArray);
						}

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
				$responseArray['data'] = "No records found";
 }
/* End of Check DB details is not returning any values */
 ?>