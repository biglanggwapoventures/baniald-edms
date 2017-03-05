<body>  
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
                            <?= $items['firstname'] .' '. $items['middlename'] .' '. $items['lastname']?>  
                         </p>
                </div>
                <div class="col-md-4">
                    <label>AGE:</label>
                        <p class="form-control-staic">
                            <?= $items['age'] ?>
                        </p>
                </div>
                <div class="col-md-4">
                    <label>SEX:</label>
                        <p class="form-control-static">
                            <?= $items['sex'] ?> 
                        </p>                
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-4">
                    <label>DATE OF BIRTH:</label>
                        <p class="form-control-static">
                            <?= date_create("{$items['dateofbirth']}")->format('F d, Y') ?>
                        </p>
                </div>
                <div class="col-md-4">
                    <label>PLACE OF BIRTH:</label>
                        <p class="form-control-static">
                            <?= $items['placeofbirth'] ?>
                        </p>
                </div>
            </div>
            <div class="row padding-top-20">
                <div class="col-md-12">
                    <label>ADDRESS:</label>
                        <p class="form-control-static">
                            <?= $items['home_address'] ?>
                        </p>
                </div>
            </div>

            <div class="row padding-top-20">
                <div class="col-md-12">
                    <label>HIGHEST EDUCATIONAL ATTAINMNENT:</label>
                    <p class="form-control-static">
                        <?= edu_attainment_desc($items['educational_attainment']) ?>
                    </p>
                </div>
            </div>
            <div class="row padding-top-20 ">
                <div class="col-md-4">
                    <label>OCCUPATION:</label>
                        <p class="form-control-static">
                            <?= $items['occupation'] ?>
                        </p>
                </div>
                <div class="col-md-4">
                    <label>MONTHLY INCOME</label>
                        <p class="form-control-static">
                            <?= $items['monthly_income'] ?>
                        </p>
                </div>
                <div class="col-md-4">
                    <label>TOTAl MONTHLY FAMILY INCOME:</label>
                        <p class="form-control-static">
                            <?= $items['total_family_income']     ?>
                        </p>    
                </div>
            
            </div>
            <div class="row padding-top-10">
                <div class="col-md-12">
                    <h4><label>I.Family Composition</label></h4>
                    <table class="table table-border not-datatable">
                        <thead>
                            <th>NAME</th>
                            <th>RELATION</th>
                            <th>AGE</th>
                            <th>OCCUPATION</th>
                            <th>INCOME</th>
                            <th>EDUCATIONAL ATTAINMENT</th>
                        </thead>
                        <tbody>
                            <?php foreach ($items['fc'] as $row) : ?> 
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
                        <?= $items['classifcation_desc']?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>III. NEED/PROBLEMS OF SOLO PARENTS</label>
                    <p class="form-control-static">
                        <?= $items['needs_problems']?>
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>IV. FAMILY RESOURCES</label>
                        <p class="form-control-static">
                            <?= $items['family_resources']?>
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
    </div>
</div>
</body>
