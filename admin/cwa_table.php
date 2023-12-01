 				<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>CWA:</td> 
								   <td>


											      <?php
							
                            $result1 = "SELECT sum(gen_ave) FROM grade  where student_id = '$session_id'";
                            $cwa = $conn ->query($result1);

                            
							
							
							
							$test_count1="select * from grade where gen_ave <> '' and student_id = '$session_id'  ";
							$cwa1 = $conn ->query($test_count1);

							$count_gen1 = mysqli_num_rows($cwa1);
							
							while ($rows1 = mysqli_fetch_array($cwa)) {
							
							
							
                                ?>
						
									<?php if ($count_gen1  <= 0){ ?>
									 
							<?php }else{ ?>
									<?php $ave1 = $rows1['sum(gen_ave)']; 
											  $equal1 = $ave1 / $count_gen1;
											  echo round($equal1 , 2);
									?>
						
                            <?php } }?>
								   
								   </td> 
								   <td></td> 
								   <td></td> 
								</tr>