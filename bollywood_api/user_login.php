<?php 
/* Declaration of array and default responses */
	$response = 0;
	$message = '';
	$tempArray = array();
	$tempArray2 = array();
	$finalArray = array();
	$scoreArray = array();
   /* End of Declaration of array and default responses */
   
   /* Declaration of post parameters from application */	

	 $email 		=	isset($_REQUEST['email'])	?$_REQUEST['email'] : null ;
	 $password 		=	isset($_REQUEST['password'])?$_REQUEST['password'] : null;
	 
   /* End of Declaration of post parameters from application */	
	 
	 /* Decrypt the password */
	 $passwordHash=md5($password);
	 /* End of decryption */
 
 /*  validation for parameters present */	
	if($email&&$password)
 /*  validation for parameters present */			
	{
			
		/* Check this username is registered or not */
        $qry = "SELECT * FROM users WHERE email_id='$email' AND password='$passwordHash'";
        
		$exe = $database->query($qry);		
	    if($database->num_rows($exe)>0){

	    	while($fetchInfo = $database->fetch($exe)){
	    		$tempArray['name'] = $fetchInfo['name'];
				$tempArray['email_id'] = $fetchInfo['email_id'];
				$tempArray['contact'] = $fetchInfo['contact'];
				$tempArray['id'] = $fetchInfo['id'];
				if($tempArray['id'] != null){
			        $qry2 = "SELECT * FROM score WHERE user_id='".$fetchInfo['id']."'";   
			        $exe2 = $database->query($qry2);		
				    while($fetchInfo = $database->fetch($exe2)){

				    	$tempArray2['quiz_time'] = $fetchInfo['quiz_time'];
						$tempArray2['score'] = $fetchInfo['score'];
						$tempArray2['performance'] = $fetchInfo['performance'];
						array_push($scoreArray,$tempArray2);
					}
				}
				$tempArray['score_data'] = $scoreArray;
				array_push($finalArray,$tempArray);
	    	}

				/* Return the successfull response */
                $responseArray['message'] = "Logged in successfully";
                $responseArray['response'] = '1'	;
                $responseArray['data'] = $finalArray;
				/* End of Return the successfull response */
	      }
		/* Condition for email id and password not match */
	    else{

	    	$responseArray['data'] = "Incorrect username and password";
            $responseArray['response'] = '0'	;
            $responseArray['message'] = 'Failure';
	    }		
		/* End of Condition for email id and password not match */
				
	}
	else
	{
		$responseArray['data'] = "Please specify the correct parameters";
        $responseArray['response'] = '0'	;
        $responseArray['message'] = 'Failure';
	}
/* End Condition and response for app is missed any parameters */
	


  ?>