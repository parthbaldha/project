<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysqli_connect("localhost","root","","college");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
//mysql_select_db("college",$con);

$std_id =$_REQUEST['std_id'];
$result="select *from student where std_id='$std_id'";
$abc=mysqli_query($con,$result);
$test = mysqli_fetch_array($abc);
if (!$result) 
		{
		die("Error: Data not found..");
		}
if(isset($_POST['save']))
{	
	$c_name_save=$_POST['name'];
	$c_address_save=$_POST['address'];
	$c_city_save=$_POST['city'];
	$c_contactno_save=$_POST['contactno'];
	$c_emailid_save=$_POST['emailid'];
	$c_remark_save=$_POST['remark'];

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
		//echo $img;

	
	$a="update student set name='$c_name_save',address='$c_address_save',city='$c_city_save',contactno='$c_contactno_save',emailid='$c_emailid_save',image='$img',remark='$c_remark_save' where std_id='$std_id'";
	mysqli_query($con,$a);
//	var_dump($a);
	header("location:view_stud.php");
	}
}
}
mysqli_close($con);
?>
<?php include("head.php")  ?>
<div class="span4" id="sidebar"></div>
<div class="span9" id="content">
                    <div class="row-fluid">
                                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student registration</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal" method="post" name="Reg" enctype="multipart/form-data">
                                     
                                      <fieldset>
                                      
                                        <div class="control-group">
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Name</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="name" value="<?php echo $test['name']; ?>">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Address</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="address" value="<?php echo $test['address']; ?>">
                                          </div>
                                        </div>      
										<div class="control-group">
                                          <label class="control-label" for="focusedInput">City</label>
                                          <div class="controls">
										  <input class="input-xlarge focused" type="text" name="city" value="<?php echo $test['city']; ?>">
											<!--<select name="c_id">										  
												<option selected value="a">Jetpur</option>
												<option value="aa">Rajkot</option>									  
												<option value="aa">Ahmedabad</option>
												<option value="aa">Morbi</option>
												<option value="aa">Junagadh</option>
											</select>-->
										  </div>
										  </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Contact no</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="contactno" value="<?php echo $test['contactno']; ?>">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="focusedInput">Email Id</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="emailid" value="<?php echo $test['emailid']; ?>">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Image</label>
                                          <div class="controls">
                                          <input type="file" name="image" id="image" value="<?php echo $test['image']; ?>">
                                          </div>
                                        </div>  
										<div class="control-group">
                                          <label class="control-label" for="focusedInput">Remark</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="remark" value="<?php echo $test['remark']; ?>">
                                          </div>										
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary" name="save">Add</button>
                                          <button type="reset" class="btn btn-primary">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>

                            </div>
                        </div>