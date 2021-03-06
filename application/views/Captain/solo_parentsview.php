<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('captain/nav_view'); ?>
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
                                                <?= number_format( $formdata['monthly_income'], 2) ?>
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>TOTAl MONTHLY FAMILY INCOME:</label>
                                            <p class="form-control-static">
                                                <?= number_format($formdata['total_family_income'],2)?>
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
                                            </thead>
                                            <tbody>
                                                <?php foreach ($formdata['fc'] as $row) : ?> 
                                                <tr>    
                                              
                                                    <td><?= $row['name']; ?></td>
                                                    <td><?= ucfirst($row['relationship'])?></td>
                                                    <td><?= $row['family_age']?></td>
                                                    <td><?= ucfirst($row['family_occupation'])?></td>
                                                    <td><?= $row['monthly_salary']?></td>
                                                    <td><?= edu_attainment_desc($row['family_educational_attainment'])?></td>
                                                    
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
                                    <div class="col-md-5">_______________________________<br> SIGNATURE/ THUMBMARK</div>
                                </div>
                            </div>
                
                      <?php if($formdata['request_status'] != 'approved' ): ?>

                    <div class="col-md-12">
                
                        <form action="<?= base_url("captain_listing/approve/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" method="POST" onsubmit="return confirm('ARE YOU SURE? PLEASE CONFIRM.')">
                            
                            <?php if($formdata['request_status'] != 'pending' && $formdata['request_status'] != 'approved'): ?>
                                
                                <?php if($formdata['request_status'] != 'reviewed'): ?>
                                    <button type = "submit" class="btn btn-success btn-flat btn-lg"> APPROVE REQUEST</button>
                                <?php endif; ?>
                                <?php if($formdata['request_status'] != 'paid'): ?>
                                    <a href="<?= base_url("captain_listing/disapprove/{$this->uri->segment(3)}/{$this->uri->segment(4)}")?>" class="btn btn-danger btn-flat btn-lg " onclick="return confirm('ARE YOU SURE? PLEASE CONFIRM.')"> DISAPPROVED REQUEST</a>
                                <?php endif; ?>


                            <?php endif; ?>
                            <br/>
                                    <a href="<?= base_url('captain_listing/view_pending?form_id=7')  ?>" class="btn btn-primary btn-flat btn-lg pull-right"><i class="glyphicon glyphicon-triangle-left"></i> Go back </a>
                        </form>   
                    </div>
                    <?php endif;?>
                </div>
            </section>
        </div>
        </div>
    </div>
</body>