<?php
 $con = new mysqli("localhost", "root", "","querylist2"); 
	if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
 $con->set_charset('utf8');
 ini_set('default_charset','UTF-8');

?>