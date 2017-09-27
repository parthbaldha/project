<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("college",$con);
$std_id= $_GET["std_id"];

$qry="DELETE from student where `std_id`='$std_id'";
mysql_query($qry,$con);
		if(!mysql_query($qry,$con))
		{
			die('could not error' . mysql_error());
		}
		else
		{
			header("location:view_stud.php");
		}		
mysql_close($con);
?>