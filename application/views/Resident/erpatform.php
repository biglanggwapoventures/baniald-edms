<div class="col-md-9">
	<div class="panel panel-default">
		<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> REQUEST FOR EMPOWERMENT AND REAFFIRMATION OF PATERNAL ABILITIES FORM</label></h4>
		</div>
		<!--Close Panel Heading -->	
		<form action="<?= base_url('erpat/store') ?>" method="POST" class="ajax" data-next="<?= base_url('erpat/preview_form')?>">	
			<!-- Body -->
			<div class="panel-body">
			  <div class="alert alert-danger warning hidden"></div>	
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="lastname">LAST NAME: *</label>
					 		<!-- <input type="text" class="form-control" name= "lastname" id="lastname" value="<?php echo $lastname ?>" placeholder="" readonly="readonly"> -->
					 		<div class="form-control-static"> <?= $lastname ?></div>

						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="firstname">FIRST NAME: *</label>
					  		<!-- <input type="text" class="form-control" name="firstname" id="firstname"  value="<?php echo $firstname ?>"  placeholder="" readonly="readonly"> -->
					  		<div class="form-control-static"> <?= $firstname ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="middlename">MIDDLENAME: (OPTIONAL)</label>
					  		<!-- <input type="text" class="form-control" name="middlename" id="middlename" placeholder=""> -->
					  		<div class="form-control-static"> <?= $middlename ?></div>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="age">AGE: *</label>
					 		<!-- <input type="text" class="form-control" name= "age" id="age" value="<?php echo $age ?>"  placeholder="" readonly="readonly"> -->
					 		<div class="form-control-static"> <?= $age ?></div>

						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="dateofbirth">DATE OF BIRTH: *</label>
					  		<!-- <input type="date" class="form-control" name="dateofbirth" id="dateofbirth"  value="<?php echo $dateofbirth	 ?>"  placeholder="" readonly="readonly"> -->
					  		<div class="form-control-static"> <?= $dateofbirth ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="dateofbirth">PLACE OF BIRTH: *</label>
					  		<!-- <input type="text" class="form-control" name="placeofbirth" id="placeofbirth"  value="<?php echo $placeofbirth	 ?>"  placeholder="" readonly="readonly"> -->
					  		  <div class="form-control-static"> <?= $placeofbirth ?></div>
						</div>
					</div>	
				</div>
				<div class="row ">
					<div class="col-md-8 padding-top-10">
						<div class="form-group">
							<label for="housenumandstreet">HOME ADDRESS:</label>
					 		<!-- <input type="text" class="form-control" name= "home_address" id="home_address" value="<?php echo $home_address	 ?>"  placeholder=""> -->
					 		 	<div class="form-control-static"> <?= $home_address ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="occupation">OCCUPATION:</label>
					 		<!-- <input type="text" class="form-control" name= "occupation" id="occcupation" value="<?php echo $occupation?>"  placeholder=""> -->
					 		<div class="form-control-static"> <?= $occupation ?></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="telno">CONTACT DETAILS</label>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-6 ">
						<div class="form-group">
							<label for="telephone_no">TELEPHONE NO:</label>
					 		<!-- <input type="text" class="form-control" name= "telephone_no" id="telephone_no" placeholder=""> -->
					 		<div class="form-control-static"> <?= $telephone_no ?></div>
						</div>
					</div>
					<div class="col-md-6 ">
    					<div class="form-group">
							<label for="mobileno">MOBILE NO: </label>
					  		<!-- <input type="text" class="form-control" name="cellphone_no" id="cellphone_no" placeholder=""> -->
					  		<div class="form-control-static"> <?= $cellphone_no ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label for="gender">SEX:</label>
				  		<div class="form-control-static"> <?= $sex ?></div>
					</div>
					<div class="col-md-8"><label for="gender">CIVIL STATUS: </label>
				  		<div class="form-control-static"> <?= $civil_status ?></div>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="educational_attainment">Highest Educational Attainment</label>
			  				<div class="form-control-static"> <?= edu_attainment_desc($educational_attainment) ?></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="family_composition">FAMILY COMPOSITION</label>
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
		                            <td><?= $row['monthly_salary']?></td>
		                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
		                            
		                        </tr>
		                        
		                        <?php endforeach; ?>
		                      
		                    </tbody>
						</table>
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-12 padding-top-20">
						<label for="special_abilities">SPECIAL ABILITIES:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-20">
						<label for="skills">SKILLS/TALENT:</label>
						<!-- <input type='text' class="form-control" name="skills" id='skills' > -->
							<div class="form-control-static"> <?= $skills ?></div>
					</div>
					<div class="col-md-4 padding-top-20">
						<label for="hobbies">HOBBIES:</label>
						<!-- <input type='text' class="form-control" name="hobbies" id='hobbies' > -->
							<div class="form-control-static"> <?= $hobbies ?></div>
					</div>
					<div class="col-md-4 padding-top-20">
						<label for="other_skills">OTHER SKILLS:</label>
						<!-- <input type='text' class="form-control" name="other_skills" id='other_skills' > -->
							<div class="form-control-static"> <?= $other_skills ?></div>
					</div>
				</div>
			</div>
           	<div class="panel-footer">
	            <div class="row padding-top-10"> 
	                <div class="col-md-4"></div>
	                <div class="col-md-4"></div>
	                <div class="col-md-4">
	                    <input type="submit" value="GENERATE FORM" class="btn btn-primary btn-block btn-sm" style="font-weight:bold;"/>
	                </div>
	            </div>
           	</div>		
		</form>
	</div>
</div>

