<body>     
	<div class="row">
    <div class="col-md-12">
        <div class="box-footer">
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
			<div class="row padding-top-20">
				<div class="col-md-4 padding-top-10">
					<h4><label for="housenumandstreet">PERSONAL INFORMATION</label></h4>
				</div>
			</div>
			<div class="row padding-top-10">
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="lastname">LAST NAME: </label> 
						<div class="form-control-static">
							<?= $items['lastname'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="firstname">FIRST NAME: </label> 
						<div class="form-control-staic">
							<?= $items['firstname'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="midname">MIDDLE NAME: </label>
						<div class="form-control-staic">
							<?= $items['middlename'] ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="age">AGE:</label> 
						<div class="form-control-staic">
							<?= $items['age'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="dob">DATE OF BIRTH:</label>
						<div class="form-control-staic">
							<?= date_create($items['dateofbirth'])->format('F d, Y')?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<label for="gender">SEX:</label> 
					<div class="form-control-staic">
						<?= $items['sex'] ?>
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
							<?= $items['home_address'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="sitio">SITIO:</label>
						<div class="form-control-staic">
							<?= $items['sitio'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="barangay">BARANGAY:</label>
						<div class="form-control-staic">
							<?= $items['barangay'] ?>
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
						<label for="telephone_no">TEL NO:</label>
						<div class="form-control-staic">
							<?= $items['telephone_no'] ?>
						</div>
					</div>
				</div>
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="mobileno">MOBILE NO:</label>
						<div class="form-control-staic">
							<?= $items['cellphone_no'] ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 padding-top-10">
					<label>AFFILATED COMPANIES:</label>
						<div class="form-control-static">
							<?= ucfirst($items['affiliated_org']); ?>
						</div>
				</div>
			</div>	
			<div class="row ">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="pwdidcardno">PWD ID CARD NO:</label>
						<div class="form-control-static">
							<?= $items['pwd_id_card_no']; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="issued_at">ISSUED AT:</label>
							<div class="form-control-static">
							<?= $items['issued_at']; ?>
							</div>
					</div>
					<div class="form-group">
						<label for="issuedon">ISSUED ON:</label>
						<div class="form-control-static">
							<?= date_create($items['issued_on'])->format('F d, Y') ?>
						</div>
					</div>	
				</div>
				<div class="col-md-6 padding-top-10">
					<div style="width:100px; border:1px solid #000; padding: 85px; margin-left:20%;"></div>
				</div>	
			</div>
			<div class="row ">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<label style="margin-left:100px;">LEFT OR RIGHT THUMB MARK</label>
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
			<div class="row padding-top-20">
				<div class="col-md-5">
					<label >VERIFIED BY:</label>
					<hr style="display: block; height: 2px; margin-left: 90px;	 border-top: 1px solid #000;padding: 0; ">
					<label style="margin-left:180px;">Social Worker</label>
				</div>
				<div class="col-md-5">
					<label>NOTED BY:</label>
					<hr style="display: block; height: 2px; margin-left: 90px;	 border-top: 1px solid #000;padding: 0; ">
					<label style="margin-left:160px;">ESTER G. CONCHA<br/> Dept. Head/DSWS</label>
				</div>
				<div class="col-md-6"></div>
			</div>
			<br/>
			<div class="row padding-top-20 ">
				<div class="col-md-2">
					<label>APPROVED BY:</label>
				</div>
				<div class="col-md-3">
					<hr style="display: block; height: 2px;	 border-top: 1px solid #000;  ">
					<label style="margin-left:2	0px;">Hon. GERARDO CARILLO<br/> Social Servicing Committee	</label>
				</div>	
				<div class="col-md-3"></div>	
			</div>
			</div> <!--Close Panel body -->	
		</div>
	</div> 
</body>        





