<body>  
	<div class="row">
	    <div class="col-md-12">
	        <div class="box-footer">
				<center>
					<h3><label>KASAMBAHAY REGISTRATION FORM</label></h3>	
				</center>
				<div class="row">
					<div class="col-md-4">
						<h4><label>I. PERSONAL INFORMATION</label></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>FIRST NAME: </label> <?= $items['firstname'] ?>
						<label style="padding-left: 150px">MIDDLE NAME: </label> <?= $items['middlename'] ?>
						<label style="padding-left: 150px">LAST NAME:	</label> <?= $items['lastname'] ?>
					</div>
				</div>

				<hr style="border-top:1px solid #cccccc; padding: 0; "/>

				<div class="row">
					<div class="col-md-12">
						<h4><label>EMPLOYER'S ADDRESS:</label></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>HOUSE NO AND STREET:</label> <?= $items['employers_home_address'] ?>   
					
						<label  style="padding-left:50px">SUBDIVISION/ BARANGAY: </label> <?= $items['employers_barangay'] ?>
					</div>
				</div>
				<div class="row" style="padding-left:15px;">
						<label>CITY OR MUNICPALITY: </label> Cebu
					
						<label style="padding-left:150px">PROVINCE: </label> <?= $items['employers_province'] ?>
				</div>	

				<hr style="border-top:1px solid #cccccc; padding: 0; "/>

				<div class="row"">
					<div class="col-md-12">
						<h4><label>HOME ADDRESS:</label></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>HOUSE NO AND STREET:</label> <?= ucfirst($items['home_address'] )?>
					
						<label style="padding-left:75px">SUBDIVISION/ BARANGAY: </label>  Banilad
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-12">
						<label>CITY OR MUNICPALITY: </label> Cebu
						<label style="padding-left:150px">PROVINCE: </label><?= $items['prov_address'] ?>
					</div>
				</div>

				<hr style="border-top:1px solid #cccccc; padding: 0; "/>

				<div class="row">
					<div class="col-md-12">
						<label>SEX:</label>  <?= $items['sex']?>
					
						<label style="padding-left: 215px">CIVIL STATUS:</label> <?= $items['civil_status']?>
			
						<label style="padding-left: 170px">AGE:</label> <?= $items['age']?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>DATE OF BIRTH:</label> <?= date_create($items['dateofbirth'])->format('F d, Y')?>
				
						<label style="padding-left:64px">CONTACT NO:</label> <?= $items['cellphone_no']?>
					</div>
				</div>

				<hr style="border-top:1px solid #cccccc; padding: 0; "/>
				<div class="row">
					<div class="col-md-4">
						<label>SSS NO:</label> <?= $items['sss_no'] ?>
					
						<label style="padding-left:225px">PAG-IBIG NO:</label>  <?= $items['pag_ibig_no'] ?>
				
						<label style="padding-left:130px">PHILHEALTH NO:</label> <?= $items['philhealth_no'] ?>
					</div>
				</div>

				<hr style="border-top:1px solid #cccccc; padding: 0; "/>

				<div class="row">
					<div class="col-md-12">
						<h4><label>II. FAMILY INFORMATION</label></h4>
					</div>
				</div>
				<div class="row">
					<div class="text-center">
						<label style="text-decoration: underline; padding-left:10px;"">FAMILY COMPOSITION</label>
					</div>
					<div class="col-md-12 padding-top-10">
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
		                        <?php foreach ($items['fc'] as $row) : ?> 
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
				</div>

				<hr style="border-top:2px solid #cccccc; padding: 0; "/>

				<div class="row padding-top-20">
					<div class="col-md-6">
						<label>IN CASE OF EMERGENCY, CONTACT PERSON:</label>  <?= $items['incase_of_emergency'] ?>
					</div>
					<div class="col-md-6">
						<label>CONTACT NO:</label>  <?= $items['emergency_contact_no'] ?>
					</div>
				</div>

				<hr style="border-top:2px solid #cccccc; padding: 0; "/>

				<div class="row">
					<div class="col-md-6">
						<h4><label>III. EDUCATIONAL ATTAINMENT</label></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>HIGHEST EDUCATIONAL ATTAINMENT:</label>
						 <?= edu_attainment_desc($items['educational_attainment']) ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4><label>IV. WORK INFORMATION</label></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>MONTHLY SALARY:</label> <?= number_format($items['monthly_salary'],2) ?>

						<label style="padding-left:225px">NATURE OF WORK: </label> <?= ucfirst($items['nature_of_work']) ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>EMPLOYMENT ARRANGEMENT:</label> <?= employment_arrangement($items['employment_arrangement']) ?>
				
						<label style="padding-left:170px">NAME OF EMPLOYER:</label> <?= $items['name_of_employer'] ?>
					</div>
				</div>

				<hr style="border-top:2px solid #cccccc; padding: 0; "/>
				<div class="row padding-top-20">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<label> ___________________________</label>
						<label style="padding-left:30%;">RECEIVED BY: ___________________________</label><br/>
						<label>SIGNATURE OF KASAMBAHAY</label> 
						<label style="padding-left:43%;">KASAMBAHAY DESK OFFICER</label>
					</div>	
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-6">
						<label>DATE:</label> <?= date_create(null)->format('F d, Y') ?>
					</div>
				</div>	
			</div>
		</div>
	</div>
</body>
