<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

   <?php $this->load->view('Treasurer/nav_view'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <h1> <i class="fa fa-bookmark"> </i> LISTS OF <?= $title ?>  REQUEST <small>REVIEWED BY THE SECRETARY</small></h1>
        <br/><br/>  
      </h1>
      <table class="table table-hover">
        <thead>

            <th>RESIDENT NAME</th>
            <th>STATUS</th>
            <th>DATE REQUESTED</th>
            <th>VERIFICATION CODE</th>
            <th>ACTION</th>
            
        </thead>
        <tbody>


          <?php foreach($items  as $row) : ?>

            <tr>
            
              <td> 
                <?php echo $row->lastname.', '. $row->firstname ; ?>
              </td>
             
              <?php if($row->request_status == 'paid'): ?>

              <td>
                <button type="button" class="btn btn-primary btn-flat btn-sm " style="text-transform: uppercase;">
                  <?php echo $row->request_status; ?>  
                </button>
              </td>

                <?php else: ?>

              <td>
                <button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;">
                  <?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i>
                </button>
              </td>

                <?php endif; ?>

              <td>

                <?php echo date("F d, Y h:i A", strtotime($row->requests_created)); ?>
                  
              </td>
              
              <td>
                <?= $row->sms_code ?>
              </td>
         
                
                <?php if($row->request_status == 'paid'): ?>
                  <td></td>
               
                <?php else: ?>

              <td>
                <a href = "<?= base_url("treasurer_listing/payment_status/{$row->requests_forms_id}/{$row->forms_id}")?>" class="btn btn-info btn-flat">ADD PAYMENT</a>
              </td>

                <?php endif; ?>

            </tr> 
       
          <?php endforeach; ?>
        </tbody>
      </table> 
    </section>

  </div>
</div>
<!-- ./wrapper -->

