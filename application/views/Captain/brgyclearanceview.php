<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    <header class="main-header">
    <?php $this->load->view('captain/nav_view'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-footer">
                                <div class="input-group">
                                    <!--  <?php print_r($request_profile); ?>-->
                                    <center>
                                         <label>APPLICATION FOR BARANGAY CLEARANCE<br>TO ENGAGE IN BUSINESS ACTIVITY
                                         </label>
                                    </center>
                                    <br><br>  
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2">Application No: </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2">Date: <?php echo date("M, d Y"); ?></div>
                                    </div>
                                    <label>THE PUNONG BARANGAY</label>
                                    <br/>Barangay Banilad
                                    <p>Cebu City</p>
                                    <br/>
                                    Sir/Madame:
                                    <br/><br/>
                                        <p style="text-indent: 50px;">I, <u><?php echo $formdata['firstname']; ?> <?php echo $formdata['middlename']; ?> <?php echo $formdata['lastname']; ?></u>, <u><?php echo $formdata['age']; ?></u> years old and a citizen of the Philippines, do hereby apply for a Barangay Clearance to engage 
                                            in business activity and for this purpose, the following information are submitted:</p>
                                        <label>
                                            Business Name or Style: <u><?php echo $formdata['businessname']; ?> </u><br>
                                            Business Address: <u><?php echo $formdata['businessaddress']; ?></u><br>
                                            Capital Invested: <u>P<?php echo number_format($formdata['capitalinvested'], 2); ?></u>
                                        </label>
                                        <br><br>
                                        
                                        <label>
                                            Description of lines of business to be handled:
                                            <br>
                                            <ol style="margin-left: 20px;">
                                                <?php foreach(array_values(json_decode($formdata['business_line'], true)) AS $line): ?>
                                                    <li><?= $line?></li>
                                                <?php endforeach;?>
                                            </ol>
                                        </label>
                                        
                                        <br><br>
                                        
                                        <label>
                                            The above declerations are subject to verificatioin by proper barangay authorities upon demand without objections, I promise to operate only in the lines of business as applied above after a Mayor's Permit has been dully granted.
                                        </label>
                                        
                                        <br><br><br><br>

                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3">___________________<br>Signature of Applicant
                                            </div>
                                        </div>

                                        <label>Republic of the Philippines</label><br>
                                        CITY OF CEBU<br>
                                        OFFICE OF THE BARANGAY CAPTAIN
                                        <br><br>
                                        <label>To Whom it may Concern:</label>
                                        <br><br>
                                        <p style="text-indent: 50px;">This is to certify that the above application for Barangay Clearance for Business Permit to operate in Banilad, Cebu City has benn granted:</p>
                                          <br><br> <br><br>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3">
                                                <label>HON. NICOLAS B. LEYSON, JR.</label><br>Barangay Captain
                                            </div>
                                        </div>
                                         
                                        <div class="row">
                                            <div class="col-md-6">
                                                Paid under O.R No. _____________ <br>
                                                Date: ________________________<br>
                                                Amount: P<?php echo number_format($formdata['amount'], 2); ?>
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3"></div>
                                        </div> 
                                    </div>
                   
                            </div>
                            <!-- /.box-footer-->
                        </div>
                  <!--/.direct-chat -->
                </div>
            </div>
        </div>
        <!-- /.col -->
        <?php if($formdata['request_status'] != 'approved' ): ?>

               
        <div class="col-md-12">
            
                      <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFRIM.')">
                     <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
                     
                      <a href="#" class="btn btn-danger btn-flat btn-lg "> SEND FEEDBACK </a>
                       <a href="<?= base_url('captain_listing/view_pending?form_id=1')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
                </form>   
            
        </div>
       <?php endif;?>    
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!--  <pre><?php print_r($formdata)?></pre>
 -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b></b> 
    </div>
    
  </footer>
