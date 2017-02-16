<div class="col-md-9">
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

                    <br><br>   
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                            <label>1. PWD NUMBER:</label> <?= $data['pwd_number'] ?>
                        </div>
                        <div class="col-md-4">
                           <label>2. DATE: </label> <?= date('M d, Y') ?>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                          <label> 3. LAST NAME: </label> <?= ucfirst($data['lastname']) ?>
                        </div>
                        <div class="col-md-4">
                            <label> FIRST NAME: </label> <?= ucfirst($data['firstname']) ?>
                        </div>
                        <div class="col-md-4">
                            <label >MIDDLE NAME: </label> <?= $data['middlename'] ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                           <label> 4. TYPE OF DISABILITY:</label> <?php echo ucfirst($data['type_disability']) ?>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>  
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                           <label> 5. CAUSE OF DISABILITY:</label> <?php echo ucfirst($data['causes_of_disability']) ?>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        </div> <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                            <h4><label>6. ADDRESS</label></h4> 
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div> 
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                            <label> HOUSE NO AND STREET: </label> <?php echo $data['home_address'] ?>
                        </div>
                        <div class="col-md-4">
                            <label>BARANGAY:</label> <?php echo $data['barangay'] ?>
                        </div>
                        <div class="col-md-4">
                            <label>MUNICIPALITY:</label> <?php echo $data['municipality'] ?>
                        </div>
                    </div>
                    <div class="row" style="font-size:17px;"> 
                        <div class="col-md-4">
                            <label>PROVINCE:</label> <?php echo $data['prov_address'] ?>       
                        </div>
                        <div class="col-md-4">
                            <label>REGION: </label> <?php echo $data['region'] ?>    
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                            <h4><label>7. CONTACT DETAILS</label></h4>                             
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-3">
                            <label> TELEPHONE NO:</label> <?php echo $data['telephone_no'] ?>         
                        </div> 
                        <div class="col-md-3">
                            <label> MOBILE NO:</label> <?php echo $data['cellphone_no'] ?> 
                        </div>
                        <div class="col-md-6">
                            <label> EMAIL ADDRESS:</label> <?php echo $data['email_address'] ?> 
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-4">
                           <label>8. DATE OF BIRTH:</label> <?php echo $data['dateofbirth'] ?>    
                        </div>
                        <div class="col-md-4">
                            <label>9: SEX</label> <?php echo $data['sex'] ?> 
                        </div>
                        <div class="col-md-4">
                            <label>10. CIVIL STATUS:</label> <?php echo $data['civil_status'] ?> 
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                           <label>11. EDUCATIONAL ATTAINMENT:</label> <?= edu_attainment_desc($data['educational_attainment']) ?>   
                        </div>
                    </div>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                           <label>12. EMPLOYMENT STATUS:    </label> <?= ucfirst($data['employment_status']) ?>
                        </div>
                    </div>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                            <label>13. NATURE OF EMPLOYMENT:</label> <?= ucfirst($data['nature_of_employment']) ?>
                        </div>
                    </div>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                            <label>14. TYPE OF EMPLOYMENT:</label><?= ucfirst($data['type_of_employment']) ?>
                        </div>
                    </div>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                            <label>15. OCCUPATION:</label> <?= ucfirst($data['occupation']) ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                            <label>16. ID REFERENCE NO: </label> <?= $data['id_ref_no'] ?>
                        </div>
                    </div><br/>
                    <div class="row" style="font-size:17px;">
                        
                        <div class="col-md-6">
                            <label>SSS NO:</label>  <?= $data['sss_no'] ?>
                        </div>
                        <div class="col-md-6">
                          <label>  GSIS NO:  </label> <?= $data['gsis_no'] ?>
                        </div>
                        <div class="col-md-6">
                           <label> PAG-IBIG NO:</label> <?= $data['pag_ibig_no'] ?>
                        </div>
                        <div class="col-md-6">
                            <label> PHILHEALTH NO:</label>   <?= $data['philhealth_no'] ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12"> 
                            <label>17. BLOOD TYPE:</label> <?= ucfirst($data['blood_type']) ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12">
                            <b>18. ORGANIZATIONAL INFORMATION:</b> 
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-6">
                            <label>ORGANIZATIOIN AFFILIATED: </label> <?= $data['affilated_org'] ?>
                        </div>
                        <div class="col-md-6">
                            <label>OFFICE ADDRESS:</label>  <?= $data['office_address'] ?>
                        </div>
                        <div class="col-md-6">
                            <label>CONTACT PERSON:</label> <?= $data['contact_person'] ?>
                        </div>
                        <div class="col-md-6">
                            <label>TEL NO'S: </label> <?= $data['office_telephone_no'] ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="font-size:17px;">
                        <div class="col-md-12"></div>
                    </div>
                    <table border="1">
                       
                            <tr>
                                <td><b>19. PARENTAL INFORMATION</b></td>
                            </tr>
                             <?php foreach($data['fc'] AS $fc):?>
                                <?php if(in_array(strtolower($fc['relationship']), ['mother', 'father', 'guardian'])):?>
                                    <tr>
                                        <td><?= strtoupper($fc['relationship'])?>'S NAME:  <?=$fc['name'] ?> </td> 
                                    </tr>
                                <?php endif;?>
                             <?php endforeach?>
                            <tr>
                                <td>
                                    <label> 20. ACCOMPLISHED BY: <?= $data['firstname'] ?> <?= $data['middlename'] ?> <?= $data['lastname'] ?> </label>
                                </td>
                            </tr>
                            <tr>
                                <td><b>20.S NAME OF REPROTING UNIT: <?= $data['name_of_reporting_unit'] ?> </b></td> 
                            </tr>
                            
                    </table>
                    </div>
                    <div class="panel-footer">            
                        <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-flat btn-lg ">
                            <i class="fa fa-arrow-right"> PROCEED</i>
                        </a>
                    </div>
                </div>               
            </div>

            