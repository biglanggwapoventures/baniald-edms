<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('treasurer/nav_view'); ?>
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
									<br/>
									<div class="row">
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
										<div class="col-md-4"><label>BARANGAY CASE NO:</label>___________<br>
															  <label>FOR </label>: ________________________<br>
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
										<div class="col-md-12 text-center"><h4><label>AMICABLE SETTLEMENT</label></h4></div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
											<div class="col-md-11">
													I/WE hereby complain against above named respondent/s for violating mr/our
												rights and interests in the following manner:
											</div>
											<div class="col-md-1"></div>
											<div class="col-md-10">
												<p class="form-control-static" style=" word-break: break-word; text-decoration:underline;">
												<?= $formdata['settlement'] ?></p>
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
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-10">Recieved and filed this______day of_____________________, 20___.</div>
										<div class="col-md-1"></div>
									</div>
									<div class="row padding-top-20">
										<div class="col-md-1"></div>
										<div class="col-md-10">
											<h4 class="text-center"> <label>ATTESTATION </label></h4><br/>
											<p style="text-indent: 50px;">
												I hereby certify that the foregoing amicable settlement was entered into by the parties freely and voluntarily, after I had explained to them the nature and consequences of such settlement.
											</p>
										</div>
										<div class="col-md-1"></div>
									</div>
									<br/><br/>
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-6"></div>
										<div class="col-md-4">____________________________
															<br/><label>Punong Barangay/Lupon Chairman</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  	<div class="row padding-top-20">
                     <div class="col-md-12">
                        <form action="<?= base_url("secretary_listing/review/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFRIM.')">
                        
                            <button type="submit" class="btn btn-success btn-flat btn-lg"><label>REVIEWED</label></button>
                            <a data-toggle="modal"  data-target="#feedback" class="btn btn-danger  btn-flat btn-lg"> <label>SEND FEEDBACK</label></a>
                            <a href="<?= base_url('secretary_listing/?form_id=4')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="fa fa-arrow-circle-o-left fa-arrow-circle-o-left fa-lg"></i> <label>BACK</label></a>
                        </form>   
                     </div>
                </div>
			</section>
		</div>
	</div>
</body>
		
