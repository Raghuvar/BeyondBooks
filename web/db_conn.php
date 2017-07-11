<?php
$dbconn=null;
global $dbconn;
$dbconn=pg_connect("host=127.0.0.1 dbname=TITV user=postgres password=password") or die("could not connect!!!");
?>
