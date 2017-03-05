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
                                		<h4><label>EMPOWERMENT AND REAFFIRMATION OF PATERNAL ABILITIES 
                                			<br/><br/>REGISTRATION FORM</label></h4>
                             		</center>
									<div class="row padding-top-20">
										<div class="col-md-4 padding-top-10">
											<div class="form-group">
												<h4><label for="lastname">IDENTIFYING DATA</label></h4>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="name">NAME:</label>	
									 		<div class="form-control-static"> 
									 			<?= $formdata['lastname'] .', '. $formdata['firstname'] .' '. $formdata['middlename'] ?>
									 		</div>
										</div>
										
										<div class="col-md-4 padding-top-10"></div>
										<div class="col-md-4 padding-top-10"></div>
									</div>
									<div class="row ">
										<div class="col-md-4 padding-top-10">
											<div class="form-group">
												<label for="age">AGE:</label>
									 			<div class="form-control-static"> 
													<?= $formdata['age']?>
									 			</div>
											</div>
										</div>
										<div class="col-md-4 padding-top-10">
					    					<div class="form-group">
												<label for="dateofbirth">DATE OF BIRTH:</label>
										  		<div class="form-control-static"> 
										  			<?= date_create("{$formdata['dateofbirth']}")-> format('F d, Y')?></div>
											</div>
										</div>
										<div class="col-md-4 padding-top-10">
					    					<div class="form-group">
												<label for="dateofbirth">PLACE OF BIRTH: *</label>
										  		<div class="form-control-static"> 
										  		 	<?= $formdata['placeofbirth'] ?></div>
											</div>
										</div>	
									</div>
									<div class="row ">
										<div class="col-md-4 padding-top-10">
											<div class="form-group">
												<label for="housenumandstreet">HOME ADDRESS:</label>
									 		 	<div class="form-control-static"> 
									 		 		<?= $formdata ['home_address'] ?>
									 		 	</div>
											</div>
										</div>
										<div class="col-md-4 padding-top-10">
											<div class="form-group">
												<label for="occupation">OCCUPATION:</label>
										 		<div class="form-control-static"> 
										 			<?= $formdata['occupation'] ?>
										 		</div>
											</div>
										</div>
									</div>
									<div class="row padding-top-20">
										<div class="col-md-4 padding-top-10">
											<h4><label for="telno">CONTACT DETAILS</label></h4>
										</div>
									</div>
									<div class="row padding-top-10">
										<div class="col-md-4">
											<div class="form-group">
												<label for="telephone_no">TELEPHONE NO:</label>
										 		<div class="form-control-static"> 
										 			<?= $formdata['telephone_no'] ?>
										 		</div>
											</div>
										</div>
										<div class="col-md-4">
				    						<div class="form-group">
												<label for="mobileno">MOBILE NO: </label>
									  			<div class="form-control-static"> 
									  				<?= $formdata['cellphone_no'] ?>
									  			</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="gender">SEX:</label>
									  		<div class="form-control-static">
									  			 <?= $formdata['sex'] ?>
									  		</div>
										</div>
										<div class="col-md-8">
											<label for="gender">CIVIL STATUS: </label>
									  		<div class="form-control-static"> 
									  			<?= $formdata['civil_status'] ?>
									  		</div>
										</div>
										<div class="col-md-4"></div>
									</div>
									<div class="row">
										<div class="col-md-12 padding-top-10">
											<label for="educational_attainment">Educational Attainment</label>
								  			<div class="form-control-static"> 
								  				<?= edu_attainment_desc($formdata['educational_attainment']) ?>
								  			</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 padding-top-10">
											<h4><label for="family_composition">FAMILY COMPOSITION</label>	</h4>
										</div>
										<div class="col-md-12 padding-top-10">
											<table class="table table-border not-datatable" border="1">
												<thead>
						                			<th>NAME</th>
							                        <th>RELATION</th>
							                        <th>AGE</th>
							                        <!-- <th>OCCUPATION</th> -->
							                       <!--  <th>INCOME</th>
							                        <th>EDUCATIONAL ATTAINMENT</th> -->
						          			  	</thead>
						            			<tbody>
							                        <?php foreach ($formdata['fc'] as $row) : ?> 
							                        <tr>    
							                      
							                            <td><?= ucfirst($row['name']) ?></td>
							                            <td><?= ucfirst($row['relationship'])?></td>
							                            <td><?= $row['family_age']?></td>
							                            <!-- <td><?= ucfirst($row['family_occupation']) ?></td> -->
							                          <!--   <td><?= $row['monthly_salary']?></td>
							                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td> -->
							                           </tr>
							                        
							                        <?php endforeach; ?>
							                     </tbody>
											</table>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 padding-top-20">
											<label for="special_abilities">SPECIAL ABILITIES:</label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 padding-top-20">
											<label for="skills">SKILLS/TALENT:</label>
												<div class="form-control-static">
													<?= $formdata['skills'] ?></div>
										</div>
										<div class="col-md-4 padding-top-20">
											<label for="hobbies">HOBBIES:</label>
												<div class="form-control-static"> 
													<?= $formdata['hobbies'] ?>
												</div>
										</div>
										<div class="col-md-4 padding-top-20">
											<label for="other_skills">OTHER SKILLS:</label>
												<div class="form-control-static">
													 <?= $formdata['other_skills'] ?>
												</div>
										</div>
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
			                <br/>
			                        <a href="<?= base_url('captain_listing/view_pending?form_id=6')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
		            	</form>   
	            	</div>
	      			<?php endif;?>
      			</div>
			</section>
		</div>
		</div>
	</div>
</body>