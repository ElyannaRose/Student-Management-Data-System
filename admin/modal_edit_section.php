	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Section</strong></div>
	<form class="form-horizontal" method="post">
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Section Course</label>
				<div class="controls">
				<select name="section_course" required>
				<option><?php echo $row['section_course']; ?></option>
				 <?php $course_query="select course_code from course";
                 $course = $conn ->query($course_query);

				 while($row=mysqli_fetch_array($course)){
                 $id=$row['course_id']; 
                 ?>
                 <option>  <?php echo $row['course_code']; ?></option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Section Curiculum </label>
				<div class="controls">
				<select name="section_curiculum" required>
				<option><?php echo $row['section_curiculum']; ?></option>
				 <?php $curiculum_query="select curiculum_code from curiculum ";
                 $curiculum = $conn ->query($curiculum_query);
				 while($row=mysqli_fetch_array($curiculum)){
                 $id=$row['curiculum_id']; 
                 ?>
                 <option>  <?php echo $row['curiculum_code']; ?></option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Section Year </label>
				<div class="controls">
				<select name="section_year" required>
				<option><?php echo $row['section_year']; ?></option>
				 <?php $year_query="select year_code from year ";
                 $year = $conn ->query($year_query);
				 while($row=mysqli_fetch_array($year)){
                 $id=$row['year_id']; 
                 ?>
                 <option>  <?php echo $row['year_code']; ?> </option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>

		<div class="control-group">
				<label class="control-label" for="inputEmail">Section Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="section_code" placeholder="Section Code"  value="<?php echo $row['section_code']?>" required>
				</div>
			</div>
			
			
			<div class="control-gsection
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
				<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
			</div>
			</div>
		
    </form>
		
    </div>
	
	<?php
	if (isset($_POST['edit']))
	{
	
	$section_id=$row['section_id'];
	$section_code=$row['section_code'];
	$section_year=$row['section_year'];
	$section_curiculum=$row['section_curiculum'];
	$section_course=$row['section_course'];
	
	$date_created=date("m/d/Y");

	$sql = "SELECT * FROM section where section_code='$section_code' and section_year='$section_year' and section_course='$section_course' and section_curiculum='$section_curiculum' ";
	$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				?>
				<script type="text/javascript">
				window.alert("section already exist!! ");
				</script>
				<?php
			}
			else
				{
				$updaate = "update section set section_code='$section_code', section_year='$section_year' , section_curiculum='$section_curiculum', section_course='$section_course'  ,section_date_created = '$date_created' where section_id='$section_id'"; 
				$meu = $conn ->query($updaate);	
				?>
				<script type="text/javascript">
				window.alert(" section is Successfully Updated!");
				</script>
				<?php
				}
	
	
	?>
	<script>
	window.location="section.php";
	</script>
	<?php
	}
	?>