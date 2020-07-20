<?php
session_start();

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","klangber");

// define("HOST","localhost");
// define("USER","berchewi_berchewit");
// define("PASS","s$)fUgW(nshx");
// define("DB","berchewi_berchewit");

define("DOMAIN","http://".$_SERVER['SERVER_NAME']."/".basename(dirname(__DIR__)));
#define("DOMAIN","https://".$_SERVER['SERVER_NAME']);
#http://www.berchewit.com
?>