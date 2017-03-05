    <div class="col-md-9">
    <!-- <div class="profile-content"> -->
	<div class="row">
 		<div class="col-md-12">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h4><label><i class="glyphicon glyphicon-user"></i> &nbsp;&nbsp;&nbsp;MANAGE YOUR PROFILE</label></h4>
                </div>
                
				<form action="<?= base_url('update/save')?>" method= "POST" enctype="multipart/form-data">
					<!-- Body -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($errors = $this->session->flashdata('errors')):?>
                                    <div class="alert alert-danger alert-dismissible" role="alert"">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </button>
                                        <ul class="list-unstyled">
                                            <?php foreach($errors as $e ) : ?>
                                                <li><?= $e ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 padding-top-10">
                                <h4><label>PERSONAL INFORMATION</label></h4>
                            </div>
                        </div>
                        <div class="row padding-top-20">
                       		<div class="col-md-4 padding-top-10">
                            	<label for="firstname">FIRST NAME:</label>
                                <input type="text" class="form-control"  value="<?= $data['firstname'] ?>" name="firstname" id="firstname" placeholder="">
                            	<!-- <p class="form-control-static"><?= $data['firstname']?></p>-->
                            		
                       		</div>
                      		 <div class="col-md-4 padding-top-10">
                            	<label for="lastname">LAST NAME:</label>
                                <input type="text" class="form-control"  value="<?= $data['lastname']?>" name= "lastname" id="lastname" placeholder="">
                                	<!-- <p class="form-control-static"><?= $data['lastname']?></p> -->
                       		</div>
                        	<div class="col-md-4 padding-top-10">
                            	<label for="middlename">MIDDLE NAME</label>
                                	<input type="text" class="form-control"  value="<?= $data['middlename']?>" name= "middlename" id="middlename" placeholder="">
                        	</div>
                        </div>

                        <div class="row ">
                            <div class="col-md-2 padding-top-10">
                                <label for="age">AGE:</label>
                                    <input type="text" class="form-control"  value="<?= $data['age']?>" name= "age" id="age" placeholder="" readonly="readonly">
                            </div>
                             <div class="col-md-2 padding-top-10">
                                <label for="age">NICKNAME:</label>
                                    <input type="text" class="form-control"  value="<?= $data['nickname']?>" name= "nickname" id="anicknamee" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="dateofbirth">DATE OF BIRTH:</label>
                                	<input type="date" class="form-control"  value="<?= $data['dateofbirth']?>" name="dateofbirth" id="dateofbirth" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <div class="form-group  <?= form_error('placeofbirth') ? 'has-error' : ''?>">
                                    <label for="placeofbirth">PLACE OF BIRTH:</label>
                                        <input type="text" class="form-control"  value="<?= $data['placeofbirth']?>" name= "placeofbirth" id="placeofbirth" placeholder="">
                                      <?= form_error('placeofbirth', '<span class="help-block text-center">', '</span>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-4 padding-top-10">
                                <div class="form-group  <?= form_error('civil_status') ? 'has-error' : ''?>">
                                    <label for="">CIVIL STATUS:</label>
                                    <?=  form_dropdown('civil_status',[
                                        'single'=>'Single', 
                                        'married'=>'Married', 
                                        'widower'=>'Widower', 
                                        'separated'=>'Separated', 
                                        'co-habitation'=> 'Live-in', 
                                        'guardian'=> 'Guardian', 
                                        'soloparent'=> 'Soloparent'
                                    ],  
                                    $data['civil_status'], 'class = "form-control" ')?>
                                    <?= form_error('civil_status', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                            <div class="col-md-4 padding-top-10">
                                    <label for="religion">RELIGION:</label>
                                    <input type="text" class="form-control"  value="<?= $data['religion']?>" name= "religion" id="religion" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <div class="form-group  <?= form_error('sex') ? 'has-error' : ''?>">
                                    <label for="sex">SEX:</label>
                                    <?=  form_dropdown('sex',[
                                    'Male'=>'Male', 
                                    'Female'=>'Female'],  
                                    $data['sex'], 'class = "form-control" ')?>  
                                    <?= form_error('sex', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-4 padding-top-10">
                                <label for="skills">CITIZENSHIP:</label>
                                    <input type="text" class="form-control" value="<?= $data['citizenship']?>" name="citizenship" id="citizenship" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="occupation">OCCUPATION:</label>
                                    <input type="text" class="form-control" value="<?= $data['occupation']?>" name="occupation" id="occupation" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="monthly_salary">MONTHLY SALARY:</label>
                                    <input type="text" class="form-control" value="<?= $data['monthly_income']?>" name="monthly_income" id="monthly_income" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 padding-top-10">
                                <label for="skills">SKILLS:</label>
                                    <input type="text" class="form-control" value="<?= $data['skills']?>" name="skills" id="skills" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="talent">TALENT:</label>
                                    <input type="text" class="form-control" value="<?= $data['talent']?>" name= "talent" id="talent" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="hobbies">HOBBIES:</label>
                                    <input type="text" class="form-control" value="<?= $data['hobbies']?>" name= "hobbies" id="hobbies" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="other_skills">OTHER SKILLS:</label>
                                    <input type="text" class="form-control" value="<?= $data['other_skills']?>" name= "other_skills" id="other_skills" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 padding-top-10">         
                                <label>CHANGE DISPLAY PHOTO</label>                
                                    <?php echo "<input type='file' name='userfile' size='20' />"; ?>
                            </div>
                        </div>  
                        
                        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 
                            
                        <div class="row ">
                            <div class="col-md-6 padding-top-10">
                                <h4><label>CONTACT INFOMATION</label></h4>
                            </div>
                     	</div>
                     	<div class="row ">
                            <div class="col-md-3 padding-top-10">
                                <label for="telephone_no">TELEPHONE NO</label>
                                    <input type="text" class="form-control"  value="<?= $data['telephone_no']?>" name= "telephone_no" id="telephone_no" placeholder="">
                            </div>
                            <div class="col-md-3 padding-top-10">
                                <label for="cellphone_no">MOBILE NO</label>
                                    <input type="text" class="form-control"  value="<?= $data['cellphone_no']?>" name= "cellphone_no" id="cellphone_no" placeholder="">
                            </div>
                            <div class="col-md-6 padding-top-10">  
                                <label for="email_address">EMAIL ADDRESS</label>
                                    <input type="email" class="form-control"  value="<?= $data['email_address']?>" name= "email_address" id="email_address" placeholder="">
                            </div>
                        </div>

                        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 
                           
                        <div class="row">
                            <div class="col-md-6 padding-top-10">
                                <h4><label>EDUCATIONAL ATTAINMENT</label></h4>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="">HIGHEST EDUCATIONAL ATTAINMENT:</label>
                                <?=  form_dropdown('educational_attainment',[
                                    ''             => 'Choose Below',
                                    'elementarygraduate'      => 'Elementary Graduate', 
                                    'elementaryundergraduate' => 'Elementary Undergraduate', 
                                    'highschoolundergraduate' => 'Highschool Undergraduate',
                                    'highschoolgraduate'      => 'Highschool Graduate',
                                    'collegegraduate'         => 'College Graduate',
                                    'collegeundergraduate'    => 'College Undergraduate',
                                    'postgraduate'            => 'Post Graduate',
                                    'vocational'              => 'Vocational',
                                    'none'                    => 'None'
                                ],  
                                $data['educational_attainment'], 'class = "form-control" ')?> 
                            </div>
                        </div>
                       
                        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 
                        <div class="row">
                            <div class="col-md-3 padding-top-10">
                                <h4><label>HOME ADDRESS</label></h4>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 padding-top-10">
                                <label for="home_address">HOME AND STREET NO:</label>
                                    <input type="text" class="form-control" value="<?= $data['home_address']?>" name= "home_address" id="home_address" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="barangay">BARANGAY:</label>
                                  <p class="form-control-staic">Banilad</p>
                            </div>
                            <div class="col-md-4 padding-top-10">
                                <label for="sitio">SITIO/PUROK:</label>
                                <?=  form_dropdown('sitio',[

                                    ''      => 'Choose Below',
                                    'baniladproper'    => 'Banilad Proper', 
                                    'iccompound'       => 'IC Compound', 
                                    'sanroqueville'    => 'San Roque Ville', 
                                    'rotunda'          => 'Rotunda', 
                                    'mahigacenter'     => 'Mahiga Center', 
                                    'mahigaupper'      => 'Mahiga Upper', 
                                    'tonggo'           => 'Tonggo',
                                    'tayongrelocation' => 'Tayong Relocation',
                                    'magihalower'      => 'Mahiga Lower',
                                    'ibaan'            => 'Ibaan',
                                    'bas'              => 'Bas',
                                    'tayongupper'      => 'Tayong Upper',
                                    'atis'             => 'Atis',
                                    'none'             => 'None'
                                ],  
                                $data['sitio'], 'class = "form-control" ')?> 
                            </div>
                            <div class="col-md-4 padding-top-10">  
                                <label for="prov_address">PROVINCE:</label>
                                    <input type="text" class="form-control" value="<?= $data['prov_address']?>" name= "prov_address" id="prov_address" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">  
                                <label for="region">REGION:</label>
                                    <p class="form-control-static">Region 7</p>
                            </div>
                            <div class="col-md-4 padding-top-10">  
                                <label for="Municipality">MUNICIPALITY:</label>
                                <p class="form-control-static">Cebu</p>
                            </div>
                        </div>
                        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-border not-datatable" id="main">
                                    <thead>
                                        <th><h4><label>#</label></h4></th>
                                        <th><h4><label>FAMILY DETAILS</label></h4></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php $family = isset($data['family_composition'])  && $data['family_composition'] ? $data['family_composition'] : [[]] ?>
                                        <?php foreach(array_values($family) as $i => $fam):?>
                                         <tr>
                                            <td><?= $i + 1?></td>
                                            <td>   
                                                <div class="row " class="">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>NAME:</label>
                                                            <?= form_input('fc[name][]', element('name', $fam), 'class="form-control input-sm"')?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <label for="">RELATIONSHIP  :</label>
                                                            <?=  form_dropdown('fc[relationship][]',[
                                                                '' => 'Choose Below',
                                                                'father'      => 'Father', 
                                                                'mother'      => 'Mother', 
                                                                'guardian'    => 'Guardian',
                                                                'son'         => 'Son',
                                                                'daughter'    => 'Daughter',
                                                                'sister'      => 'Sister',
                                                                'brother'     => 'Brother',
                                                                'spouse'        => 'Spouse',
                                                                'none'        => 'None'
                                                                ],  
                                                                element('relationship', $fam), 'class = "form-control" ')?> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>AGE:</label>
                                                            <?= form_input('fc[family_age][]', element('family_age', $fam), 'class="form-control input-sm famage" id="age" readonly="readonly"')?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" class="">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>CIVIL STATUS: </label>
                                                            <?=  form_dropdown('fc[family_status][]',[
                                                                ''              => 'Choose Below',
                                                                'single'        => 'Single', 
                                                                'married'       => 'Married', 
                                                                'widower'       => 'Widower',
                                                                'separated'     => 'Separated',
                                                                'co-habitation' => 'Live-in',
                                                                'guardian'      => 'Guardian', 
                                                                'soloparent'    => 'Soloparent',
                                                                'none'          => 'None'
                                                                ],  
                                                                element('family_status', $fam), 'class = "form-control" ')?>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>OCCUPATION:</label>
                                                            <?= form_input('fc[family_occupation][]', element('family_occupation', $fam), 'class="form-control input-sm"')?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>SALARY/INCOME:   </label>
                                                            <?= form_input('fc[monthly_salary][]', element('monthly_salary', $fam), 'class="form-control input-sm"')?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" class="">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>EDUCATIONAL ATTAINMENT: </label>
                                                                <?=  form_dropdown('fc[family_educational_attainment][]',[
                                                                    ''   => 'Choose Below',
                                                                    'elementarygraduate'=>'Elementary Graduate', 
                                                                    'elementaryundergraduate'=>'Elementary Undergraduate', 
                                                                    'highschoolundergraduate' => 'Highschool Undergraduate',
                                                                    'highschoolgraduate' => 'Highschool Graduate',
                                                                    'collegegraduate' => 'College Graduate',
                                                                    'collegeundergraduate' =>'College Undergraduate',
                                                                    'postgraduate'=> 'Post Graduate',
                                                                    'Vocational' => 'Vocational',
                                                                    'none' => 'None'
                                                                ],  

                                                                element('family_educational_attainment', $fam), 'class= "form-control" ')?> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>CONTACT NO:</label>
                                                            <?= form_input('fc[contact_number][]', element('contact_number', $fam), 'class="form-control input-sm"')?>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label> DATE OF BIRTH: </label>
                                                            <input type="date" id="dateofbirth"  name="fc[dateofbirth][]" value="<?= element('dateofbirth', $fam)?>" class="form-control input-sm famdateofbirth" id="dateofbirth">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>                 
                                            <td>
                                                <a data-click="remove-line" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                            </td> 
                                        </tr>
                                        <?php endforeach; ?>
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <a class="btn btn-success" style="color:#fff;" data-click="new-line">
                                                    <i class="fa fa-plus"></i> <b>ADD FAMILY MEMBER DETAILS</b>
                                                </a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    <!--     <div class="row">
                            <div class="col-md-8">
                                <label for="spouse_name">NAME OF SPOUSE: </label>
                                <div class="form-group">
                                     <?= form_input('fc[name][]', element('name', $fam), 'class="form-control input-sm"')?>
                                    <?= form_hidden('fc[relationship][]', 'spouse')?>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <label for="spouse_age">AGE: </label>
                                <div class="form-group">
                                    <?= form_input('fc[age][]', element('spouse_age', $fam), 'class="form-control input-sm"')?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="spouse_address">HOME AND STREET NO:</label>
                                <div class="form-group">
                                    <?= form_input('fc[address][]', element('address', $fam), 'class="form-control input-sm"')?>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <label for="spouse_dateofbirth">DATE OF BIRTH:</label>
                                <div class="form-group">
                                     <input type="date" id="spouse_dateofbirth"  name="fc[dateofbirth][]" value="<?= element('dateofbirth', $fam)?>" class="form-control input-sm" id="dateofbirth">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="spouse_income">MONTHLY INCOME/SALARY:</label>
                                <div class="form-group">
                                    <?= form_input('fc[monthly_salary][]', element('monthly_salary', $fam), 'class="form-control input-sm"')?>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label>OCCUPATION:</label>
                                    <?= form_input('fc[family_occupation][]', element('family_occupation', $fam), 'class="form-control input-sm"')?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>EDUCATIONAL ATTAINMENT: </label>
                                        <?=  form_dropdown('fc[family_educational_attainment][]',[
                                            ''   => 'Choose Below',
                                            'elementarygraduate'=>'Elementary Graduate', 
                                            'elementaryundergraduate'=>'Elementary Undergraduate', 
                                            'highschoolundergraduate' => 'Highschool Undergraduate',
                                            'highschoolgraduate' => 'Highschool Graduate',
                                            'collegegraduate' => 'College Graduate',
                                            'collegeundergraduate' =>'College Undergraduate',
                                            'postgraduate'=> 'Post Graduate',
                                            'Vocational' => 'Vocational',
                                            'none' => 'None'
                                        ],  

                                        element('family_educational_attainment', $fam), 'class= "form-control" ')?> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="no_of_children">NO OF CHILDREN:</label>
                                <div class="form-group">
                                    <?= form_input('fc[no_of_children][]', element('no_of_children', $fam), 'class="form-control input-sm"')?>
                                </div>  
                            </div>  
                        </div> -->  

                        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 
                        <div class="row">
                            <div class="col-md-12">
                                <label>ID REFERENCE NO'S: </label>
                            </div>   
                        </div>

                        <div class="row">
                            <div class="col-md-4 padding-top-10">  
                                <label for="sss_no">SSS NO:</label>
                                <input type="text" class="form-control" value="<?= $data['sss_no']?>" name="sss_no" id="sss_no" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">  
                                <label for="sss_no">GSIS NO:</label>
                                <input type="text" class="form-control" value="<?= $data['gsis_no']?>" name="gsis_no" id="gsis_no" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">  
                                <label for="tin_no">TIN NO:</label>
                                <input type="text" class="form-control" value="<?= $data['tin_no']?>" name="tin_no" id="tin_no" placeholder="">
                            </div>
                            <div class="col-md-4 padding-top-10">  
                                <label for="sss_no">PAG-IBIG NO:</label>
                                <input type="text" class="form-control" value="<?= $data['pag_ibig_no']?>" name="pag_ibig_no" id="pag_ibig_no" placeholder="">
                            </div>
                             <div class="col-md-4 padding-top-10">  
                                <label for="sss_no">PHILHEALTH NO:</label>
                                <input type="text" class="form-control" value="<?= $data['philhealth_no']?>" name="philhealth_no" id="philhealth_no" placeholder="">
                            </div>
                        </div>
                      
                      
                	</div>  	
	                	<div class="panel-footer">
	                	    <div class="row padding-top-10">    
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input type="submit" value="UPDATE PROFILE" class="btn btn-primary btn-block btn-sm" style="font-weight:bold;"/>
                                </div>
                             </div>
	                	</div>
	            </form>
	  	    </div> <!--Close Panel body -->
		</div> <!-- Close panel-->
  	</div> <!-- Close col-md -->   			
</div>
