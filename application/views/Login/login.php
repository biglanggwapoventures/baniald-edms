<?php if($this->session->flashdata('success')): ?>
    <script> 
        swal('REGISTRATION SUCCESS', 'YOU CAN NOW LOGIN','success');
    </script>
<?php endif; ?>
<nav class="navbar navbar-fixed-top" role="navigation" style=" background-color: #22272b;">
    <div class="navbar-header">
        <ul class="nav navbar-nav" >
            <a class="navbar-brand">
                <li style="color:#fff;">
                    <img src="<?= base_url('assets/dist/img/logo1.jpg')?>" height=30px> 
                    &nbsp; ELECTRONIC DOCUMENT MANAGEMENT SYSTEM
                </li>
            </a>
        </ul>
    </div>      
</nav>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-transparent" style="margin-top:150px;">
            <div class="panel-heading padding-top-20">
                <label style="color:#6dd9f9;">BARANGAY BANILAD<br/> ELECTRONIC DOCUMENT MANAGEMENT SYSTEM</label>
            </div>
            <form action="<?= base_url('login/login_attempt')?>" method="POST">
                <div class="panel-body"> 

                    <?php if(isset($error)): ?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <br><p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $error?></p>
                        </div>  
                    <?php endif; ?> 

                    <?php if(isset($error1)): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" >
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <br/><p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $error1 ?></p>
                        </div>  
                    <?php endif; ?> 
                    <div class="row padding-top-10">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user-circle-o"></span>
                                    </span>
                                    <input type="text" class="form-control" name="username" placeholder="Enter your username" aria-describedby="basic-addon1" value="<?php echo set_value('username');?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="fa fa-key"></span>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?php echo set_value('password');?>">
                            </div>    
                        </div> 
                    </div>
                </div>
                <div class="panel-footer"><br/>
                    <button type="submit" class="btn btn-info btn-lg btn-flat pull-right">LOGIN &nbsp;
                        <span class="glyphicon glyphicon-log-in"></span>
                    </button>
                    <p style="color:#6dd9f9;"><b>DON'T HAVE AN ACCOUNT?</b><br/>
                        <a href="<?= base_url('register')?>" style="color:#d6d8db; text-decoration:underline;">
                            CLICK HERE TO SIGN UP&nbsp;
                            <i class="fa fa-hand-o-left"></i>
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>


