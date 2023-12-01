	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Program</strong></div>
	<form class="form-horizontal" method="post">
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Program Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="course_code" placeholder="Course Code"  value="<?php echo $row['course_code']?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Program Description</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="course_description" placeholder="Term Description"  value="<?php echo $row['course_description']?>" required>
				</div>
			</course
			
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit']))
	{
	
	$course_id=$row['course_id'];
	$course_code=$_POST['course_code'];
	$date_created=date("m/d/Y");

	$sql = "SELECT * FROM course where course_code='$course_code'";
	$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				?>
				<script type="text/javascript">
				window.alert("Program already exist!! ");
				</script>
				<?php
			}
			else
				{
				$updaate = "update course set course_code='$course_code', course_description='$course_description' , course_date_created = '$date_created' where course_id='$course_id'"; 
				$meu = $conn ->query($updaate);	
				?>
				<script type="text/javascript">
				window.alert(" Program is Successfully Updated!");
				</script>
				<?php
				}
	
	
	?>
	<script>
	window.location="course.php";
	</script>
	<?php
	}
	?>