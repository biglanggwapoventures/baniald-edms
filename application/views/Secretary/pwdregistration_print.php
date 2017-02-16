<body>
    <div class="row">
        <div class="col-md-12">     
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12 padding-top-10">
                            <h4>
                                <center>
                                    <strong>
                                        DpPhilippine Registry Form for Persons With Disability Ver.1.1
                                    </strong>
                                </center>
                            </h4>
                        </div>
                        <br>
                    </div>
                </div> -->
                <img src="<?= base_url('assets/dist/img/doh.png') ?>" style="padding-left:50px; padding-top:50px;  height:150px;">
                  <div class="panel-body">
                    <center>
                    <br/><br/>
                        <label>DEPRARTMENT OF HEALTH</label>
                        <P>SAN LAZARO COMPOUND STA.CRUZ MANILA</P>
                        <P>RERPUBLIC OF THE PHILIPPINES</P>
                        <h4><label>DpPhilippine Registry Form for Persons With Disability Ver.1.1</label></h4>
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
                        <label>1. PWD NUMBER:</label> <?= $items['pwd_number'] ?>
                    </div>
                    <div class="col-md-4">
                       <label>2. DATE: </label> <?= date('M d, Y') ?>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-4">
                      <label> 3. Last Name:</label> <?= $items['lastname'] ?>
                    </div>
                    <div class="col-md-4">
                        <label>FIRST NAME:</label> <?= $items['firstname'] ?>
                    </div>
                    <div class="col-md-4">
                        <label>MIDDLE NAME: </label> <?= $items['middlename'] ?>
                    </div>
                </div>
                <br/><br/>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-4">
                       <label> 4. Type of Disability:</label> <?php echo $items['type_disability'] ?>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>  
                <div class="row" style="font-size:17px;">
                    <div class="col-md-4">
                       <label> 5. Cause of Disability:</label> <?php echo $items['causes_of_disability'] ?>
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
                    <div class="col-md-6">
                        <label> 5. Cause of Disability: </label> <?php echo $items['home_address'] ?>
                    </div>
                    <div class="col-md-3">
                        <label>Barangay:</label> <?php echo $items['barangay'] ?>
                    </div>
                    <div class="col-md-3">
                        <label>Municipality:</label> <?php echo $items['municipality'] ?>
                    </div>
                </div>
                <div class="row" style="font-size:17px;"> 
                    <div class="col-md-6">
                        <label>Province:</label> <?php echo $items['prov_address'] ?>       
                    </div>
                    <div class="col-md-6">
                        <label>Region: </label> <?php echo $items['region'] ?>    
                    </div>
                </div>
                <br/>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-4">
                        <b>7. Contact Details</b>                                  
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
                <br/>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-3">
                        <label>TELEPHONE NO:</label> <?php echo $items['telephone_no'] ?>         
                    </div> 
                    <div class="col-md-3">
                        <label>MOBILE NO:</label> <?php echo $items['cellphone_no'] ?> 
                    </div>
                    <div class="col-md-6">
                        <label>EMAIL ADDRESS:</label> <?php echo $items['email_address'] ?> 
                    </div>
                </div>
                <br/>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-4">
                       <label>8. DATE OF BIRTH:</label> <?php echo $items['dateofbirth'] ?>    
                    </div>
                    <div class="col-md-4">
                        <label>9: SEX</label> <?php echo $items['sex'] ?> 
                    </div>
                    <div class="col-md-4">
                        <label>10. CIVIL STATUS:</label> <?php echo $items['civil_status'] ?> 
                    </div>
                </div>
                <br/>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-12">
                       <label>11. EDUCATIONAL ATTAINMENT:</label> <?= edu_attainment_desc($items['educational_attainment']) ?>   
                    </div>
                </div>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-12">
                       <label>12. EMPLOYMENT STATYS</label> <?= $items['employment_status'] ?>
                    </div>
                </div>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-12">
                        <label>13. NATURE OF EMPLOYMENT:</label> <?= $items['nature_of_employment'] ?>
                    </div>
                </div>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-12">
                        <label>14. TYPE OF EMPLOYMENT</label><?= $items['type_of_employment'] ?>
                    </div>
                </div>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-12">
                        <label>15. OCCUPATION:</label> <?= $items['occupation'] ?>
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
                        <label>SSS No:</label> 
                    </div>
                    <div class="col-md-6">
                      <label>  GSIS No:  </label>
                    </div>
                    <div class="col-md-6">
                       <label> PAG-IBIG NO:</label>
                    </div>
                    <div class="col-md-6">
                        <label> PHILHEALTH NO:</label>  
                    </div>
                </div>
                <br/>
                <div class="row" style="font-size:17px;">
                    <div class="col-md-12"> 
                        <label>17. BLOOD TYPE:</label> <?= $items['blood_type'] ?>
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
                        <label>ORGANIZATIOIN AFFILIATED: </label> <?= $items['affilated_org'] ?>
                    </div>
                    <div class="col-md-6">
                        <label>OFFICE ADDRESS:</label>  <?= $items['office_address'] ?>
                    </div>
                    <div class="col-md-6">
                        <label>CONTACT PERSON:</label> <?= $items['contact_person'] ?>
                    </div>
                    <div class="col-md-6">
                        <label>TEL NO'S: </label> <?= $items['office_telephone_no'] ?>
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
                      <?php foreach($items['fc'] AS $fc):?>
                        <?php if(in_array(strtolower($fc['relationship']), ['mother', 'father', 'guardian'])):?>
                            <tr>
                                <td><?= strtoupper($fc['relationship'])?>'S NAME:  <?=$fc['name'] ?> </td> 
                            </tr>
                        <?php endif;?>
                     <?php endforeach?>
                    <tr>
                       <td>
                            <label> 20. ACCOMPLISHED BY: <?= $items['firstname'] .''. $items['middlename'] .' '. $items['lastname']  ?>  </label>
                        </td>
                    </tr>
                    <tr>
                        <td><b>20.s Name of Reporting Unit:<?= $items['name_of_reporting_unit'] ?> </b></td> 
                    </tr>
                </table>
                </div>
            </div>               
        </div>
    </div>
</body>


