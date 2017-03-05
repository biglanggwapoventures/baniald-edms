<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('captain/nav_view'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             <span class="glyphicon glyphicon-list"></span> LIST OF REGISTERED RESIDENTS<small></small>
          </h1>
          <br/><br/>

          <table class="table table-hover">
              <thead>
                <th >BARANGAY ID</th>
                <!-- <th>USER TYPE</th> -->
                <th>FULL NAME</th>
              </thead>
              
              <tbody>
                  <?php foreach($list_of_user as $row): ?>

                    <tr>
                      <td><?php echo str_pad($row->user_id, 4, 0, STR_PAD_LEFT) ?></td>
                      <!-- <td><?php echo ucfirst($row->user_type) ?></td> -->
                      <td><?php echo ucfirst($row->lastname.', '. $row->firstname) ?></td>
                     
                          
                    </tr> 

                  <?php endforeach; ?>
              </tbody>
          </table>
        </section>

      </div>
    
  </div>
</body>
