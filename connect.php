<?php
//header('Content-Type: text/html; charset=utf-8');
$imeBaze = "localhost";
$korIme = "root";
$sifraBaze = "";
$basename = "projekt";

// Create connection
$dbc = mysqli_connect($imeBaze, $korIme, $sifraBaze, $basename) or die('Error connecting to MySQL server.'.mysqli_connect_error());
mysqli_set_charset($dbc, "utf8");

 //Check connection
if (!$dbc) {
  echo "Error accessing database!";
}

?>
