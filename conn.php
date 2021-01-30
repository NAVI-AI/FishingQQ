<?php
$dbhost = "localhost";
$username = "root";
$password = "yanbaojie000";
$conn = mysql_connect($dbhost,$username,$password) or die(mysql_error(3157426612));
mysql_query('set names utf8',$conn);
mysql_select_db('gps',$conn) or die(mysql_error(3157426612));
