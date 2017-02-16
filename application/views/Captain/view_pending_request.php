<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    <?php $this->load->view('captain/nav_view'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
           <span class="glyphicon glyphicon-hourglass"> </span> LISTS OF PENDING REQUEST <small>Business Clearance</small>
        </h1>
        <br/><br/>
        <table class="table table-hover">
            <thead>

          <!--     <th>FORM ID</th>
              <th>RESIDENT ID</th> -->
              <th>RESIDENT NAME</th>
              <th>FORM TYPE</th>
              <th>STATUS</th>
              <th>DATE REQUESTED</th>
              <th>VIEW REQUEST</th>
           
            </thead>
            
            <tbody>
                <?php foreach($items as $row): ?>

                  <tr>
                    <!-- <td><?php echo $row->requests_forms_id; ?></td>
                    <td><?php echo $row->resident_id; ?></td> -->
                    <td> <?php echo $row->lastname.', '. $row->firstname ; ?></td>
                    <td><?php echo $row->requests_forms_type; ?></td>
                    <td><button type="button" class="btn btn-warning btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i></button></td>
                    <td><?php echo date("F d, Y", strtotime($row->requests_created)); ?></td>
                   <td><a href = "<?= base_url('captain_listing/view_form').'/'.$row->requests_forms_id.'/'.$this->input->get('form_id')?>"><img src=<?= base_url('assets/dist/img/view.png') ?> height=30px> </a></td>
                  </tr> 
                <?php endforeach; ?>
            </tbody>
        </table> 
      </section>

    </div>
  <!-- ./wrapper -->
</div>

