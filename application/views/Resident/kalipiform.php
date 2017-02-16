 <div class="col-md-9">
	<div class="panel panel-default">
		<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp;REQUEST FOR KALIPI FEDERATION FORM</label></h4>
		</div> <!--Close Panel Heading -->
		<!-- Body -->
		<form action="<?= base_url('kalipi/store') ?>" method= "POST" class="ajax"  data-next="<?= base_url('kalipi/preview_form')?>">
			<div class="panel-body">
			 <div class="alert alert-danger warning hidden"></div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<label for="personaldata">I. PERSONAL DATA:</label>
					</div>
					<div class="col-md-4 padding-top-10">
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="date">DATE:</label>
							<!-- <input type="date" class="form-control" name="date" id="date" placeholder=""> -->
							<?php echo date("M, d Y"); ?>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="name">NAME:</label>
							<!-- <input type="text" class="form-control" name="name" id="name" placeholder=""> -->
							<!-- <?= "{$data['firstname']} {$data['lastname']}"; ?> -->

							<div class="form-control-static"><?= $firstname ?> <?= $middlename ?> <?= $lastname ?></div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="nickname">NICKNAME: </label>
							<!-- <input type="text" class="form-control" name="nickname" id="nickname" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['nickname'] ?> -->
							<div class="form-control-static"><?= $nickname ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="cityAddr">CITY ADDRESS:</label>
							<!-- <input type="text" class="form-control" name="cityAddr" id="cityAddr" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['city_address'] ?> -->
								<div class="form-control-static"><?= $home_address ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="provAddr">PROVINCIAL ADDRESS</label>
							<!-- <input type="text" class="form-control" name="provAddr" id="provAddr" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['prov_address'] ?> -->
								<div class="form-control-static"><?= $prov_address ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
	        			<div class="form-group">
							<label for="dob">DATE OF BIRTH:</label>
					  		<!-- <input type="date" class="form-control" name="dob" id="dob" placeholder=""> -->
					  		<!-- <div class="form-control-static"></div><?= $data['dateofbirth'] ?> -->
					  			<div class="form-control-static"><?= date_create($dateofbirth)-> format('F d, Y') ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="age">AGE:</label>
							<!-- <input type="text" class="form-control" name="age" id="age" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['age'] ?> -->
							<div class="form-control-static"><?= $age ?></div>

						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<label for="sex">SEX:</label>
				  			<!-- <div class="form-control-static"></div><?= $data['sex'] ?> -->	
				  			<div class="form-control-static"><?= $sex ?></div>
						</div>	
					</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="civil_status">CIVIL STATUS:</label>
							<!-- <input type="text" class="form-control" name="civil_status" id="civil_status" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['civil_status'] ?> -->	
							<div class="form-control-static"><?= $civil_status ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="religion">RELIGION:</label>
							<!-- <input type="text" class="form-control" name="religion" id="religion" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['religion'] ?> -->
							<div class="form-control-static"><?= $religion ?></div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="telephone_no">TELEPHONE NO:</label>
							<!-- <input type="text" class="form-control" name="telephone_no" id="telephone_no" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['telephone_no'] ?> -->
							<div class="form-control-static"><?= $telephone_no ?></div>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="cellphone_no">MOBILE NO:</label>
							<!-- <input type="text" class="form-control" name="cellphone_no" id="cellphone_no" placeholder=""> -->
							<!-- <div class="form-control-static"></div><?= $data['cellphone_no'] ?> -->	
							<div class="form-control-static"><?= $cellphone_no ?></div>
						</div>
					</div>
				</div>
				<br>
				<br>
			<div class="row">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
						<!-- <input type="text" class="form-control" name="educational_attainment" id="educational_attainment" placeholder=""> -->
						<!-- <div class="form-control-static"></div><?= $data['educational_attainment'] ?> -->
							<div class="form-control-static"><?= edu_attainment_desc($educational_attainment)?></div>
					</div>
				</div>
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="occupation">OCCUPATION:</label>
						<!-- <input type="text" class="form-control" name="occupation" id="occupation" placeholder=""> -->
						<!-- <div class="form-control-static"></div><?= $data['occupation'] ?> -->
						<div class="form-control-static"><?= $occupation ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="name_of_company">NAME OF COMPANY:</label>
						<input type="text" class="form-control" name="name_of_company" id="name_of_company" placeholder="">
						<!-- <div class="form-control-static"></div><?= $data['name_of_company'] ?> -->	

					</div>
				</div>
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="company_address">COMPANY ADDRESS:</label>
						<input type="text" class="form-control" name="company_address" id="company_address" placeholder="">
					</div>
				</div>
			</div>
				<div class="row">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="telephone_no_res">TELEPHONE NO (RESIDENCE):</label>
						<input type="text" class="form-control" name="telephone_no_res" id="telephone_no_res" placeholder="">
					</div>
				</div>
				<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="telephone_no_off">TELEPHONE NO (OFFICE):</label>
							<input type="text" class="form-control" name="telephone_no_off" id="telephone_no_off" placeholder="">
						</div>
				</div>
				<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="skills">SKILLS / HOBBIES:</label>
							<!-- <input type="text" class="form-control" name="skills" id="skills" placeholder=""> -->
							<div class="form-control-static"><?= $skills ?></div>
						</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="name_of_spouse">NAME OF SPOUSE:</label>
							<input type="text" class="form-control" name="name_of_spouse" id="name_of_spouse" placeholder="">
						</div>
				</div>
				<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="address_of_spouse">ADDRESS:</label>
							<input type="text" class="form-control" name="address_of_spouse" id="address_of_spouse" placeholder="">
						</div>
				</div>
				<div class="col-md-8 padding-top-10">
	        			<div class="form-group">
							<label for="dateofbirth_of_spouse">DATE OF BIRTH:</label>
					  		<input type="date" class="form-control" name="dateofbirth_of_spouse" id="dateofbirth_of_spouse" placeholder="">
						</div>
				</div>
				<div class="col-md-4 padding-top-10">
       					<div class="form-group">
							<label for="spouse_age	">AGE:</label>
					  		<input type="text" class="form-control" name="spouse_age" id="spouse_age" placeholder="">
						</div>
				</div>
				<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="highest_educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
							<input type="text" class="form-control" name="highest_educational_attainment" id="highest_educational_attainment	" placeholder="">
						</div>
				</div>
				<div class="col-md-6 padding-top-10">
						<div class="form-group">
							<label for="occupation_of_spouse">OCCUPATION:</label>
							<input type="text" class="form-control" name="occupation_of_spouse" id="occupation_of_spouse" placeholder="">
						</div>
				</div>
				<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="num_of_children">NO OF CHILDREN:</label>
							<input type="text" class="form-control" name="num_of_children" id="num_of_children" placeholder="">
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 padding-top-10">
					<label for="familycomp">II.FAMILY COMPOSITION</label>
				</div>
			</div>

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
			<div class="row">
				<div class="col-md-6 padding-top-10">
					<label for="sta">III.SEMINARS & TRAINING ATTENDED</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
		            <table class="table table-border not-datatable">
		                <thead>
		                	<th>#</th>
		                    <th>TITLE OF SEMINAR & TRAINING</th>
		                    <th>DATE</th>
		              
		                    <th></th>
		                </thead>
		                <tbody>
		                    <!-- <?php foreach ($variable as $row): ?>

		                    <?php endforeach ?> -->
		                    <tr>
		                    	<td>1</td>
		                        <td><input type="text" name="seminars_attended[title][]" class="form-control"></td>
		                        <td><input type="date" name="seminars_attended[date][]" class="form-control"></td>                             
		                        <td>
		                            <a data-click="remove-line" class="btn btn-danger"><i class="fa fa-times"></i></a>
		                        </td> 
		                    </tr>
		                </tbody>
		                <tfoot>
		                    <tr>
		                        <td colspan="7"><a class="btn btn-success" style="color:#fff;" data-click="new-line"><i class="fa fa-plus"></i> <b>ADD NEW SEMINAR</b></a></td>
		                    </tr>
		                </tfoot>
		            </table>
		        </div>
			</div>
			<div class="row padding-top-20">	
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<input type="submit" value="GENERATE FORM" class="btn btn-primary btn-block btn-sm" style="font-weight:bold;"/>
				</div>
			</div>
		</div>
	</div>
</form>
