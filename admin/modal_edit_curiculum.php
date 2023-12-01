	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Curiculum</strong></div>
	<form class="form-horizontal" method="post">
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Curiculum Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="curiculum_code" placeholder="Curiculum Code"  value="<?php echo $row['curiculum_code']?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Curiculum Course</label>
				<div class="controls">
				<select name="curiculum_course" required>
				<option><?php echo $row['curiculum_course']?></option>
				 <?php $course_query="select course_code from course";
                 $course = $conn ->query($course_query);
				 while($row=mysqli_fetch_array($course)){
                 ?>
                 <option><?php echo $row['course_code']; ?></option>
                 <?php
             	 }
                 ?>
				</select>
				</div>
			</div>
			
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
	
	$curiculum_id=$row['curiculum_id'];
	$curiculum_code=$_POST['curiculum_code'];
	$curiculum_course=$_POST['curiculum_course'];
	$date_created=date("m/d/Y");

	$sql = "SELECT * FROM curiculum where curiculum_code='$curiculum_code'";
	$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				?>
				<script type="text/javascript">
				window.alert("Curiculum already exist!! ");
				</script>
				<?php
			}
			else
				{
				$updaate = "update curiculum set curiculum_code='$curiculum_code', curiculum_course='$curiculum_course' , curiculum_date_created = '$date_created' where curiculum_id='$curiculum_id'"; 
				$meu = $conn ->query($updaate);	
				?>
				<script type="text/javascript">
				window.alert(" Curiculum is Successfully Updated!");
				</script>
				<?php
				}
	
	
	?>
	<script>
	window.location="curiculum.php";
	</script>
	<?php
	}
	?>