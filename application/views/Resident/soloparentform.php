<div class="col-md-9">
	<div class="panel panel-default">
	<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp;REQUEST FOR APPLICATION FOR SOLO PARENT</label></h4>
		</div> <!--Close Panel Heading -->
		<!-- Body -->
		<form action="<?= base_url('Solo_parent/store') ?>" method= "POST" class="ajax" data-next="<?= base_url('Solo_parent/preview_form')?>">
			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="date">DATE</label>
							<!-- <input type="text" class="form-control" name="date" id="date" placeholder=""> -->
							<p class="form-control-static"><?= date('M d, Y'); ?></p>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="name">NAME: </label>
							<!-- <input type="text" class="form-control" name="name" id="name" placeholder=""> -->
							<p class="form-control-static"><?= $firstname. ' '. $middlename.' ' .$lastname ?></p>	
						</div>
					</div>								
					<div class="col-md-2 padding-top-10">
						<div class="form-group">
							<label for="age">AGE: </label>
							<!-- <input type="text" class="form-control" name="age" id="age" placeholder=""> -->
							<p class="form-control-static"><?= $age ?></p>	
						</div>
					</div>
					<div class="col-md-2 padding-top-10">
		    			<div class="form-group">
							<label for="sex">SEX:</label>
					  		<!-- <input type="text" class="form-control" name="sex" id="sex" placeholder=""> -->
					  		<p class="form-control-static"><?= $sex ?></p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="dateofbirth">DATE OF BIRTH:</label>
							<!-- <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" placeholder=""> -->
							<p class="form-control-static"><?= $dateofbirth ?></p>	
						</div>
					</div>
					<div class="col-md-8 padding-top-10">
						<div class="form-group">
							<label for="pob">PLACE OF BIRTH:</label>
							<!-- <input type="text" class="form-control" name="pob" id="pob" placeholder=""> -->
							<p class="form-control-static"><?= $placeofbirth ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="address">HOME ADDRESSS:</label>
							<!-- <input type="text" class="form-control" name="address" id="address" placeholder=""> -->
							<p class="form-control-static"><?= $home_address. ', '. $barangay ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="occupation">OCCUPATION: </label>
							<!-- <input type="text" class="form-control" name="occupation" id="occupation" placeholder=""> -->
							<p class="form-control-static"><?= $occupation?></p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="monthly_income">MONTHLY INCOME: </label>
							<!-- <input type="text" class="form-control" name="monthly" id="monthly" placeholder=""> -->
							<p class="form-control-static"><?= $monthly_income ?></p>	
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="total_family_income">Total Monthly Family Income: *</label>
							<input type="text" class="form-control" name="total_family_income" id="total_family_income" placeholder="">
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="familycomposition">I. FAMILY COMPOSTION</label>
					</div>
						<div class="col-md-12 padding-top-10">

						<table class="table table-border not-datatable">
							<thead>
	                			<th>NAME</th>
		                        <th>RELATION</th>
		                        <th>AGE</th>
		                        <!-- <th>OCCUPATION</th> -->
		                        <th>INCOME</th>
		                        <th>EDUCATIONAL ATTAINMENT</th>
		                        <th>DATE OF BIRTH</th>
	          			  	</thead>
	            			<tbody>
		                        <?php foreach ($family_composition as $row) : ?> 
		                        <tr>    
		                      
		                            <td><?= ucfirst($row['name']) ?></td>
		                            <td><?= ucfirst($row['relationship'])?></td>
		                            <td><?= $row['family_age']?></td>
		                            <!-- <td><?= ucfirst($row['family_occupation']) ?></td> -->
		                            <td><?= $row['monthly_salary']?></td>
		                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
		                             <td><?= ucfirst($row['dateofbirth'])?></td>
		                            
		                        </tr>php
		                        
		                        <?php endforeach; ?>
		                     
		                    </tbody>
						</table>
					</div>
			
				</div>

				<!-- <div class="row">
					<div class="col-md-12">
                        <table class="table table-border not-datatable">
                            <thead>
                            	<th>#</th>
                                <th>NAME</th>
                                <th>STATUS</th>
                                <th>RELATIONSHIP</th>
                                <th>AGE</th>
                                <th>Child's Birthdate</th>
                               
                            </thead>
                            <tbody>
                                
                                <tr>
                                	<td>1</td>
                                    <td><input type="text" name="name" class="form-control"></td>
                                    <td><input type="text" name="family_status" class="form-control"></td>
                                    <td><input type="text" name="relationship" class="form-control"></td>
                                    <td><input type="text" name="family_age" class="form-control"></td>
                                   
                                    <td><input type="date" class="form-control" name="childdob" id="childdob" placeholder=""></td>
                                    <td>
                                        <a data-click="remove-line" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </td> 
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7"><a class="btn btn-default" style="color:#2a313d;" data-click="new-line"><i class="fa fa-plus"></i> <b>ADD NEW MEMBER</b></a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
           		</div> -->
	<!-- 			<div class="row">
					
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="status">STATUS</label>
							<input type="text" class="form-control" name="status" id="status" placeholder="">
						</div>
					</div>
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="family_educational_attainment">EDUCATIONAL ATTAINMENT </label>
							<input type="text" class="form-control" name="family_educational_attainment" id="family_educational_attainment" placeholder="">
						</div>
					</div>
					
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="monthly_salary">MONTHLY INCOME: *</label>
							<input type="text" class="form-control" name="monthly_salary" id="monthly_salary" placeholder="">
						</div>
					</div>
				</div> -->
				<br>
				<br>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="classification">III. CLASSIFICATION/CIRCUMSTANCES OF BEING A SOLO PARENT: *</label>
						<textarea class="form-control" rows="5" name="classifcation_desc" id="classifcation_desc"> </textarea>
					</div>							
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="needs">IV. NEEDS/PROBLEMS OF SOLO PARENT: *</label>
						<textarea class="form-control" rows="5" name="needs_problems" id="needs_problems"> </textarea>
					</div>							
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="resources">V. FAMILY RESOURCE: *</label>
						<textarea class="form-control" rows="5" name="family_resources" id="family_resources"> </textarea>
					</div>							
				</div>
			</div>
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
