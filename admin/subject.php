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
                                            <li style="width: 130px">
                                            <a href="#add_subject" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add Course</strong></a>
                                            </li>
                                        </ul>

                                        <?php include('modal_add_subject.php'); ?>
                                        
            
           
            
            
                    
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Course Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course title</th>
                                         <th>Course Unit</th> 
                                        <th>Pre-requisite</th> 
                                       

                                                                                     
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php $subject_query="select * from subject";
                                  $subject = $conn ->query($subject_query);

                                    while($row=mysqli_fetch_array($subject)){
                                    $id=$row['subject_id']; ?>
                                     <tr class="del<?php echo $id ?>">
                                  
                                    <td><?php echo $row['subject_code']; ?></td>  

                                    <td><?php echo $row['subject_title']; ?></td>  
                                    <td><?php echo $row['subject_unit']; ?></td>  
                                    <td><?php echo $row['subject_pre_req']; ?></td>  
                                 
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_section<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_subject_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        <?php include('modal_edit_subject.php'); ?>
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