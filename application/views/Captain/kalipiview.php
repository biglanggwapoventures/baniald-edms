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
	                       	<div class="row">
				                <div class="col-md-4 col-md-offset-8">
				                    <div style="width:100px; border:1px solid #000; padding:80px; margin-left:120px;"></div> 
				                    <p style="margin-left:42%; font-weight: bold;">PLACE 2x2 PHOTO HERE</p>
				                </div>
				            </div>
                        	<center class="padding-top-20">
								<h3><label>KALIPI FEDERATION</label></h3>
								<P>CEBU CITY </P>
								<h4><label>MEMBERSHIP FORM</label></h4>
								<br/>
							</center>
							<div class="row">
								<div class="col-md-10 padding-top-10"></div>
							
								<div class="col-md-2">
									<div class="form-group">
										<label for="date">DATE:</label>
										<div class="form-control-static">
											<?php echo date_create(null)->format("F d, Y"); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 padding-top-10">
									<h4><label>I. PERSONAL DATA:</label></h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="name">NAME:</label>
										<div class="form-control-static">
											<?= $formdata['firstname'] .' '.$formdata['middlename'] .' '. $formdata['lastname'] ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="nickname">NICKNAME: </label>
										<div class="form-control-static">
											<?= $formdata['nickname']?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="cityAddr">CITY ADDRESS:</label>
										<div class="form-control-static">
											<?= $formdata['home_address']?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="provAddr">PROVINCIAL ADDRESS</label>
										<div class="form-control-static">
											<?= $formdata['prov_address'] ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 padding-top-10">
	        						<div class="form-group">
										<label for="dob">DATE OF BIRTH:</label>
				  						<div class="form-control-static">
				  							<?= date_create($formdata['dateofbirth'])-> format('F d, Y') ?>
				  						</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="age">AGE:</label>
										<div class="form-control-static">
											<?= "{$formdata['age']}" ?>
										</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<label for="sex">SEX:</label>
						  			<div class="form-control-static">
										<?= $formdata['sex'] ?>	
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="civil_status">CIVIL STATUS:</label>
										<div class="form-control-static">
											<?= $formdata['civil_status'] ?>
										</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="religion">RELIGION:</label>
										<div class="form-control-static">
											<?= $formdata['religion'] ?>
										</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
									<div class="form-group">
										<label for="telephone_no">TELEPHONE NO:</label>
										<div class="form-control-static">
											<?= $formdata['telephone_no'] ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="cellphone_no">MOBILE NO:</label>
										<div class="form-control-static">
											<?= $formdata['cellphone_no'] ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
										<div class="form-control-static">
											<?= edu_attainment_desc($formdata['educational_attainment']) ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="occupation">OCCUPATION:</label>
										<div class="form-control-static">
											<?= $formdata['occupation'] ?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="name_of_company">NAME OF COMPANY:</label>
										<div class="form-control-static">
											<?= $formdata['name_of_company'] ?>	
										</div>

									</div>
								</div>
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="company_address">COMPANY ADDRESS:</label>
										<!-- <input type="text" class="form-control" name="company_address" id="company_address" placeholder=""> -->
										<div class="form-control-static">
											<?= $formdata['company_address'] ?>	
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="telephone_no_res">TELEPHONE NO (RESIDENCE):</label>
										<div class="form-control-static">
											<?= $formdata['telephone_no_res'] ?>	
										</div>
									</div>
								</div>
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="telephone_no_off">TELEPHONE NO (OFFICE):</label>
										<div class="form-control-static">
											<?= $formdata['telephone_no_off'] ?>	
										</div>
									</div>
								</div>
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="skills">SKILLS / HOBBIES:</label>
										<div class="form-control-static">
											<?= $formdata['skills'] ?>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-4 padding-top-10">
									<label for="familycomp">II.FAMILY COMPOSITION</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
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
							<div class="row">
								<div class="col-md-6 padding-top-10">
									<label for="sta">III.SEMINARS & TRAINING ATTENDED</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
				                    <table class="table table-border not-datatable" border="1">
				                        <thead>
				                        	<th>#</th>
					                    	<th>TITLE OF SEMINAR & TRAINING</th>
					                    	<th>DATE</th>
				                           
				                        </thead>
				                        <tbody>

				                        	<?php $org = json_decode($formdata['seminars_attended'], true);?>
				                        	<?php if(!empty($org)):?>
					                          	<?php foreach ($org['title']  as $i => $title) : ?> 
						                   			 <tr>    
								                  		<td><?= $i+1; ?></td>
								                        <td><?= ucfirst($title); ?></td>
								                        <td><?= date_create($org['date'][$i])->format('F m, Y')?></td>
								                   	</tr>
					                    
					                    		<?php endforeach; ?>
					                    	<?php else:?>
					                    		 <tr>    
								                  		<td colspan="3" class="text-center"> NO SEMINARS ATTENDED</td>
								                   	</tr>
				                    			<?php endif;?>
				                      	</tbody>
	                    			</table>
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
		                        <br>
	                                <a href="<?= base_url('captain_listing/view_pending?form_id=3')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
		                    </form>   
		                </div>
           			<?php endif;?> 
        		</div> 
			</section>
		</div>
	</div>
</body>

