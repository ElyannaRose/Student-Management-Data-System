			<div class="life-side-bar" >
			<div class="hero-container" style="width: 200px">                  
					<ul class="nav nav-tabs nav-stacked" style="width: 200px">
						<div style="border:1px solid black ;width: 198px">
							<li>
						<center><img height="100"  width="154" style="margin: 5px 0px 0px 3px;" src="../<?php echo $row['photo'];?>">
							
							<?php include('dbcon.php'); 

							?>
							<?php
							$query="select * from students where student_id='$session_id'";
							$dash = $conn ->query($query);
							$row=mysqli_fetch_array($dash);

 						?>
						<br>
						<strong class="name1"><?php echo $row['firstname']." ".$row['lastname']; ?><br>
						<?php echo $row['student_no'] ?>
						</strong></center>
							</li>
						</div>


						<li class="">
						<a href="dasboard.php" class="lightblue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Dashboard</a>
						</li>

						<!-- <li class="">
						<a href="units_table.php" class="skyblue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;View Subjects</a>
						</li> -->

						<li class="">
							<a href="profile.php" class="lightblue_link"><i class="icon-home icon-large icon-large"></i>&nbsp;Profiles</a>
						</li>

						<!-- <li class="">
						<a href="units_table.php" class="skyblue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;View Subjects</a>
						</li> -->

						<li class="">
							<a href="view_grade.php" class="lightblue_link"><i class="icon-home icon-large icon-large"></i>&nbsp;View Grades</a>
						</li>

				<!-- 		<li class="">
						<a href="#" class="skyblue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;View Announcement</a>
						</li> -->

						<li class="">
						<a href="logout.php" class="lightblue_link"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
						</li>
							
					</ul>
			</div>
			

			</div>
	