<?php include('header.php'); ?>
<?php include('session.php'); ?>

<?php include('dbcon.php'); ?>

<?php
$query="select * from students where student_id='$session_id'";
$sort = $conn ->query($query);
$row=mysqli_fetch_array($sort);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['student_status'];

 ?>
 <?php

 $school_year = "";
$semester = "";	 


	$school_year = $_POST['school_year'];	



	$semester = $_POST['semester'];	


?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				<div class="grade">
					<?php include('grade_option.php'); ?>
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
		          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                        <thead>
                            <tr>
                                <th width="100">Code</th>
                                <th width="300">Subject</th>
                                <th width="50">Units</th>                                 
                                <th>Gen Ave.</th>                                                                                 
                                <th>Semester</th>                                                                                 
                                <th>School Year</th>                                                                                 
                                <th>Remarks</th>                                                                                 
                            </tr>
                        </thead>
                        <tbody>
						 
                          	<?php  

                          	$user_query = "select * from grade where student_id = $session_id and semester like '%$semester%' and school_year like '%$school_year%' ";
                          	$sort1 = $conn ->query($user_query);

							while($row = mysqli_fetch_array($sort1))
							{
								$id = $row['grade_id'];
								$remarks = $row['remarks'];
								$subject_id = $row['subject_id'];
								$subject_query = "select * from subject where subject_id = $subject_id ";
								$sort2 = $conn ->query($subject_query);
								
								while($subject_row = mysqli_fetch_array($sort2))
								{

							?>
									<tr>
		                                <td><?php echo $subject_row['subject_code']; ?></td> 
		                                <td><?php echo $subject_row['subject_title']; ?></td> 
		                                <td><?php echo $subject_row['subject_unit']; ?></td>                                 
		                                <td><?php echo $row['gen_ave']; ?></td>                                                                              
		                                <td><?php echo $row['semester']; ?></td>                                                                              
		                                <td><?php echo $row['school_year']; ?></td>
									
									<?php if ($remarks == 'Very Good'){ ?>
									<td><span class="very_good"><?php echo $row['remarks']; ?></span></td>   
									<?php }else if($remarks == 'Excellent'){ ?>
									<td><span class="Excellent"><?php echo $row['remarks']; ?></span></td>   
									<?php }else if($remarks == 'Satisfactory'){ ?>  
									<td><span class="sat"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Fair'){ ?>
									<td><span class="fair"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Failed'){ ?>
									<td><span class="failed"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Incomplete'){ ?>
									<td><span class="failed"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Officially Dropped'){ ?>
									<td><span class="drop"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'PASS'){ ?>
									<td><span class="Excellent"><?php echo $row['remarks']; ?></span></td> 
									<?php } ?>	
										
	                                </tr>
							<?php 

								}
							}  

							?>
                   
                        </tbody>
                    </table>
				
									
								<?php include('sort_unit_table.php'); ?>
						
									    <table cellpadding="0" cellspacing="0" border="0" class="table  " id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100"></th>
                                        <th class="numberu" width="300"></th>
                                        <th width="50">
										GWA:
										</th>                                 
                                        <th>
										
															<?php
							
                            $result = "SELECT sum(gen_ave) FROM grade  where student_id = '$session_id' and school_year like '%$school_year%' and semester like '%$semester%'";
                            $sort3 = $conn ->query($result);
                            
							
							
							
							$test_count="select * from grade where gen_ave <> '' and student_id = '$session_id' and school_year like '%$school_year%' and semester like '%$semester%' ";
							$sort4 = $conn ->query($test_count);
							$count_gen = mysqli_num_rows($sort4);
							
							while ($rows = mysqli_fetch_array($sort3)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(gen_ave)']; 
											  $equal = $ave / $count_gen;
											  echo round($equal , 2);
									?>
						
                            <?php } }?>
										
										</th>       
                                        <th></th>       
                                        <th class="act"></th>       
									           
								
											   
                                        <th></th>
										
									
                                    </tr>
                             
                            </table>
								<?php include('cwa_table.php'); ?>
					
				</div>
								<?php include('grading.php') ?>
			</div>
		</div>
    </div>

<?php include('footer.php') ?>