<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('secretary/nav_view'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1> <span class="glyphicon glyphicon-thumbs-up"> </span> LISTS OF APPROVED REQUEST <small> <u>APPROVED ALREADY BY THE BARANGAY CAPTAIN </u></small>
        </h1>
        <br/><br/>
      <table class="table table-hover">
      <thead>

          <!-- <th>FORM ID</th>
          <th>RESIDENT ID</th> -->
          <th>RESIDENT NAME</th>
          <th>FORM TYPE</th>
          
          <th>DATE REQUESTED</th>
          <th>DATE CLEARED</th>
          <th>STATUS</th>
          <th>PRINT </th>
        
      </thead>
      <tbody>
    
       <?php foreach($items as $row): ?>
          <tr>
           <!--  <td><?php echo $row->requests_forms_id; ?></td>
            <td><?php echo $row->resident_id; ?></td> -->
            <td><?php echo $row->lastname.', '. $row->firstname ; ?></td>
            <td><?php echo $row->requests_forms_type; ?></td>
            <td><?php echo date("F d, Y h:i A", strtotime($row->requests_created)); ?></td>
            <td><?php echo date("F d, Y  h:i A", strtotime($row->date_cleared)); ?></td>
            <td><button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check"></i></button></td>
           
            <td><a type="submit" class="btn btn-primary btn-flat btn-sm print-docu "  data-url="<?= base_url("secretary_listing/do_print/{$row->requests_forms_id}?form_id=1")?>" style="text-transform: uppercase;">PRINT &nbsp;&nbsp; <i class="glyphicon glyphicon-print"></i></a>
               

            </td>
          </tr> 
        
     
          <?php endforeach; ?>
      
      </tbody>
      </table> 
    </section>

  </div>
<!-- ./wrapper -->

