<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    
    <?php $this->load->view('treasurer/nav_view'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
         
     </section>     

     <div class="col-md-12">
        <div class="profile-content">
            <div class="panel-heading"><strong>REVIEW BARANGAY CLEARANCE</strong></div>
                <div class="panel-body">
                   
                    <!--  <?php print_r($request_profile); ?>-->
                    <center><label>APPLICATION FOR BARANGAY CLEARANCE<br>TO ENGAGE IN BUSINESS ACTIVITY</label></center><br><br>  
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">Application No: ___________________</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">Date: <?php echo date("M, d Y"); ?></div>
                    </div>
                    <label>THE PUNONG BARANGAY</label>
                    <p>Barangay Banilad</p>
                    <p>Cebu City</p>
                    <br><br>
                    Sir/Madame:
                    <br><br>
                    <p style="text-indent: 50px;">I, <u><?php echo $request_profile['firstname']; ?> <?php echo $request_profile['lastname']; ?></u>, <u><?php echo $request_profile['age']; ?></u> years old and a citizen of the Philippines, do hereby apply for a Barangay Clearance to engage 
                        in business activity and for this purpose, the following information are submitted:</p>
                    <label>
                        Business Name or Style: <u><?php echo $request_profile['businessname']; ?> </u><br>
                        Business Address: <u><?php echo $request_profile['businessaddress']; ?></u><br>
                        Capital Invested: <u>P<?php echo number_format($request_profile['capitalinvested'], 2); ?></u>
                    </label>
                    <br><br>
                    
                    <label>
                        Description of lines of business to be handled:
                        <br>
                        <?php $count = 1;
                         foreach($business_line as $row) : ?>
                         <?php echo $count.'.'.$row->business_line; ?><br>
                        <?php $count++; 
                        endforeach; ?>
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
                            Date: _____<?= date('F y j',strtotime($request_profile['date_cleared']))?>______________<br>
                            Amount: P<?php echo number_format($request_profile['amount'], 2); ?>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                    </div>       
                </div>
                    <div class="panel-footer"> 
                       
                             <!--   <form action="<?= base_url('Brgyclearancecontroller/insert_brgyClearance') ?>" method="POST">
                            
                            <input type="hidden" name="resident_name" value="<?php echo $resident_name; ?> ">
                            <input type="hidden" name="business_name" value="<?php echo $business_name; ?> ">
                            <input type="hidden" name="business_address" value="<?php echo $business_address; ?> ">
                            <input type="hidden" name="capital_investment" value="<?php echo $capital_investment; ?> ">
                            <input type="hidden" name="amount" value="<?php echo $amount; ?> ">
                            <input type="hidden" name="age" value="<?php echo $age; ?> ">


                            <input type="hidden" name="business_desc1" value="<?php echo $business_desc1; ?> ">
                            <input type="hidden" name="business_desc2" value="<?php echo $business_desc2; ?> ">
                            <input type="hidden" name="business_desc3" value="<?php echo $business_desc3; ?> ">
                            <input type="hidden" name="business_desc4" value="<?php echo $business_desc4; ?> ">
                            <input type="hidden" name="business_desc5" value="<?php echo $business_desc5; ?> ">

                            -->   
            
                           
                            <a href="<?= base_url('treasurer_listing/?form_id=1')  ?>" class="btn btn-warning btn-flat btn-lg pull-right"><span class="glyphicon glyphicon-triangle-left"></span> Go back </a>
               

                            
                    </div>
                </div>
            </div>

</div>
                                                                    
                            
                            
          
      </section>

    </div>
  <!-- ./wrapper -->

