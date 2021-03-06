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
									<center><br>
										<label>REPUBLIC OF THE PHILIPPINES</label><br/>
										<label>PROVINCE OF CEBU</label><br/>
										<label>CITY OF CITY</label><br/>
										<label>BARANGAY BANILAD</label>
										<br/>
										<h3><label>OFFICE OF LUPONG TAGAPAMAYAPA</label></h3>
									</center>
									<div class="row padding-top-20">
										<div class="col-md-1"></div>
										<div class="col-md-1">_____________________<br>
															 ______________________<br>
															 ______________________<br>
															<label>COMPLAINANT/S</label>
															<br/>
															<label> -AGAINST- </label>
										</div>
										<div class="col-md-1"></div>
										<div class="col-md-5"></div>
										<div class="col-md-4"><label>BARANGAY CASE NO:
											</label>___________<br>
											<label> FOR </label>: ________________________<br>
																____________________________
										</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-1">______________________<br>
														      ______________________<br>
														      ______________________<br>
														      <label>RESPONDENT/S</label>
										</div>
										<div class="col-md-3"></div>
										<div class="col-md-5"></div>
									</div>
									<div class="row">
										<div class="col-md-12 text-center"><h4><label>COMPLAINT</label></h4></div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
											<div class="col-md-11">
													I/WE hereby complain against above named respondent/s for violating mr/our
												rights and interests in the following manner:
											</div>
											<div class="col-md-1"></div>
											<div class="col-md-10">
												<p class="form-control-static" style=" word-break: break-word; text-decoration:underline;"><?= $formdata['complaint_desc'] ?>
												</p>
													
											
											</div>
									</div>
									<div class="row">
										<div class="col-md-3"></div>
										<div class="col-md-6 text-center"> 
											<label>Made this <u> <?= date_create(null)->format('d \o\f F Y')?>.</u> </label>
										</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3"></div>
										<div class="col-md-6"></div>
										<div class="col-md-3">_________________<br/>
															  _________________<br/>
															  _________________<br/>
															  <label>COMPLAINANT/S</label>
										</div>
									</div>
									<div class="row paddding-top-20">
										<div class="col-md-1"></div>
										<div class="col-md-10">Recieved and filed this <label style="text-decoration: underline;"> <?= date_create(null)->format('d \o\f F Y')?></label> </div>
										<div class="col-md-1"></div>
									</div>
									<br/><br/>
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-6"></div>
										<div class="col-md-4">____________________________<br><label>Punong Barangay/Lupon Chairman</label></div>
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