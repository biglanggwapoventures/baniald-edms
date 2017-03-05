<div class="col-md-9">
	<div class="panel panel-default	">
		<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp;&nbsp;REQUEST FOR FINANCIAL ASSISTANCE FOR PWD FORM</label></h4>
		</div> 
		<form action="<?= base_url('Financialpwd/store') ?>" method= "POST" class="ajax" data-next="<?= base_url('financialpwd/preview_form')?>">
			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
				<div class="row">
					<div class="col-md-4">
						<label>NAME:</label>
						<div class="form-control-static">
							<?= $firstname .' '. $middlename .''. $lastname?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>AGE:</label>
						<div class="form-control-static">
							<?= $age ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>DATE OF BIRTH:</label>
						<div class="form-control-static">
							<?= date_create($dateofbirth)->format('F d, Y') ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>GENDER:</label>
						<div class="form-control-static">
							<?= $sex ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>HOME ADDRESS:</label>
						<div class="form-control-static">
							<?= $home_address .', '. sitio_desc($sitio)?>,  Barangay Banilad
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ">
						<label for="affiliated_org">AFFILIATED COMPANIES (IF ANY, PLEASE CHOOSE) : </label>
				  		<div class="radio">
							<label><input type="radio" name="affiliated_org" value="go" <?= element('affiliated_org', $data, null) === 'go' ? 'checked="checked"' : ''?> >GO</label>&nbsp;&nbsp;&nbsp;
							<label><input type="radio" name="affiliated_org" value="po" <?= element('affiliated_org', $data, null) === 'po' ? 'checked="checked"' : ''?>>PO</label>&nbsp;&nbsp;&nbsp;
							<label ><input type="radio" name="affiliated_org" value="ngo" <?= element('affiliated_org', $data, null) === 'ngo' ? 'checked="checked"' : ''?>>NGO</label>	
						</div>
					</div>
					<div class="col-md-6">
						<label for="affiliated_org">ISSUED ON:</label>
						<div class="form-group">
					 		<p class="form-control-static"><?= date_create(null)->format('F d, Y') ?></p>
						</div>	
					</div>	
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="pwd_id_card_no">PERSON WITH DISABILITY ID CARD NO.</label>
					 		<input type="text" class="form-control" value="<?=  element('pwd_id_card_no', $data, null) ?>"name="pwd_id_card_no" id="pwd_id_card_no" value="<?= set_value('pwd_id_card_no')?>" placeholder="">
						</div>
					</div>
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="issued_at">ISSUED AT:</label>
					 		<!-- <input type="text" class="form-control" name="issued_at" id="issued_at" value="<?= set_value('issued_at')?>" placeholder=""> -->
					 		<p>Barangay Banilad</p>
						</div>
					</div>
				</div>
			</div>
				<div class="panel-footer">
					<div class="row padding-top-10">	
						<div class="col-md-4"></div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<input type="submit" value="GENERATE FORM" class="btn btn-primary btn-block btn-sm" style="font-weight:bold;"/>
						</div>
					</div>
				</div>
		</form>
	</div>
</div>
		     


