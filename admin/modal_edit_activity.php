	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
	<div class="alert alert-info">Edit Course</div>
	<form class="form-horizontal" method="post">

					<div class="control-group">
				<label class="control-label" for="inputActivityID">Activity ID</label>
				<div class="controls">
				<input type="text" name="activity_id"  placeholder="Activity ID" value="<?php echo $row['activity_id']; ?>" required readonly>
				</div>
			</div>

					<div class="control-group">
				<label class="control-label" for="inputCourse">Course</label>
				<div class="controls">

				<select name="course" value="<?php echo $row['course']; ?>" required>
				<option>BSIT</option>
				<option>BSBA</option>
				<option>BSOA</option>
				<option>BSHM</option>
				</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputTitle">Title</label>
				<div class="controls">
				<input type="text" name="title"  placeholder="Title" value="<?php echo $row['title']; ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputDescription">Description</label>
				<div class="controls">
				<input type="text" name="description"  placeholder="Description" value="<?php echo $row['description']; ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputStart">Start</label>
				<div class="controls">
				<input type="date" name="start"  placeholder="Start" value="<?php echo $row['start']; ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEnd">End</label>
				<div class="controls">
				<input type="date" name="end"  placeholder="End" value="<?php echo $row['end']; ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputStatus">Status</label>
				<div class="controls">
				<select name="status" required>
				<option>activated</option>
				<option>deactivated</option>
				
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
	if (isset($_POST['edit'])){
	$activity_id = $_POST['activity_id'];
	$course=$_POST['course'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$status=$_POST['status'];

	$updatee = "update activity set  title='$title',description='$description',start='$start',end='$end',course='$course',status='$status' where activity_id='$activity_id'"; 
	$mec = $conn ->query($updatee);

	?>
	<script>
	window.location="activity.php";
	</script>
	<?php
	}
	?>