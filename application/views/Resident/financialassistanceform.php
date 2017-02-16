<div class="col-md-9">
	<div class="panel panel-default	">
		<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp;&nbsp;REQUEST FOR FINANCIAL ASSISTANCE FOR PWD FORM</label></h4>
		</div> <!--Close Panel Heading -->	
		<!-- Body -->
		<form action="<?= base_url('Financialpwd/store') ?>" method= "POST" class="ajax" data-next="<?= base_url('financialpwd/preview_form')?>">
			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
				<div class="row">
					<div class="col-md-6 ">
						<label for="affiliated_org">AFFLIATED COMPANIES (IF ANY, PLEASE CHOOSE) : </label>
				  		<div class="radio">
							<label><input type="radio" name="affiliated_org" value="go">GO</label>&nbsp;&nbsp;&nbsp;
							<label><input type="radio" name="affiliated_org" value="po">PO</label>&nbsp;&nbsp;&nbsp;
							<label ><input type="radio" name="affiliated_org" value="ngo">NGO</label>	
						</div>
					</div>
					<div class="col-md-6">
						<label for="affiliated_org">ISSUED ON:</label>
						<div class="form-group">
					 		<!-- <input type="text" class="form-control" name="issued_on" value="<?php echo date("M d, Y"); ?>" id="issued_on" placeholder="" readonly="readonly"> -->
					 		<p class="form-control-static"><?= date('F d, Y') ?></p>
						</div>	
					</div>	
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="pwd_id_card_no">Person With Disability ID Card No.</label>
					 		<input type="text" class="form-control" name="pwd_id_card_no" id="pwd_id_card_no" value="<?= set_value('pwd_id_card_no')?>" placeholder="">
						</div>
					</div>
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="issued_at">Issued at:</label>
					 		<input type="text" class="form-control" name="issued_at" id="issued_at" value="<?= set_value('issued_at')?>" placeholder="">
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
		     


