<?php
session_start();
session_destroy();
$url1 = "http://localhost/llb/launch/";
header( "Location: $url1" );
?>