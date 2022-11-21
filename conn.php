<?php
  define("HOST", "localhost");  
  define("USER", "root");
  define("PASSWORD", "");	  
  define("DATABASE", "rooftop");
  $db = new mysqli(HOST, USER, PASSWORD, DATABASE);  
  $db->set_charset("utf8");  
  if ($db->connect_error) {
    die("Connection Database Failed: " . $conn->connect_error);
  }
  // echo "Connected Database Successfully";

?>