<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('secretary/nav_view'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <i class="fa fa-list"> </i> LISTS OF <?= $title ?> REQUEST<small></<small>
        </h1>
        <br/><br/>
        
        <table class="table table-hover">

            <thead>
              

              <th>RESIDENT NAME</th>
              <th>STATUS</th>
              <th>DATE REQUESTED</th>
             
              <?php 

              if($items != null && $items[0]->request_status == 'reviewed'):?>
                      <th>Send message</th>
                      <!-- <th></th> -->

              <?php else: ?>
             
              <th>VIEW </th>
               <?php endif; ?>
             
             <?php 
             
              if($items != null && $items[0]->request_status == 'approved'):?>
                           

                            
            <?php endif; ?>
           
            </thead>
          
            <tbody>

            <?php foreach($items as $row): ?>

              <tr>
                  <!-- <td><?php echo $row->requests_forms_id; ?></td> -->
                  <!-- <td><?php echo $row->resident_id; ?></td> -->
                  <td> <?php echo $row->lastname.', '. $row->firstname; ?></td>

                  <!-- <td><?php echo $row->form_type; ?></td> -->
                  
                  <?php if($row->request_status == 'pending'): ?>
                      
                      <td><button type="button" class="btn btn-warning btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i></button></td>

                  <?php elseif($row->request_status == 'paid') :?>

                      <td><button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase; "> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i></button></td>

                  <?php elseif($row->request_status == 'reviewed'): ?>
       
                      <td><button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check-square"></i></button></td>
                     
                  <?php else: ?>   

                      <td><button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;"><?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i></button></td>
                      
                  <?php endif; ?>

                  <td><?php echo date("F d, Y h:i A", strtotime($row->requests_created)); ?></td>

                  
                  <?php if($row->request_status == 'approved') : ?>

                        <td>

                          <a type="submit" class="btn btn-primary btn-flat btn-sm print-docu "  data-url="<?= base_url("secretary_listing/do_print/{$row->requests_forms_id}/{$row->forms_id}")?>" style="text-transform: uppercase;">PRINT &nbsp;&nbsp; <i class="glyphicon glyphicon-print"></i></a>
                        
                         </td>
                  
                  <?php elseif($row->request_status == 'reviewed') : ?>

                         <td><a data-pk="<?= $row->requests_forms_id?>" class="send-sms">
                          <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          </td>
                
                        <!-- <td><a href = "<?= base_url('Secretarycontroller/cancel/').$row->requests_forms_id ?>"><img src="<?= base_url('assets/dist/img/cancel.png') ?>" height=30px></a></td> -->

                  <?php else: ?> 

                         <td><a href = "<?= base_url('Secretary_listing/view_form').'/'.$row->requests_forms_id.'/'.$this->input->get('form_id')?>"><img src=<?= base_url('assets/dist/img/view.png') ?> height=30px> </a></td>
                
                        <!-- <td><a href = "<?= base_url('Secretarycontroller/cancel/').$row->requests_forms_id ?>"><img src="<?= base_url('assets/dist/img/cancel.png') ?>" height=30px></a></td> -->

                  <?php endif; ?>
                 
              </tr> 
            
         
              <?php endforeach; ?>
                 </tbody>

            </table> 
          </section>

        </div>
        <!-- ./wrapper -->