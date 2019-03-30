<?php include('header.php'); ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Question</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />


               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Question
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                           
                                    <form role="form" method="post" action="add_song.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Song Name</label>
                                            <input type="text" name="song_name" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Song</label>
                                            <input type="file" name="song" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Song Movie</label>
                                            <select class="form-control" id="movie_id" name="movie_id" required>
                                                  <option value="0">Please Select Movie</option>
                                                    <?php
                                                    include('dbconfig.php');
                                                    $sqlsearch="select * from movie";
                                                    $queryexec=mysqli_query($db,$sqlsearch);
                                                    while($getprods=mysqli_fetch_array($queryexec))
                                                    {
                                                     echo '
                                                    <option value="'.$getprods['id'].'">'.$getprods['name'].'</option>
                                                    ';
                                                    }
                                                    ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Option1</label>
                                            <select class="form-control" id="option1" name="option1" required>
                                                  <option value="0">Please Select Movie</option>
                                                    <?php
                                                    $sqlsearch="select * from movie";
                                                    $queryexec=mysqli_query($db,$sqlsearch);
                                                    while($getprods=mysqli_fetch_array($queryexec))
                                                    {
                                                     echo '
                                                    <option value="'.$getprods['id'].'">'.$getprods['name'].'</option>
                                                    ';
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Option2</label>
                                            <select class="form-control" id="option2" name="option2" required>
                                                  <option value="0">Please Select Movie</option>
                                                    <?php
                                                    $sqlsearch="select * from movie";
                                                    $queryexec=mysqli_query($db,$sqlsearch);
                                                    while($getprods=mysqli_fetch_array($queryexec))
                                                    {
                                                     echo '
                                                    <option value="'.$getprods['id'].'">'.$getprods['name'].'</option>
                                                    ';
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Option3</label>
                                            <select class="form-control" id="option3" name="option3" required>
                                                  <option value="0">Please Select Movie</option>
                                                    <?php
                                                    $sqlsearch="select * from movie";
                                                    $queryexec=mysqli_query($db,$sqlsearch);
                                                    while($getprods=mysqli_fetch_array($queryexec))
                                                    {
                                                     echo '
                                                    <option value="'.$getprods['id'].'">'.$getprods['name'].'</option>
                                                    ';
                                                    }
                                                    ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Option4</label>
                                            <select class="form-control" id="option4" name="option4" required>
                                                  <option value="0">Please Select Movie</option>
                                                    <?php
                                                    $sqlsearch="select * from movie";
                                                    $queryexec=mysqli_query($db,$sqlsearch);
                                                    while($getprods=mysqli_fetch_array($queryexec))
                                                    {
                                                     echo '
                                                    <option value="'.$getprods['id'].'">'.$getprods['name'].'</option>
                                                    ';
                                                    }
                                                    ?>
                                            </select>
                                        </div>



                                        
                                        
                                        
                                       
                                        <input type="submit"  class="btn btn-primary" value="Submit" />
                                        


                                   </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

 <?php include('footer.php'); ?>
