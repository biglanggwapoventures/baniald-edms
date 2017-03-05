<div class="col-md-9">
    <div class="profile-content">
    <!-- <div class="panel panel-default"> -->
        <!-- <div class="panel-heading"> -->
            <h4><label><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp; LIST OF APPROVED REQUEST </label></h4>
        <!-- </div> -->
        <div class="panel-body">
            <table class="table table-striped">
        		<thead>
      
        			<td>Form Type</td>
        			<td>Status </td>
        			<td>Request Created</td>
                    <td>Date Approved/ Dissaproved</td>
        		</thead>
                <tbody>

                    <?php foreach($view_history as $row): ?>

                        <tr>
                            <!-- <td><?php echo $row->requests_forms_id; ?></td> -->
                            <td>
                                <?php echo $row->form_type; ?>
                            </td>
                            
                            <?php if($row->request_status == 'disapproved'): ?>
                                
                                    <td>
                                        <button type="button" class="btn btn-danger btn-flat btn-sm" style="text-transform: uppercase;">   <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i>
                                        </button>
                                    </td>

                            <?php elseif($row->request_status == 'pending'): ?>
                                
                                    <td>
                                        <button type="button" class="btn btn-warning btn-flat btn-sm" style="text-transform: uppercase;">   <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-hourglass-o"></i>
                                        </button>
                                    </td>
                                
                                <?php elseif($row->request_status == 'paid'): ?>

                                     <td>
                                        <button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;">   <?php echo $row->request_status; ?> &nbsp;&nbsp;<i class="fa fa-check-square">    </i>
                                        </button>
                                    </td>

                                <?php else: ?>    

                                    <td>
                                        <button type="button" class="btn btn-success btn-flat btn-sm" style="text-transform: uppercase;">   <?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i>
                                        </button>
                                    </td>
                            
                            <?php endif; ?>

                            <td>
                                <?php echo date("F d, Y h:i A", strtotime($row->requests_created)); ?>
                            </td>
                            <td>
                                <?= date_create($row->date_cleared)->format('F d, Y h: i A') ?>
                            </td>
                            
                        </tr> 

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
                                                                    
                            
