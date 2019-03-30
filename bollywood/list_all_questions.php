<?php include('header.php'); ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>List Movie</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />


               <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Movies
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Song Name</th>
                                            <th>Song</th>
                                            <th>Option1</th>
                                            <th>Option2</th>
                                            <th>Option3</th>
                                            <th>Option4</th>
                                            <th>Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php

                                        include('dbconfig.php');
                                       
                                        $query1="SELECT * FROM songs inner join options on options.song_id = songs.id";
                                            $resultReported = mysqli_query($db,$query1);
                                            if(mysqli_num_rows($resultReported) > 0){
                                              while($row=mysqli_fetch_array($resultReported)){
                                                $class1 = "";
                                                $class2 = "";
                                                $class3 = "";
                                                $class4 = "";
                                                echo '<tr>' ;
                                                echo '<td>'.$row['id'].'</td>' ;
                                                echo '<td>'.$row['song_name'].'</td>' ;
                                                if($row['movie_id'] == $row['option1'])
                                                    $class1 = ' class="alert alert-success"';

                                                if($row['movie_id'] == $row['option2'])
                                                    $class2 = ' class="alert alert-success"';

                                                if($row['movie_id'] == $row['option3'])
                                                    $class3 = ' class="alert alert-success"';

                                                if($row['movie_id'] == $row['option4'])
                                                    $class4 = ' class="alert alert-success"';

                                                echo '<td><audio controls> <source src="'.$song_url.$row['song_url'].'"> </scource></audio></td>' ;
                                                echo '<td'.$class1.'>'.get_movie_name($row['option1'],$db).'</td>' ;
                                                echo '<td'.$class2.'>'.get_movie_name($row['option2'],$db).'</td>' ;
                                                echo '<td'.$class3.'>'.get_movie_name($row['option3'],$db).'</td>' ;
                                                echo '<td'.$class4.'>'.get_movie_name($row['option4'],$db).'</td>' ;
                                                echo '<td>
                                                 <a class="btn btn-danger btn-xs" href="delete_songs.php?id='.$row['id'].'" title="delete" onclick="return confirm("Are you sure you want to delete this item?");"><i class="fa fa-trash "></i></a></td>';
                                                echo '</tr>' ;

                                              }
                                            }

                                        ?>
                   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

 <?php 
function get_movie_name($id,$db){
    $qry = "SELECT name FROM movie where id = $id";
    $exe=mysqli_query($db,$qry);
    $info = mysqli_fetch_array($exe);
    return $info['name'];

}

 include('footer.php');

  ?>
