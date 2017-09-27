<?php include('head.php'); ?>
       <div class="span4" id="sidebar"></div>
<div class="span9" id="content">
                    <div class="row-fluid">
                                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student Registration</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal" action="insert_stud.php" method="post" name="Reg" enctype="multipart/form-data">
                                     
                                      <fieldset>
                                      
                                        <div class="control-group">
                                          </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Name</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="name">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Address</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="address">
                                          </div>
                                        </div>      
										<div class="control-group">
                                          <label class="control-label" for="focusedInput">City</label>
                                          <div class="controls">
											<input class="input-xlarge focused" type="text" name="city">
										  </div>
										  </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Contact no</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="contactno">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="focusedInput">Email Id</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="emailid">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Image</label>
                                          <div class="controls">
                                          <input type="file" name="image" id="image">
                                          </div>
                                        </div>  
										<div class="control-group">
                                          <label class="control-label" for="focusedInput">Remark</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="remark">
                                          </div>										
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Add</button>
                                          <button type="reset" class="btn btn-primary">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>

                            </div>
                        </div>
											