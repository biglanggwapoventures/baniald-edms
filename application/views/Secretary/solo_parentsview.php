<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('secretary/nav_view'); ?>
        </header>
    	<div class="content-wrapper">
       		<section class="content">
            	<div class="row">
                	<div class="col-md-12">     
                		<div class="row">
                            <div class="col-md-12">
                                <div class="box-footer">
                                <center><br>
                                    <p>Republic of the Philippines</p>
                                    <p>Province of Cebu</p>
                                    <p>City/Municipal of Barangay Banilad</p>
                                    
                                    <h4><label>APPLICATION FORM FOR SOLO PARENTS</label></h4>
                                    </center>
                                    <br/><br/>
                                <div class="row padding-top-20">
                                    <div class="col-md-4">
                                        <label>NAME:</label>
                                             <p class="form-control-static">
                                                <?= $formdata['firstname'] .' '. $formdata['middlename'] .' '. $formdata['lastname']?>  
                                             </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>AGE:</label>
                                            <p class="form-control-staic">
                                                <?= $formdata['age'] ?>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>SEX:</label>
                                            <p class="form-control-static">
                                                <?= $formdata['sex'] ?> 
                                            </p>                
                                    </div>
                                </div>
                                <div class="row padding-top-10">
                                    <div class="col-md-4">
                                        <label>DATE OF BIRTH:</label>
                                            <p class="form-control-static">
                                                <?= date_create("{$formdata['dateofbirth']}")->format('F d, Y') ?>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>PLACE OF BIRTH:</label>
                                            <p class="form-control-static">
                                                <?= $formdata['placeofbirth'] ?>
                                            </p>
                                    </div>
                                </div>
                                <div class="row padding-top-20">
                                    <div class="col-md-12">
                                        <label>ADDRESS:</label>
                                            <p class="form-control-static">
                                                <?= $formdata['home_address'] ?>
                                            </p>
                                    </div>
                                </div>

                                <div class="row padding-top-20">
                                    <div class="col-md-12">
                                        <label>HIGHEST EDUCATIONAL ATTAINMNENT:</label>
                                        <p class="form-control-static">
                                            <?= edu_attainment_desc($formdata['educational_attainment']) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row padding-top-20 ">
                                    <div class="col-md-4">
                                        <label>OCCUPATION:</label>
                                            <p class="form-control-static">
                                                <?= $formdata['occupation'] ?>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>MONTHLY INCOME</label>
                                            <p class="form-control-static">
                                                <?= number_format($formdata['monthly_income'],2)?>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>TOTAl MONTHLY FAMILY INCOME:</label>
                                            <p class="form-control-static">
                                                <?=  number_format($formdata['total_family_income'], 2)?>
                                            </p>    
                                    </div>
                                
                                </div>
                                <div class="row padding-top-10">
                                    <div class="col-md-12">
                                        <h4><label>I.Family Composition</label></h4>
                                        <table class="table table-border not-datatable" border="1">
                                            <thead>
                                                <th>NAME</th>
                                                <th>RELATION</th>
                                                <th>AGE</th>
                                                <th>OCCUPATION</th>
                                                <th>INCOME</th>
                                                <th>EDUCATIONAL ATTAINMENT</th>
                                                <th>DATE OF BIRTH</th>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($formdata['fc'] as $row) : ?> 
                                                <tr>    
                                              
                                                    <td><?= $row['name']; ?></td>
                                                    <td><?= ucfirst($row['relationship'])?></td>
                                                    <td><?= $row['family_age']?></td>
                                                    <td><?= ucfirst($row['family_occupation'])?></td>
                                                    <td><?= number_format($row['monthly_salary'],2)?></td>
                                                    <td><?= edu_attainment_desc($row['family_educational_attainment'])?></td>
                                                    <td><?= date_create($row['dateofbirth'])->format('F d, Y') ?></td>
                                                    
                                                </tr>
                                                
                                                <?php endforeach; ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>II. CLASSIFICATION/CIRMCUMSTANCES OF BEING A SOLO PARENT:</label>
                                        <p class="form-control-static">
                                            <?= $formdata['classifcation_desc']?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>III. NEED/PROBLEMS OF SOLO PARENTS</label>
                                        <p class="form-control-static">
                                            <?= $formdata['needs_problems']?>
                                        </p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>IV. FAMILY RESOURCES</label>
                                            <p class="form-control-static">
                                                <?= $formdata['family_resources']?>
                                            </p>
                                    </div>
                                    
                                </div>
                                <br/>
                                <div class="row padding-top-10">
                                    <div class="col-md-12">
                                        <p style="text-indent:50px">I hereby certify that the information given above are true and correct. I further understand that any misinterpretation that may have made will subject me to criminal and civil liabilities provided for by existing laws.</p>
                                    </div>
                                </div>
                                <div class="row padding-top-20">
                                    <div class="col-md-3">
                                        <label>DATE:</label>
                                            <?= date('F d, Y')?>                    
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-5">_______________________________<br> <label style="margin-left: 25px;">SIGNATURE/ THUMBMARK</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row padding-top-20">
                        <div class="col-md-12">
                        <form action="<?= base_url("secretary_listing/reviewed/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                        
                            <button type="submit" class="btn btn-success btn-flat btn-lg"><label>REVIEWED</label></button>
                            <a data-toggle="modal"  data-target="#feedback" class="btn btn-danger  btn-flat btn-lg"> <label>SEND FEEDBACK</label></a>
                            <a href="<?= base_url('secretary_listing/?form_id=7')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="fa fa-arrow-circle-o-left fa-lg"></i> <label>BACK</label></a>
                        </form>   
                     </div>
                </div>
            </section>
        </div>
    </div>
</body>
<!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="ajax" action="<?= base_url('secretarycontroller/sendFeedback')?>" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:red;"><i class="fa fa-feed"></i> SEND FEEDBACK</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger hidden warning"></div>
                        <div class="form-group">
                            <label> ENTER YOUR MESSAGE HERE: *</label>
                            <textarea class="form-control" name="message"></textarea>
                            <input type="hidden" name="sent_to" value="<?= $formdata['resident_id']?>">
                            <input type="hidden" name="requests_forms_id" value="<?= $formdata['requests_forms_id']?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
