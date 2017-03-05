<?php if($this->session->flashdata('success')): ?>
<script type="text/javascript">
    swal('success','Please wait for the secretary\n to approve the request','success');
</script>
<?php endif; ?>
    
<div class="col-md-9">
    <div class="profile-content">
    <!-- <div class="panel panel-default"> -->
    <!-- <div class="panel-heading"> -->
            <h4 style="color:red; text-decoration: underline;">
                <label class="label label-danger">NOTE!</label> 
                    PLEASE UPDATE YOUR ACCOUNT FIRST BEFORE REQUESTING A FORM</h4>
                        <h4 class="padding-top-20">
                            <i class="fa fa-th-list"></i> LIST OF PENDING, PAID, AND CANCELLED REQUESTS
                        </h4>
    <!-- </div> -->
        <div class="panel-body">
        
            <table class="table">
                <thead>    
            		<td>FORM TYPE</td> 
            		<td>REQUEST STATUS </td>
            		<td>REQUEST CREATED</td>
                    <td>REQUEST REVIEWED</td>
                </thead>
                <tbody>

                   
                <?php foreach ($my_form_requests as $row) :?>

                     <tr>
                        <td> <?= $row->form_type; ?></td>
             

                        <?php if($row->request_status == 'pending') : ?>

                            <td>
                                <button type="button" class="btn btn-warning btn-flat btn-sm" style="text-transform: uppercase;"> 
                                    <?php echo $row->request_status; ?> &nbsp;&nbsp;
                                        <i class="fa fa-hourglass-o"></i>
                                </button>
                            </td>
                            <td> 
                                <?= date_create($row->requests_created)->format('F d, y h:i A')  ?>
                            </td>
                            <td>
                               
                            </td>

                        <?php elseif($row->request_status == 'reviewed') : ?>

                            <td>
                                <button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"> 
                                    <?php echo $row->request_status; ?> &nbsp;&nbsp;
                                        <i class="fa fa-check-square"></i>
                                </button>
                            </td>
                            <td>
                                <?= date_create($row->requests_created)->format('F d, y h:i A')  ?>
                            </td>
                            <td>
                                 <?= date_create($row->date_reviewed)->format('F d, y h:i A')  ?>
                            </td>

                        <?php elseif($row->request_status == 'paid') :?>
                            <td>
                                <button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;"> 
                                    <?php echo $row->request_status; ?> &nbsp;&nbsp;
                                        <i class="fa fa-check-square"></i>
                                </button>
                            </td>      
                            <td>
                                <?= date_create($row->requests_created)->format('F d, y h:i A')  ?>
                            </td>
                            <td>
                                 <?= date_create($row->date_reviewed)->format('F d, y h:i A')  ?>
                                 <!-- <?= date_create($row->date_paid)->format('F d, y h:i A')  ?> -->  
                            </td>

                        <?php else: ?>

                            <td>
                                <button type="button" class="btn btn-danger btn-flat btn-sm" style="text-transform: uppercase;">
                                    <?php echo $row->request_status; ?>&nbsp;&nbsp;
                                        <i class="fa fa-times"></i>
                                </button>
                            </td>
                            <td> 
                                <?= date_create($row->requests_created)->format('F d, y h:i A')  ?>
                            </td>
                            <td>
                               
                            </td>

                    <?php endif; ?>

                <?php endforeach; ?>
                                
                </tbody>
               <!--  <pre>
                    <?php print_r($my_form_requests) ?>
                </pre> -->
            </table>
        </div>
    </div>
</div>

                                    

