<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "bollywood_quiz"; 
//connection to the database


$db = mysqli_connect($hostname, $username, $password,$database)
  or die("Unable to connect to MySQL");

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$song_url = "http://localhost/bollywood/songs/";


?>