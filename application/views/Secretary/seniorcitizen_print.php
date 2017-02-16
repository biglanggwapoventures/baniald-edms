<body>
	<div class="row">
            <div class="box-footer">
            	<center class="padding-top-20">
            		<p>REPUBLIC OF THE PHILIPPINES</p>
					<p>	CITY OF CEBU</p>
					<p><label>OFFICE OF THE BANILAD CEBU SENIOR CITIZEN ASSOCIATION(BACSCA)</label></p>
					<p><label>BANILAD, CEBU CITY</label></p>
				</center>
            	<br/><br/>	
				<div class="row padding-top-20">
					<div class="col-md-12 padding-top-10">
						<label for="name"> 
							Name: <?= $items['firstname'] .' '.  $items['middlename'] .' '. $items['lastname'] ?> 
						</label>
						<label style="padding-right:50px; float:right;">
								OSCA ID NO: <?= $items['osca_id_no'] ?>
						</label>
					</div>
				</div>
				<div class="row padding-top-10">
					<div class="col-md-4 padding-top-10">
						<label for="home_address">
							Home Address: <?= $items['home_address'] ?>
						</label>
					</div>
					<div class="col-md-4 padding-top-10">
							<label for="prov_address">
								Provincial Address: <?= $items['prov_address'] ?>
							</label>
					</div>
					<div class="col-md-4 padding-top-10">
						<label for="cellphone_no">Contact No: <?= $items['cellphone_no'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="dateofbirth">Date of Birth: 
							<?= date_create($items['dateofbirth'])->format('F d, Y') ?>
						</label>						  
					</div>
					<div class="col-md-8 padding-top-10">
						<label for="placeofbirth">Place of birth: <?= $items['placeofbirth'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="sex">Sex: 	<?= $items['sex']?></label>
					</div>
					<div class="col-md-4 padding-top-10">
						<label for="citizenship">Citizenship: <?= $items['citizenship'] ?></label>
					</div>
					<div class="col-md-4 padding-top-10">
						<label for="religion">Religion: <?= $items['religion'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
						<label for="educational_attainment">
							Educational Attianment: 
								<?= edu_attainment_desc($items['educational_attainment'])?>
						</label>
					</div>
					<div class="col-md-6 padding-top-10">
						<label for="skills">Skills:	<?= $items['skills'] ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
						<label for="name_of_spouse"
							>Name of Spouse: <?= ucfirst($items['name_of_spouse']) ?>
						</label>
					</div>
					<div class="col-md-6 padding-top-10">
						<label for="spouse_income">
							Monthly Salary/Income: <?= $items['spouse_income'] ?>
						</label>
					</div>		
				</div>
				<br/><br/>
				<hr style="border-top:2px solid #cccccc; padding: 0; "/>
		
				<div class="row padding-top-10">
					<div class="text-center">
						<label for="familyinfo"><u>FAMILY COMPOSITION</u></label>
					</div>
					<div class="col-md-12 padding-top-10">

						<table class="table table-border not-datatable">
							

							<thead>
	                			<th colspan="6">NAME</th>
		                        <th>RELATION</th>
		                        <th>AGE</th>
		                        <th>OCCUPATION</th>
		                        <th>INCOME</th>
		                        <th>EDUCATIONAL ATTAINMENT</th>
	          			  	</thead>
	            			<tbody>

		                        <?php foreach ($items['fc'] as $row) : ?> 
			                        <tr>    
			                            <td colspan="6"><?= ucfirst($row['name']) ?></td>
			                            <td><?= ucfirst($row['relationship'])?></td>
			                            <td><?= $row['family_age']?></td>
			                            <td><?= ucfirst($row['family_occupation']) ?></td>
			                            <td><?= $row['monthly_salary']?></td>
			                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
			                            
			                        </tr>
		                        
		                        <?php endforeach; ?>
		                      
		                    </tbody>

						</table>
					</div>
				</div>
				

       			<hr style="border-top:2px solid #cccccc; padding: 0; "/>

				<div class="row">
					<div class="row padding-top-20">
						<div class="text-center">
							<label for="familyinfo"><u>MEMBERSHIP IN ORGANIZATION</u></label>
						</div>
					</div>
					<div class="col-md-12">
                        <table class="table table-border not-datatable">

                            <thead>
                            	<th>#</th>
                                <th>NAME OF ORGANIZATION</th>
                                <th>POSTION</th>
                                <th>YEAR OF SERVICE</th>
                                
                                <th></th>
                            </thead>
                            <tbody>
                            	<?php $org = json_decode($items['organizational_membership'], true);?>
                               	<?php foreach ($org['name']  as $i => $name) : ?> 
	                       			<tr>    
			                      		<td><?= $i+1; ?></td>
			                            <td><?= ucfirst($name); ?></td>
			                            <td><?= $org['position'][$i]?></td>
			                            <td><?= $org['year_service'][$i]?></td>
			                            
	                        		</tr>
                    			<?php endforeach; ?>
                            </tbody>

                         </table>
                    </div>
                </div>

				<hr style="border-top:2px solid #cccccc; padding: 0; "/>
			
                <br/><br/><br/>
				<div class="row" style="padding-top: 100px;">
					<div class="col-md-6">
					
							<label>SIGNATURE OVER PRINTED NAME</label>
						
							<label style="float:right; padding-right: 50px;">DATE ACCOMPLISHED</label>
					</div >
					
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
