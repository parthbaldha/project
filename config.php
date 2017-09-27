<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("college",$con);
?>