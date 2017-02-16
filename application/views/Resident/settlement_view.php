<div class="col-md-9">
	<div class="profile-content">
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
				<div class="col-md-4">______________________<br>
									  ______________________<br>
									  ______________________<br>
									  <label>COMPLAINANT/S</label>
									  <br/><br/>
									 <label> -AGAINST-</label>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4"><label>BARANGAY CASE NO:</label>___________<br>
										<label>FOR </label>: ________________________<br>
										____________________________
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">______________________<br>
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
			
				<div class="col-md-12">
					<p style="text-indent:50px;">We, complainant/s and respondent/s in the above captioned case, do hereby
						agree to sttle our dispute as follows:</p>
						<p class="form-control-static" style=" word-break: break-word; text-decoration:underline;">
						<?= $data['settlement'] ?>
					</p	>
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
				<div class="col-md-10">Recieved and filed this______day of_____________________, 20___.<br/>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row padding-top-20">
				<div class="col-md-12">
					<h4 class="text-center"> <label>ATTESTATION </label></h4><br>
					<p style="text-indent: 50px;">
						I hereby certify that the foregoing amicable settlement was entered into by the parties freely and voluntarily, after I had explained to them the nature and consequences of such settlement.
					</p>
				</div>
			</div>

			<br/><br/>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6"></div>
				<div class="col-md-4">____________________________<br><label>Punong Barangay/Lupon Chairman</label></div>
			</div>
		</div>
	</div>
		<div class="panel-footer">            
            <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
            <!--  <form action="<?= base_url('Brgyclearancecontroller/insert_brgyClearance') ?>" method="POST"> -->    
            <!-- 
                <button type = "submit" class="btn btn-primary btn-lg btn-flat"> Send Request!</button>
                 <a href="<?= base_url('Brgyclearancecontroller/BrgyClearanceForm') ?>" class="btn btn-warning pull pull-right btn-lg btn-flat"><span class="glyphicon glyphicon-triangle-left"></span> Go back </a> -->
            <!--  </form> -->            
        </div>
	</div>
</div>
	