<?php

/* Declaration of array and default responses */
	$response = 0;
	$message = '';
	$tempArray = array();
	$finalArray = array();
/* End of Declaration of array and default responses */

/* Fetch details from DB */
	$qryGetLikers = "SELECT * FROM songs inner join options on options.song_id = songs.id ORDER BY RAND()";
	$exeGetLikers=$database->query($qryGetLikers);

	while($fetchInfo = $database->fetch($exeGetLikers)){

				$url = "https://bollywood-game.000webhostapp.com/bollywood/songs/"; 
				$tempArray['id'] = (int)$fetchInfo['id'];
				$tempArray['song_name'] = $fetchInfo['song_name'];
				$tempArray['song_url'] = $url.$fetchInfo['song_url'];
				$tempArray['ans'] = $fetchInfo['movie_id'];
				$tempArray['option1'] = $fetchInfo['option1'];
				$tempArray['option2'] = $fetchInfo['option2'];
				$tempArray['option3'] = $fetchInfo['option3'];
				$tempArray['option4'] = $fetchInfo['option4'];
				array_push($finalArray,$tempArray);
		}



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