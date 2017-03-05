<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('secretary/nav_view'); ?>
        </header>   
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <?php $business_line = json_decode($formdata['business_line']); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box-footer">
                                        <center>
                                            <label class="padding-top-20">
                                                 APPLICATION FOR BARANGAY CLEARANCE<br>
                                                 TO ENGAGE IN BUSINESS ACTIVITY
                                            </label>
                                        </center>  
                                        <div class="row padding-top-20">
                                            <div class="col-md-7"></div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2">
                                                <label>APPLICATION NO: </label><?= str_pad($formdata['brgy_clearance_id'], 4, 0, STR_PAD_LEFT) ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-8"></div>
                                            <div class="col-md-3">
                                                <label>DATE: </label>  <?php echo date("F d, Y"); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>THE PUNONG BARANGAY</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                Barangay Banilad
                                            </div>    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                Cebu City
                                            </div>    
                                        </div>
                                        <div class="row padding-top-20">
                                            <div class="col-md-12">
                                                    Sir/Madame:
                                                    <br/><br/>
                                                <p style="text-indent: 50px;">I, <u><?php echo $formdata['firstname']; ?> <?php echo $formdata['middlename']; ?> <?php echo $formdata['lastname']; ?></u>, <u><?php echo $formdata['age']; ?></u> years old and a citizen of the Philippines, do hereby apply for a Barangay Clearance to engage 
                                                    in business activity and for this purpose, the following information are submitted:</p>
                                                <label style="padding-left: 50px;"">
                                                    Business Name or Style: <u><?php echo $formdata['businessname']; ?> </u><br>
                                                    Business Address: <u><?php echo $formdata['businessaddress']; ?></u><br>
                                                    Capital Invested: <u>P<?php echo number_format($formdata['capitalinvested'], 2); ?></u>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row padding-top-20" style="padding-left:50px;">
                                            <div class="col-md-12">
                                                <label>
                                                    Description of lines of business to be handled:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 50px;">
                                            <div class="col-md-12">    
                                                <?php foreach(json_decode($formdata['business_line'], true) AS $i => $desc):?>
                                                    <?php echo  ($i+1).". {$desc}" ?><br>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                        <div class="row padding-top-20">  
                                            <div class="col-md-12">                        
                                                <label>
                                                    The above declerations are subject to verificatioin by proper barangay authorities upon demand without objections, I promise to operate only in the lines of business as applied above after a Mayor's Permit has been dully granted.
                                                </label>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3">___________________<br>
                                                                  Signature of Applicant
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">  
                                                <label>Republic of the Philippines</label><br>
                                                       CITY OF CEBU<br>
                                                       OFFICE OF THE BARANGAY CAPTAIN
                                                       <br><br>
                                                <label>To Whom it may Concern:</label>
                                                 <br><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">  
                                                <p style="text-indent: 50px;">This is to certify that the above application for Barangay Clearance for Business Permit to operate in Banilad, Cebu City has been granted:</p>
                                            </div>
                                        </div><br/><br/><br/>   
                                        <div class="row padding-top-20">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3">
                                                <label>HON. NICOLAS B. LEYSON, JR.</label><br/>Barangay Captain
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-6">
                                                Paid under O.R No. <label style="text-decoration: underline;"><?= $formdata['or_number']?> </label><br/>
                                                
                                                <?php if($formdata['request_status'] != 'paid') : ?>
                                                    
                                                 Date:
                                                 <br/>
                                                 Amount:
                                                
                                                <?php else : ?>


                                                    Date: <label style="text-decoration: underline;"><?= date_create($formdata['date_paid'])->format('F d, Y h: i A') ?></label><br>
                                                    Amount: <label style="text-decoration: underline;"> P<?= number_format($formdata['amount'], 2);?></label>

                                                 <?php endif; ?>
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3"></div>
                                        </div> 
                                    </div>
                                 </div>
                            </div>
                    </div>  
                </div>
                
                <?php if($formdata['request_status'] != 'paid'): ?>
                    
                    <div class="row padding-top-20">
                         <div class="col-md-12">
                            <form action="<?= base_url("secretary_listing/reviewed/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                            
                                <button type="submit" class="btn btn-success btn-flat btn-lg">
                                    <label>REVIEWED</label>
                                </button>
                                    <a data-toggle="modal" data-target="#feedback" class="btn btn-danger btn-flat btn-lg">
                                        <label>SEND FEEDBACK</label>
                                    </a>
                                    <a href="<?= base_url('secretary_listing/?form_id=1') ?>" class="btn btn-primary btn-flat btn-lg pull-right">
                                        <i class="fa fa-arrow-circle-o-left fa-arrow-circle-o-left fa-lg"></i> 
                                        <label>BACK</label>
                                    </a>
                            </form>   
                         </div>
                    </div>
                    
                <?php endif; ?>
            </section>
        </div>
    </div>
</body>

<!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="ajax" action="<?= base_url('secretarycontroller/sendFeedback')?>" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:red;"><i class="fa fa-feed"></i> SEND FEEDBACK</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger hidden warning"></div>
                        <div class="form-group">
                            <label> ENTER YOUR MESSAGE HERE: *</label>
                            <textarea class="form-control" name="message"></textarea>
                            <input type="hidden" name="sent_to" value="<?= $formdata['resident_id']?>">
                            <input type="hidden" name="requests_forms_id" value="<?= $formdata['requests_forms_id']?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                </div>
            </form>
        </div>
    </div>
</div>