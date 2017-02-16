<?php if($this->session->flashdata('success')): ?>

    <script> swal('Update Success', 'You may now check your account.','success'); </script>

<?php endif; ?>
        
<div class="col-md-9">
    <div class="profile-content">
        <h4><label><i class="fa fa-user"></i> PERSONAL INFORMATION</label></h4>
            <div class="row" style="padding-top:10px;">
                <div class="col-md-4">
                    <label>LAST NAME: </label> <?php echo $lastname ?>
                </div>
                <div class="col-md-4">
                     <label> AGE:</label> <?php echo $age ?>
                </div>
                <div class="col-md-4">
                    <label> DATE OF BIRTH:</label> <?php echo date_create($dateofbirth)->format('F d, Y')  ?>
                </div>
            </div> 
            <div class="row" style="padding-top:10px;">
                <div class="col-md-4">
                    <label> FIRST NAME:</label> <?php echo $firstname ?>
                </div>
                <div class="col-md-4">
                    <label> CIVIL STATUS:</label> <?php echo $civil_status ?>
                </div>
                <div class="col-md-4">
                    <label>PLACE OF BIRTH:</label> <?php echo $placeofbirth ?>
                </div>
            </div> 
            <div class="row" style="padding-top:10px;">
                <div class="col-md-4">
                  <label> MIDDLE NAME: </label> <?php echo $middlename ?>
                </div>
                <div class="col-md-4"> 
                    <label> RELIGON</label>: <?php echo $religion ?>
                </div>
                <div class="col-md-4">
                    <label> SEX:</label> <?php echo $sex ?> 
                </div>
            </div> 
            <div class="row" style="padding-top:10px;">
                <div class="col-md-4"> 
                <label> CITIZENSHIP:</label> <?php echo $citizenship ?> 
                </div>
                <div class="col-md-4"> 
                  <label> OCCUPATION: </label> <?php echo $occupation ?> 
                </div>
                <div class="col-md-4"> 
                   <label>MONTHLY INCOME</label>: <?php echo $monthly_income ?> 
                </div>
            </div>
            <hr style="border-top:1px solid #cccccc; padding: 0; "/> 

        <h4><label><i class="fa fa-group"></i> FAMILY INFORMATION</label></h4>  
            <div class="row" style="padding-top:10px;">
                <div class="col-md-12">
                    <table class="table table-bordered not-datatable">
                        <thead>
                            <th>NAME</th>
                            <th>RELATION</th>
                            <th>AGE</th>
                            <th>OCCUPATION</th>
                            <th>INCOME</th>
                            <th>EDUCATIONAL ATTAINMENT</th>
                            <th>CONTACT NUMBER</th>
                            <th>DATE OF BIRTH</th>
                        </thead>
                        <tbody>
                            <?php foreach ($family_composition as $row) : ?> 
                            <tr>    
                          
                                <td><?= ucfirst($row['name']) ?></td>
                                <td><?= ucfirst($row['relationship'])?></td>
                                <td><?= $row['family_age']?></td>
                                <td><?= $row['family_occupation']?></td>
                                <td><?= $row['monthly_salary']?></td>
                                <td><?= edu_attainment_desc($row['family_educational_attainment'])?></td>
                                <td><?= $row['contact_number']?></td>
                                <td><?= date_create($row['dateofbirth'])->format('F d, Y')?></td>
                                
                            </tr>
                            
                            <?php endforeach; ?>
                          
                        </tbody>
                   </table>
                </div>
            </div>
                   
        <hr style="border-top:1px solid #cccccc; padding: 0; "/>
            
        <h4><label><i class="fa fa-phone-square"></i> CONTACT INFORMATION</label></h4>

            <div class="row" style="padding-top:10px;">
                 <div class="col-md-4">
                    <label>TELEPHONE NO:</label> <?php echo $telephone_no ?>
                </div>
                <div class="col-md-4">
                    <label>MOBILE NO:</label> <?php echo $cellphone_no ?>
                </div>
                <div class="col-md-4">
                    <label>EMAIL ADDRESS:</label> <?php echo $email_address ?>
                </div>
            </div> 
        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 

        <h4><label><i class="fa fa-bullseye"></i> ABILITIES</label></h4>  

        <div class="row" style="padding-top:10px;">
            <div class="col-md-4"> 
               <label>SKILL:</label> <?php echo $skills ?> 
            </div>
            <div class="col-md-4">  
                <label>TALENT: </label><?php echo $talent ?> 
            </div>
             <div class="col-md-4">
                <label>HOBBIES:</label> <?php echo $hobbies ?> 
            </div>
        </div>     

        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 

        <h4><label><i class="fa fa-home"></i> HOME ADDRESS</label></h4>

            <div class="row" style="padding-top:10px;">
                <div class="col-md-4">
                 <label>HOUSE NO AND STREET:</label> <?php echo $home_address ?>
                </div>
                <div class="col-md-4">
                     <label>BARANGAY: </label> <?php echo $barangay ?>
                </div>
                 <div class="col-md-4">
                     <label>SITIO:</label> <?php echo $sitio ?>
                </div>
            </div>
            <div class="row" style="padding-top:10px;">
                <div class="col-md-4">
                    <label>PROVINCE:</label> <?php echo $prov_address ?>
                </div>
                <div class="col-md-4"> 
                     <label>REGION:</label> <?php echo $region ?>
                </div>
                <div class="col-md-4"> 
                     <label>MUNICIPALITY:</label>: <?php echo $municipality ?>
                </div>
            </div>

        <hr style="border-top:1px solid #cccccc; padding: 0; "/> 

        <h4><label><i class="fa fa-graduation-cap"></i>EDUCATIONAL BACKGROUND</label></h4>
            
            <div class="row" style="padding-top:10px;">
                <div class="col-md-12">
                    <label>EDUCATIONAL ATTAINMENT:</label> <?php echo edu_attainment_desc($educational_attainment) ?>
                </div>
            </div>
       <!-- <div class="row" style="padding-top:10px;">
                <div class="col-md-4">Primary</div>
                    <div class="col-md-5">Address</div>
                    <div class="col-md-3">Year</div>
                </div>
                <div class="row" style="padding-top:10px;">
                    <div class="col-md-4">Secondary </div>
                    <div class="col-md-5">Address </div>
                    <div class="col-md-3">Year</div>
                </div>
                <div class="row" style="padding-top:10px;">
                    <div class="col-md-4">Tertiary </div>
                    <div class="col-md-5">Address </div>
                    <div class="col-md-3">Year</div>
                </div>  -->

     </div>
</div>
    
    <!--Change Password -->
    <div class="modal fade" tabindex="-1" role="dialog" id="changePassword">
        <div class="modal-dialog" role="document"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <form action="" method="">
                    <div class="modal-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username: </label>
                                        <input type="hidden" name="username" value="<?php echo $username ?>">
                                        <?php echo $username ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Change Password*</label>
                                        <input type="text" name="password" class="form-control">
                                     </div>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Change Password</button>
                        </div>
                    </div>
                </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<br>