<?php
session_start();

define("HOST","localhost");
define("USER","berchewi_berchewit");
define("PASS","s$)fUgW(nshx");
define("DB","berchewi_berchewit");

#define("DOMAIN","http://".$_SERVER['SERVER_NAME']."/".basename(dirname(__DIR__)));
define("DOMAIN","https://".$_SERVER['SERVER_NAME']);


// Create connection
$conn = new mysqli(HOST,USER,PASS,DB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";







?>