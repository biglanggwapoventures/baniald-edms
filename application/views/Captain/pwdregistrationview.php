<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('captain/nav_view'); ?>
        </header>   

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">     
                    <div class="panel panel-default">
                    
                        <div class="panel-body">
                            <img src="<?= base_url('assets/dist/img/doh.png') ?>" style="padding-left:50px; padding-top:50px;  height:150px;">
                 <!-- <img src="<?= base_url('assets/dist/img/doh.png') ?>" style="padding-left:650px; padding-top:50px;  height:150px;">  -->
                    <center>
                        <label>DEPRARTMENT OF HEALTH</label>
                        <p>SAN LAZARO COMPOUND STA.CRUZ MANILA</p>
                        <p>RERPUBLIC OF THE PHILIPPINES</p>
                        <h3><label>DpPhilippine Registry Form for Persons With Disability Ver.1.1</label></h3>
                        <br/>
                    </center>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-5"></div>
                        <div class="col-md-3 ">
                            <div style="width:100px; border:1px solid #000; padding: 45px; margin-left:20%;"> 
                        </div>
                            <p>PLACE 1 X 1 PHOTO HERE</p>
                        </div>
                    </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                    1. PWD NUMBER: <?php echo $formdata['pwd_number']; ?>
                                </div>
                                <div class="col-md-4">
                                    2.Date:   <?php echo date("M, d Y"); ?>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                   3. Last Name:  <?php echo $formdata['lastname']; ?>
                                </div>
                                <div class="col-md-4">
                                   First Name:  <?php echo $formdata['firstname']; ?>
                                </div>
                                <div class="col-md-4">
                                    Middle Name:<?php echo $formdata['middlename']; ?>
                                </div>
                            </div>
                            <br/><br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                    4. Type of Disability: <?php echo $formdata['type_disability']; ?>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>  
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                    5. Cause of Disability: <?php echo $formdata['causes_of_disability']; ?>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div> <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                       <b>6. Address:</b> 
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div> 
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                        House No. And Street: <?php echo $formdata['home_address']; ?>
                                </div>
                                <div class="col-md-4">
                                        Barangay: <?php echo $formdata['barangay']; ?>
                                </div>
                                <div class="col-md-4">
                                        Municipality: <?php echo $formdata['municipality']; ?>
                                </div>
                            </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-6">
                                        Province:  <?php echo $formdata['prov_address']; ?>      
                                </div>
                                <div class="col-md-6">
                                        Region: <?php echo $formdata['region']; ?>
                                </div>
                            </div>
                            <br/><br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                    <b>7. Contact Details</b>                                  
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                      Telephone No: <?php echo $formdata['telephone_no']; ?>       
                                </div>
                                <div class="col-md-4">
                                     Mobile No: <?php echo $formdata['cellphone_no']; ?>   
                                </div>
                                <div class="col-md-4">
                                    Email Address: <?php echo $formdata['email_address']; ?>   
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-4">
                                     8. Date of Birth:  <?php echo $formdata['dateofbirth']; ?>       
                                </div>
                                <div class="col-md-4">
                                     9. Sex/Gender: <?php echo $formdata['sex']; ?>   
                                </div>
                                <div class="col-md-4">
                                    10. Civil Status: <?php echo $formdata['civil_status']; ?>   
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    11. Educational Attainment:   <?php echo $formdata['educational_attainment']; ?>     
                                </div>
                            </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                  12.Employment Status: <?php echo $formdata['employment_status']; ?>   
                                </div>
                            </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    13. Nature of Employment: <?php echo $formdata['nature_of_employment']; ?>   
                                </div>
                            </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    14. Type of Employment: <?php echo $formdata['type_of_employment']; ?>   
                                </div>
                            </div>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    15. Occupation: <?php echo $formdata['occupation']; ?>   
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    <b>16. ID Reference No</b>.
                                </div>
                            </div><br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-6">
                                    SSS No: <?php echo $formdata['sss_no']; ?>   
                                </div>
                                <div class="col-md-6">
                                    GSIS No: <?php echo $formdata['gsis_no']; ?>   
                                </div>
                                <div class="col-md-6">
                                    Pag-ibig No: <?php echo $formdata['pag_ibig_no']; ?>   
                                </div>
                                <div class="col-md-6">
                                    Phil-Health No: <?php echo $formdata['philhealth_no']; ?>   
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    17. Blood Type: <?php echo $formdata['blood_type']; ?>   
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                    <b>18. Organization Information:</b>
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-6">
                                    Organization Affiliated:   <?php echo $formdata['affilated_org']; ?>  
                                </div>
                                <div class="col-md-6">
                                    Office Address: <?php echo $formdata['office_address']; ?>   
                                </div>
                                <div class="col-md-6">
                                  Contact Person: <?php echo $formdata['contact_person']; ?>    
                                </div>
                                <div class="col-md-6">
                                   Tel. Nos.: <?php echo $formdata['office_telephone_no']; ?>   
                                </div>
                            </div>
                            <br/>
                            <div class="row" style="font-size:17px;">
                                <div class="col-md-12">
                                </div>
                            </div>
                           <table border="1">
                            <tr>
                                <td><b>19. PARENTAL INFORMATION</b></td>
                            </tr>
                              <?php foreach($formdata['fc'] AS $fc):?>
                                <?php if(in_array(strtolower($fc['relationship']), ['mother', 'father', 'guardian'])):?>
                                    <tr>
                                        <td><?= strtoupper($fc['relationship'])?>'S NAME:  <?=$fc['name'] ?> </td> 
                                    </tr>
                                <?php endif;?>
                             <?php endforeach?>
                            <tr>
                               <td>
                                    <label> 20. ACCOMPLISHED BY: <?= $formdata['firstname'] .''. $formdata['middlename'] .' '. $formdata['lastname']  ?>  </label>
                                </td>
                            </tr>
                            <tr>
                                <td><b>20.s Name of Reporting Unit:<?= $formdata['name_of_reporting_unit'] ?> </b></td> 
                            </tr>
                        </table>
                        </div>
                    </div>               
                </div>
                    <?php if($formdata['request_status'] != 'approved' ): ?>

                           
                    <div class="col-md-12">
                        
                                  <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFRIM.')">
                                 <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
                                 
                                  <a href="#" class="btn btn-danger btn-flat btn-lg "> SEND FEEDBACK </a>
                                   <a href="<?= base_url('captain_listing/view_pending?form_id=8')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
                            </form>   
                        
                    </div>
                   <?php endif;?> 
            </div>
        </section>        


