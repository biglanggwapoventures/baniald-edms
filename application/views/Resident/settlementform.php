<div class="col-md-9"><!-- 
    <div class="profile-content"> -->
    <div class="panel panel-default" >
        <!-- START PANEL HEADING -->
        <div class="panel-heading" >
            <div class="row">
                <div class="col-md-6 padding-top-10">
                   <h4><label>REQUEST FOR AMICABLE SETTLEMENT</label></h4>
                </div>
            </div>
        </div>
	
		<form method="POST" action="<?= base_url('settlement/store') ?>"  class="ajax" data-next="<?= base_url('settlement/preview_form')?>">
				<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="date">TODAY'S DATE:</label>
								<!-- <input type="text" class="form-control" value="<?php echo date("M d, Y"); ?>" readonly="readonly" name="date" id="date" placeholder=""> -->
								<div class="form-control-static">
									<?= date('M d, Y')?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="complainant_name">COMPLAINANT' NAME: *</label>
								<input type="text" class="form-control" name="complainant_name" id="complainant_name" placeholder="">
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="respondent_name">RESPONDENT'S NAME: *</label>
								<input type="text" class="form-control" name="respondent_name" id="respondent_name" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<div class="form-group">
								<label for="settlement">SETTLEMENT: *</label>
								<textarea class="form-control" rows="5" name="settlement" id="settlement"> </textarea>
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
