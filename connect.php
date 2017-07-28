<?php
$conn=@mysqli_connect("localhost","id1880240_mugathipavan","maruthi")or die(@mysqli_errno($conn)."=".@mysqli_error($conn));
$db="CREATE DATABASE relationdb";
/*mysql_query($db) or die(mysql_errno()."=".mysql_error());*/
mysqli_select_db($conn,"id1880240_relationdb");
$que="CREATE TABLE users(
Id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Email VARCHAR(70) NOT NULL UNIQUE,
Value SMALLINT(5) NOT NULL
)";
/*$exe=mysql_query($que) or die(mysql_errno()."=".mysql_error());*/

?>