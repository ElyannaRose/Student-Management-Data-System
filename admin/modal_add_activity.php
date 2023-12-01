	<div id="add_activity" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Add Activity</div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputCourse">Course</label>
				<div class="controls">

				<select name="course" required>
				<option></option>
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
				<input type="text" name="title"  placeholder="Title" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputDescription">Description</label>
				<div class="controls">
				<input type="text" name="description"  placeholder="Description" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputStart">Start</label>
				<div class="controls">
				<input type="date" name="start"  placeholder="Start" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEnd">End</label>
				<div class="controls">
				<input type="date" name="end"  placeholder="End" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputStatus">Status</label>
				<div class="controls">
				<select name="status" required>
				<option></option>
				<option>activated</option>
				<option>deactivated</option>
				
				</select>
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
	$course=$_POST['course'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$status=$_POST['status'];

		
$inserrt = "insert into activity (title,description,start,end,course,status) values('$title','$description','$start','$end','$course','status')";
	$mao = $conn ->query($inserrt);
	}
	?>