<?php 
/* Declaration of array and default responses */
$response 		=	0;
$userfound		=	0;
$message		=	'';
$userId			=	0;
$flag = 0;
/* End of Declaration of array and default responses */	


/* Declaration of post parameters from application */	
$userId 	     =	isset($_REQUEST['userId']) ? $_REQUEST['userId'] : null ;
$quiz_time  	 =	isset($_REQUEST['quiz_time']) ? $_REQUEST['quiz_time'] : null ;
$score 	     	 =	isset($_REQUEST['score']) ? $_REQUEST['score'] : null;	
$performance 	 =	isset($_REQUEST['performance']) ? $_REQUEST['performance'] : null;
	
/* End of Declaration of post parameters from application */		


/*  validation for Null values */		
if(($userId&&$quiz_time&&$score&&$performance) && ($userId != 'Null' && $quiz_time != 'Null' && $score != 'Null' && $performance != 'Null'))			 
{


		$qry ="INSERT INTO score (user_id,quiz_time,score,performance) 
				VALUES('$userId','$quiz_time','$score','$performance')";

		$database->query($qry);
		
		if($database->affected_rows())
		{ 	 
			//$uid = $database->insert_id($qrySignUp);
			$responseArray['message']	= "Score saved successfully";
			$responseArray['response'] 	=	1;	
			//$responseArray['userId']	= $uid;
		}
		else
		{

			$responseArray['message']	= "Saving not saved";
			$responseArray['response'] 	=	0;	
			//$responseArray['userId']	= "";
		}
}
else
{

	$responseArray['message']	= "Please specify the correct parameters";
	$responseArray['response'] 	=	0;	
	//$responseArray['userId']	= "";
}
/* End Condition and response for app is missed any parameters */

?>