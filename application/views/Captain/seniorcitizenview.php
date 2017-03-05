<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('captain/nav_view'); ?>
        </header> 
        <div class="content-wrapper">
        	<section class="content">
        		<div class="row">
                    <div class="col-md-12">
                        <div class="box-footer">
                        	<center class="padding-top-20">
                        		<p>REPUBLIC OF THE PHILIPPINES</p>
								<p>	CITY OF CEBU</p>
								<p><label>OFFICE OF THE BANILAD CEBU SENIOR CITIZEN ASSOCIATION(BACSCA)</label></p>
								<p><label>BANILAD, CEBU CITY</label></p>
							</center>
                        	<br/><br/>	
							<div class="row padding-top-20">
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="lastname"> NAME: </label>
									 	<div class="form-control-static">
									 		<?= $formdata['firstname']?> 
									 		<?=  $formdata['middlename'] ?> 
									 		<?= $formdata['lastname']?>
									 	</div>
									</div>
								</div>
								<div class="col-md-2 padding-top-10">
									<div class="form-group">
										<label for="osca_id_no">OSCA ID NO:</label>
						 				<div class="form-control-static">
						 					<?= $formdata['osca_id_no'] ?>
						 				</div>
						 			</div>
								</div>
							</div>
							<div class="row ">
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="home_address">HOME ADDRESS:</label>
										<div class="form-control-static">
											<?= $formdata['home_address'] ?>
										</div>
									</div>	
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="prov_address">PROVINCIAL ADDRESS:</label>
								 		<div class="form-control-static">
								 			<?= $formdata['prov_address'] ?>
								 		</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="cellphone_no">CONTACT NO:</label>
								 		<div class="form-control-static"> 
								 			<?= $formdata['cellphone_no'] ?>
							 			</div>
									</div>	
								</div>
							</div>
							<div class="row ">
								<div class="col-md-4"></div>
								<div class="col-md-8 padding-top-10"></div>
							</div>
							<div class="row">
								<div class="col-md-4 padding-top-10">
		        					<div class="form-group">
										<label for="dateofbirth">DATE OF BIRTH:</label>						  
									  	<div class="form-control-static">
									  		<?= date_create($formdata['dateofbirth'])->format('F d, Y') ?>
										</div>
									</div>
								</div>
								<div class="col-md-8 padding-top-10">
									<div class="form-group">
										<label for="placeofbirth">PLACE OF BIRTH:</label>
								 		<div class="form-control-static">
								 			<?= $formdata['placeofbirth'] ?>
								 		</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 padding-top-10">
									<label for="sex">SEX:</label>
									<div class="form-control-static">
										<?= $formdata['sex']?>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="citizenship">CITITZENSHIP: </label>
								 		<div class="form-control-static">
								 			<?= $formdata['citizenship'] ?>
								 		</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="religion">RELIGON: </label>
								 		<div class="form-control-static">
								 			<?= $formdata['religion'] ?>
								 		</div>
								 	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="educational_attainment">EDUCATIONAL ATTAINMENT:</label>
									 	<div class="form-control-static">
									 		<?= edu_attainment_desc($formdata['educational_attainment'])?>
									 	</div>
									</div>
								</div>
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="skills">SKILLS:	</label>
									 	<div class="form-control-static">
									 		<?= $formdata['skills'] ?>
									 	</div>
									</div>
								</div>
							</div>
							
							<hr style="border-top:2px solid #cccccc; padding: 0; "/>
					
							<div class="row padding-top-10">
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
					                            <td><?= number_format($row['monthly_salary'], 2)?></td>
					                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
					                            
					                        </tr>
					                        
					                        <?php endforeach; ?>
					                      
					                    </tbody>
									</table>
								</div>
							</div>
							

			       			<hr style="border-top:2px solid #cccccc; padding: 0; "/>

							<div class="row">
								<div class="row padding-top-20">
									<div class="text-center">
										<label for="familyinfo"><u>MEMBERSHIP IN ORGANIZATION</u></label>
									</div>
								</div>
								<div class="col-md-12">
			                        <table class="table table-border not-datatable" border="1"> 
			                            <thead>
			                            	<th>#</th>
			                                <th>NAME OF ORGANIZATION</th>
			                                <th>POSTION</th>
			                                <th>YEAR OF SERVICE</th>
			                            </thead>
			                            <tbody>
			                            	<?php $org = json_decode($formdata['organizational_membership'], true);?>
			                               	<?php foreach ($org['name']  as $i => $name) : ?> 
				                       			<tr>    
						                      		<td><?= $i+1; ?></td>
						                            <td><?= ucfirst($name); ?></td>
						                            <td><?= $org['position'][$i]?></td>
						                            <td><?= $org['year_service'][$i]?></td>
						                            
				                        		</tr>
			                    			<?php endforeach; ?>
			                            </tbody>
			                         </table>
			                    </div>
			                </div>

							<hr style="border-top:2px solid #cccccc; padding: 0; "/>
       				
			                <br/><br/><br/>
							<div class="row padding-top-20">
								<div class="col-md-5 padding-top-10">
									<hr style="display: block; height: 2px; margin-left: 50px;	 border-top: 1px solid #000;padding: 0; ">
									<label style="margin-left:100px;">SIGNATURE OVER PRINTED NAME</label>
								</div>
								<div class="col-md-2 padding-top-10"></div>
								<div class="col-md-4 padding-top-10">
									<hr style="display: block; height: 2px; margin-left: 50px;	 border-top: 1px solid #000;padding: 0; ">
									<label style="margin-left:100px;">DATE ACCOMPLISHED</label>
								</div>
							</div>
						</div>
					</div> 
			 		
			 		<?php if($formdata['request_status'] != 'approved' ): ?>
                        <div class="col-md-12">
                            
                            <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                            <?php if($formdata['request_status'] != 'pending' && $formdata['request_status'] != 'approved'): ?>
                                    
                                    <?php if($formdata['request_status'] != 'reviewed'): ?>
                                        <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
                                    <?php endif; ?>
                                    <?php if($formdata['request_status'] != 'paid'): ?>
                                        <a href="<?= base_url("captain_listing/disapprove/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" class="btn btn-danger btn-flat btn-lg " onclick="return confirm('ARE YOU SURE? PLEASE CONFIRM.')"> DISAPPROVED REQUEST</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                        <a href="<?= base_url('captain_listing/view_paid?form_id=2')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
                            </form>   
                        </div>
                    <?php endif;?>   
                </div>
              <!-- /.row -->
            </section>
        </div>
    </div>
</body>