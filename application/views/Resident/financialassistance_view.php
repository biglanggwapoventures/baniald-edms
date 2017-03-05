<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
				<img src="<?= base_url('assets/dist/img/seal.png');?>" style="padding-left:50px; padding-top: 50px;  height:150px;">
				<img src="<?= base_url('assets/dist/img/dswd.png');?>" class="pull-right" style="padding-right:50px;  padding-top: 50px; height:130px;">  
				<center>
					<label>REPUBLIC OF THE PHILIPPINES </label><br/>
					<p>PERSON WITH DISABILITY AFFAIRS OFFICE (PDAO)</p>
					<p>C/O DEPARTMENT OF SOCIAL WELFARE SERVICES</p	>
					<p>KATIPUNAN STREET, LABANGON, CEBU CITY</p>
					<br/>
					<h3><label>FINANCIAL ASSISTANCE FOR PERSON WITH DISABILITY</label></h3>		
				</center>
				<br/><br/><br/>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<h4><label for="housenumandstreet">PERSONAL INFORMATION</label></h4>
					</div>
				</div>
				<div class="row padding-top-10">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="lastname">LAST NAME: </label> 
							<div class="form-control-static">
								<?= $lastname?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="firstname">FIRST NAME: </label> 
							<div class="form-control-staic">
								<?= $firstname ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="midname">MIDDLE NAME: </label>
							<div class="form-control-staic">
								<?= $middlename ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="age">AGE:</label> 
							<div class="form-control-staic">
								<?= $age ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="dob">DATE OF BIRTH:</label>
							<div class="form-control-staic">
								<?= date_create($dateofbirth)->format('F d, Y')?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<label for="gender">SEX:</label> 
						<div class="form-control-staic">
							<?= $sex ?>
						</div>
					</div>
				</div>
				<div class="row padding-top-10">
					<div class="col-md-4 padding-top-10">
						<h4><label for="housenumandstreet">HOME ADDRESS</label></h4>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="home_address">HOUSE NO AND STREET NO:</label>
							<div class="form-control-staic">
								<?= $home_address ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="sitio">SITIO:</label>
							<div class="form-control-staic">
								<?= sitio_desc($sitio) ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="barangay">BARANGAY:</label>
							<div class="form-control-staic">
								Banilad
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="telno">CONTACT DETAILS</label>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="telno">TEL NO:</label>
							<div class="form-control-staic">
								<?= $telephone_no ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="mobileno">MOBILE NO:</label>
							<div class="form-control-staic">
								<?= $cellphone_no ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10"></div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label>AFFILATED COMPANIES:</label>
							<div class="form-control-static">
								<?= ucfirst($data['affiliated_org']); ?>
							</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="pwdidcardno">PWD ID CARD NO:</label>
							<div class="form-control-static">
								<?= $data['pwd_id_card_no']; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="issued_at">ISSUED AT:</label>
								<div class="form-control-static">
								<!-- <?= $data['issued_at']; ?> -->
								Barangay Banilad	
								</div>
						</div>
						<div class="form-group">
							<label for="issuedon">ISSUED ON:</label>
							<div class="form-control-static">
								<?= date_create($data['issued_on'])->format('F d, Y h:i A') ?>
							</div>
						</div>	
					</div>
					<div class="col-md-6 padding-top-10">
						<div style="width:100px; border:1px solid #000; padding: 85px; margin-left:20%;"></div>
						<label style="margin-left:90px;">LEFT OR RIGHT THUMB MARK</label>
					</div>	
				</div>
				<div class="row padding-top-20">
					<div class="col-md-5 padding-top-20">
						<hr style="display: block; height: 2px; margin-left: 50px;	 border-top: 1px solid #000;padding: 0; ">
						<label style="margin-left:120px;">APPPLICANT'S SIGNATURE</label>
					</div>
					<div class="col-md-5 padding-top-20">
						<hr style="display: block; height: 2px; margin-left: 50px;border-top: 1px solid #000;padding: 0; ">
						<label style="margin-left:130px;">DATE ACCOMPLISHED</label>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-12">
						<hr style="border-top: 3px solid #000; padding: 0; ">
						<label>TO BE ACCOMPLISHED BY DSWS</label>
					</div>	
				</div>
				<div class="row ">
					<div class="col-md-6 padding-top-10">
						<label>Approved</label>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-6 padding-top-10">
						<label>Disapproved</label>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-6 padding-top-20"></div>
					<div class="col-md-6 padding-top-20">
						<label>REASONS:</label>
						<hr style="display: block; height: 2px;  border-top: 1px solid #000;padding: 0; ">
						<hr style="display: block; height: 2px;  border-top: 1px solid #000;padding: 0; ">
						<hr style="display: block; height: 2px;  border-top: 1px solid #000;padding: 0; ">
					</div>
				</div>
				<br/><br/>
				<div class="row padding-top-20">
					<div class="col-md-2" >
						<label>VERIFIED BY:</label>
					</div>
					<div class="col-md-3" style="left:-60px;">
						<hr style="display: block; height: 2px;	 border-top: 1px solid #000;  ">
						<label style="margin-left:60px;"> Social Worker	</label>
					</div>
					<div class="col-md-2 col-md-offset-1 ">
						<label>NOTED BY:</label>
					</div>
					<div class="col-md-3" style="left:-80px;">
						<hr style="display: block; height: 2px;	 border-top: 1px solid #000;  ">
						<label style="margin-left:50px;">ESTER G. CONCHA<br/> Dept. Head/DSWS</label>
					</div>
				</div>
				<br/>
				<div class="row padding-top-20">
				
					<div class="col-md-2" >
						<label>APPROVED BY:</label>
					</div>
					<div class="col-md-3" style="left:-60px;">
						<hr style="display: block; height: 2px;	 border-top: 1px solid #000;  ">
						<label style="margin-left:20px;">Hon. GERARDO CARILLO<br/> Social Servicing Committee	</label>
					</div>
				</div>
														
		</div> <!--Close Panel body -->
		<div class="panel-footer">            
            <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
        </div>
	</div> <!-- Close panel-->
</div> <!-- Close col-md --> 
