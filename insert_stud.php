<?php
include("config.php");
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$contactno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$remark=$_POST['remark'];
/*****Image***/
if(($_FILES["image"]["type"]=="image/gif") || ($_FILES["image"]["type"]=="image/jpeg") 
||($_FILES["image"]["type"]=="image/pjpeg") || ($_FILES["image"]["type"]=="image/jpg")&& ($_FILES["image"]["size"]<90000));
{
	if(file_exists("images/".$_FILES["image"]["name"]))
	{
		echo "File Alredy Exit change File Name";
		header('../index.php');
	}
	else
	{
		 $img=$_FILES["image"]["name"];
		move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);

$sql= "INSERT INTO `student` (`name`,`address`,`city`,`contactno`,`emailid`,`image`,`remark`) VALUES('$name','$address','$city','$contactno','$emailid','$img','$remark')";
echo "Student Registered Successfully............";
		if(!mysql_query($sql,$con))
		{
			die('could not error' . mysql_error());
		}
		else
		{
		  	header("location:view_stud.php");
		}
	 }
}	
mysql_close($con);
?>