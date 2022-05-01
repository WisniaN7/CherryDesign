<?php

$servername = "mn10.webd.pl";
$dbUsername = "cherryn7_wisnia";
$dbPassword = "Kwiatek210";
$dbName = "cherryn7_cherrydesign";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed ".mysqli_connect_error());
}

 ?>
