	<form method="POST" action="sort_grade.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<div class="span3">
			<div class="sort"><i class="icon-filter icon-large"></i>&nbsp;FILTER Grade</div>
			</div><br>
			<div  class="span3" style="margin-left: -30px">
				<label>Year Level</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select" name="school_year" required style="width: 120px;">
					<option></option>
					<option value="First">First Year</option>
					<option value="Second">Second  Year</option>
					<option value="Third">Third Year</option>
					<option value="Fourth">Fourth Year</option>
				</select>
			</div>
				<div class="span3"  style="margin-left: -30px">
					<label>Term</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select1"  name="semester" required style="width: 120px">
					<option></option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
				</select>
			</div>
			<div class="span2" style="margin-left: -100px">
			<div class="sort_button">
			<button rel="tooltip"  data-placement="bottom" title="Click here to submit" id="sort"  name="sort" class="btn btn-info"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
			</div>
			</div>
			</form>