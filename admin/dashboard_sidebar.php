<?php
$query="select * from users where user_id='$session_id'";
$dash = $conn ->query($query);
$row=mysqli_fetch_array($dash);

 ?>

			<div class="life-side-bar" >
			<div class="hero-container" style="width: 200px">                  
					<ul class="nav nav-tabs nav-stacked" style="width: 200px">
						<div style="border:1px solid black;width: 198px">
							<li>
						<center><img height="100"  width="154" style="margin: 5px 0px 0px 3px;" src="<?php echo $row['photo'];?>">
						<div style="margin-top: -20px"><a href="#">Edit Profile</a></div>	

						<br>
						<strong class="name1"><?php echo $row['firstname']." ".$row['lastname']; ?><br>
						<?php echo $row['user_type'] ?>
						</strong></center>
							</li>
						</div>


						<li class="">
						<a href="dasboard.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Dashboard</a>
						</li>

						<li class="">
						<a href="profile.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Profile</a>
						</li>

						<li class="">
						<a href="session_year.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage School Year</a>
						</li>

						<li class="">
							<a href="term.php" class="blue_link"><i class="icon-home icon-large icon-large"></i>&nbsp;Manage Term</a>
						</li>


						
						<li class="">
						<a href="year.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage Year</a>
						</li>

						
						<li class="">
						<a href="section.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage Section</a>
						</li>

						

						<li class="">
						<a href="students.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage Student</a>
						</li>

						<li class="">
						<a href="subject.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage Subject</a>
						</li>

						<li class="">
						<a href="grades.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage Grades</a>
						</li>

						<li class="">
						<a href="users.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Manage User</a>
						</li>

						<li class="">
						<a href="logs.php" class="blue_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Activity Logs</a>
						</li>

						<li class="">
						<a href="logout.php" class="blue_link"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
						</li>
							
					</ul>
			</div>
			

			</div>
	