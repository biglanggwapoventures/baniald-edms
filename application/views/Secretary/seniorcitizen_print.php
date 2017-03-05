<body>
	<div class="row">
		<div class="col-md-12">
            <center>
        		<p>REPUBLIC OF THE PHILIPPINES</p>
				<p>	CITY OF CEBU</p>
				<p><label>OFFICE OF THE BANILAD CEBU SENIOR CITIZEN ASSOCIATION(BACSCA)</label></p>
				<p><label>BANILAD, CEBU CITY</label></p>
			</center>	
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="name"> 
							Name: <?= $items['firstname'] .' '.  $items['middlename'] .' '. $items['lastname'] ?> 
						</label>
						<label style="padding-left:38%">
								OSCA ID NO: <?= $items['osca_id_no'] ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="home_address">
							Home Address: <?= $items['home_address'] ?>
						</label>	
						<label for="prov_address" style="padding-left:100px;">
							Provincial Address: <?= $items['prov_address'] ?>
						</label>
						<label for="cellphone_no" style="padding-left:60px;">
							Contact No: <?= $items['cellphone_no'] ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="dateofbirth">
							Date of Birth: <?= date_create($items['dateofbirth'])->format('F d, Y') ?>
						</label>						  
						<label for="placeofbirth" style="padding-left:125px;">
							Place of Birth: <?= $items['placeofbirth'] ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="sex">
							Sex: <?= $items['sex'] ?>
						</label>
						<label for="citizenship" style="padding-left:240px;">
							Citizenship: <?= $items['citizenship'] ?>
						</label>
						<label for="religion" style="padding-left:115px;">
							Religion: <?= $items['religion'] ?>
						</label>
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
				<div class="row padding-top-10">
					<div class="text-center">
						<label for="familyinfo"><u>FAMILY COMPOSITION</u></label>
					</div>
					<div class="col-md-12 padding-top-10">

						<table class="table table-border not-datatable" border="1">
							

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
			                            <td><?= number_format($row['monthly_salary'],2)?></td>
			                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
			                            
			                        </tr>
		                        
		                        <?php endforeach; ?>
		                      
		                    </tbody>

						</table>
					</div>
				</div>
				<div class="row">
					<div class="row padding-top-10">
						<div class="text-center">
							<label for="familyinfo"><u>MEMBERSHIP IN ORGANIZATION</u></label>
						</div>
					</div>
					<div class="col-md-12">
                        <table class="table table-border not-datatable" border="1">

                            <thead>
                            	<th>#</th>
                                <th>NAME OF ORGANIZATION</th>
                                <th>POSTION</th>
                                <th>YEAR OF SERVICE</th>
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
				<hr style="border-top:1px solid #cccccc; padding: 0; "/>
				<div class="row" style="padding-top: 30px;">
					<div class="col-md-6">
						<label>SIGNATURE OVER PRINTED NAME</label>
						<label style="float:right; padding-right: 50px;">DATE ACCOMPLISHED</label>
					</div>
				</div>
		</div>
	</div>
</body>
