<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('Treasurer/nav_view'); ?>
    <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-bookmark"></i> LISTS OF <?= $title ?>  REQUEST 
          <small>REVIEWED BY THE SECRETARY</small>
      </h1>
      <br/><br/>  
      <table class="table table-hover">
        <thead>
          <th>RESIDENT NAME</th>
          <th>STATUS</th>
          <th>DATE REQUESTED</th>
          <th>DATE PAID</th>
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
                  <?php echo $row->request_status; ?> <i class="fa fa-check"></i>
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
       
              <?php if ($row->request_status != 'paid'): ?>
            
              <td></td>
              <?php else: ?>
                 <td>
                 <?= date_create($row->date_paid)->format('F d, y h:i A')  ?> 
              </td>

              <?php endif; ?>
             
              <td>
                <?= $row->sms_code ?>
              </td>
         
                
                <?php if($row->request_status == 'paid'): ?>
                  <td>
                    <b>OR #: </b><?= $row->or_number?> <br>
                    <b>AMOUNT: </b><?= number_format($row->amount, 2)?>
                  </td>
               
                <?php else: ?>

              <td>
                <a href ="" class="btn btn-info btn-flat" data-target="#addpayment" data-toggle="modal" data-pk="<?= $row->requests_forms_id ?>">ADD PAYMENT</a>
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
<div class="modal fade" id="addpayment" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:red;"><i class="fa fa-money"></i> ADD PAYMENT</h4>
      </div>
      <form method="POST" action="<?= base_url('treasurer_listing/add_payment')?>" class="ajax">
          <?= form_hidden('requests_forms_id', null)?>
          <div class="modal-body">
              <div class="alert alert-danger warning hidden"></div>
              <div class="row">
                  <div class="col-md-6 col-md-offset-6">
                      <label  style="color:#000;">TODAY'S DATE: </label>
                          <?= date_create(null)->format('F d, Y')?>
                  </div>
              </div>
              <div class="row padding-top-20">
                 <div class="col-md-6">
                    <label  style="color:#000;">OR NUMBER: *</label>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="fa fa-asterisk"></span>
                            </span> 
                            <div data-tip="Enter OR No. ">
                                <input class="form-control" name="or_number" placeholder="Enter OR Number:" >
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label  style="color:#000;">AMOUNT: *</label>
                    <div class="form-group">
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">
                            <span class="fa fa-asterisk"></span>
                          </span>
                          <div data-tip="Enter an Amount">
                            <input class="form-control" name="amount" placeholder="Amount" aria-describedby="basic-addon1">
                          </div>
                      </div>  
                    </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">ADD</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
          </div>
      </form>
    </div>
  </div>
</div>
