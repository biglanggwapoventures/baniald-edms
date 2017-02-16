<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php $this->load->view('treasurer/nav_view'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <h1> <span class="glyphicon glyphicon-ok"> </span>  LISTS OF REVIEWED REQUEST <small>Reviewed By the Secretary</small></h1>
        <br/><br/>  
      </h1>
      <table class="table table-hover">
      <thead>

   
         <!--  <th>FORM ID</th>
          <th>RESIDENT ID</th> -->
          <th>RESIDENT NAME</th>
          <th>FORM TYPE</th>
          <th>STATUS</th>
          <th>DATE REQUESTED</th>
          <th>ACTION</th>
          
      </thead>
      <tbody>
        <?php foreach($requests_reviewed  as $row) { ?>
        <tr>
          <td><?php echo $row->requests_forms_id; ?></td>
          <td><?php echo $row->resident_id; ?></td>
          <td> <?php echo $row->lastname.', '. $row->firstname ; ?></td>
          <td><?php echo $row->requests_forms_type; ?></td>
          <?php if($row->request_status == 'paid'): ?>
          
          <td><button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"><?php echo $row->request_status; ?>  </button> </label></td>
        <?php else: ?>
          <td><button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;"><?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i></button></label></td>
        <?php endif; ?>
          <td><?php echo date("F d, Y h:i A", strtotime($row->requests_created)); ?></td>
                <?php if($row->request_status == 'paid'): ?>
                  <td></td>
                   <td></td>
                <?php else: ?>
            
          <td><a href = "<?= base_url('treasurercontroller/payment_status/').$row->requests_forms_id  ?>" class="btn btn-info btn-flat">PAY</a></td>
              <?php endif; ?>
        </tr> 
     
        <?php } ?>
         </tbody>
      </table> 
    </section>

  </div>
<!-- ./wrapper -->

