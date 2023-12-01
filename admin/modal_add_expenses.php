	<div id="add_expenses" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Add Expenses</div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputDetail">Detail</label>
				<div class="controls">
				<input type="text"  name="detail" placeholder="Detail" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPrice">Price</label>
				<div class="controls">
				<input type="number" min="0" name="price"  placeholder="Price" required>
				</div>
			</div>
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
				<label class="control-label" for="inputTerm">Term</label>
				<div class="controls">

				<select name="term" required>
				<option></option>
				<option>1st Term</option>
				<option>2nd Term</option>
				
				</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPrice">Deadline</label>
				<div class="controls">
				<input type="date" name="deadline"  placeholder="Deadline" required>
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
	$detail=$_POST['detail'];
	$price=$_POST['price'];
	$course=$_POST['course'];
	
	$term=$_POST['term'];
	$deadline=$_POST['deadline'];

	$insert = "insert into expenses (detail,price,course,term,deadline) values('$detail','$price','$course','$term','$deadline')";
	$mac1 = $conn ->query($insert);
}
	?>