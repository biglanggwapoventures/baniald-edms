<!DOCTYPE html>
<html>
<head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!-- Title Every Page -->
      <title>
            <?php if(isset($page_name)) echo $page_name; else echo "Title"; ?>
      </title>
      
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
      
      <!-- Custome CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/style.css')?>">
      
      <!--Datatables -->
      <link rel="stylesheet" href="<?= base_url('assets/datatables/dataTables.min.css')?>" rel="stylesheet">
 
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
     
      <!-- Theme style -->
      <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css')?>">
      
      <!-- AdminLTE Skins. Choose a skin from the css/skinsfolder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css')?>">
      
      <!-- iCheck -->
      <link rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/flat/blue.css')?>">
      
      <link rel="stylesheet" href="<?= base_url('assets/sweetalert/sweetalert.css')?>">

      <script src="<?= base_url('assets/sweetalert/sweetalert.min.js')?>"></script>

    
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
</head>
<body style="background-image:url('<?= base_url("assets/dist/img/bg1.jpg ")?>'); background-repeat:no-repeat;
             background-size:cover;">


