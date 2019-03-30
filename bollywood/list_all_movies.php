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
                                            <th>Name</th>
                                            <th>Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php

                                        include('dbconfig.php');
                                        $query1="SELECT * from movie";
                                            $resultReported = mysqli_query($db,$query1);
                                            if(mysqli_num_rows($resultReported) > 0){
                                              while($row=mysqli_fetch_array($resultReported)){
                                                echo '<tr>' ;
                                                echo '<td>'.$row['id'].'</td>' ;
                                                echo '<td>'.$row['name'].'</td>' ;
                                                echo '<td>'.$row['year'].'</td>' ;
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

 <?php include('footer.php'); ?>
