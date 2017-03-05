<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('captain/nav_view'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             <span class="glyphicon glyphicon-list"></span> ADMIN<small></small>
          </h1>
          <br/><br/>

          <a href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i> ADD USER</a><br/><br/>
          <table class="table table-hover">
              <thead>
                <!-- <th>#</th> -->
                <th>NAME</th>
                <th>ADMIN TYPE</th>
              
                <!-- <th>REMOVE ADMIN</th> -->
              </thead>
              
              <tbody>
                  <?php foreach($list_of_user as $row): ?>

                    <tr>
                      <!-- <td><?php echo $row->user_id; ?></td> -->
                    
                      <td><?php echo ucfirst($row->lastname.', '. $row->firstname) ?></td>
                        <td><?php echo ucfirst($row->user_type) ?></td>
                      <!-- <td><a href ="#"><img src="<?= base_url('assets/dist/img/cancel.png') ?>" height=30px></a></td> -->
                          
                    </tr> 

                  <?php endforeach; ?>
              </tbody>
          </table>
        </section>

      </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="adduser" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">CREATE A MEMBER</h4>
                </div>
               <form method="POST" action="<?= base_url('user/store')?>" class="ajax">
                  <div class="modal-body">
                      <div class="alert alert-danger warning hidden"></div>
                      <div class="row">
                         <div class="col-md-6">
                            <label  style="color:#000;">FIRST NAME: *</label>
                            <div class="form-group <?= form_error('firstname') ? 'has-error' : ''?>">
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
                          <div class="col-md-6">
                                  <label  style="color:#000;">LAST NAME: *</label>
                                  <div class="form-group  <?= form_error('lastname') ? 'has-error' : ''?>">
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
                      </div>
                      <div class="row padding-top-10">
                            <div class="col-md-6">
                                <label style="color:#000;">USERNAME: *</label>  
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
                            <div class="col-md-6">
                                <label style="color:#000;">PASSWORD: *</label>  
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
                            <div class="col-md-6">
                                <label style="color:#000;">EMAIL ADDRESS: *</label>
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
                            <div class="col-md-6">
                                <label style="color:#000;">CONFIRM PASSWORD: *</label>
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
                      <div class="row">
                          <div class="col-md-4">
                              <label for="">USER TYPE: </label>
                                <?=  form_dropdown('user_type',[
                                    'secretary'=>'SECRETARY', 
                                    'treasurer'=>'TREASURER',
                                    'resident' => 'RESIDENT'
                                ],  
                                ['user_type'], 'class = "form-control" ')?> 
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">CREATE</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                  </div>
               </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
  </div>
</body>
