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
			  			<ul class="nav nav-tabs nav-stacked">
                                            <li style="width: 170px">
                                            <a href="#add_session" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add School Year</strong></a>
                                            </li>
                                        </ul>

                                        <?php include('modal_add_session.php'); ?>
                                        
            
           
            
            
                    
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;School Year Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>School Year</th>
                                        <th>School Year Start</th>                                 
                                        <th>School Year End</th>                                 
                                        <th>Date Created</th>                                               
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php $session_query="select * from session";
                                  $session = $conn ->query($session_query);

                                    while($row=mysqli_fetch_array($session)){
                                    $id=$row['session_id']; ?>
                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['session_start']."-".$row['session_end']; ?></td> 
                                    <td><?php echo $row['session_start']; ?></td> 
                                    <td><?php echo $row['session_end']; ?></td> 
                                    <td><?php echo $row['session_date_created']; ?></td>  
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_session<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_session_modal.php'); ?>
                                       
                                    </td>
                                    <?php include('toolttip_edit_delete.php'); ?>
                                         <!-- Modal edit user -->
                                
                                    </tr>
                                    <?php } ?>
                           
                                </tbody>
                            </table>			

			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>