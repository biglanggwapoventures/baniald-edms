<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp; REQUEST FOR COMPLAINT FORM</label></h4>
		</div>
		<form action="<?= base_url('complaint/store') ?>" method= "POST" class="ajax" data-next="<?= base_url('complaint/preview_form')?>">
			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="date">DATE:</label>
								<div class="form-control-static">
									<?= date('F d, Y') ?>
								</div>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="complainant_name">COMPLAINANT'S NAME: </label>
							<!-- 	<input type="text" class ="form-control" name="complainant_name" id="complainant_name" placeholder=""> -->
								<p class="form-control-static">
									<?= $lastname .', '. $firstname .' '. $middlename   ?>
								</p>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="respondent_name">RESPONDENT'S NAME :*</label>
								<input type="text" class="form-control" value="<?= element('respondent_name', $data, null) ?>"name="respondent_name" id="respondent_name" placeholder="">
							</div>
						</div>
						<div class="col-md-12 padding-top-10">
							<div class="form-group">
								<label for="complaint_desc">COMPLAINT *</label>
								<textarea class="form-control" rows="5" name="complaint_desc" id="complaint_desc"> <?= element('complaint_desc', $data, null) ?></textarea>
							</div>
						</div>								
					</div>
			</div>
			<div class="panel-footer">
				<div class="row padding-top-10">	
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<input type="submit" value="GENERATE FORM" class="btn btn-primary " style="font-weight:bold;"/>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
	
