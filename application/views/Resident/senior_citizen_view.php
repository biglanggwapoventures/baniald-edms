<div class="col-md-9">
	<div class="profile-content">
	 	<div class="panel-heading">
            <strong>REVIEW SENIOR CITIZEN REGISTRATION FORM</strong>
        </div>	
		<div class="panel-body">
			<div class="alert alert-danger warning hidden"></div>
			<div class="row ">
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="lastname"> NAME: </label>
					 	<!-- <input type="text" class="form-control" name= "lastname" id="lastname" placeholder=""> -->
					 	<div class="form-control-static"><?= $data['firstname']?> <?=  $data['middlename'] ?> <?= $lastname?></div>
					</div>
				</div>
				
				<div class="col-md-2 padding-top-10">
					<div class="form-group">
						<label for="osca_id_no">OSCA ID NO:</label>
					 	<div class="form-control-static"><?= $data['osca_id_no'] ?></div>

					</div>
				</div>
			</div>
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="home_address">HOME ADDRESS:</label>
						 	<!-- <input type="text" class="form-control" name= "homeaddr" id="homeaddr" placeholder=""> -->
						 <div class="form-control-static"><?= $data['home_address'] ?></div>
						</div>	
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="prov_address">PROVINCIAL ADDRESS:</label>
					 		<!-- <input type="text" class="form-control" name= "prov_address" id="prov_address" placeholder=""> -->
					 		<!-- <div class="form-control-static"></div><?= $data['prov_address'] ?> -->
					 		<div class="form-control-static"><?= $data['prov_address'] ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="cellphone_no">CONTACT NO:</label>
					 		<!-- <input type="text" class="form-control" name= "contactno" id="contactno" placeholder=""> -->
					 		<!-- <div class="form-control-static"></div><?= $data['cellphone_no'] ?> -->
					 		<div class="form-control-static"> <?= $data['cellphone_no']  ?></div>

						</div>	
					</div>
				</div>
				<div class="row ">
						<div class="col-md-4">
							
						</div>
						<div class="col-md-8 padding-top-10">
							
						</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="dateofbirth">DATE OF BIRTH:</label>
						  	<!-- <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" placeholder=""> -->
						  	<!-- <div class="form-control-static"></div><?= $data['dateofbirth'] ?> -->
						  	<div class="form-control-static"><?= date_create($data['dateofbirth'])->format('F d, Y') ?></div>

						</div>
					</div>
					<div class="col-md-8 padding-top-10">
						<div class="form-group">
							<label for="placeofbirth">PLACE OF BIRTH:</label>
						 	<!-- <input type="text" class="form-control" name= "placeofbirth" id="placeofbirth" placeholder=""> -->
						 	<!-- <div class="form-control-static"></div><?= $data['placeofbirth'] ?> -->
						 	<div class="form-control-static"><?= $data['placeofbirth'] ?></div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="sex">SEX:</label>
					  	<!-- <div class="form-control-static"></div><?= $data['sex'] ?> -->
					  	<div class="form-control-static"><?= $data['sex']?></div>


					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="citizenship">CITITZENSHIP: </label>
						 	<!-- <input type="text" class="form-control" name= "citizenship" id="citizenship" placeholder=""> -->
						 	<!-- <div class="form-control-static"></div><?= $data['citizenship'] ?> -->
						 	<div class="form-control-static"><?= $data['citizenship'] ?></div>

						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="religion">RELIGON: </label>
						 	<!-- <input type="text" class="form-control" name= "religion" id="religion" placeholder=""> -->
						 	<!-- <div class="form-control-static"></div><?= $data['religion'] ?> -->
						 	<div class="form-control-static"><?= $data['religion'] ?></div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="educational_attainment">EDUCATIONAL ATTAINMENT:</label>
						 	<!-- <input type="text" class="form-control" name= "eduattainment" id="eduattainment" placeholder=""> -->
						 	<!-- <div class="form-control-static"></div><?= $data['educational_attainment'] ?> -->
						 		<div class="form-control-static"><?= edu_attainment_desc($data['educational_attainment'])?></div>
						</div>
					</div>
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="skills">SKILLS:	</label>
						 	<!-- <input type="text" class="form-control" name= "skills" id="skills" placeholder=""> -->
						 	<!-- <div class="form-control-static"></div><?= $data['skills'] ?> -->
						 	<div class="form-control-static"><?= $data['skills'] ?></div>
						</div>
					</div>
				</div>
				
				<hr style="border-top:2px solid #cccccc; padding: 0; "/>
			
				<div class="row padding-top-10">
					<div class="text-center">
						<label for="familyinfo" style="text-decoration: underline;">FAMILY COMPOSITION</label>
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

       			<hr style="border-top:2px solid #cccccc; padding: 0; "/>

				<div class="row">
					<div class="row padding-top-20">
						<div class="text-center">
							<label for="familyinfo" style="text-decoration: underline;">MEMBERSHIP IN ORGANIZATION</label>
						</div>
					</div>
					<div class="col-md-12">
                        <table class="table table-striped not-datatable" border="1">
                            <thead>
                            	<th>#</th>
                                <th>NAME OF ORGANIZATION</th>
                                <th>POSTION</th>
                                <th>YEAR OF SERVICE</th>
                            </thead>
                            <tbody>
                            	<?php $org = json_decode($data['organizational_membership'], true);?>
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
		</div>

		<hr style="border-top:2px solid #cccccc; padding: 0; "/>
       			
				<div class="row padding-top-20">
					<div class="col-md-5 padding-top-10">
						<hr style="display: block; height: 2px; margin-left: 50px;	 border-top: 1px solid #000;padding: 0; ">
							<label style="margin-left:100px;">SIGNATURE OVER PRINTED NAME</label>
					</div>
					
					<div class="col-md-2 padding-top-10"></div>

					<div class="col-md-4 padding-top-10">
						<hr style="display: block; height: 2px; margin-left: 50px;	 border-top: 1px solid #000;padding: 0; ">
							<label style="margin-left:100px;">DATE ACCOMPLISHED</label>
					</div>
				</div>
	</div>
			<div class="panel-footer">            
            <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
     
        </div>