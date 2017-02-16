<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('captain/nav_view'); ?>
        </header>
    	<div class="content-wrapper">
       		<section class="content">
            	<div class="row">
                	<div class="col-md-12">     
                		<div class="row">
                            <div class="col-md-12">
                                <div class="box-footer">
									<center>
										<h3><label>Kasambahay Registration Form</label></h3>	
									</center>
									<div class="row">
										<div class="col-md-4">
											<h4><label>I. PERSONAL INFORMATION</label></h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label>FIRST NAME:</label>
											<div class="form-control-static">
												<?= $formdata['firstname'] ?>
											</div>
										</div>
										<div class="col-md-4">
											<label>MIDDLE NAME:</label>
											<div class="form-control-static">
												 <?= $formdata['middlename'] ?>
											</div>
										</div>
										<div class="col-md-4"> 
											<label>LAST NAME:</label> 
											<div class="form-control-static">
												<?= $formdata['lastname'] ?>
											</div>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<div class="row">
										<div class="col-md-4">
											<h4><label>EMPLOYER'S ADDRESS:</label></h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label>HOUSE NO AND STREET:</label>    
											<div class="form-control-static">
												<?= $formdata['employers_home_address'] ?>
											</div>
										</div>
										<div class="col-md-4">
											<label>SUBDIVISION/ BARANGAY: </label> 
											<div class="form-control-static"> 
												<?= $formdata['employers_barangay'] ?>
											</div>
										</div>
									</div>
									<div class="row padding-top-10">
										<div class="col-md-4">
											<label>CITY OR MUNICPALITY: </label> 
												<div class="form-control-static">  
													<?= $formdata['employers_municipality'] ?>
												</div>
										</div>
										<div class="col-md-4">
											<label>PROVINCE: </label> 
											<div class="form-control-static">  
												<?= $formdata['employers_province'] ?>
											</div>
										</div>	
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<div class="row">
										<div class="col-md-4">
											<h4><label>HOME ADDRESS:</label></h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label>HOUSE NO AND STREET:</label> 
											<div class="form-control-static">  
												<?= $formdata['home_address'] ?>
											</div>
										</div>
										<div class="col-md-6">
											<label>SUBDIVISION/ BARANGAY: </label> 
											<div class="form-control-static">  
												<?= $formdata['barangay'] ?>
											</div>
										</div>
									</div>
									<div class="row padding-top-10">
										<div class="col-md-4">
											<label>CITY OR MUNICPALITY: </label> 
											<div class="form-control-static">  
												<?= $formdata['municipality'] ?>
											</div>
										</div>
										<div class="col-md-6">
											<label>PROVINCE: </label>
											<div class="form-control-static">  
												 <?= $formdata['prov_address'] ?>
											</div>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<div class="row padding-top 20">
										<div class="col-md-4">
											<label>SEX:</label>  
											<div class="form-control-static">  
												<?= $formdata['sex']?>
											</div>
										</div>
										<div class="col-md-4">
											<label>CIVIL STATUS:</label> 
											<div class="form-control-static">  
												<?= $formdata['civil_status']?>
											</div>
										</div>
										<div class="col-md-4">
											<label>AGE:</label> 
											<div class="form-control-static">  
												<?= $formdata['age']?>
											</div>
										</div>
									</div>
									<div class="row padding-top-10">
										<div class="col-md-4">
											<label>DATE OF BIRTH:</label>
											<div class="form-control-static">  
												<?= date_create("{$formdata['dateofbirth']}")->format('F d, Y')?>
											</div>
										</div>
										<div class="col-md-4">
											<label>CONTACT NO:</label>  
											<div class="form-control-static">  
												<?= $formdata['cellphone_no']?>
											</div>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<div class="row padding-top-20">
										<div class="col-md-4">
											<label>SSS NO:</label> <?= $formdata['sss_no'] ?>
										</div>
										<div class="col-md-4">
											<label>PAG-IBIG NO:</label>  <?= $formdata['pag_ibig_no'] ?>
										</div>
										<div class="col-md-4">
											<label>PHILHEALTH NO:</label> <?= $formdata['philhealth_no'] ?>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>	
									<div class="row">
										<div class="col-md-4">
											<h4><label>II. FAMILY INFORMATION</label></h4>
										</div>
									</div>
									<br>

									<div class="row">
										<div class="text-center">
											<label for="familyinfo"><u>FAMILY COMPOSITION</u></label>
										</div>
										<div class="col-md-12 padding-top-10">
											<table class="table table-border not-datatable">
												<thead>
						                			<th>NAME</th>
							                        <th>RELATION</th>
							                        <th>AGE</th>
							                        <th>OCCUPATION</th>
							                        <th>INCOME</th>
							                        <th>EDUCATIONAL ATTAINMENT</th>
						          			  	</thead>
						            			<tbody>
							                        <?php foreach ($formdata['fc'] as $row) : ?> 
							                        <tr>    
							                      
							                            <td><?= ucfirst($row['name']) ?></td>
							                            <td><?= ucfirst($row['relationship'])?></td>
							                            <td><?= $row['family_age']?></td>
							                            <td><?= ucfirst($row['family_occupation']) ?></td>
							                            <td><?= $row['monthly_salary']?></td>
							                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
							                            
							                        </tr>
							                        
							                        <?php endforeach; ?>
							                      
							                    </tbody>
											</table>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<div class="row padding-top-20">
										<div class="col-md-6">
											<label>IN CASE OF EMERGENCY, CONTACT PERSON:</label>
											<div class="form-control-static">
												 <?= $formdata['incase_of_emergency'] ?>
											</div>
										</div>
										<div class="col-md-6">
											<label>CONTACT NO:</label>  
											<div class="form-control-static">
												<?= $formdata['emergency_contact_no'] ?>
											</div>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<div class="row">
										<div class="col-md-6">
											<h4><label>III. Educational Attainment</label></h4>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>HIGHEST EDUCATIONAL ATTAINMENT:</label>
											 <?= edu_attainment_desc($formdata['educational_attainment']) ?>
										</div>
									</div>
									<br><br/>
									<div class="row">
										<div class="col-md-6">
											<h4><label>IV. WORK INFORMATION</label></h4>
										</div>
									</div>
									<br/>
									<div class="row">
										<div class="col-md-6">
											<label>MONTHLY SALARY:</label><?= $formdata['monthly_salary'] ?>
										</div>
										<div class="col-md-6">
											<label>NATURE OF WORK:</label> <?= $formdata['nature_of_work'] ?>
										</div>
									</div>
									<br/>
									<div class="row">
										<div class="col-md-6">
											<label>EMPLOYMENT ARRANGEMENT:</label> <?= $formdata['employment_arrangement'] ?>
										</div>
										<div class="col-md-6">
											<label>NAME OF EMPLOYER:</label> <?= $formdata['name_of_employer'] ?>
										</div>
									</div>
									<hr style="border-top:2px solid #cccccc; padding: 0; "/>
									<hr>
									<div class="row">
										<div class="col-md-8"></div>
										<div class="col-md-4">
											<label> ________________________</label>
											<br/>
											<label>SIGNATURE OF KASAMBAHAY</label>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<label>RECEIVED BY: _______________________</label>
											<br/>
											<label style="padding-left:80px;">KASAMBAHAY DESK OFFICER</label>
										</div>
										
									</div>
									<br><br>
									<div class="row">
										<div class="col-md-6">
											<label>DATE:</label>
												<div class="form-control-static">
													<?= date('F d, Y') ?>
												</div>
										</div>
									</div>
									
								</div>
                			</div>
                		</div> 
                	</div>
                </div> 
			        <?php if($formdata['request_status'] != 'approved' ): ?>

			        <div class="row padding-top-20">
				        <div class="col-md-12">
				            
				                      <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFRIM.')">
				                     <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
				                     
				                      <a href="#" class="btn btn-danger btn-flat btn-lg "> SEND FEEDBACK </a>
				                       <a href="<?= base_url('captain_listing/view_pending?form_id=5')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
				                </form>   
				        </div>
			        </div>
			       	<?php endif;?> 
             </section>
         </div>
     </div>
 </body>