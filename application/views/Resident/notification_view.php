<?php if($this->session->flashdata('success')): ?>
<script type="text/javascript">
    swal('success','Please wait for the secretary\n to approve the request','success');
</script>
<?php endif; ?>

<div class="col-md-9">
    <div class="profile-content">
        <h4>
            <i class="fa fa-feed"></i> &nbsp; LIST OF FEEDBACK
        </h4>
        <div class="panel-body">

            <table class="table table-striped">
                <thead>    
                    <td>SENDER</td>
                    <td>FORM TYPE</td>
            		<td>MESSAGE DETAILS</td>
                    <td>ACTIONS</td>
                    <td>SENT AT</td>

                </thead>
                <tbody>

                    <?php foreach($view_feedback as $row): ?>

                        <tr>
                            <td>
                                <?php echo ucfirst($row['sender'] ) ?>
                            </td>
                            <td>
                                <?php echo $row['form_type'] ?>
                            </td>
                            <td>
                               <a class="btn btn-success btn-sm" data-message="<?= $row['message']?>" data-toggle="modal" data-target="#viewmessage"><i class="fa fa-envelope-open"></i> &nbsp; View Message</a>
                               
                            </td>
                             <td>
                               <a href="<?= base_url("resident/edit/{$row['requests_forms_id']}")?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Update</a>
                               
                            </td>
                            <td>
                                <?php echo date_create($row['seen_at'])->format('g:i A F d, Y') ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="viewmessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="ajax" action="<?= base_url('secretarycontroller/sendFeedback')?>" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:red;"><i class="fa fa-feed"></i> MESSAGE DETAILS</h4>
                </div>
                <div class="modal-body">
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-check"></i> OK</button>
                    <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send</button> -->
                </div>
            </form>
        </div>
    </div>
</div>



                                    
    
