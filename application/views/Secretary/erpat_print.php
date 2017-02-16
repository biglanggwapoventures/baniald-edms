<body>
    <div class="row">
        <div class="col-md-12">
            <div class="box-footer">
            	<div class="input-group">
                	<center>
                		<h4><label>EMPOWERMENT AND REAFFIRMATION OF PATERNAL ABILITIES 
                			<br/><br/>REGISTRATION FORM</label></h4>
             		</center>
					<div class="row padding-top-20">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<h4><label for="lastname">IDENTIFYING DATA</label></h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="name">NAME:</label>	
					 		<div class="form-control-static"> 
					 			<?= $items['lastname'] .', '. $items['firstname'] .' '. $items['middlename'] ?>
					 		</div>
						</div>
						
						<div class="col-md-4 padding-top-10"></div>
						<div class="col-md-4 padding-top-10"></div>
					</div>
					<div class="row ">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="age">AGE:</label>
					 			<div class="form-control-static"> 
									<?= $items['age']?>
					 			</div>
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
	    					<div class="form-group">
								<label for="dateofbirth">DATE OF BIRTH:</label>
						  		<div class="form-control-static"> 
						  			<?= date_create("{$items['dateofbirth']}")-> format('F d, Y')?></div>
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
	    					<div class="form-group">
								<label for="dateofbirth">PLACE OF BIRTH: *</label>
						  		<div class="form-control-static"> 
						  		 	<?= $items['placeofbirth'] ?></div>
							</div>
						</div>	
					</div>
					<div class="row ">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="housenumandstreet">HOME ADDRESS:</label>
					 		 	<div class="form-control-static"> 
					 		 		<?= $items ['home_address'] ?>
					 		 	</div>
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="occupation">OCCUPATION:</label>
						 		<div class="form-control-static"> 
						 			<?= $items['occupation'] ?>
						 		</div>
							</div>
						</div>
					</div>
					<div class="row padding-top-20">
						<div class="col-md-4 padding-top-10">
							<h4><label for="telno">CONTACT DETAILS</label></h4>
						</div>
					</div>
					<div class="row padding-top-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="telephone_no">TELEPHONE NO:</label>
						 		<div class="form-control-static"> 
						 			<?= $items['telephone_no'] ?>
						 		</div>
							</div>
						</div>
						<div class="col-md-4">
    						<div class="form-group">
								<label for="mobileno">MOBILE NO: </label>
					  			<div class="form-control-static"> 
					  				<?= $items['cellphone_no'] ?>
					  			</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="gender">SEX:</label>
					  		<div class="form-control-static">
					  			 <?= $items['sex'] ?>
					  		</div>
						</div>
						<div class="col-md-8">
							<label for="gender">CIVIL STATUS: </label>
					  		<div class="form-control-static"> 
					  			<?= $items['civil_status'] ?>
					  		</div>
						</div>
						<div class="col-md-4"></div>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<label for="educational_attainment">Educational Attainment</label>
				  			<div class="form-control-static"> 
				  				<?= edu_attainment_desc($items['educational_attainment']) ?>
				  			</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<h4><label for="family_composition">FAMILY COMPOSITION</label>	</h4>
						</div>
						<div class="col-md-12 padding-top-10">
							<table class="table table-border not-datatable">
								<thead>
		                			<th>NAME</th>
			                        <th>RELATION</th>
			                        <th>AGE</th>
			                        <!-- <th>OCCUPATION</th> -->
			                       <!--  <th>INCOME</th>
			                        <th>EDUCATIONAL ATTAINMENT</th> -->
		          			  	</thead>
		            			<tbody>
			                        <?php foreach ($items['fc'] as $row) : ?> 
			                        <tr>    
			                      
			                            <td><?= ucfirst($row['name']) ?></td>
			                            <td><?= ucfirst($row['relationship'])?></td>
			                            <td><?= $row['family_age']?></td>
			                            <!-- <td><?= ucfirst($row['family_occupation']) ?></td> -->
			                          <!--   <td><?= $row['monthly_salary']?></td>
			                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td> -->
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
								<div class="form-control-static">
									<?= $items['skills'] ?></div>
						</div>
						<div class="col-md-4 padding-top-20">
							<label for="hobbies">HOBBIES:</label>
								<div class="form-control-static"> 
									<?= $items['hobbies'] ?>
								</div>
						</div>
						<div class="col-md-4 padding-top-20">
							<label for="other_skills">OTHER SKILLS:</label>
								<div class="form-control-static">
									 <?= $items['other_skills'] ?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
