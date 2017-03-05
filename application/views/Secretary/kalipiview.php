<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('secretary/nav_view'); ?>
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
							<!-- <div class="row">
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="name_of_spouse">NAME OF SPOUSE:</label>
										<div class="form-control-static">
											
										</div>
									</div>
								</div>
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="address_of_spouse">ADDRESS:</label>
										<div class="form-control-static">
											
										</div>
									</div>
								</div>
								<div class="col-md-6 padding-top-10">
				        			<div class="form-group">
										<label for="dateofbirth_of_spouse">DATE OF BIRTH:</label>
								  		<div class="form-control-static">
											<?= date_create($formdata['dateofbirth_of_spouse'] )->format('F m, Y')?>	
										</div>
									</div>
								</div>
								<div class="col-md-4 padding-top-10">
				   					<div class="form-group">
										<label for="spouse_age	">AGE:</label>
								  		<div class="form-control-static">
											<?= $formdata['spouse_age'] ?>	
										</div>
									</div>
								</div>
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="highest_educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
										<div class="form-control-static">
											<?= $formdata['highest_educational_attainment'] ?>	
										</div>
									</div>
								</div>
								<div class="col-md-6 padding-top-10">
									<div class="form-group">
										<label for="occupation_of_spouse">OCCUPATION:</label>
										<div class="form-control-static">
											<?= $formdata['occupation_of_spouse'] ?>	
										</div>
									</div>
								</div>
								<div class="col-md-12 padding-top-10">
									<div class="form-group">
										<label for="num_of_children">NO OF CHILDREN:</label>
										<div class="form-control-static">
											<?= $formdata['num_of_children'] ?>	
										</div>
									</div>
								</div>
							</div> -->
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
					                            <td><?= $row['monthly_salary']?></td>
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
				</div>
				<div class="row padding-top-20">
                    <div class="col-md-12">
                        <form action="<?= base_url("secretary_listing/reviewed/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                            <button type="submit" class="btn btn-success btn-flat btn-lg"><label>REVIEWED</label></button>
                            <a data-toggle="modal"  data-target="#feedback" class="btn btn-danger  btn-flat btn-lg"> <label>SEND FEEDBACK</label></a>
                            <a href="<?= base_url('secretary_listing/view_reviewed?form_id=3')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="fa fa-arrow-circle-o-left fa-arrow-circle-o-left fa-lg"></i> <label>BACK</label></a>
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

