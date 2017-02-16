<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('treasurer/nav_view'); ?>
        </header>   

    <div class="content-wrapper">
        <section class="content">
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
                                <label>1. PWD NUMBER:</label> <?= $formdata['pwd_number'] ?>
                            </div>
                            <div class="col-md-4">
                               <label>2. DATE: </label> <?= date('M d, Y') ?>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-4">
                              <label> 3. Last Name:</label> <?= $formdata['lastname'] ?>
                            </div>
                            <div class="col-md-4">
                                <label>FIRST NAME:</label> <?= $formdata['firstname'] ?>
                            </div>
                            <div class="col-md-4">
                                <label>MIDDLE NAME: </label> <?= $formdata['middlename'] ?>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-4">
                               <label> 4. Type of Disability:</label> <?php echo $formdata['type_disability'] ?>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>  
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-4">
                               <label> 5. Cause of Disability:</label> <?php echo $formdata['causes_of_disability'] ?>
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
                                <label> 5. Cause of Disability: </label> <?php echo $formdata['home_address'] ?>
                            </div>
                            <div class="col-md-3">
                                <label>Barangay:</label> <?php echo $formdata['barangay'] ?>
                            </div>
                            <div class="col-md-3">
                                <label>Municipality:</label> <?php echo $formdata['municipality'] ?>
                            </div>
                        </div>
                        <div class="row" style="font-size:17px;"> 
                            <div class="col-md-6">
                                <label>Province:</label> <?php echo $formdata['prov_address'] ?>       
                            </div>
                            <div class="col-md-6">
                                <label>Region: </label> <?php echo $formdata['region'] ?>    
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
                                <label>TELEPHONE NO:</label> <?php echo $formdata['telephone_no'] ?>         
                            </div> 
                            <div class="col-md-3">
                                <label>MOBILE NO:</label> <?php echo $formdata['cellphone_no'] ?> 
                            </div>
                            <div class="col-md-6">
                                <label>EMAIL ADDRESS:</label> <?php echo $formdata['email_address'] ?> 
                            </div>
                        </div>
                        <br/>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-4">
                               <label>8. DATE OF BIRTH:</label> <?php echo $formdata['dateofbirth'] ?>    
                            </div>
                            <div class="col-md-4">
                                <label>9: SEX</label> <?php echo $formdata['sex'] ?> 
                            </div>
                            <div class="col-md-4">
                                <label>10. CIVIL STATUS:</label> <?php echo $formdata['civil_status'] ?> 
                            </div>
                        </div>
                        <br/>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-12">
                               <label>11. EDUCATIONAL ATTAINMENT:</label> <?= edu_attainment_desc($formdata['educational_attainment']) ?>   
                            </div>
                        </div>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-12">
                               <label>12. EMPLOYMENT STATYS</label> <?= $formdata['employment_status'] ?>
                            </div>
                        </div>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-12">
                                <label>13. NATURE OF EMPLOYMENT:</label> <?= $formdata['nature_of_employment'] ?>
                            </div>
                        </div>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-12">
                                <label>14. TYPE OF EMPLOYMENT</label><?= $formdata['type_of_employment'] ?>
                            </div>
                        </div>
                        <div class="row" style="font-size:17px;">
                            <div class="col-md-12">
                                <label>15. OCCUPATION:</label> <?= $formdata['occupation'] ?>
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
                                <label>17. BLOOD TYPE:</label> <?= $formdata['blood_type'] ?>
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
                        <div class="row" style="font-size:17px;">
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
            </div>
            <div class="row padding-top-20">
                     <div class="col-md-12">
                        <form action="<?= base_url("secretary_listing/review/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFRIM.')">
                        
                            <button type="submit" class="btn btn-success btn-flat btn-lg"><label>REVIEWED</label></button>
                            <a data-toggle="modal"  data-target="#feedback" class="btn btn-danger  btn-flat btn-lg"> <label>SEND FEEDBACK</label></a>
                            <a href="<?= base_url('secretary_listing/?form_id=8')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="fa fa-arrow-circle-o-left fa-arrow-circle-o-left fa-lg"></i> <label>BACK</label></a>
                        </form>   
                     </div>
                </div>
</section>        
<!-- Modal -->
    <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="ajax" action="<?= base_url('secretarycontroller/sendFeedback')?>" method="POST">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add feedback</h4>
              </div>
              <div class="modal-body">
                <div class="alert alert-danger hidden warning"></div>
                <div class="form-group">
                    <label>Write your feedback</label>
                    <textarea class="form-control" name="message"></textarea>
                    <input type="hidden" name="sent_to" value="<?= $formdata['resident_id']?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </form>
        </div>
      </div>
    </div>


