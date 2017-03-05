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
					</div>
				</div>
				
				<div class="row padding-top-20">
                     <div class="col-md-12">
                        <form action="<?= base_url("secretary_listing/reviewed/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                        
                            <button type="submit" class="btn btn-success btn-flat btn-lg"><label>REVIEWED</label></button>
                            <a data-toggle="modal"  data-target="#feedback" class="btn btn-danger  btn-flat btn-lg"> <label>SEND FEEDBACK</label></a>
                            <a href="<?= base_url('secretary_listing/?form_id=10')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="fa fa-arrow-circle-o-left fa-arrow-circle-o-left fa-lg"></i> <label>BACK</label></a>
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