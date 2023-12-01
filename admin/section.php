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
                                            <a href="#add_section" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add Section</strong></a>
                                            </li>
                                        </ul>

                                        <?php include('modal_add_section.php'); ?>
                                        
            
           
            
            
                    
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Section Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Section Code</th>
                                        <th>Section Curiculum</th>                                                                  
                                        <th>Date Created</th>                                               
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php $section_query="select * from section";
                                  $section = $conn ->query($section_query);

                                    while($row=mysqli_fetch_array($section)){
                                    $id=$row['section_id']; ?>
                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['section_course']." ".$row['section_year']."-". $row['section_code']; ?></td> 
                                    <td><?php echo $row['section_curiculum']; ?></td>  
                                    <td><?php echo $row['section_date_created']; ?></td>  
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_section<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_section_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        <?php include('modal_edit_section.php'); ?>
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