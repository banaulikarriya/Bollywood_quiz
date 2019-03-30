<?php
include('dbconfig.php');
$flag = 0;
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $song_name = $_POST["song_name"];
    $movie_id  = $_POST["movie_id"];
    $option1   = $_POST["option1"];
    $option2   = $_POST["option2"];
    $option3   = $_POST["option3"];
    $option4   = $_POST["option4"];

    if($movie_id == $option1 || $movie_id == $option2 || $movie_id == $option3 || $movie_id == $option4){

        $flag = 1;

    }

  if($flag  == 0){

    echo '<script type="text/javascript">
      window.alert("Correct movie is not selected in any option! ");
    </script>';

    echo '<script type="text/javascript">
     window.location.replace("add_question.php");
    </script>';

    exit();
  }

  
  //Image upload
  $target_dir = "songs/";
  $target_file = $target_dir .basename($_FILES["song"]["name"]);
  //Store the filetype
  $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
  if (move_uploaded_file($_FILES["song"]["tmp_name"], $target_file)) 
    {
          //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          $filename=rand(100,50000)."song".".".$FileType;
          $original_path=$target_dir.$filename;
          if(rename($target_file,$original_path)){

             $addsong = "INSERT INTO songs (song_name,song_url,movie_id) VALUES ('$song_name','$filename','$movie_id')";
 
              if (mysqli_query($db, $addsong)) 
              {
                $song_id = mysqli_insert_id($db);                      
              } 

            }
    }
      

        if($song_id){

            // Attempt insert query execution
                $sql = "INSERT INTO options (song_id,option1,option2,option3,option4) VALUES ('$song_id', '$option1','$option2','$option3','$option4')";
                if(mysqli_query($db, $sql)){
                    echo '
                    <script type="text/javascript">
                      window.alert("Question Added! ");
                      window.location.replace("add_question.php");
                    </script>';
                } else{
                    echo '
                    <script type="text/javascript">
                      window.alert("Fail to Add! ");
                    </script>';
                }

        }

    

}

?>