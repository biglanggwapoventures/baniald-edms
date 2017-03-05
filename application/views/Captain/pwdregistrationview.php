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
                                    <center>
                                        <label>DEPARTMENT OF HEALTH</label>
                                        <p>SAN LAZARO COMPOUND STA.CRUZ MANILA</p>
                                        <p>REPUBLIC OF THE PHILIPPINES</p>
                                        <h3><label>DpPhilippine Registry Form for Persons With Disability Ver.1.1</label></h3>
                                        <br/>
                                    </center>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-8">
                                              <div style="width:100px; border:1px solid #000; padding: 45px; margin-left:20%;"></div> 
                                              <p style="margin-left:15%;">Place 1x1 Photo Here</p>
                                        </div>
                                    </div>   
                                    <div class="row padding-top-20">
                                        <div class="col-md-4">
                                            <label>1. PWD NUMBER:</label> <?= $formdata['pwd_number'] ?>
                                        </div>
                                        <div class="col-md-4">
                                           <label>2. DATE: </label> <?= date_create(null)->format('F d, Y') ?>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row padding-top-20">
                                        <div class="col-md-4">
                                          <label> 3. LAST NAME: </label> <?= ucfirst($formdata['lastname']) ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label> FIRST NAME: </label> <?= ucfirst($formdata['firstname']) ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label >MIDDLE NAME: </label> <?= $formdata['middlename'] ?>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                           <label> 4. TYPE OF DISABILITY:</label> <?php echo ucfirst($formdata['type_disability']) ?>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-4">
                                           <label> 5. CAUSE OF DISABILITY:</label> <?php echo ucfirst($formdata['causes_of_disability']) ?>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                        </div> <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>6. ADDRESS</label> 
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label> HOUSE NO AND STREET: </label> <?php echo $formdata['home_address'] ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>BARANGAY:</label> Banilad
                                        </div>
                                        <div class="col-md-4">
                                            <label>MUNICIPALITY:</label> Cebu
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <label>PROVINCE:</label> <?php echo $formdata['prov_address'] ?>       
                                        </div>
                                        <div class="col-md-4">
                                            <label>REGION: </label> 7  
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>7. CONTACT DETAILS</label>                            
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label> TELEPHONE NO:</label> <?php echo $formdata['telephone_no'] ?> <br/>       
                                            <label> MOBILE NO:</label> <?php echo $formdata['cellphone_no'] ?> <br/>
                                            <label> EMAIL ADDRESS:</label> <?php echo $formdata['email_address'] ?> 
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                           <label>8. DATE OF BIRTH:</label> <?php echo date_create($formdata['dateofbirth'])->format('F d, Y') ?>    
                                        </div>
                                        <div class="col-md-4">
                                            <label>9: SEX: </label> <?php echo $formdata['sex'] ?> 
                                        </div>
                                        <div class="col-md-4">
                                            <label>10. CIVIL STATUS:</label> <?php echo $formdata['civil_status'] ?> 
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                           <label>11. EDUCATIONAL ATTAINMENT:</label> <?= edu_attainment_desc($formdata['educational_attainment']) ?>   
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                           <label>12. EMPLOYMENT STATUS:</label> <?= ucfirst($formdata['employment_status']) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>13. NATURE OF EMPLOYMENT:</label> <?= ucfirst($formdata['nature_of_employment']) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>14. TYPE OF EMPLOYMENT:</label><?= ucfirst($formdata['type_of_employment']) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>15. OCCUPATION:</label> <?= ucfirst($formdata['occupation']) ?>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>16. ID REFERENCE NO:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <label>SSS NO:</label>  <?= $formdata['sss_no'] ?>
                                        </div>
                                        <div class="col-md-6">
                                          <label>  GSIS NO:  </label> <?= $formdata['gsis_no'] ?>
                                        </div>
                                        <div class="col-md-6">
                                           <label> PAG-IBIG NO:</label> <?= $formdata['pag_ibig_no'] ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label> PHILHEALTH NO:</label>   <?= $formdata['philhealth_no'] ?>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <label>17. BLOOD TYPE:</label> <?= ucfirst($formdata['blood_type']) ?>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>18. ORGANIZATIONAL INFORMATION:</b> 
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>ORGANIZATIOIN AFFILIATED: </label> <?= $formdata['affilated_org'] ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label>OFFICE ADDRESS:</label>  <?= $formdata['office_address'] ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label>CONTACT PERSON:</label> <?= $formdata['contact_person'] ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label>TEL NO'S: </label> <?= $formdata['office_telephone_no'] ?>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12"></div>
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
                                                    <label> 20. ACCOMPLISHED BY: <?= $formdata['firstname'] ?> <?= $formdata['middlename'] ?> <?= $formdata['lastname'] ?> </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>20.S NAME OF REPROTING UNIT:</b> <?= $formdata['reviewed_by'] ?></td> 
                                            </tr>
                                            <tr>
                                                <td><label>21. REGISTRATION NO:</label> <?= str_pad($formdata['pwd_registry_id'], 4, 0, STR_PAD_LEFT) ?>
                                                <?php print_r( $this->session->userdata('user_id')); ?></td>
                                            </tr>
                                            
                                    </table>
                            </div>
                        </div>               
                    </div>
         
                <?php if($formdata['request_status'] != 'approved' ): ?>
                        <div class="col-md-12">
                            
                            <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                            <?php if($formdata['request_status'] != 'pending' && $formdata['request_status'] != 'approved'): ?>
                                    
                                    <?php if($formdata['request_status'] != 'reviewed'): ?>
                                        <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
                                    <?php endif; ?>
                                    <?php if($formdata['request_status'] != 'paid'): ?>
                                        <a href="<?= base_url("captain_listing/disapprove/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" class="btn btn-danger btn-flat btn-lg " onclick="return confirm('ARE YOU SURE? PLEASE CONFIRM.')"> DISAPPROVED REQUEST</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                        <a href="<?= base_url('captain_listing/view_pending?form_id=8')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
                            </form>   
                        </div>
                    <?php endif;?>   
                </div>
              <!-- /.row -->
            </section>
        </div>
    </div>
</body>
