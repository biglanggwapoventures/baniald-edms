<div class="col-md-9">
	<div class="panel panel-default">
		<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp; REQUEST FOR SENIOR CITIZEN REGISTRATION FORM</label></h4>
		</div> <!--Close Panel Heading -->

		<!-- Body -->
		<form action="<?= base_url('seniorcitizen/store') ?>" method="POST" class="ajax" data-next="<?= base_url('seniorcitizen/preview_form')?>">
			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
				<div class="row ">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="lastname"> NAME: </label>
						 	<!-- <input type="text" class="form-control" name= "lastname" id="lastname" placeholder=""> -->
						 	<div class="form-control-static"><?= $firstname?> <?= $middlename?> <?= $lastname?></div>
						</div>
					</div>
					
					<div class="col-md-2 padding-top-10">
						<div class="form-group">
							<label for="osca_id_no">OSCA ID NO:</label>
						 	<input type="text" class="form-control" name= "osca_id_no" id="osca_id_no" placeholder="">
						 	<!-- <div class="form-control-static"></div><?= $data['osca_id_no'] ?> -->
						</div>
					</div>
				</div>
					<div class="row ">
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="home_address">HOME ADDRESS:</label>
							 	<!-- <input type="text" class="form-control" name= "homeaddr" id="homeaddr" placeholder=""> -->
							 <div class="form-control-static"><?= $home_address?></div>
							</div>	
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="prov_address">PROVINCIAL ADDRESS:</label>
						 		<!-- <input type="text" class="form-control" name= "prov_address" id="prov_address" placeholder=""> -->
						 		<!-- <div class="form-control-static"></div><?= $data['prov_address'] ?> -->
						 		<div class="form-control-static"><?= $prov_address?></div>
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="cellphone_no">CONTACT NO:</label>
						 		<!-- <input type="text" class="form-control" name= "contactno" id="contactno" placeholder=""> -->
						 		<!-- <div class="form-control-static"></div><?= $data['cellphone_no'] ?> -->
						 		<div class="form-control-static"><?= $cellphone_no?></div>

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
							  	<div class="form-control-static"><?= date_create($dateofbirth)->format('F d, Y') ?></div>

							</div>
						</div>
						<div class="col-md-8 padding-top-10">
							<div class="form-group">
								<label for="placeofbirth">PLACE OF BIRTH:</label>
							 	<!-- <input type="text" class="form-control" name= "placeofbirth" id="placeofbirth" placeholder=""> -->
							 	<!-- <div class="form-control-static"></div><?= $data['placeofbirth'] ?> -->
							 	<div class="form-control-static"><?= $placeofbirth?></div>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="sex">SEX:</label>
						  	<!-- <div class="form-control-static"></div><?= $data['sex'] ?> -->
						  	<div class="form-control-static"><?= $sex?></div>


						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="citizenship">CITITZENSHIP: </label>
							 	<!-- <input type="text" class="form-control" name= "citizenship" id="citizenship" placeholder=""> -->
							 	<!-- <div class="form-control-static"></div><?= $data['citizenship'] ?> -->
							 	<div class="form-control-static"><?= $citizenship?></div>

							</div>
						</div>
						<div class="col-md-4 padding-top-10">
							<div class="form-group">
								<label for="religion">RELIGON: </label>
							 	<!-- <input type="text" class="form-control" name= "religion" id="religion" placeholder=""> -->
							 	<!-- <div class="form-control-static"></div><?= $data['religion'] ?> -->
							 	<div class="form-control-static"><?= $religion?></div>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="educational_attainment">EDUCATIONAL ATTAINMENT:</label>
							 	<!-- <input type="text" class="form-control" name= "eduattainment" id="eduattainment" placeholder=""> -->
							 	<!-- <div class="form-control-static"></div><?= $data['educational_attainment'] ?> -->
							 		<div class="form-control-static"><?= edu_attainment_desc($educational_attainment)?></div>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="skills">SKILLS:	</label>
							 	<!-- <input type="text" class="form-control" name= "skills" id="skills" placeholder=""> -->
							 	<!-- <div class="form-control-static"></div><?= $data['skills'] ?> -->
							 	<div class="form-control-static"><?= $skills?></div>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-md-6 padding-top-10">
	        					<div class="form-group">
									<label for="name_of_spouse">NAME OF SPOUSE: </label>
							  		<input type="text" class="form-control" name="name_of_spouse" id="name_of_spouse" placeholder="">
								</div>
							</div>
							<div class="col-md-6 padding-top-10">
	        					<div class="form-group">
									<label for="spouse_income">MONTHLY SALARY/INCOME:</label>
							  		<input type="text" class="form-control" name="spouse_income" id="spouse_income" placeholder="">
								</div>
							</div>		
					</div>
					<hr style="border-top:2px solid #cccccc; padding: 0; "/>
				
					<div class="row padding-top-10">
						<div class="text-center">
							<label for="familyinfo"><u>FAMILY  COMPOSITOON</u></label>
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
	                                <!-- <?php foreach ($variable as $row): ?>

	                                <?php endforeach ?> -->
	                                <tr>
	                                	<td>1</td>
	                                    <td><input type="text" name="org[name][]" class="form-control"></td>
	                                    <td><input type="text" name="org[position][]" class="form-control"></td>
	                                    <td><input type="text" name="org[year_service][]" class="form-control"></td>
	                                    
	                                    <td>
	                                        <a data-click="remove-line" class="btn btn-danger"><i class="fa fa-times"></i></a>
	                                    </td> 
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <td colspan="7"><a class="btn btn-success" style="color:#fff;" data-click="new-line"><i class="fa fa-plus"></i> <b>ADD NEW ORGANIZATION</b></a></td>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
           			</div> 		
			</div>
				<!-- 	<div class="row">
						<div class="col-md-6 padding-top-20">
							<hr style="display: block; height: 2px; margin-left: 50px;	 border-top: 1px solid #000;padding: 0; ">
							<label style="margin-left:40px;">SIGNATURE OVER PRINTED NAME</label>
							</div>
							
							<div class="col-md-6 padding-top-20">
								<hr style="display: block; height: 2px; margin-left: 50px; margin-right:50px;	 border-top: 1px solid #000;padding: 0; ">
							<label style="margin-left:65px;">DATE ACCOMPLISHED</label>
							</div>
					</div> -->
				<div class="panel-footer">
					<div class="row padding-top-10">	
						<div class="col-md-4"></div>
						<div class="col-md-4"></div>
						<div class="col-md-4"> 
							<input type="submit" value="GENERATE FORM" class="btn btn-primary " style="font-weight:bold;"/>
						</div>
					</div>
				</div>
		</form>
	</div>
</div>
	



