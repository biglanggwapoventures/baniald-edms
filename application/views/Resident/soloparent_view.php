<div class="col-md-9">
	<div class="profile-content">
		<div class="panel-body">
			<center><br>
			<p>Republic of the Philippines</p>
			<p>Province of Cebu</p>
			<p>City/Municipal of Barangay Banilad</p>
			<P>Social Welfare and Development Office</P>
			<br/>
			<h4><label>APPLICATION FORM FOR SOLO PARENTS</label></h4>
			</center>
			<br/><br/>
		<div class="row padding-top-20">
			<div class="col-md-4">
				<label>NAME:</label>
					 <p class="form-control-static">
					 	<?= $data['firstname'] .' '. $data['middlename'] .' '. $data['lastname']?>	
					 </p>
			</div>
			<div class="col-md-4">
				<label>AGE:</label>
					<p class="form-control-staic">
						<?= $data['age'] ?>
					</p>
			</div>
			<div class="col-md-4">
				<label>SEX:</label>
					<p class="form-control-static">
						<?= $data['sex'] ?>	
					</p>				
			</div>
		</div>
		<div class="row padding-top-10">
			<div class="col-md-4">
				<label>DATE OF BIRTH:</label>
					<p class="form-control-static">
						<?= date_create("{$data['dateofbirth']}")->format('F d, Y') ?>
					</p>
			</div>
			<div class="col-md-4">
				<label>PLACE OF BIRTH:</label>
					<p class="form-control-static">
						<?= $data['placeofbirth'] ?>
					</p>
			</div>
		</div>
		<div class="row padding-top-20">
			<div class="col-md-12">
				<label>ADDRESS:</label>
					<p class="form-control-static">
						<?= $data['home_address'] .', '. sitio_desc($data['sitio']) ?>, Barangay Banilad
					</p>
			</div>
		</div>

		<div class="row padding-top-20">
			<div class="col-md-12">
				<label>HIGHEST EDUCATIONAL ATTAINMNENT:</label>
				<p class="form-control-static">
					<?= edu_attainment_desc($data['educational_attainment']) ?>
				</p>
			</div>
		</div>
		<div class="row padding-top-20 ">
			<div class="col-md-4">
				<label>OCCUPATION:</label>
					<p class="form-control-static">
						<?= $data['occupation'] ?>
					</p>
			</div>
			<div class="col-md-4">
				<label>MONTHLY INCOME</label>
					<p class="form-control-static">
						<?= number_format($data['monthly_income']) ?>
					</p>
			</div>
			<div class="col-md-4">
				<label>TOTAl MONTHLY FAMILY INCOME:</label>
					<p class="form-control-static">
						<?= number_format($data['total_family_income'],2)?>
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
	                    <?php foreach ($family_composition as $row) : ?> 
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
					<?= $data['classifcation_desc']?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label>III. NEED/PROBLEMS OF SOLO PARENTS</label>
				<p class="form-control-static">
					<?= $data['needs_problems']?>
				</p>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label>IV. FAMILY RESOURCES</label>
					<p class="form-control-static">
						<?= $data['family_resources']?>
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
			<div class="col-md-5">_______________________________<br> 
				<label style="padding-left:30px;">SIGNATURE/ THUMBMARK</label>
			</div>
		</div>
	</div>
</div>
<div class="panel-footer">            
            <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
            <!--  <form action="<?= base_url('Brgyclearancecontroller/insert_brgyClearance') ?>" method="POST"> -->    
            <!-- 
                <button type = "submit" class="btn btn-primary btn-lg btn-flat"> Send Request!</button>
                 <a href="<?= base_url('Brgyclearancecontroller/BrgyClearanceForm') ?>" class="btn btn-warning pull pull-right btn-lg btn-flat"><span class="glyphicon glyphicon-triangle-left"></span> Go back </a> -->
            <!--  </form> -->            
        </div>
	</div>

