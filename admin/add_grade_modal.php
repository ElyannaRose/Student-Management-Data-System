				<div id="add_grade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div id="add_grade" class="modal-body">
						<div class="alert alert-info">Add Grades for this Term</div>
				<form class="form-horizontal" method="post">
				<input type="hidden" name="student_id" value="<?php echo $get_id; ?>" /> 
			<?php
			$student_query = "select * from students where student_id = '$get_id' ";
			$adm = $conn ->query($student_query);

			$student_row = mysqli_fetch_array($adm);
			$student_course_id = $student_row['course'];
			$year = $student_row['year_level'];
			$term = $student_row['term'];
	
		
			$course_query = "select * from course where course_code = '$student_course_id'";
			$adm1 = $conn ->query($course_query);

			$course_row = mysqli_fetch_array($adm1);
			$course_id =  $course_row['course_id'];
			?>
			<div class="control-group">
				
				<div class="controls"> 
				<input type="hidden" name="year" value="<?php echo $year ?>">
				<input type="hidden" name="term" value="<?php echo $term ?>">
				
				<option></option>
				<?php
				$a=0;				
				$query = "select * from subject where subject_course = '$course_id' and subject_year = '$year' and subject_term = '$term'  ";
				$adm2 = $conn ->query($query);

				while($row = mysqli_fetch_array($adm2))
				{ 
				$a++;
				?>
				<input type="hidden" name="code<?php echo $a; ?>" value="<?php echo $row['subject_id']; ?>">
				SUBJECT:&nbsp;&nbsp;<input type="text" class="text1"  value="<?php echo $row['subject_code']; ?>" disabled>
					
			GEN AVE:
				
				<select  class="span1" name="ave<?php echo $a; ?>" required>
				<option></option>
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

		
				<?php
				} 
				?>
				<input type="hidden" name="test" value="<?php echo $a; ?>">
				
				
				
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	
		$student_id=$_POST['student_id'];
		
	$test1 = "code".$b;
	$test2 = "ave".$b;
	$code=$_POST[$test1];
	$ave =$_POST[$test2];
	
	?>
	

	<?php
	$year=$_POST['year'];
	$term=$_POST['term'];
	
	
	$subject_query  = "select * from subject where subject_id = '$code' ";
	$adm3 = $conn ->query($subject_query);

	$subject_row = mysqli_fetch_array($adm3);
	
	$unit =  $subject_row['subject_unit']; 
	
	
	$query = "select * from  grade where  subject_id = '$code' and student_id = '$student_id'";
	$adm4 = $conn ->query($query);

	$count = mysqli_num_rows($adm4);
	
	if ($count > 0){ ?>
	<script>
	alert('Subject Already Added');
	</script>
	<?php
	}else{
	
	
	 if ($ave  == '1.00'){ 
	 $innsert = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')"; 
	 $adm5 = $conn ->query($innsert);
	 } else if($ave == '1.25'){
	 $innsert1 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	 $adm6 = $conn ->query($innsert1);
	 }else if($ave == '1.50'){
	$innsert2 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	$adm7 = $conn ->query($innsert2);
	 }else if($ave == '1.75'){
	$innsert3 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	$adm8 = $conn ->query($innsert3);
	 } else if($ave ==  '2.00'){
	$innsert4 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";	
	$adm9 = $conn ->query($innsert4); 
	 } else if($ave == '2.25'){
	$innsert5 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	$adm10 = $conn ->query($innsert5);
	 } else if($ave == '2.55'){
	$innsert6 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	$adm11 = $conn ->query($innsert6);
	 } else if($ave == '2.75'){
	$innsert7 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	$adm12 = $conn ->query($innsert7);
	 }else if($ave == '3.00'){
	$innsert8 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Passed')";
	$adm13 = $conn ->query($innsert8);
	 }else if($ave == '5.00'){
	$innsert9 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')";
	$adm14 = $conn ->query($innsert9);
	 }else if($ave == '0'){
	$innsert10 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')";
	$adm15 = $conn ->query($innsert10);
	 }else if($ave == 'INC'){
	$innsert11 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Incomplete')";
	$adm16 = $conn ->query($innsert11);
	 }else if($ave == 'DRP'){
	$innsert12 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Officially Dropped')";
	$adm17 = $conn ->query($innsert12);
	 }else if($ave == 'PASS'){
	$innsert13 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','PASS')";
	$adm18 = $conn ->query($innsert13);
	 } 
	
		 
		

	}
	
	
	}
	
	 
	}
	?>