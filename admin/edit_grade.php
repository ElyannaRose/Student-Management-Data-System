	<div id="edit_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Add Grade</div>
			<form class="form-horizontal" method="post">
			<input type="hidden" name="school_year" value="<?php echo $school_year; ?>" /> 
			<input type="hidden" name="grade_id" value="<?php echo $id; ?>" /> 
			<div class="control-group">
				<?php
				
		$student_query = "select * from students where student_id = '$get_id' ";
		$eg = $conn ->query($student_query);

		$student_row = mysqli_fetch_array($eg);
		$student_course_id = $student_row['course'];
		$term = $student_row['term'];
		
		$course_query = "select * from course where course_code = '$student_course_id'";
		$eg1 = $conn ->query($course_query);

		$course_row = mysqli_fetch_array($eg1);
		$course_id =  $course_row['course_id'];
	?>	
				<input type="hidden" value="<?php echo $term ?>"  name="term">
				<label class="control-label" for="inputEmail">Subject Code</label>
				<div class="controls">
			
				
				<input type="hidden" name="code" value="<?php echo $subject_row['subject_id'];  ?>">
				<strong><?php echo $subject_row['subject_code'];  ?></strong>
				
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Gen Ave</label>
				<div class="controls">
				<select name="ave" required>
				<option><?php echo $row['gen_ave']; ?></option>
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
			<!--
			
					<div class="control-group">
				<label class="control-label" for="inputEmail">Semester</label>
				<div class="controls">
				<select name="semester" >
					<option><?php echo $row['semester']; ?></option>
					<option>1st</option>
					<option>2nd</option>
					<option>Summer</option>
				</select>
				</div>
			</div>
					<div class="control-group">
				<label class="control-label" for="inputEmail">School Year</label>
				<div class="controls">
				<select name="sy" >
				<option><?php echo $row['school_year']; ?></option>
				<option>First Year</option>
				<option>Second Year</option>
				
				</select>
				</div>
			</div>
			-->
			
				
					
	
			
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	$school_year=$_POST['school_year'];
	$grade_id=$_POST['grade_id'];
	$code=$_POST['code'];
	$ave=$_POST['ave'];
	$term=$_POST['term'];
	
/* 	$sy=$_POST['sy']; */
/* 	$semester=$_POST['semester']; */

	 if ($ave  == '1.00'){ 
	 $inser = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Excellent')"; 
	 $eg2 = $conn ->query($inser);
	 } else if($ave == '1.25'){
	 $inser1 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')";
	 $eg3 = $conn ->query($inser1);
	 }else if($ave == '1.50'){
	$inser2 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')";
	$eg4 = $conn ->query($inser2);
	 }else if($ave == '1.75'){
	$inser3 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')";
	$eg5 = $conn ->query($inser3);
	 } else if($ave ==  '2.00'){
	$inser4 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')";	
	$eg6 = $conn ->query($inser4); 
	 } else if($ave == '2.25'){
	$inser5 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')";
	$eg7 = $conn ->query($inser5);
	 } else if($ave == '2.55'){
	$inser6 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')";
	$eg8 = $conn ->query($inser6);
	 } else if($ave == '2.75'){
	$inser7 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Fair')";
	$eg9 = $conn ->query($inser7);
	 }else if($ave == '3.00'){
	$inser8 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Fair')";
	$eg10 = $conn ->query($inser8);
	 }else if($ave == '5.00'){
	$inser9 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')";
	$eg11 = $conn ->query($inser9);
	 }else if($ave == '0'){
	$inser10 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')";
	$eg12 = $conn ->query($inser10);
	 }else if($ave == 'INC'){
	$inser11 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Incomplete')";
	$eg13 = $conn ->query($inser11);
	 }else if($ave == 'DRP'){
	$inser12 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Officially Dropped')";
	$eg14 = $conn ->query($inser12);
	 }else if($ave == 'PASS'){
	$inser13 = "insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','PASS')";
	$eg15 = $conn ->query($inser13);
	 } 

		?>

<script>
   window.location = "view_grade.php<?php echo '?id='.$get_id;  ?>";    
</script>
<?php		
	}
	?>
	
	