<?php
require_once("dbconfig.php");

$id = $_REQUEST['id'];

$qry = "DELETE from songs where id = ".$id;

if (mysqli_query($db, $qry)) 
  {
    echo '
    <script type="text/javascript">
      window.alert("Song Deleted! ");
    </script>

    ';
  } 
  else 
  {
    printf("error: %s\n", mysqli_error($db));
    echo '
        <script type="text/javascript">
      window.alert("Failed  Delete ");
      </script>      
    ';
  }  
  

?>
<script type="text/javascript">
  window.location.replace("list_all_questions.php");
</script>
?>