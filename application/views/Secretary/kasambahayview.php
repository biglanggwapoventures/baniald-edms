<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('secretary/nav_view'); ?>
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
												<?= ucfirst($formdata['employers_barangay']) ?>
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
												Banilad
											</div>
										</div>
									</div>
									<div class="row padding-top-10">
										<div class="col-md-4">
											<label>CITY OR MUNICPALITY: </label> 
											<div class="form-control-static">  
												Cebu
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
											<table class="table table-border not-datatable" border="1">
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
							                            <td><?= number_format($row['monthly_salary'],2)?></td>
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
											<label>MONTHLY SALARY:</label> <?= number_format($formdata['monthly_salary']) ?>
										</div>
										<div class="col-md-6">
											<label>NATURE OF WORK:</label> <?= ucfirst($formdata['nature_of_work']) ?>
										</div>
									</div>
									<br/>
									<div class="row">
										<div class="col-md-6">
											<label>EMPLOYMENT ARRANGEMENT:</label> <?= employment_arrangement($formdata['employment_arrangement']) ?>
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
            	<div class="row padding-top-20">
                    <div class="col-md-12">
                        <form action="<?= base_url("secretary_listing/reviewed/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                            <button type="submit" class="btn btn-success btn-flat btn-lg">
                            	<label>REVIEWED</label>
                            </button>
                            <a data-toggle="modal"  data-target="#feedback" class="btn btn-danger  btn-flat btn-lg"> <label>SEND FEEDBACK</label></a>
                            <a href="<?= base_url('secretary_listing/?form_id=5')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="fa fa-arrow-circle-o-left fa-arrow-circle-o-left fa-lg"></i> <label>BACK</label></a>
       					</form>   
     				</div>
		 		</div>    
             </section>
         </div>
     </div>
 </body>
 
<!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="ajax" action="<?= base_url('secretarycontroller/sendFeedback')?>" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:red;"><i class="fa fa-feed"></i> SEND FEEDBACK</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger hidden warning"></div>
                        <div class="form-group">
                            <label> ENTER YOUR MESSAGE HERE: *</label>
                            <textarea class="form-control" name="message"></textarea>
                            <input type="hidden" name="sent_to" value="<?= $formdata['resident_id']?>">
                            <input type="hidden" name="requests_forms_id" value="<?= $formdata['requests_forms_id']?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                </div>
            </form>
        </div>
    </div>
</div>