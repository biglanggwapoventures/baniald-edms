<body>

    <div class="row">

    <div class="col-md-12">
        <div class="box-footer">
            <div class="input-group">
                

            

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
                    <p style="text-indent: 50px;">I, <u><?php echo $request_profile['firstname']; ?> <?php echo $request_profile['middlename']; ?> <?php echo $request_profile['lastname']; ?></u>, <u><?php echo $request_profile['age']; ?></u> years old and a citizen of the Philippines, do hereby apply for a Barangay Clearance to engage 
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
                        <ol style="margin-left: 20px;">
                            <?php foreach(array_values(json_decode($request_profile['business_line'], true)) AS $line): ?>
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
                            Amount: P<?php echo number_format($request_profile['amount'], 2); ?>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                    </div> 
                </div>

        </div>
        <!-- /.box-footer-->
    </div>
</div>
</body>
</html>