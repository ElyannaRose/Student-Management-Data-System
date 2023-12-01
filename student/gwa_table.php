	<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>GWA:</td> 
								   <td>
								   						<?php
							
                            $result = "SELECT sum(gen_ave) FROM grade  where student_id = '$session_id' and school_year = '$school_year' and semester = '$term'";
                            $gwa = $conn ->query($result);

                            
							
							
							
							$test_count="select * from grade where gen_ave <> '' and student_id = '$session_id' and school_year = '$school_year' and semester = '$term' ";
							$gwa1 = $conn ->query($test_count);

							$count_gen = mysqli_num_rows($gwa1);
							
							while ($rows = mysqli_fetch_array($gwa)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(gen_ave)']; 
											  $equal = $ave / $count_gen;
											  echo round($equal , 2);
									?>
						
                            <?php } }?>
								   
								   </td> 
								   <td></td> 
								   <td></td> 
								</tr>