<div class="col-md-9">
    <div class="profile-content">
        <div class="panel-heading">
            <strong>REVIEW BUSINESS CLEARANCE</strong>
        </div>
        <div class="panel-body">
            <center>
                <label>APPLICATION FOR BARANGAY CLEARANCE<br>
                        TO ENGAGE IN BUSINESS ACTIVITY
                </label>
            </center>
            <br><br>  
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    Application No: <?= str_pad($data['brgy_clearance_id'], 4, 0, STR_PAD_LEFT) ?>
                    <?php print_r( $this->session->userdata('user_id')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <p class="form-control-static">Date: <?= date_create(null)->format('F d, Y ') ?></p>
                </div>
            </div>
            <label>THE PUNONG BARANGAY</label>
            <p>Barangay Banilad</p>
            <p>Cebu City</p>
            <br><br>
            Sir/Madame:
            <br><br>
            <p style="text-indent: 50px;">I, <u><?= "{$data['firstname']} {$data['lastname']}"; ?></u>, <u><?php echo $age; ?></u> years old and a citizen of the Philippines, do hereby apply for a Barangay Clearance to engage in business activity and for this purpose, the following information are submitted:</p>

            <label style="padding-left: 50px;">
                Business Name or Style: <u><?= $data['businessname']; ?> </u><br>
                Business Address: <u><?= $data['businessaddress']; ?></u><br>
                Capital Invested: <u>P<?php echo number_format($data['capitalinvested'], 2); ?></u>
            </label>
            <br><br>
            <label style="padding-left: 50px;">
                Description of lines of business to be handled:
                <br>
                <?php foreach(json_decode($data['business_line'], true) AS $i => $desc):?>
                    <?php echo  ($i+1).". {$desc}" ?><br>
                <?php endforeach;?>
            </label>
            <br><br>
            <label>The above declerations are subject to verification by proper Barangay authorities upon demand without objections, I promise to operate only in the lines of business as applied above after a Mayor's Permit has been dully granted.</label>
            
            <br><br><br><br>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    ___________________<br>
                     <label>Signature of Applicant</label>
                </div>
            </div>

            <label>Republic of the Philippines</label><br>
            CITY OF CEBU<br>
            OFFICE OF THE BARANGAY CAPTAIN
            <br><br>
            <label>To Whom it may Concern:</label>
            <br><br>
            <p style="text-indent: 50px;">This is to certify that the above application for Barangay Clearance for Business Permit to operate in Banilad, Cebu City has been granted:</p>
              <br><br> <br><br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                  <label>HON. NICOLAS B. LEYSON, JR.</label> <br>
                  Barangay Captain
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Paid under O.R No. _____________ <br>
                    Date: ________________________<br>
                    Amount: P<?php echo number_format($data['amount'], 2); ?>

                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
     </div>
        <div class="panel-footer">            
            <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
             <!-- <form action="<?= base_url('Brgyclearancecontroller/insert_brgyClearance') ?>" method="POST">     -->
            <!-- 
                <button type = "submit" class="btn btn-primary btn-lg btn-flat"> Send Request!</button>
                 <a href="<?= base_url('Brgyclearancecontroller/BrgyClearanceForm') ?>" class="btn btn-warning pull pull-right btn-lg btn-flat"><span class="glyphicon glyphicon-triangle-left"></span> Go back </a> -->
            <!--  </form> -->            
        </div>
</div>

