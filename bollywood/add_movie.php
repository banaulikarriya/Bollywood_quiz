<?php include('header.php'); ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Movie</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
<?php
include('dbconfig.php');
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $movie = $_POST["movie"];
    $year = $_POST["year"];

    if($movie && $year){

        // Attempt insert query execution
            $sql = "INSERT INTO movie (name,year) VALUES ('$movie', '$year')";
            if(mysqli_query($db, $sql)){
                echo "Records added successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

    }

    

}

?>

               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Movie
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                           
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Movie Name</label>
                                            <input type="text" name="movie" class="form-control" />
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Select Example</label>
                                            <select id="year" name="year" class="form-control">
                                                <option value="0">Select Year</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                            
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
