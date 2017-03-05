<?php if($this->session->flashdata('success')): ?>
  <script>alert('Cleared');</script>
<?php endif; ?>

<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
  <?php $this->load->view('captain/nav_view'); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-list"> </i> LISTS OF <?= $title ?> REQUEST
      </h1>
      <br/><br/>
      <table class="table table-hover">
        <thead>
      
          <th>RESIDENT NAME</th>
          <th>STATUS</th>
         
          <?php if($items != null && $items[0]->request_status == 'pending'):?>

              <th>DATE REQUESTED</th>
              <th>VIEW</th>
                  
          <?php elseif($items != null && $items[0]->request_status == 'reviewed'):?>

              <th>REQUEST CREATED</th>
              <th>DATE REVIEWED</th>
                
          <?php elseif($items != null && $items[0]->request_status == 'paid'):?>

              <th>DATE PAID</th>
              <th>VIEW FORM</th>
                
          <?php elseif($items != null && $items[0]->request_status == 'approved'):?>

              <th>DATE REQUESTED</th>
              <th>DATE REVIEWED</th>
              <th>DATE APPROVED/DISSAPROVED</th>
            
          <?php endif; ?>
        </thead>
        <tbody>
          <?php foreach($items as $row) : ?>
          
            <tr>
              <td><?= "{$row->firstname} {$row->lastname}"?></td>

              <?php if($row->request_status == 'pending'): ?>
                        
                <td>
                  <button type="button" class="btn btn-warning btn-flat btn-sm" style="text-transform: uppercase;"> 
                    <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i>
                    </button>
                </td>

              <?php elseif($row->request_status == 'paid') :?>

                <td>
                  <button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase; "> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check"></i>
                  </button>
                </td>

              <?php elseif($row->request_status == 'reviewed'): ?>
         
                <td>
                  <button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check-square"></i>
                  </button>
                </td>
                       
              <?php else: ?>   

                <td>
                  <button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;"><?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i>
                  </button>
                </td>
                        
              <?php endif; ?>

              <?php if($row->request_status == 'paid') : ?>

                <td><?= date_create($row->date_paid)->format('F d, Y h:i A'); ?></td>
                <td>
                  <a href = "<?= base_url('Captain_listing/view_form').'/'.$row->requests_forms_id.'/'.$this->input->get('form_id')?>"><img src=<?= base_url('assets/dist/img/view.png') ?> height=30px> 
                  </a>
                </td>

              <?php elseif($row->request_status == 'pending') : ?>

                <td>
                  <?= date_create($row->requests_created)->format('F d, Y h:i A'); ?>
                </td>
                <td>
                  <a href = "<?= base_url('Captain_listing/view_form').'/'.$row->requests_forms_id.'/'.$this->input->get('form_id')?>"><img src=<?= base_url('assets/dist/img/view.png') ?> height=30px> 
                  </a>
                </td>

              <?php elseif($row->request_status == 'approved') :?>

                <td>
                  <?= date_create($row->requests_created)->format('F d, Y h:i A'); ?>
                </td>
                <td>
                  <?= date_create($row->date_reviewed)->format('F d, Y h:i A'); ?>
                </td>
                <td>
                  <?= date_create($row->date_cleared)->format('F d, Y h:i A'); ?>
                </td>

              <?php elseif($row->request_status == 'reviewed') : ?>

                <td>
                  <?= date_create($row->requests_created)->format('F d, Y h:i A'); ?>
                </td>
                
                <td>
                   <?= date_create($row->date_reviewed)->format('F d, Y h:i A'); ?>
                </td>
              <?php endif; ?>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table> 
    </section>
  </div>
  </div>
</body>
