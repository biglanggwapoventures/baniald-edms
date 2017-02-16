<div class="col-md-9">
	<div class="panel panel-default">
		<!-- Heading -->	
		<div class="panel-heading">
				<h4><label><i class="fa fa-file"></i> &nbsp;&nbsp;&nbsp;REQUEST FOR PERSON WITH DISABILITY REGISTRATION FORM </label></h4>
		</div>
		<!--Close Panel Heading -->	
		
		<form action="<?= base_url('Person_with_disabilities/store') ?>" method= "POST" class="ajax" data-next="<?= base_url('Person_with_disabilities/preview_form')?>">
			<!-- Start Panel Body -->

			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
					<div class="row ">
						<div class="col-md-2 padding-top-10">
							<div class="form-group  <?= form_error('pwd_number') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="pwd_number">PWD NUMBER: *</label>
					 				<input type="text" class="form-control" name="pwd_number" id="pwd_number" placeholder="" value="<?php echo set_value('pwd_number');?>" >
					 				<?= form_error('pwd_number', '<span class="help-block">', '</span>') ?>    	
								</div>
							</div>
						</div>
						<div class="col-md-6"></div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="date">DATE:</label>
						  		<!-- <input type="text" class="form-control" name="date" id="date" placeholder="" value="<?php echo date("M d, Y"); ?>"> -->
						  		<p class="form-control-static"><?php echo date('M d, Y') ?></p>
							</div>
						</div>		
					</div>	
					<div class="row ">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="lastname">LAST NAME:</label>
				 				<!-- <input type="text" class="form-control" name= "lastname" id="lastname" value=  "<?php echo $lastname ?>" placeholder="" readonly="readonly"> -->
				 				<p class="form-control-static"><?= $lastname ?></p>	
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="firstname">FIRST NAME: </label>
					  			<!-- <input type="text" class="form-control" name="firstname" id="firstname"  value=  "<?php echo $firstname ?>" placeholder="" readonly="readonly"> -->
					  			<p class="form-control-static"><?= $firstname ?></p>	

							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="middlename">MIDDLE NAME: </label>
						  		<!-- <input type="text" class="form-control" name="middlename" id="middlename" value=  "<?php echo $middlename ?>" placeholder=""> -->
						  		<p class="form-control-static"><?= $middlename ?></p>	
							</div>
						</div>
					</div>
					<hr style="border-top:2px solid #cccccc; padding: 0; "/>
					<div class="row ">
						<div class="col-md-6 padding-top-10">
							<div class="form-group  <?= form_error('type_disability') ? 'has-error' : ''?>">
	                    		<label for="type_disability">TYPE OF DISABILITY: *</label>
	                    		<?=  form_dropdown('type_disability',[
	                    			'select' => 'Choose Type of Disablity',
			                        'psychology'=>'Psychology', 
			                        'mental'=> 'Mental', 
			                        'hearing'=>'Hearing', 
			                        'chronic_illness'=>'Chronic_illness', 
			                        'visual'=> 'Visual', 
			                        'speech_impairment'=> 'Speech_impairment', 
			                        'learning'=> 'Learning',
			                        'orthopedic'=> 'Orthopedic',
			                        'multiple' => 'Multiple'
	                    		],  
	                    		['type_disability'], 'class = "form-control" ')?>
	                    		<?= form_error('type_disability', '<span class="help-block">', '</span>') ?> 
	                		</div>
	              		</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group  <?= form_error('causes_of_disability') ? 'has-error' : ''?>">
	                    		<label for="causes_of_disability">CAUSE OF DISABILITY: *</label>
	                    			<?=  form_dropdown('causes_of_disability',[
	                    				'select' => 'Choose Cause of Disablity',
				                        'congenital'=>'Congenital', 
				                        'illness'=> 'Illness', 
				                        'accident'=>'Acquired/Accident'
	                    			],  
	                    			['causes_of_disability'], 'class = "form-control" ')?>
	                    			<?= form_error('causes_of_disability', '<span class="help-block">', '</span>') ?> 
	                		</div>
						</div>
					</div>
					<hr style="border-top:2px solid #cccccc; padding: 0; "/>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="home_address">HOME ADDRESS</label>
						</div>
					</div> 
					<div class="row ">
						<div class="col-md-4 padding-top-20">
							<div class="form-group  <?= form_error('home_address') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="home_address">HOUSE NO. AND STREET: </label>
					 				<!-- <input type="text" class="form-control" name= "home_address" id="home_address" value=  "<?php echo $home_address ?>" placeholder=""> -->
					 				<p class="form-control-static"><?php echo $data['home_address'] ?></p>
								</div>
								<?= form_error('home_address', '<span class="help-block">', '</span>') ?> 
							</div>
						</div>
						<div class="col-md-4 padding-top-20">
							<div class="form-group">
								<label for="barangay">BARANGAY: </label>
				  				<!-- <input type="text" class="form-control" name="barangay" id="barangay"  value=  "<?php echo $barangay ?>"  placeholder=""> -->
				  				<p class="form-control-static"><?php echo $data['barangay'] ?></p>
							</div>
						</div>
						<div class="col-md-4 padding-top-20">
							<div class="form-group">
								<label for="municipality">SITIO: </label>
				  				<!-- <input type="text" class="form-control" name="municipality" id="municipality"  value=  "<?php echo $municipality ?>"placeholder=""> -->
				  				<p class="form-control-static"><?php echo $data['sitio'] ?></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="prov_address">PROVINCE:</label>
				  				<!-- <input type="text" class="form-control" name="prov_address" id="prov_address" value=  "<?php echo $prov_address ?>" placeholder=""> -->
				  				<p class="form-control-static"><?php echo $data['prov_address'] ?></p>
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="region">REGION:</label>
				  				<!-- <input type="text" class="form-control" name="region" id="region"  value=  "<?php echo $region ?>"  placeholder=""> -->
				  				<p class="form-control-static"><?php echo $data['region'] ?></p>
							</div>
						</div>
						<div class="col-md-4 padding-top-20">
							<div class="form-group">
								<label for="municipality">MUNICIPALITY:</label>
				  				<!-- <input type="text" class="form-control" name="municipality" id="municipality"  value=  "<?php echo $municipality ?>"placeholder=""> -->
				  				<p class="form-control-static"><?php echo $data['municipality'] ?></p>
							</div>
						</div>
					</div>
			    	<hr style="border-top:2px solid #cccccc; "/>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="telno">CONTACT DETAILS</label>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 padding-top-10">
							<div class="form-group  <?= form_error('telephone_no') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="telephone_no">TELEPHONE NO:</label>
					 				<!-- <input type="text" class="form-control" value="<?php echo set_value('telephone_no');?>"  name= "telephone_no" id="telephone_no" placeholder=""> -->
					 				<p class="form-control-static"><?= $telephone_no ?></p>	
								</div>
								<?= form_error('telephone_no', '<span class="help-block">', '</span>') ?> 
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group  <?= form_error('cellphone_no') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="cellphone_no">MOBILE NO:</label>
							  		<!-- <input type="text" class="form-control" value="<?php echo set_value('cellphone_no');?>"  name="cellphone_no" id="cellphone_no" placeholder=""> -->
							  		<p class="form-control-static"><?= $cellphone_no ?></p>	

								</div>
								<?= form_error('cellphone_no', '<span class="help-block">', '</span>') ?> 
							</div>
						</div>
						<div class="col-md-5 padding-top-10">
							<div class="form-group  <?= form_error('email_address') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="email_address">EMAIL ADDRESS:</label>
							  		<!-- <input type="email" class="form-control" name="email_address"  value="<?php echo set_value('email_address');?>"  id="email_address" placeholder=""> -->
							  		<p class="form-control-static"><?= $email_address ?></p>
								</div>
								<?= form_error('email_address', '<span class="help-block">', '</span>') ?> 
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 padding-top-10">
							<div class="form-group  <?= form_error('dateofbirth') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="dateofbirth">DATE OF BIRTH:	</label>
							 		<!-- <input type="date" class="form-control" name="dateofbirth" value=  "<?php echo $dateofbirth ?>" id="dob" placeholder=""> -->
							 		<p class="form-control-static"><?php echo date_create($data['dateofbirth'] ) -> format('F d, Y')?></p>
								</div>
								<?= form_error('dateofbirth', '<span class="help-block">', '</span>') ?> 
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<label for="sex">SEX: </label>
					  		<p class="form-control-static"><?php echo $data['sex'] ?></p>
						</div>
						<div class="col-md-4 padding-top-10">
							<label for="civil_status">CIVIL STATUS:</label>
					  			<p class="form-control-static"><?= $civil_status ?></p>
						</div>
					</div>
					<hr style="border-top:2px solid #cccccc; padding: 0; "/>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<label>EDUCATIONAL ATTAINMENT:</label>
							<p class="form-control-static"><?php echo edu_attainment_desc($data['educational_attainment']) ?></p>
						</div>
					</div>
					<hr style="border-top:2px solid #cccccc; padding: 0; "/>
					<div class="row ">
						<div class="col-md-12 padding-top-10">
								
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<label>WORK INFORMATION:</label>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-12 padding-top-10">
							<div class="form-group  <?= form_error('employment_status') ? 'has-error' : ''?>">	
								<label for="employment_status">EMPLOYMENT STATUS: *</label>
					  				<div class="radio">
										<label>
											<input type="radio" name="employment_status" value="employed">Employed</label>&nbsp;
										<label>
											<input type="radio" name="employment_status" value="Unemployed">Unemployed
										</label>
									</div>
									<?= form_error('employment_status', '<span class="help-block">', '</span>') ?>
							</div>		
						</div>
					</div>
					<div class="row ">
						<div class="col-md-6 padding-top-10">
							<div class="form-group  <?= form_error('nature_of_employment') ? 'has-error' : ''?>">	
								<label for="nature_of_employment">NATURE OF EMPLOYER (PLEASE CHECK ONE IF EMPLOYED): *</label>
					  				<div class="radio">
										<label>
											<input type="radio" name="nature_of_employment" value="private">Private</label>&nbsp;
										<label>
											<input type="radio" name="nature_of_employment" value="government">Government
										</label>
									</div>
									<?= form_error('nature_of_employment', '<span class="help-block">', '</span>') ?>
							</div>	
						</div>
						<div class="col-md-12 padding-top-10">
							<div class="form-group  <?= form_error('type_of_employment') ? 'has-error' : ''?>">	
								<label for="type_of_employment">TYPE OF EMPLOYMENT(PLEASE CHECK ONE IF EMPLOYED):</label>
						  		<div class="radio">
									<label>
										<input type="radio" name="type_of_employment" value="contractual">Contractual</label>&nbsp;
									<label>
										<input type="radio" name="type_of_employment" value="permanent">Permanent&nbsp;
									</label>
									<label>
										<input type="radio" name="type_of_employment" value="selfemployed">Self-Employed&nbsp;
									</label>
									<label>
										<input type="radio" name="type_of_employment" value="seasonal">Seasonal
									</label>
								</div>
								<?= form_error('type_of_employment', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-4 padding-top-10">
							<div class="form-group  <?= form_error('occupation') ? 'has-error' : ''?>">	
								<label for="occupation">OCCUPATION (CHECK ONE):</label>
								<div class="radio">
									<label>
										<input type="radio" name="occupation" value="officials">Officials of Government and Special Interest Organization, Corporate Executives, Managers, Managing Proprieors and Supervisors
									</label>
									<label>
										<input type="radio" name="occupation" value="professionals">Professionals
									</label>
									<label>
										<input type="radio" name="occupation" value="technandprofs">Technicians and Associate Professionals
									</label>
									<label>
										<input type="radio" name="occupation" value="clerks">Clerks
									</label>
									<label>
										<input type="radio" name="occupation" value="serviceandmarketworkers">Service Workers and Shop and Market Sales Workers
									</label>
									<label>
										<input type="radio" name="occupation" value="farmersforestryandfisherman">Farmers, Forestry Workers and Fishermen
									</label>
									<label>
										<input type="radio" name="occupation" value="trades">Trades and Related Workers
									</label>
									<label>
										<input type="radio" name="occupation" value="plantandmachine">Plant and Machine Operators and Assemblers
									</label>
									<label>
										<input type="radio" name="occupation" value="laborers">Laborers&nbsp; 
									</label>
									<label>
										<input type="radio" name="occupation" value="unskilled">Unskilled Workers
									</label>
									<label>
										<input type="radio" name="occupation" value="special">Special Occupation
									</label>
									<label>
										<input type="radio" name="occupation" value="notapplicable">Not Applicable
									</label>	
								</div>
								<?= form_error('occupation', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-2 padding-top-10"></div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group  <?= form_error('id_ref_no') ? 'has-error' : ''?>">	
								<div class="form-group">
									<label for="id_ref_no">ID REFERENCE N0:</label>
							 		<input type="text" class="form-control" name="id_ref_no" id="id_ref_no" placeholder="">
								</div>
								<?= form_error('id_ref_no', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-2 padding-top-10"></div>
						<div class="col-md-3">
							<div class="form-group  <?= form_error('sss_no') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="sss_no">SSS No:</label>
									<div class="form-control-static"> <?= $sss_no ?></div>
							  		<!-- <input type="text" class="form-control" name="sss_no" id="sss_no" placeholder=""> -->
								</div>
								<?= form_error('sss_no', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group  <?= form_error('gsis_no') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="gsis_no">GSIS NO: </label>
									<div class="form-control-static"> <?= $gsis_no ?></div>
							  		<!-- <input type="text" class="form-control" name="gsis_no" id="gsis_no" placeholder=""> -->
								</div>
								<?= form_error('gsis_no', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-2 padding-top-10"></div>
						<div class="col-md-6">
							<div class="form-group  <?= form_error('pag_ibig_no') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="pag-ibig_no">PAG-IBIG NO: </label>
									<div class="form-control-static"> <?= $pag_ibig_no ?></div>
							  	<!-- 	<input type="text" class="form-control" name="pag_ibig_no" id="pag_ibig_no	" placeholder=""> -->
								</div>
								<?= form_error('pag_ibig_no', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-2 padding-top-10"></div>
						<div class="col-md-6">
							<div class="form-group  <?= form_error('philhealth_no') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="philhealth_no">PHILHEALTH NO:</label>
									<div class="form-control-static"> <?= $philhealth_no ?></div>
							  		<!-- <input type="text" class="form-control" name="philhealth_no" id="philhealth_no" placeholder=""> -->
								</div>
								<?= form_error('philhealth_no', '<span class="help-block">', '</span>') ?>	
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 padding-top-10"></div>
							<div class="col-md-4 padding-top-10">
								<label for="philhealth_status">PHILHEALTH STATUS:</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 padding-top-10"></div>
							<div class="col-md-6">
								<div class="form-group  <?= form_error('philhealth_status') ? 'has-error' : ''?>">
									<div class="radio">
										<label>
											<input type="radio" name="philhealth_status" value="Member">PhilHealth Member
										</label>
										<label>
											<input type="radio" name="philhealth_status" value="member_dependent">PhilHealth Member Dependent
										</label>	
									</div>
									<?= form_error('philhealth_status', '<span class="help-block">', '</span>') ?>	
								</div>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<div class="form-group  <?= form_error('blood_type') ? 'has-error' : ''?>">
								<label>BLOOD TYPE:</label>	
								<div class="radio">
									<label>
											<input type="radio" name="blood_type" value="a+">A+ 
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="a-">A-
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="b+">B+
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="b=">B-
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="ab+">AB+
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="ab-">AB-
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="0+">O+
										</label>&nbsp;
										<label>
											<input type="radio" name="blood_type" value="o-">O-
										</label>	
									</div>
									<?= form_error('blood_type', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<label>
								ORGANIZATIONAL INFORMATION
							</label>
						</div>
						<div class="col-md-12">
							<div class="form-group  <?= form_error('affilated_org') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="orgaffiliated">ORGANIZATION AFFILIATED: </label>
							  		<input type="text" class="form-control" name="affilated_org" id="affilated_org" placeholder="">
								</div>
								<?= form_error('affilated_org', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group  <?= form_error('contact_person') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="contact_person">CONTACT PERSON:</label>
						  			<input type="text" class="form-control" name="contact_person" id="contact_person" placeholder="">
								</div>
								<?= form_error('contact_person', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group  <?= form_error('office_address') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="office_address">OFFICE ADDRESS:</label>
						  			<input type="text" class="form-control" name="office_address" id="office_address" placeholder="">
								</div>
								<?= form_error('office_address', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group  <?= form_error('office_telephone_no') ? 'has-error' : ''?>">									<div class="form-group">
									<label for="office_telephone_no">TELEPHONE NO:</label>
							  		<input type="text" class="form-control" name="office_telephone_no" id="office_telephone_no" placeholder="">
								</div>
								<?= form_error('office_telephone_no', '<span class="help-block">', '</span>') ?>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<label for="">PARENTAL INFORMATION</label>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-6">	
								<table class="table table-bordered not-datatable">
		                    		<thead>
				                        <th>NAME</th>
				                        <th>RELATIONSHIP</th> 
		                    		</thead>
		                    		<tbody>

		                        		<?php foreach ($family_composition as $row) : ?> 
		                        
			                        		<tr>    
			                 
			                            		<td><?= ucfirst($row['name']) ?></td>
			                            		<td><?= ucfirst($row['relationship'])  ?></td>
			                          
			                        		</tr>
			                        
		                       			 <?php endforeach; ?>
		                      
		                   		 	</tbody>
               					</table>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-6">
							<div class="form-group  <?= form_error('fathers_name') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="fathers_lastname">NAME: *</label>
							 		<input type="text" class="form-control" name="fathers_name" id="fathers_name" placeholder="">
								</div>
								<?= form_error('fathers_name', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group  <?= form_error('mothers_name') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="mothers_lastname">Name: *</label>
							 		<input type="text" class="form-control" name="mothers_name" id="mothers_name" placeholder="">
								</div>
								<?= form_error('mothers_name', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
					</div> -->
					<div class="row ">
						
						<div class="col-md-6 padding-top-10">
							<label for="accomplished_by">ACCOMPLISHED BY:</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 ">
							
								<div class="form-group">
										<p class="form-control-static">	
												<?= $firstname .' '. $middlename .' '. $lastname ?>
										</p>	
									
								</div>
								
							</div>
						</div>
							
					<div class="row ">
						<div class="col-md-12 padding-top-10">
							<label for="">NAME OF REPORTING UNIT</label>
						</div>
						
					</div>
					<div class="row ">
						<div class="col-md-8">
							<div class="form-group  <?= form_error('name_of_reporting_unit') ? 'has-error' : ''?>">
								<div class="form-group">
									<label for="lastname">Name: *</label>
							 		<input type="text" class="form-control" name= "name_of_reporting_unit" id="name_of_reporting_unit" placeholder="">
								</div>
								<?= form_error('name_of_reporting_unit', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group  <?= form_error('registration_no') ? 'has-error' : ''?>">	
								<div class="form-group">
								<label for="registration_no">REGISTRATION NO: *</label>
							  		<input type="text" class="form-control" name="registration_no" id="registration_no" placeholder="">
								</div>
								<?= form_error('registration_no', '<span class="help-block">', '</span>') ?>
							</div>
						</div>
						<div class="col-md-4 padding-top-10"></div>
						<div class="col-md-4 padding-top-10"></div>
					</div>
				</div>

					<!-- Submit Button-->
					<div class="panel-footer">
						<div class="row padding-top-10">	
							<div class="col-md-4"></div>
							<div class="col-md-4"></div>
							<div class="col-md-4"> 
								<input type="submit" value="GENERATE FORM" class="btn btn-primary " style="font-weight:bold;"/>
							</div>
						</div>
					</div>
				</div>
			</form>
		<div class="col-md-4"></div>
	</div>
</div>