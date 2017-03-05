<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('secretary/nav_view'); ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            <i class="fa fa-list"> </i> LISTS OF <?= $title ?> REQUEST
          </h1>
          <br/><br/>
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal1"><i class="fa fa-filter"></i> FILTER</button>
          <br/><br/>
          <table id="#example" class="table table-hover">
            <thead>
              <th>Resident Name</th>
              <th>Form Type</th>
              <th>Request Status</th>
              <th>Date Requested</th>

              </thead>
              <tbody>
                <?php foreach($items as $row): ?>
                  <tr>
                    <td><?= $row->lastname.', '. $row->firstname; ?></td>
                    <td><?= $row->form_type  ?></td>
                    <td><?= strtoupper($row->request_status) ?></td>
                    <td><?= date("F d, Y h:i A", strtotime($row->requests_created)); ?></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
          </table> 
        </section>
    </div>
  </div>
</body>
 <div class="modal fade" id="modal1" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-filter"></i> FILTER</h4>
              </div>
             <form method="GET" action="<?= base_url('secretary_listing/listofallRequests') ?>">
                <div class="modal-body">
                  <div class="alert alert-danger warning hidden"></div>
                  <div class="row">
                     <div class="col-md-12">
                        <label  style="color:#000;">FORM TYPE: </label>

                        <?= form_dropdown('form_types_id',[
                          ''   => 'ALL',
                          '1'  => 'Business Clearance Form',
                          '2'  => 'Senior Citizen Form',
                          '3'  => 'Kalipi Federation Form',
                          '4'  => 'Amicable Statment Form',
                          '5'  => 'Kasambahay Form',
                          '6'  => 'Erpat Form',
                          '7'  => 'Solo Parents Form',
                          '8'  => 'PWD Registry Form',
                          '9'  => 'PWD Financial Assistance Form',
                          '10' => 'Complaint Form'
                        ],
                        $form_types_id, 'class="form-control" ') ?>
                      </div>
                  </div>
                  <div class="row padding-top-10">
                    <div class="col-md-12">
                      <label  style="color:#396add;">DATE START:</label>
                        <input type="date" class="form-control" value="<?= $date_start ?>" name="date_start">
                    </div>
                  </div>
                  <div class="row padding-top-10">  
                  </div> 
                  <div class="row">
                    <div class="col-md-12">
                      <label style="color:#e22828">DATE END: </label>
                        <input type="date" value="<?= $date_end ?>" name="date_end" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                  <button type="submit" class="btn btn-success">OK</button>
                </div>
             </form>
        </div>
      </div>
  </div>
