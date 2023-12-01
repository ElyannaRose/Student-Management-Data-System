	<div id="add_grade_advance" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Add Subject</div>
	<form class="form-horizontal" method="post">
	<input type="hidden" name="student_id" value="<?php echo $get_id; ?>" /> 
	<?php
		$student_query = "select * from students where student_id = '$get_id' ";
		$agdm = $conn ->query($student_query);

		$student_row = mysqli_fetch_array($agdm);
		$student_course_id = $student_row['course'];
		$year = $student_row['year_level'];
		$term = $student_row['term'];
	
		
		$course_query = "select * from course where code = '$student_course_id'";
		$agdm1 = $conn ->query($course_query);

		$course_row = mysqli_fetch_array($agdm1);
		$course_id =  $course_row['course_id'];
	?>
	
	
	<?php
	$user_query="select * from grade where remarks = 'Failed' and	student_id = '$get_id'  ";
	$agdm2 = $conn ->query($user_query);

	$count  = mysqli_num_rows($agdm2);
	while($row = mysqli_fetch_array($agdm2)){
	
	$sub_id = $row['subject_id'];
	
	$subject = "select * from  subject where subject_id = '$sub_id' ";
	$agdm3 = $conn ->query($subject);

	$subject_row  = mysqli_fetch_array($agdm3);
	
	$code =  $subject_row['code'];

	}
	?>
	
			<div class="control-group">
			<input type="hidden" name="year" value="<?php echo $year; ?>">
			<input type="hidden" name="term" value="<?php echo $term; ?>">
				<label class="control-label" for="inputEmail">Subject Code</label>
				<div class="controls">
				<select name="code" required>
				<option></option>
				<?php  
				$query = "select * from subject where course_id = '$course_id' and pre_requisites  != '' ";
				$agdm4 = $conn ->query($query);

				while($row = mysqli_fetch_array($agdm4)){ ?>
				<option value="<?php echo $row['subject_id']; ?>"><?php echo $row['code']; ?></option>
				<?php
				}
				?>
				</select>
					
				</div>
			</div>
			
			
			
			<div class="control-group">
		
				<label class="control-label" for="inputEmail">GEN AVE:</label>
				<div class="controls">
				
				
				<select  class="span1" name="ave" required>
		
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>5.00</option>
				<option>0</option>
				<option>DRP</option>
				<option>INC</option>
				<option>PASS</option>
				</select>
				</div>
			</div>

			
			<div class="control-group">
				<div class="controls">
				<button name="submit1" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit1'])){
	$student_id=$_POST['student_id'];
	
	$year=$_POST['year'];
	$term=$_POST['term'];
	
	$code=$_POST['code'];
	$ave=$_POST['ave'];
	
	
		$subject_query  = "select * from subject where subject_id = '$code' ";
		$agdm5 = $conn ->query($subject_query);

	$subject_row = mysqli_fetch_array($agdm5);
	
	$unit =  $subject_row['unit'];
	
	
			$result = "SELECT sum(unit) FROM grade  where student_id = '$get_id' and school_year = '$school_year' and semester = '$term'";
			$agdm6 = $conn ->query($result);

						$rows = mysqli_fetch_array($agdm6);
						$units = $rows['sum(unit)'];
                        $total_units  = $units + $unit;	
						
						
	

	
	$query = "select * from  grade where  subject_id = '$code' and student_id = '$student_id' and school_year = '$year' and semester = '$term'
	or subject_id = '$code' and student_id = '$student_id' and school_year = '$year' and semester = '$term' and remarks 
	or subject_id = '$code' and student_id = '$student_id' and school_year = '$year' and semester = '$term' and remarks 
	
	" ;
	$agdm7 = $conn ->query($query);

	$count = mysqli_num_rows($agdm7);
	
	$query1 = "select * from  grade where  subject_id = '$code' and student_id = '$student_id' and school_year = '$year' and semester = '$term' and remarks = 'Failed' ";
	$agdm8 = $conn ->query($query1);

	$count1 = mysqli_num_rows($agdm8);
	
	
	if ($count > 0){ ?>
	<script>
	alert('Subject Already Added');
	</script>
		<?php
	}else if($total_units  > 23){ ?>
	 <script>alert('Cannot add new grade  you cannot exide 15 units');</script>
	<?php
	}else{ 

	 if ($ave  == '1.00'){ 
	 $ins = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Excellent')"; 
	 $agdm9 = $conn ->query($ins);

	 } else if($ave == '1.25'){
	 $ins1 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')";
	 $agdm10 = $conn ->query($ins1);

	 }else if($ave == '1.50'){
	$ins2 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')";
	$agdm11 = $conn ->query($ins2);

	 }else if($ave == '1.75'){
	$ins3 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')";
	$agdm12 = $conn ->query($ins3);

	 } else if($ave ==  '2.00'){
	$ins4 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')";	 
	$agdm13 = $conn ->query($ins4);

	 } else if($ave == '2.25'){
	$ins5 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')";
	$agdm14 = $conn ->query($ins5);

	 } else if($ave == '2.55'){
	$ins6 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')";
	$agdm16 = $conn ->query($ins6);

	 } else if($ave == '2.75'){
	$ns7 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Fair')";
	$agdm17 = $conn ->query($ins7);

	 }else if($ave == '3.00'){
	$ins8 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Fair')";
	$agdm18 = $conn ->query($ins8);

	 }else if($ave == '5.00'){
	$ins9 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')";
	$agdm19 = $conn ->query($ins9);

	 }else if($ave == '0'){
	$ins10 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')";
	$agdm20 = $conn ->query($ins10);

	 }else if($ave == 'INC'){
	$ins11 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Incomplete')";
	$agdm21 = $conn ->query($ins11);

	 }else if($ave == 'DRP'){
	$ins12 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Officially Dropped')";
	$agdm22 = $conn ->query($ins12);

	 }else if($ave == 'PASS'){
	$ins13 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','PASS')";
	$agdm23 = $conn ->query($ins13);

	 } 
	
	}	 
	}
	?>