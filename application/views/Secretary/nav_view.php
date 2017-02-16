<header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url('secretary_listing?form_id=1 ')?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>ED</b>MS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Brgy Banilad </b>EDMS</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/dist/img/avatar3.png') ?>" class="user-image" alt="User Image">
                <span class="hidden-xs">Secretary</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('assets/dist/img/avatar3.png') ?>" class="img-circle" alt="User Image">
                  <p>
                   Name of Secretary - Secretary
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                 
                  <div class="pull-right">
                    <a href="<?= base_url('logout/logout')?>" class="btn btn-danger btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
         
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets/dist/img/avatar3.png')?>"  alt="User Image">
          </div>
          <div class="pull-left info">
            <p>SECRETARY</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
       
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header"><label style="color:#fff">MENU</label></li>
          <!--
          <li>
            <a href="">
              <i class="fa fa-home"></i> <span>Home</span>
             
            </a>
          </li>
          -->
          <?php $pending = pending_count() ?>
          <?php $types = [ 
            1   => 'Business Clearance', 
            2   => 'Senior Citizen', 
            3   => 'Kalipi Federation',  
            4   => 'Amicable Settlement',
            5   => 'Kasambahay', 
            6   => 'Erpat', 
            7   => 'Solo Parents', 
            8   => 'Person With Disability', 
            9   => 'PWD Financial Assistance', 
            10  => 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-hourglass"></i>
              <span>List of Pending Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("secretary_listing?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($pending[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-danger pull-right"> 
                            <?= $pending[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
            </ul>
          </li>

          <?php $reviewed = reviewed_count() ?>
          <?php $types = [ 
            1   => 'Business Clearance', 
            2   => 'Senior Citizen', 
            3   => 'Kalipi Federation',  
            4   => 'Amicable Settlement',
            5   => 'Kasambahay', 
            6   => 'Erpat', 
            7   => 'Solo Parents', 
            8   => 'Person With Disability', 
            9   => 'PWD Financial Assistance', 
            10  => 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark"></i>
              <span>List of Reviewed Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("secretary_listing/view_reviewed?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($reviewed[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-danger pull-right"> 
                            <?= $reviewed[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
            </ul>
          </li>

          <?php $paid = paid_count() ?>
          <?php $types = [ 
            1   => 'Business Clearance', 
            2   => 'Senior Citizen', 
            3   => 'Kalipi Federation',  
            4   => 'Amicable Settlement',
            5   => 'Kasambahay', 
            6   => 'Erpat', 
            7   => 'Solo Parents', 
            8   => 'Person With Disability', 
            9   => 'PWD Financial Assistance', 
            10  => 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-check-square"></i>
            <span>List of Paid Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("secretary_listing/view_paid?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($paid[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-primary pull-right"> 
                            <?= $paid[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
            </ul>
          </li>
          
          
          <?php $approved = cap_approved_count() ?>
          <?php $types = [ 
            1   => 'Business Clearance', 
            2   => 'Senior Citizen', 
            3   => 'Kalipi Federation',  
            4   => 'Amicable Settlement',
            5   => 'Kasambahay', 
            6   => 'Erpat', 
            7   => 'Solo Parents', 
            8   => 'Person With Disability', 
            9   => 'PWD Financial Assistance', 
            10  => 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-thumbs-up"></i>
            <span>List of Approved Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("secretary_listing/view_approve?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($approved[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-primary pull-right"> 
                            <?= $approved[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
            </ul>
          </li>
  
        <li class="header" style="color:#fff;"> <br></li>

          <!-- <li class="header"><label style="color:#fff">OTHER MENU</label></li> -->
          <!-- <li><a href="#"><i class="fa fa-user"></i> <span>Manage Profile </span></a></li> -->
          <!-- <li><a href="#"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>   -->   
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>