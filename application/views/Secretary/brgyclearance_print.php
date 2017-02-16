<body>
    <div class="row">
        <div class="col-md-12">
            <?php $business_line = json_decode($items['business_line']); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-footer">
                            <center>
                                <label>
                                     APPLICATION FOR BARANGAY CLEARANCE<br>
                                     TO ENGAGE IN BUSINESS ACTIVITY
                                </label>
                            </center>  
                            <div class="row padding-top-20">
                                <div class="col-md-8"></div>
                                <div class="col-md-2"></div>  <br/>  <br/>
                                <div class="col-md-2">
                                    <label style="float:right; padding-right:50px;">APPLICATION NO: </label>
                                    <br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <label style="float:right;  padding-right:50px;">DATE: <?php echo date("F d, Y"); ?></label>  
                                </div>
                            </div>
                            <br/>
                            <div class="row padding-top-20">
                                <div class="col-md-4">
                                    <label>THE PUNONG BARANGAY</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Barangay Banilad</div>    
                            </div>
                            <div class="row">
                                <div class="col-md-4">Cebu City</div>    
                            </div>
                            <br/><br/>
                            <div class="row padding-top-20">
                                <div class="col-md-12">
                                        Sir/Madame:
                                        <br/><br/>
                                        <p style="text-indent: 50px;">I, <u><?php echo $items['firstname']; ?> <?php echo $items['middlename']; ?> <?php echo $items['lastname']; ?></u>, <u><?php echo $items['age']; ?></u> years old and a citizen of the Philippines, do hereby apply for a Barangay Clearance to engage 
                                        in business activity and for this purpose, the following information are submitted:</p>
                                        
                                    <label style="padding-left: 50px;"> Business Name or Style: </label>
                                    <label style="text-decoration: underline;">
                                        <?php echo $items['businessname']; ?>
                                    </label><br/>
                                    <label style="padding-left: 50px;">Business Address:</label>
                                    <label style="text-decoration: underline;"><?php echo $items['businessaddress']; ?></label><br>
                                    <label style="padding-left: 50px;"> Capital Invested: </label>
                                    <label style="text-decoration: underline;">
                                    <?php echo number_format($items['capitalinvested'], 2); ?>
                                    </label>
                                    
                                </div>
                            </div>
                            <br/>
                            <div class="row padding-top-20" style="padding-left:50px;">
                                <div class="col-md-12">
                                    <label>
                                        Description of lines of business to be handled:
                                    </label>
                                </div>
                            </div>
                            <div class="row" style="padding-left:50px;">
                                <div class="col-md-12">    
                                    <?php foreach(json_decode($items['business_line'], true) AS $i => $desc):?>
                                        <?php echo  ($i+1).". {$desc}" ?><br>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <br/><br>
                            <div class="row padding-top-20">  
                                <div class="col-md-12">                        
                                    <label>
                                        The above declerations are subject to verificatioin by proper barangay authorities upon demand without objections, I promise to operate only in the lines of business as applied above after a Mayor's Permit has been dully granted.
                                    </label>
                                </div>
                            </div> 
                            <div class="row padding-top-20">
                                <div class="col-md-6"></div>
                                <div class="col-md-3"></div><br/>
                                <div class="col-md-3" style="float:right;  padding-right:50px;">
                                                    ___________________<br>
                                                      Signature of Applicant
                                </div>
                            </div>
                            <br/><br/>
                            <div class="row padding-top-20">
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
                            </div><br/>  
                            <div class="row padding-top-20">
                                <div class="col-md-6"></div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <label style="float:right;  padding-right:50px;">HON. NICOLAS B. LEYSON, JR.</label><br/>
                                    <label style="float:right;  padding-right:100px;">Barangay Captain</label>
                                </div>
                            </div>  <br/> <br/> 
                            <div class="row padding-top-20">
                                <div class="col-md-6">
                                    Paid under O.R No. _____________ <br>
                                    Date: ________________________<br>
                                    Amount: P<?php echo number_format($items['amount'], 2); ?>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3"></div>
                            </div> 
                        </div>
                     </div>
                </div>
        </div>  
    </div>
</body>

