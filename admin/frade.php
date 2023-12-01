<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<?php include('head.php'); ?>
			<div class="span2">		
               <?php include('dashboard_sidebar.php'); ?>
			</div>	
			<div class="span12" style="border:1px solid red;max-width:948px	;margin-left: 50px;max-height: 100%">
			  				<div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								<label><h4>FILTER by:</h4></label>
									<form  method = "POST" class="form-inline" action="sort_students_grade.php">
									Student No: 
									<input type="text" id="inputEmail" name="student_no" placeholder="Student No">

									Student Lastname: 
									<input type="text" id="inputEmail" name="student_lastname" placeholder="Lastname">
									<button type="submit" name="sort_students_grade" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								
							
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
                                   <!-- <th>Password</th>  -->                    
                                        <th>Name</th>                                 
                                        <th>Course</th> 
								<?php										
                                 /*        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>    
 */
									?>										
                                        <th>Photo</th>                                 
                                        <th>Year Level</th>                                 
                                        <th>Term</th>                                 
                                        <th>Student Status</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query="select * from students";
                                  $studd1 = $conn ->query($user_query);

									while($row=mysqli_fetch_array($studd1)){
									$id=$row['student_id'];  ?>
									<tr class="del<?php echo $id ?>">
									<td><?php echo $row['student_no']; ?></td> 
                              <!--  <td><?php echo $row['password']; ?></td>  -->                               
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
								
                                    <td width="80"><?php echo $row['course']; ?> </td> 
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              
                                    <td width="60"><img src="<?php echo $row['photo']; ?>" width="60" height="60" class="img-circle"></td> 
									 <td width="80"><?php echo $row['year_level']; ?></td> 
									 <td width="80"><?php echo $row['term']; ?></td> 
									 <td width="80"><?php echo $row['student_status']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="150">
                                      <center>
										<a  rel="tooltip"  title="View Grade" id="v<?php echo $id; ?>"  href="view_grade.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-list icon-large"></i></a>
									</center>
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>