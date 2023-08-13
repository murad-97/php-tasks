<?php
$mysqli = new mysqli("localhost", "root","", "cohort 3");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


?>