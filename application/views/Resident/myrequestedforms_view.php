<?php if($this->session->flashdata('success')): ?>

<script type="text/javascript">
    swal('success','Please wait for the secretary\n to approve the request','success');
</script>

<?php endif; ?>
    
<div class="col-md-9">
    <!--  <div class="profile-content"> -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 style="color:red;"><label class="label label-danger">NOTE!</label> <u>PLEASE UPDATE YOUR ACCOUNT FIRST BEFORE REQUESTING A FORM</u> </h4>
            
            <br/><br/><br/>
            <h4><span class="glyphicon glyphicon-hourglass"></span> LIST OF PENDING, PAID, AND CANCELLED REQUESTS</h4>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>    
                     <!-- <td>ID</td> -->
            		<td>FORM TYPE</td> 
            		<td>REQUEST STATUS </td>
            		<td>REQUEST CREATED</td>
                   <!--  <td>VIEW REQUEST</td> -->
                </thead>
                <tbody>

                    <?php foreach($my_form_requests as $row): ?>

                        <tr>
                            <!-- <td><?php echo $row->forms_id ?></td> -->
                            <td><?php echo $row->form_type; ?></td>
            
                            <?php if($row->request_status == 'pending'): ?>
                        
                            <td><button type="button" class="btn btn-warning btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i></button></td>
            
                            <?php elseif($row->request_status == 'paid'): ?>
                 
                            <td><button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check-square"></i></button></td>

                            <?php elseif($row->request_status == 'reviewed'): ?>
                 
                            <td><button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"> <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check-square"></i></button></td>
                        
                            <?php else: ?>    

                            <td><button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;"><?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i></button></td>
                        
                            <?php endif; ?>

                            <td><?php echo date("F d, Y h:i A", strtotime($row->requests_created)); ?></td>

                            <!-- <td>
                                <a href="<?= base_url('brgyclearanceview') ?>" type="button" class="btn btn-info btn-LG" style="text-transform: uppercase;"><i class="fa fa-eye"> VIEW</i>
                                </button>
                            </td> -->
                          
                        </tr>

                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

                                    

