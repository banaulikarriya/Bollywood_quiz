
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bollywood quiz admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Access Time : <?php echo date("F j, Y, g:i a"); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Movies<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a  href="add_movie.php"><i class="fa fa-desktop fa-2x"></i> Add Movie </a>
                            </li>
                            <li>
                                <a  href="list_all_movies.php"><i class="fa fa-desktop fa-2x"></i> List Movies </a>
                            </li>
                        </ul>
                    </li> 
                    
                    <li>
                        <a href="#"><i  class="fa fa-music fa-3x"></i> Quiz<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a  href="add_question.php"><i class="fa fa-music fa-2x"></i> Add Question </a>
                            </li>
                            <li>
                                <a  href="list_all_questions.php"><i class="fa fa-music fa-2x"></i> List Question </a>
                            </li>
                        </ul>
                    </li>
						  
                        	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->