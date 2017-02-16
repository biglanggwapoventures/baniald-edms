<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('captain/nav_view'); ?>
        </header>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">     
                    <div class="panel panel-default">
                   	<div class="panel-body">
			<center><br>
				<label>REPUBLIC OF THE PHILIPPINES</label><br/>
				<label>PROVINCE OF CEBU</label><br/>
				<label>CITY OF CITY</label><br/>
				<label>BARANGAY BANILAD</label>
				<br>
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
				<div class="col-md-12 text-center"><h4><label>COMPLAINT</label></h4></div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
					<div class="col-md-11">
							I/WE hereby complain against above named respondent/s for violating mr/our
						rights and interests in the following manner:
					</div>
					<div class="col-md-1"></div>
					<div class="form-control-static"> <u> <?= $formdata['complaint_desc'] ?> </u></div>
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
				<div class="col-md-10">Recieved and filed this______day of_____________________, 20___.</div>
				<div class="col-md-2"></div>
			</div>
			<br/><br/>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6"></div>
				<div class="col-md-4">____________________________<br><label>Punong Barangay/Lupon Chairman</label></div>
			</div>
		</div>
		</div>
			
        <?php if($formdata['request_status'] != 'approved' ): ?>

               
        <div class="col-md-12">
            
                      <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFRIM.')">
                     <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
                     
                      <a href="#" class="btn btn-danger btn-flat btn-lg "> SEND FEEDBACK </a>
                       <a href="<?= base_url('captain_listing/view_pending?form_id=10')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
                </form>   
            
        </div>
       <?php endif;?> 
</section>