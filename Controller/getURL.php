<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
   $URL = "https";
else
   $URL = "http";

// Here append the common URL characters.
$URL .= "://";

// Append the host(domain name, ip) to the URL.
$URL .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$URL .= $_SERVER['REQUEST_URI'];
?>
