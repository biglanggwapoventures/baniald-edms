<body>     
	<div class="row">
    	<div class="col-md-12">	
			<img src="<?= base_url('assets/dist/img/seal.png');?>" style="padding-left:50px; height:70px;">
			<img src="<?= base_url('assets/dist/img/dswd.png');?>" class="pull-right" style="padding-right:50px;height:60px;">  
			<center>
				<label>REPUBLIC OF THE PHILIPPINES </label>
				<p>PERSON WITH DISABILITY AFFAIRS OFFICE (PDAO)</p>
				<p>C/O DEPARTMENT OF SOCIAL WELFARE SERVICES</p	>
				<p>KATIPUNAN STREET, LABANGON, CEBU CITY</p>
				<h3><label>FINANCIAL ASSISTANCE FOR PERSON WITH DISABILITY</label></h3>		
			</center>
			<div class="row">
				<div class="col-md-4">
					<h4><label>PERSONAL INFORMATION</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>LAST NAME: </label> <?= $items['lastname'] ?>
					<label style="padding-left: 50px;">FIRST NAME: </label> <?= $items['firstname'] ?>
					<label style="padding-left: 150px;"> MIDDLE NAME: </label> <?= $items['middlename'] ?>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>AGE:</label> <?= $items['age'] ?> 
					<label style="padding-left: 130px;">DATE OF BIRTH:</label> <?= date_create($items['dateofbirth'])->format('F d, Y')?>
					<label style="padding-left: 63px;">SEX:</label> <?= $items['sex'] ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4><label>HOME ADDRESS</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>HOUSE NO AND STREET NO:</label> <?= $items['home_address'] ?>
					<label style="padding-left: 30px;">SITIO:</label> <?= ucfirst($items['sitio']) ?>
					<label style="padding-left: 20px;">BARANGAY:</label> Banilad
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h4><label>CONTACT DETAILS</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>TEL NO:</label> <?= $items['telephone_no'] ?>
					<label style="padding-left: 100px;">MOBILE NO:</label> <?= $items['cellphone_no'] ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 ">
					<label>AFFILATED COMPANIES:</label> <?= ucfirst($items['affiliated_org']); ?>
					<label style="padding-left: 10px;">PWD ID CARD NO:</label> <?= $items['pwd_id_card_no']; ?>
					<label style="padding-left: 130px;">ISSUED AT:</label> Barangay Banilad
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="issuedon">ISSUED ON:</label> <?= date_create($items['issued_on'])->format('F d, Y') ?>	
				</div>
				<div class="col-md-12">
					<div style="width:100px; border:1px solid #000; padding: 50px; margin-left:73%;"></div>
				</div>	
			</div>
			<div class="row ">
				<div class="col-md-12">
					<label style="margin-left:67%;">LEFT OR RIGHT THUMB MARK</label>
				</div>
			</div>
			<div class="row padding-top-20">
				<label style="margin-left:120px;">APPPLICANT'S SIGNATURE</label>
				<label style="margin-left:150px;">DATE ACCOMPLISHED</label>
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr style="border-top:1px solid #000;">
					<label>TO BE ACCOMPLISHED BY DSWS</label>
				</div>	
			</div>
			<div class="row ">
				<div class="col-md-12">
					<label>Approved</label><br>
					<label>Disapproved</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label style="padding-left:60%;">REASONS: ________________________________________</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>VERIFIED BY:</label>
					<label style="padding-left:50%">NOTED BY:</label>
					<br/>
					<label style="margin-left:150px;">Social Worker</label>
					<label style="margin-left:30%;">(ESTER G. CONCHA)/Dept.Head/DSWS</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>APPROVED BY:</label>
				</div>
				<div class="col-md-12">
					<label style="margin-left:20%;">Hon. GERARDO CARILLO<br/> Social Servicing Committee</label>
				</div>	
			</div>
		</div>
	</div> 
</body>        





