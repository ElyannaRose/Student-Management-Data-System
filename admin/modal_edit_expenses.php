	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
	<div class="alert alert-info">Edit Course</div>
	<form class="form-horizontal" method="post">
	<div class="control-group">
				<label class="control-label" for="inputDetail">Expenses ID</label>
				<div class="controls">
				<input type="text"  name="expenses_id" placeholder="Detail" required readonly value="<?php echo $row['expenses_id'];  ?>">
				</div>
			</div>
					<div class="control-group">
				<label class="control-label" for="inputDetail">Detail</label>
				<div class="controls">
				<input type="text"  name="detail" placeholder="Detail" required value="<?php echo $row['detail']; ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPrice">Price</label>
				<div class="controls">
				<input type="number" min="0" name="price"  placeholder="Price" required value="<?php echo $row['price']; ?>">	
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputCourse">Course</label>
				<div class="controls">

				<select name="course" required value="<?php echo $row['course']; ?>">
				
				<option>BSIT</option>
				<option>BSBA</option>
				<option>BSOA</option>
				<option>BSHM</option>
				</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputTerm">Term</label>
				<div class="controls">

				<select name="term" required value="<?php echo $row['term']; ?>">
				
				<option>1st Term</option>
				<option>2nd Term</option>
				
				</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPrice">Deadline</label>
				<div class="controls">
				<input type="date" name="deadline"  placeholder="Deadline" required value="<?php echo $row['deadline']; ?>">
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
	
	$expenses_id=$_POST['expenses_id'];
	$detail=$_POST['detail'];
	$price=$_POST['price'];
	$course=$_POST['course'];
	
	$term=$_POST['term'];
	$deadline=$_POST['deadline'];

	$updatee = "update expenses set expenses_id='$expenses_id', detail='$detail',price='$price',course='$course',term='$term',deadline='$deadline' where expenses_id='$expenses_id'"; 
	$mec = $conn ->query($updatee);

	?>
	<script>
	window.location="expenses.php";
	</script>
	<?php
	}
	?>