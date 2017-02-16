<!DOCTYPE html>
<html>
<head>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
              <img src="dist/img/avatar3.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Secretary</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar3.png" class="img-circle" alt="User Image">

                <p>
                 Name of Secretary - Secretary
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="<?= base_url('dist/img/avatar3.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>SECRETARY</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!--
        <li>
          <a href="">
            <i class="fa fa-home"></i> <span>Home</span>
           
          </a>
        </li>
        -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bell"></i>
            <span>Pending Request/s</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right"> New </span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-pencil-square-o"></i> Business Clearance</a></li>
            <li><a href=""><i class="fa fa-pencil-square-o"></i> Person With Disablities</a></li>
            <li><a href=""><i class="fa fa-pencil-square-o"></i> Financial Assistance For PWD </a></li>
            <li><a href=""><i class="fa fa-pencil-square-o "></i> Senior Citizen</a></li>
            <li><a href=""><i class="fa fa-pencil-square-o"></i> Kasambahay Registration </a></li>
            <li><a href=""><i class="fa fa-pencil-square-o "></i> Kalipi Federation</a></li>
            <li><a href=""><i class="fa fa-pencil-square-o"></i> Solo Parent </a></li>
             <li><a href=""><i class="fa fa-pencil-square-o"></i> Blotter Report </a></li>
            <li><a href=""><i class="fa fa-pencil-square-o "></i> Empowerment and <br> Reaffirmation  of Paternal Abilities</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-check-square"></i> <span>Approved Request/s</span>
          </a>
        </li>
       
        <li><a href="#"><i class="fa fa-book"></i> <span>Cleared Request/s</span></a></li>
        <li class="header"> </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small></small>
      </h1>
      <table class="table table-hover">
      <thead>

        <th>ID</th>
        <th>NAME</th>
        <th>FORM TYPE</th>
        <th>STATUS</th>
        <th>DATE REQUESTED</th>
        <th></th>

      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sample</td>
          <td>Barangay Clearance</td>
          <td>Pending</td>
          <td>Date</td>
          <td></td>
        </tr> 
      </tbody>
      </table> 
    </section>

  </div>
<!-- ./wrapper -->

