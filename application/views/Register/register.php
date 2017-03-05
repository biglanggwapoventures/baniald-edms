<nav class="navbar navbar-fixed-top" role="navigation" style=" background-color: #22272b;">
    <div class="navbar-header">
        <ul class="nav navbar-nav" >
            <a class="navbar-brand">
                <li style="color:#fff;">
                    <img src="<?= base_url('assets/dist/img/logo1.jpg')?>" height=32px> 
                     &nbsp; ELECTRONIC DOCUMENT MANAGEMENT SYSTEM
                </li>
            </a>
        </ul>
    </div>      
</nav>
<br/><br/><br/><br/> 
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-transparent">
            <div class="panel-heading padding-top-20">
                <label style="color:#6dd9f9;">CREATE AN ACCOUNT (REGISTRATION FORM)</label>
            </div>
            <form action="<?= base_url('register/save')?>" method="POST">
                <div class="panel-body"> 
                    <div class="row">
                        <div class="col-md-4">
                            <label style="color:#ffffff;">FIRST NAME: *</label>
                            <div class="form-group  <?= form_error('firstname') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span>
                                    <div data-tip="Enter your First Name">
                                        <input class="form-control" name="firstname" placeholder="First Name" 
                                        value="<?php echo set_value('firstname');?>">
                                    </div>
                                </div>
                                <?= form_error('firstname', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label  style="color:#ffffff;">LAST NAME: *</label>
                            <div class="form-group <?= form_error('lastname') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span>
                                    <div data-tip="Enter your Last Name">
                                        <input class="form-control" name="lastname" placeholder="Last Name" aria-describedby="basic-addon1" value="<?php echo set_value('lastname');?>">
                                    </div>
                                </div>  
                                <?= form_error('lastname', '<span class="help-block text-center">', '</span>') ?>     
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="color:#ffffff;">MIDDLE NAME: (OPTIONAL)</label>
                            <div class="form-group  <?= form_error('middlename') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span>
                                    <div data-tip="Enter your Middle Name">
                                        <input class="form-control" name="middlename" placeholder="Middle Name" aria-describedby="basic-addon1" value="<?php echo set_value('middlename');?>">
                                    </div>
                                </div>
                                 <?= form_error('middlename', '<span class="help-block text-center">', '</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row padding-top-10">
                        <div class="col-md-4">
                            <label style="color:#ffffff;">EMAIL ADDRESS: *</label>
                            <div class="form-group  <?= form_error('email_address') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span>
                                    <div data-tip="Enter your Email Address">
                                        <input type="email" class="form-control" name="email_address" placeholder="Email Address" value="<?php echo set_value('email_address');?>">
                                    </div>
                                </div>   
                                <?= form_error('email_address', '<span class="help-block text-center">', '</span>') ?> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="color:#ffffff;">CELLPHONE NUMBER: * </label>
                            <div class="form-group  <?= form_error('cellphone_no') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-phone"></span>
                                    </span>
                                    <div data-tip="Enter your Phone Number">
                                        <input type="text" class="form-control" name="cellphone_no" placeholder="Mobile Number" value="<?php echo set_value('cellphone_no');?>"">
                                    </div>
                                </div>
                                <?= form_error('cellphone_no', '<span class="help-block text-center">', '</span>') ?>  
                            </div>   
                        </div>
                        <div class="col-md-4">
                            <label style="color:#ffffff;">TELEPHONE NUMBER: (OPTIONAL) </label>
                            <div class="form-group  <?= form_error('telephone_no') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-phone"></span>
                                    </span>
                                    <div data-tip="Enter your Telephone Number"> 
                                        <input type="text" class="form-control" name="telephone_no" placeholder="Telephone Number" value="<?php echo set_value('telephone_no');?>">
                                    </div>
                                </div>
                                <?= form_error('telephone_no', '<span class="help-block text-center">', '</span>') ?>  
                            </div>   
                         </div> 
                    </div>
                    <div class="row padding-top-10">
                        <div class="col-md-4">
                            <label style="color:#ffffff;">USERNAME: *</label>  
                            <div class="form-group <?= form_error('username') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span>
                                    <div data-tip="Enter a Username">
                                        <input class="form-control " name="username" placeholder="Username" value="<?php echo set_value('username');?>">
                                    </div>
                                </div>
                                <?= form_error('username', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="color:#ffffff;">PASSWORD: *</label>  
                            <div class="form-group  <?= form_error('password') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-key"></span>
                                    </span>
                                    <div data-tip="Enter a Password">
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password');?>">
                                    </div>
                                </div>   
                                <?= form_error('password', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="color:#ffffff;">CONFIRM PASSWORD: *</label>
                            <div class="form-group <?= form_error('confirm_password') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                                    <div data-tip="Confirm your Password">
                                        <input class="form-control"  name="confirm_password" type="password" placeholder="Confirm Password" value="<?php echo set_value('confirm_password');?>">
                                    </div>
                                </div>
                                <?= form_error('confirm_password', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                        </div>
                    </div>
                    <div class="row padding-top-10">
                        <div class="col-md-4">
                            <label style="color:#ffffff;">DATE OF BIRTH: *</label>
                            <div class="form-group  <?= form_error('dateofbirth') ? 'has-error' : ''?>" style=>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-birthday-cake"></span>
                                    </span>
                                    <div data-tip="Select your Birthday">
                                        <input type="date" class="form-control"  name="dateofbirth" id="dateofbirth" placeholder="Enter your birthdate" value="<?php echo set_value('dateofbirth');?>">
                                    </div>
                                </div>
                                <?= form_error('dateofbirth', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                        </div>
                        <div class="col-md-4">
                             <label style="color:#ffffff;">AGE:</label>
                            <div class="form-group  <?= form_error('age') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                    <input type="text" class="form-control" name="age"  id="age" placeholder="" 
                                    value="<?php echo set_value('age');?>" readonly="readonly">
                                </div>
                                <?= form_error('age', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label style="color:#ffffff;">SEX: *</label>
                            <!-- <?php echo form_radio('Sex', 'Male', True) ?> -->

                            <div class="radio">
                                <div class="form-group  <?= form_error('sex') ? 'has-error' : ''?>">
                                    <div class="input-group" style="color:#fff;">
                                        <label><input type="radio" name="sex" value="Male" <?= set_value('sex') === 'Male' ? 'checked="checked"' : ''?> > Male </label> &nbsp;
                                        <label><input type="radio" name="sex" value="Female" <?= set_value('sex') === 'Female' ? 'checked="checked"' : ''?>> Female </label>
                                    </div>
                                </div>
                            </div>  
                        </div>  
                    </div>
                </div>
                <div class="panel panel-footer">
                    <div class="row">                
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info btn-flat btn-lg pull pull-right">REGISTER NOW! &nbsp;
                                <span class="glyphicon glyphicon-log-in"></span>
                            </button><br/>
                            <p class="pull-left" style="color:#6dd9f9;"><b>ALREADY A MEMBER?</b>
                                <a href="<?= base_url('login')?>" style="color:#d6d8db; text-decoration: underline;">
                                    CLICK HERE TO SIGN IN&nbsp;<i class="fa fa-hand-o-left" aria-hidden="true"></i>
                                </a>
                            </p>
                        </div>
                    </div>  
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<script type="text/javascript">

    function getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }

    document.getElementById('dateofbirth').addEventListener('input', function(){
         document.getElementById('age').value = getAge(this.value);
    })
    
</script>