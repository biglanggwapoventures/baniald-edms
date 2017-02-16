<?php if($this->session->flashdata('success')): ?>
<script type="text/javascript">
    swal('success','Please wait for the secretary\n to approve the request','success');
</script>
<?php endif; ?>

<div class="col-md-9">
    <!--  <div class="profile-content"> -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-feed"></i> &nbsp; LIST OF FEEDBACK</h4>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>    
                    <td>SENDER</td>
                    <td>FORM TYPE</td>
            		<td>MESSAGE DETAILS</td>

                </thead>
                <tbody>

                    <?php foreach($view_feedback as $row): ?>

                        <tr>

                            <td><?php echo ucfirst($row['sender'] ) ?></td>
                            <td></td>
                            <td><?php echo $row['message'] ?></td>
                    
                        </tr>

                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

                                    
    
