<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#2a313d;">
    <div class="navbar-header">
        <ul class="nav navbar-nav" >
            <a class="navbar-brand" style="padding-left:30px;">
                <li style="color:#fff;">
                    Barangay Banilad Electronic Document Management System
                </li>
            </a>
        </ul>
    </div>      
</nav>
<br/><br/><br/>         
<div class="row profile">
    <div class="col-md-3">
        <!-- START PROFILE SIDE-BAR -->
        <div class="profile-sidebar ">
            <center>

      <!--       <?php  if(!empty($this->session->userdata('logged_in')['image_filename'])) : ?>
                <div class="profile-userpic">  
                    <img src="<?= base_url("uploads/{$this->session->userdata('logged_in')['image_filename']}");?>" height="150">
                </div> 

            <?php else : ?>
            
                <div class="profile-userpic">  
                     <img src="<?= base_url('assets/dist/img/avatar.png');?>" height="150">
                </div> 
            
            <?php endif; ?>
            --><div class="profile-userpic">  
        <img src="<?= base_url("uploads/{$image_filename}");?>" height="150">
    </div> 
          
            </center>
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <h2><label style="color:#2a313d;">WELCOME!</label></h2>
                </div>
                <div class="profile-usertitle-name">
                    <label><?php echo $lastname ?>, <?php echo $firstname ?> <?php echo $middlename ?> </label>
                </div>
                <div class="profile-usertitle-id">
                    Resident Id #: <?php echo $user_id ?> 
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->  
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <!-- OPEN DROPWDOWN -->
                    <!-- SECTION OPEN -->
                    <section class="sidebar">
                        <ul class="sidebar-menu">
                            <li class="header" style="color:#2a313d;" >
                                <label style="font-size: 15px;">MAIN MENU</label>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-file"></i>
                                    <span>CHOOSE A FORM</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="<?= base_url('Brgyclearancecontroller/BrgyClearanceForm') ?>">
                                            <i class="fa fa-pencil-square-o"></i> Business Clearance
                                            <span class="pull-right-container"></span>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Person_with_disabilitescontroller/Pwd_Form') ?>">
                                                <i class="fa fa-pencil-square-o"></i> Person With Disabilty Registration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Financialpwdcontroller/Financialpwd_Form') ?>">
                                                <i class="fa fa-pencil-square-o"></i> Financial Assistance For PWD
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Seniorcitizencontroller/Seniorcitizen_Form') ?>">
                                                <i class="fa fa-pencil-square-o "></i>Senior Citizen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Kasambahaycontroller/Kasambahay_Form') ?>">
                                                <i class="fa fa-pencil-square-o"></i> Kasambahay Registration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Kalipicontroller/Kalipi_Form') ?>">
                                                <i class="fa fa-pencil-square-o "></i> Kalipi Federation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Soloparentcontroller/Soloparent_Form') ?>">
                                                <i class="fa fa-pencil-square-o"></i> Solo Parent
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Complaintcontroller/Complaint_Form') ?>">
                                                <i class="fa fa-pencil-square-o"></i> Complaint Report 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('Erpatcontroller/Erpat_Form'); ?>">
                                                <i class="fa fa-pencil-square-o "></i> Empowerment and <br> Reaffirmation  of Paternal Abilities
                                            </a>
                                        </li>
                                         <li>
                                            <a href="<?php echo base_url('Settlementcontroller/SettlementForm'); ?>">
                                                <i class="fa fa-pencil-square-o "></i> Amicable Settlement
                                            </a>
                                        </li>
                                </ul>
                            </li>
                                        <li>
                                            <a href="<?= base_url('home/MyRequestedForms') ?>">
                                                <i class="glyphicon glyphicon-send"></i> LIST OF REQUESTED FORMS
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('home/viewFeedback') ?>">
                                                <i class="glyphicon glyphicon-exclamation-sign"></i>NOTIFICATION 
                                            </a>
                                        </li>
                                        <li class="header" style="color:#2a313d;"><label style="font-size:15px;">OTHER MENU</label></li>
                        </ul>
                    </section>
                    <!-- SECTION CLOSE  -->
                    <!-- DROPWDOWN CLOSE-->
                        
                                <li>
                                    <a href="<?= base_url('update')?>">
                                        <i class="glyphicon glyphicon-edit"></i> UPDATE PROFILE
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home/home_profile')?>"> 
                                        <i class="glyphicon glyphicon-user"></i> VIEW PROFILE
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('home/viewRequestedHistory'); ?>">
                                        <i class="fa fa-list"></i>LIST OF APPROVED REQUESTS 
                                    </a>
                                </li>
                                 <!-- <li><a href="#"><i class="glyphicon glyphicon-flag"></i>Help</a></li> -->
                                <li>
                                    <a href="<?= base_url('logout/logout'); ?>">
                                        <i class="glyphicon glyphicon-log-out"></i>LOGOUT
                                    </a>
                                </li>
                </ul>    
            </div> 
        </div>
    </div>



        
