<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<?php include('head.php'); ?>
                <div class="span2">		
                    <?php include('dashboard_sidebar.php'); ?>
                </div>	
                <div class="span12" style="max-width:948px	;margin-left: 50px;max-height: 100%">
                    
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Acitvity Logs</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Activity</th>                                 
                                        <th>Date</th>                                 
                                        <th>Time</th>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query="select * from logs";
                                  $user = $conn ->query($user_query);

									while($row=mysqli_fetch_array($user)){
									$id=$row['id']; ?>
                                    <tr class="del<?php echo $id ?>">
                                        <td><?php echo $row['username']; ?></td> 
                                        <td><?php echo $row['activity']; ?></td> 
                                        <td><?php echo $row['date']; ?></td> 
                                        <td><?php echo $row['time']; ?></td> 
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>