<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
			 <div class="row">
                <div class="col-md-4 col-md-offset-8">
                      <div style="width:100px; border:1px solid #000; padding: 45px; margin-left:40%;"></div> 
                      <p style="margin-left:35%;">Place 1x1 Photo Here</p>
                </div>
            </div> 
			<center>
				<h4><label>KASAMBAHAY REGISTRATION FORM</label></h4>	
			</center>
			<br/><br/>
			<div class="row">
				<div class="col-md-4">
					<h4><label>I. PERSONAL INFORMATION</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>FIRST NAME:</label> <?= $firstname ?>
				</div>
				<div class="col-md-4">
					<label>MIDDLE NAME:</label> <?= $middlename ?>
				</div>
				<div class="col-md-4"> 
					<label>LAST NAME:</label> <?= $lastname ?>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-4">
					<h4><label>EMPLOYER'S ADDRESS:</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>HOUSE NO AND STREET:</label>    <?= $data['employers_home_address'] ?>
				</div>
				<div class="col-md-12">
					<label>SUBDIVISION/ BARANGAY: </label>  <?= $data['employers_barangay'] ?>
				</div>
				<div class="col-md-12">
					<label>CITY OR MUNICPALITY: </label>  <?= $data['employers_municipality'] ?>
				</div>
				<div class="col-md-12">
					<label>PROVINCE: </label> <?= $data['employers_province'] ?>
				</div>	
			</div>

			<br/>
			<div class="row">
				<div class="col-md-4">
					<h4><label>HOME ADDRESS:</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>HOUSE NO AND STREET:</label> <?= $home_address ?>
				</div>
				<div class="col-md-6">
					<label>SUBDIVISION/ BARANGAY: </label> Banilad
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>CITY OR MUNICPALITY: </label> Cebu
				</div>
				<div class="col-md-6">
					<label>PROVINCE: </label>  <?= $prov_address ?>
				</div>
			</div>
			<br/><br/>
			<div class="row padding-top 20">
				<div class="col-md-4">
					<label>SEX:</label>  <?= $data['sex']?>
				</div>
				<div class="col-md-4">
					<label>CIVIL STATUS:</label> <?= $data['civil_status']?>
				</div>
				<div class="col-md-4">
					<label>AGE:</label> <?= $data['age']?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>DATE OF BIRTH:</label> <?= date_create($data['dateofbirth'])->format('F d, Y')?>
				</div>
			</div>
				<div class="row">
				<div class="col-md-4">
					<label>CONTACT NO:</label>  <?= $data['cellphone_no']?>
				</div>
			</div>
			<div class="row padding-top-10">
				<div class="col-md-4">
					<label>ID REFERENCE NO:</label>
				</div>
			</div>

			<div class="row padding-top-10">
				<div class="col-md-4">
					<label>SSS NO:</label> <?= $data['sss_no'] ?>
				</div>
				<div class="col-md-4">
					<label>PAG-IBIG NO:</label>  <?= $data['pag_ibig_no'] ?>
				</div>
				<div class="col-md-4">
					<label>PHILHEALTH NO:</label> <?= $data['philhealth_no'] ?>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-4">
					<h4><label>II. FAMILY INFORMATION</label></h4>
				</div>
			</div>
			<div class="col-md-12 padding-top-10">

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
		                        <?php foreach ($family_composition as $row) : ?> 
		                        <tr>    
		                      
		                            <td><?= ucfirst($row['name']) ?></td>
		                            <td><?= ucfirst($row['relationship'])?></td>
		                            <td><?= $row['family_age']?></td>
		                            <td><?= ucfirst($row['family_occupation']) ?></td>
		                            <td><?= number_format($row['monthly_salary'],2)?></td>
		                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
		                            
		                        </tr>
		                        
		                        <?php endforeach; ?>
		                      
		                    </tbody>
						</table>
					</div>
		
			<div class="row">
				<div class="col-md-6">
					<label>IN CASE OF EMERGENCY, CONTACT PERSON:</label>  <?= ucfirst($data['incase_of_emergency']) ?>
				</div>
				<div class="col-md-6">
					<label>CONTACT NO:</label>  <?= $data['emergency_contact_no'] ?>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-6">
					<h4><label>III. Educational Attainment</label></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>HIGHEST EDUCATIONAL ATTAINMENT:</label>
					<div class="form-control-static">
						<?= edu_attainment_desc($educational_attainment) ?>
					</div>
					
				</div>
			</div>
			<br><br/>
			<div class="row">
				<div class="col-md-6">
					<h4><label>IV. WORK INFORMATION</label></h4>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-6">
					<label>MONTHLY SALARY:</label> <?= number_format($data['monthly_salary'], 2) ?>
				</div>
				<div class="col-md-6">
					<label>NATURE OF WORK:</label> <?= ucfirst($data['nature_of_work'] )?>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-6">
					<label>EMPLOYMENT ARRANGEMENT:</label> <?= employment_arrangement($data['employment_arrangement']) ?>
				</div>
				<div class="col-md-6">
					<label>NAME OF EMPLOYER:</label> <?= ucfirst($data['name_of_employer']) ?>
				</div>
			</div>
			<br/><br/><br/>
			<hr>
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<label> ________________________</label>
					<br/>
					<label>SIGNATURE OF KASAMBAHAY</label>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<label>RECEIVED BY: _______________________</label>
					<br/>
					<label style="padding-left:80px;">KASAMBAHAY DESK OFFICER</label>
				</div>
				
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-6">
					<label>DATE:</label>
					<?= date('F d, Y') ?>
				</div>
			</div>
			
		</div>
		<div class="panel-footer">            
            <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
        </div>
    </div>
</div>
		