<body>
    <div class="row">
        <div class="col-md-12">     
            <img src="<?= base_url('assets/dist/img/doh.png') ?>" style="padding-left:50px;height:80px;">
            <center>
                <label>DEPARTMENT OF HEALTH</label>
                <p>SAN LAZARO COMPOUND STA.CRUZ MANILA</p>
                <p>REPUBLIC OF THE PHILIPPINES</p>
                <label>DpPhilippine Registry Form for Persons With Disability Ver.1.1</label>
            </center>
            <div class="row" style="padding-left:80%">
                <div class="col-md-4 col-md-offset-8">
                      <div style="width:100px; border:1px solid #000; padding:45px; margin-left:20%;"></div> 
                      <p style="margin-left:13%;">Place 1x1 Photo Here</p>
                </div>
            </div>   
            <div class="row">
                <div class="col-md-4">
                    <label>1. PWD NUMBER:</label> <?= $items['pwd_number'] ?>
                    <label style="padding-left:265px">2. DATE: </label> <?= date_create(null)->format('F d, Y') ?>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label> 3. LAST NAME: </label> <?= ucfirst($items['lastname']) ?>
                    <label style="padding-left:130px"> FIRST NAME: </label> <?= ucfirst($items['firstname']) ?>
                    <label style="padding-left:130px">MIDDLE NAME: </label> <?= $items['middlename'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <label> 4. TYPE OF DISABILITY:</label> <?php echo ucfirst($items['type_disability']) ?>
                   <label style="padding-left:185px"> 5. CAUSE OF DISABILITY:</label> <?php echo ucfirst($items['causes_of_disability']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>6. ADDRESS</label> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label> HOUSE NO AND STREET: </label> <?php echo $items['home_address'] ?>
                    <label style="padding-left:26px;">BARANGAY:</label> Banilad
                    <label style="padding-left:130px;">MUNICIPALITY:</label> Cebu
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-4">
                    <label>PROVINCE:</label> <?php echo $items['prov_address'] ?>       
                    <label style="padding-left: 147px;">REGION: </label> 7  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>7. CONTACT DETAILS</label>                            
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label> TELEPHONE NO:</label> <?php echo $items['telephone_no'] ?>      
                    <label style="padding-left: 140px;"> MOBILE NO:</label> <?php echo $items['cellphone_no'] ?>
                    <label style="padding-left: 95px;"> EMAIL ADDRESS:</label> <?php echo $items['email_address'] ?> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>8. DATE OF BIRTH:</label> <?php echo date_create($items['dateofbirth'])->format('F d, Y') ?>    
                    <label style="padding-left: 158px">9. SEX: </label> <?php echo $items['sex'] ?> 
                    <label style="padding-left: 95px">10. CIVIL STATUS:</label> <?php echo $items['civil_status'] ?> 
                </div> 
            </div>
            <div class="row">
                <div class="col-md-12">
                   <label>11. EDUCATIONAL ATTAINMENT:</label> <?= edu_attainment_desc($items['educational_attainment']) ?>   
                   <label style="padding-left:50px;">12. EMPLOYMENT STATUS:</label> <?= ucfirst($items['employment_status']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>13. NATURE OF EMPLOYMENT:</label> <?= ucfirst($items['nature_of_employment']) ?>
                    <label style="padding-left:200px;">14. TYPE OF EMPLOYMENT:</label><?= ucfirst($items['type_of_employment']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>15. OCCUPATION:</label> <?= ucfirst($items['occupation']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>16. ID REFERENCE NO:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>SSS NO:</label>  <?= $items['sss_no'] ?>
                    <label style="padding-left:230px;"> GSIS NO: </label> <?= $items['gsis_no'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label> PAG-IBIG NO:</label> <?= $items['pag_ibig_no'] ?>
                    <label style="padding-left: 199px;"> PHILHEALTH NO:</label>   <?= $items['philhealth_no'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <label>17. BLOOD TYPE:</label> <?= ucfirst($items['blood_type']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b>18. ORGANIZATIONAL INFORMATION:</b> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>ORGANIZATIOIN AFFILIATED: </label> <?= $items['affilated_org'] ?>
                    <label style="padding-left:90px;">OFFICE ADDRESS:</label>  <?= $items['office_address'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>CONTACT PERSON:</label> <?= $items['contact_person'] ?>
                    <label style="padding-left:120px;">TEL NO'S: </label> <?= $items['office_telephone_no'] ?>
                </div>
            </div>
            <table border="1">
                <tr>
                    <td><b>19. PARENTAL INFORMATION</b></td>
                </tr>
                
                <?php foreach($items['fc'] AS $fc):?>
                    <?php if(in_array(strtolower($fc['relationship']), ['mother', 'father', 'guardian'])):?>
                        <tr>
                            <td><?= strtoupper($fc['relationship'])?>'S NAME:  <?=$fc['name'] ?> </td> 
                        </tr>
                    <?php endif;?>
                 <?php endforeach?>
                <tr>
                    <td>
                        <label> 20. ACCOMPLISHED BY: 
                            <?= $items['firstname'] ?> <?= $items['middlename'] ?> <?= $items['lastname'] ?> 
                        </label>
                    </td>
                </tr>
                <tr>
                    <td><b>20.S NAME OF REPROTING UNIT:</b> <?= $items['reviewed_by'] ?></td> 
                </tr>
                <tr>
                    <td>
                        <label>21. REGISTRATION NO:</label> <?= str_pad($items['pwd_registry_id'], 4, 0, STR_PAD_LEFT) ?>
                        <?php print_r( $this->session->userdata('user_id')); ?>
                    </td>
                </tr>    
            </table>
        </div>
    </div>
</body>               


