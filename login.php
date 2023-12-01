								<?php
								include('dbcon.php');
								if (isset($_POST['login'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$user_type= $_POST['user_type'];

								if($user_type=="Student")
								{
									$query = "SELECT * FROM students WHERE student_no='$username' AND password='$password' ";
									$log = $conn ->query($query);
									$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										$name = $row['firstname'].' '.$row['lastname'];
										$ins = "insert into logs (username, activity) values('$name', 'Login')";
										$agdm14 = $conn ->query($ins);
										header('location:student/dasboard.php');
										$_SESSION['id']=$row['student_id'];
										$_SESSION['name']=$name;
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								else if($user_type=="Administrator")
								{
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password' and user_type='Administrator' ";
									$log = $conn ->query($query);
									$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										$name = $row['username'];
										$ins = "insert into logs (username, activity) values('$name', 'Login')";
										$agdm14 = $conn ->query($ins);
										header('location:admin/dasboard.php');
										$_SESSION['id']=$row['user_id'];
										$_SESSION['username']=$row['username'];
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								else if($user_type=="Instructor")
								{
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password' and user_type='Instructor' ";
									$log = $conn ->query($query);
									$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:instructor/dasboard.php');
										$_SESSION['id']=$row['user_id'];
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								else if($user_type=="BSIT Officer")
								{
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password' and user_type='BSIT Officer' ";
								$log = $conn ->query($query);
								$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:officer/dasboard.php');
										$_SESSION['id']=$row['user_id'];
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								else if($user_type=="BSBA Officer")
								{
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password' and user_type='BSBA Officer' ";
								$log = $conn ->query($query);
								$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:officer/dasboard.php');
										$_SESSION['id']=$row['user_id'];
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								else if($user_type=="BSHM Officer")
								{
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password' and user_type='BSHM Officer' ";
								$log = $conn ->query($query);
								$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:officer/dasboard.php');
										$_SESSION['id']=$row['user_id'];
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								else if($user_type=="BSOA Officer")
								{
									$query = "SELECT * FROM users WHERE username='$username' AND password='$password' and user_type='BSOA Officer' ";
								$log = $conn ->query($query);
								$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:officer/dasboard.php');
										$_SESSION['id']=$row['user_id'];
										}
									else
										{ 
										header('location:access_denied.php');
										}
								}
								}
								?>