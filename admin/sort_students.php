<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								<label><h4>FILTER by:</h4></label>
								<form method = "POST" class="form-inline" action="sort_students.php">
									
									Student No: 
									<input type="text" id="inputEmail" name="student_no" placeholder="Student No">

									Student Lastname: 
									<input type="text" id="inputEmail" name="student_lastname" placeholder="Lastname">
						
									
									<button type="submit" name="sort_students" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_student.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Student</a></p>
							
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
                                      <!--  <th>Password</th>  -->                                
                                        <th>Name</th>                                 
                                        <th>Course</th>                                 
                                        <th>Photo</th>    
										<th>Year Level</th>     										
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
								 <?php if (isset($_POST['sort_students'])){
									$stud_ID = $_POST['student_no'];
									$lastname = $_POST['student_lastname'];
								 ?>
								 
								 
                                  <?php  $user_query="select * from students where student_no = '$stud_ID' or lastname = '$lastname' ";
                                   $ss1 = $conn ->query($user_query);
									while($row=mysqli_fetch_array($ss1)){
									$id=$row['student_id'];  ?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['student_no']; ?></td> 
                                    <!-- <td><?php echo $row['password']; ?></td>  -->                           
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td> <td width="80"><?php echo $row['course']; ?> </td> 
									
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              
                                    <td width="60"><img src="<?php echo $row['photo']; ?>" width="60" height="60" class="img-circle"></td> 
									 <td width="80"><?php echo $row['year_level']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="150">
                                        <center>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										</center>
                                    </td>
									
                                    </tr>
									<?php  }  ?>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>