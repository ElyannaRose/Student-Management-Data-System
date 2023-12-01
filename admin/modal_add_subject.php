Course	<div id="add_subject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Course</strong></div>
	<form class="form-horizontal" method="post">
		
			<div class="control-group">
				<label class="control-label" for="inputEmail">Course School year</label>
				<div class="controls">
				<select name="subject_session" required>
				<option></option>
				 <?php $session_query="select session_start,session_end from session";
                 $session = $conn ->query($session_query);

				 while($row=mysqli_fetch_array($session)){
                 $id=$row['session_id']; 
                 ?>
                 <option>  <?php echo $row['session_start'];?> - <?php echo $row['session_end'];?></option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Course Term</label>
				<div class="controls">
				<select name="subject_term" required>
				<option></option>
				 <?php $term_query="select term_code from term";
                 $term = $conn ->query($term_query);

				 while($row=mysqli_fetch_array($term)){
                 $id=$row['term_id']; 
                 ?>
                 <option>  <tr><?php echo $row['term_code']; ?></tr> </option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Course Program</label>
				<div class="controls">
				<select name="subject_course" required>
				<option></option>
				 <?php $course_query="select course_code from course";
                 $course = $conn ->query($course_query);

				 while($row=mysqli_fetch_array($course)){
                 $id=$row['course_id']; 
                 ?>
                 <option>  <tr><?php echo $row['course_code']; ?></tr> </option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" for="inputEmail">Course Curiculum </label>
				<div class="controls">
				<select name="subject_curiculum" required>
				<option></option>
				 <?php $curiculum_query="select curiculum_code from curiculum ";
                 $curiculum = $conn ->query($curiculum_query);
				 while($row=mysqli_fetch_array($curiculum)){
                 $id=$row['curiculum_id']; 
                 ?>
                 <option>  <tr><?php echo $row['curiculum_code']; ?></tr> </option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Course Year </label>
				<div class="controls">
				<select name="subject_year" required>
				<option></option>
				 <?php $year_query="select year_description from year ";
                 $year = $conn ->query($year_query);
				 while($row=mysqli_fetch_array($year)){
                 $id=$row['year_id']; 
                 ?>
                 <option>  <tr><?php echo $row['year_description']; ?></tr> </option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Course Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="subject_code" placeholder="subject Code" required>
				</div>
			</dsection
			
					
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
	$subject_session=$_POST['subject_session'];
	$subject_term=$_POST['subject_term'];	
	$subject_course=$_POST['subject_course'];
	$subject_curiculum=$_POST['subject_curiculum'];
	$subject_year=$_POST['subject_year'];	
	$subject_code=$_POST['subject_code'];
	
	if($subject_year=='First Year')
	{
		$subject_year='1';
	}
	elseif ($subject_year=='Second Year') 
	{
		$subject_year='2';
	}
	elseif ($subject_year=='Third Year') 
	{
		$subject_year='3';
	}
	elseif ($subject_year=='Fourth Year') 
	{
		$subject_year='4';
	}
	
	$date_created=date("m/d/Y");
	$sql = "SELECT * FROM section where section_code='$section_code' and section_year='$section_year' and section_course='$section_course' and section_curiculum='$section_curiculum' and section_session='$section_session' and section_term='$section_term'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		?>
		<script type="text/javascript">
			window.alert(" Section already exist!! ");
		</script>
		<?php
	}
			else
			{
				
				$inserrt = "insert into section (section_session,section_term,section_course,section_curiculum,section_code,section_year,section_date_created)values('$section_session','$section_term','$section_course','$section_curiculum','$section_code','$section_year','$date_created')";
				$mao = $conn ->query($inserrt);
				?>
				<script type="text/javascript">
				window.alert(" section is Successfully Added!");
				</script>
				<?php
			}
	
	
	}
	
	?>