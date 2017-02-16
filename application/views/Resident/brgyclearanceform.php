<div class="col-md-9"><
    <div class="panel panel-default">
        <div class="panel-heading" >
            <h4>
                <label>
                    <i class="fa fa-file"></i> &nbsp;&nbsp;&nbsp;REQUEST FOR BUSINESS CLEARANCE
                </label>
            </h4>
        </div>
        <form action="<?= base_url('brgyclearance/store') ?>" method="POST" class="ajax" data-next="<?= base_url('brgyclearance/preview_form')?>">
            <div class="panel-body">
            <div class="alert alert-danger warning hidden"></div>
                <div class="row">
                   	<div class="col-md-8 padding-top-10">
                        <label for="resident_name">NAME:</label>
                        <p class="form-control-static"><?= $firstname . ' '. $middlename .' ' . $lastname ?></p>	
                   	</div>
                    <div class="col-md-4 padding-top-10">
                        <label for="age">AGE:</label>
                        <p class="form-control-static"><?= $age ?></p>
                    </div>
                </div>
                <div class="row padding-top-20">
                    <div class="col-md-6  padding-top-10">
                        <div class="form-group  <?= form_error('business_name') ? 'has-error' : ''?>">
                        	<label for="business_name">BUSINESS NAME: *</label>
                            <input type="text" class="form-control"  name= "businessname" id="business_name" placeholder="Enter Business Name"  value="<?php echo set_value('business_name');?>" >
                            <?= form_error('business_name', '<span class="help-block">', '</span>') ?>    	
                   	    </div>
                    </div> 
                    <div class="col-md-6 padding-top-10">
                        <div class="form-group  <?= form_error('business_address') ? 'has-error' : ''?>">
                    	    <label for="business_address">BUSNIESS ADDRESS: *</label>
                            <input type="text" class="form-control"  name= "businessaddress" id="business_address" placeholder="Enter Business Address" value="<?php echo set_value('business_address');?>">
                            <?= form_error('business_address', '<span class="help-block">', '</span>') ?> 
                    	</div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 padding-top-10">
                        <div class="form-group  <?= form_error('capital_investment') ? 'has-error' : ''?>">
                            <label for="capital_investment">CAPITAL INVESTMENT: *</label>
                            <input type="text" class="form-control"   name= "capitalinvested" id="capital_investment" placeholder="Enter capital Investment" value="<?php echo set_value('capital_investment');?>">
                            <?= form_error('capital_investment', '<span class="help-block">', '</span>') ?>
                        </div>
                    </div>
                    <div class="col-md-6 padding-top-10">
                        <div class="form-group  <?= form_error('amount') ? 'has-error' : ''?>">                              
                            <label for="amount" >AMOUNT: *</label>
                            <input type="text" class="form-control" value="<?php echo set_value('amount');?>" name= "amount" id="amount" placeholder="Enter Amount">
                            <?= form_error('amount', '<span class="help-block">', '</span>') ?>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <div class="row ">
                    <div class="col-md-12 padding-top-10">
                        <label for="amount">BUSINESS DESCRIPTION: *</label><br/><br/>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-border not-datatable">
                                    <thead>
                                        <th>#</th>
                                        <th>DESCRIPTION</th>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="business_line[]" class="form-control"></td>
                                            <td>
                                                <a data-click="remove-line" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                            </td> 
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">
                                                <a class="btn btn-success" style="color:#fff;" data-click="new-line">
                                                    <i class="fa fa-plus" style="color:#fff;"></i> &nbsp;<b>ADD NEW LINE</b>
                                                </a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END OF PANEL BODY  -->
            <div class="panel-footer">
                <div class="row padding-top-10"> 
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="submit" value="GENERATE FORM" class="btn btn-primary  btn-lg" style="font-weight:bold;"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


    		 	
    					 
    	  			
			
	


