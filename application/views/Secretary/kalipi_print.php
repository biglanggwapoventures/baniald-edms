<body>
    <div class="row">
        <div class="col-md-12">
            <div class="box-footer">
            	<div class="input-group">
	                	<center class="padding-top-20">
							<h3><label>KALIPI FEDERATION</label></h3>
							<P>CEBU CITY </P>
							<h4><label>MEMBERSHIP FORM</label></h4>
							<br/>
						</center>
					<div class="row">
						<div class="col-md-10 padding-top-10"></div>
					
						<div class="col-md-2">
							<label for="date" style="float:right; padding-right: 50px;">
								Date: <?php echo date("F d, Y"); ?>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<h4><label>I. PERSONAL DATA:</label></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<label for="name">
								Name: <?= $items['firstname'] .' '.$items['middlename'] .' '. $items['lastname'] ?>
							</label>
							<label for="nickname" style="padding-left: 50px;">
								Nickname: <?= $items['nickname']?>
							</label>	
						</div>
					</div><br/	>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<label for="cityAddr">City Address:
								 <?= $items['home_address']?>
							</label>
							<label for="prov_address" style="padding-left: 105px;">
								Provincial Address: <?= $items['prov_address'] ?>
							</label>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="dob">
								Date of Birth: <?= date_create($items['dateofbirth'])-> format('F d, Y') ?>
							</label>
							<label for="age" style="padding-left: 40px;">
								Age: <?= "{$items['age']}" ?>
							</label>			
						</div>
					</div><br/>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="sex">
								Sex: <?= $items['sex'] ?>
							</label>
							<label for="civil_status" style="padding-left:195px;">
								Civil Status: <?= $items['civil_status'] ?>
							</label>
							<label for="civil_status" style="padding-left:70px;">
								Religion: <?= $items['religion'] ?>
							</label>
						</div>	
					</div><br/>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="telephone_no" >
								Telephone No: <?= $items['telephone_no'] ?>
							</label>
							<label for="cellphone_no" style="padding-left:125px;">
								Mobile No: 	<?= $items['cellphone_no'] ?>
							</label>
						</div>
					</div><br/>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="educational_attainment">Highest Educational Attaintment:</label>
								<div class="form-control-static">
									<?= edu_attainment_desc($items['educational_attainment']) ?>
								</div>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="occupation">Occupatioin:</label>
								<div class="form-control-static">
									<?= $items['occupation'] ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="name_of_company">Name of Company:</label>
								<div class="form-control-static">
									<?= $items['name_of_company'] ?>	
								</div>

							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="company_address">Company Address:</label>
								<!-- <input type="text" class="form-control" name="company_address" id="company_address" placeholder=""> -->
								<div class="form-control-static">
									<?= $items['company_address'] ?>	
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="telephone_no_res">Telephone No (Residence):</label>
								<div class="form-control-static">
									<?= $items['telephone_no_res'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="telephone_no_off">Telephone No (Office):</label>
								<div class="form-control-static">
									<?= $items['telephone_no_off'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-12 padding-top-10">
							<div class="form-group">
								<label for="skills">Skills / Hobbies:</label>
								<div class="form-control-static">
									<?= $items['skills'] ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-10">
							<div class="form-group">
								<label for="name_of_spouse">Name of Spouse:</label>
								<div class="form-control-static">
									<?= $items['name_of_spouse'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-12 padding-top-10">
							<div class="form-group">
								<label for="address_of_spouse">Address:</label>
								<div class="form-control-static">
									<?= $items['address_of_spouse'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
		        			<div class="form-group">
								<label for="dateofbirth_of_spouse">Date of Birth:</label>
						  		<div class="form-control-static">
									<?= date_create($items['dateofbirth_of_spouse'] )->format('F m, Y')?>	
								</div>
							</div>
						</div>
						<div class="col-md-4 padding-top-10">
		   					<div class="form-group">
								<label for="spouse_age">Age:</label>
						  		<div class="form-control-static">
									<?= $items['spouse_age'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="highest_educational_attainment">Highest Educational Attianment:</label>
								<div class="form-control-static">
									<?= $items['highest_educational_attainment'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-6 padding-top-10">
							<div class="form-group">
								<label for="occupation_of_spouse">Occupation:</label>
								<div class="form-control-static">
									<?= $items['occupation_of_spouse'] ?>	
								</div>
							</div>
						</div>
						<div class="col-md-12 padding-top-10">
							<div class="form-group">
								<label for="num_of_children">No of Children:</label>
								<div class="form-control-static">
									<?= $items['num_of_children'] ?>	
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 padding-top-10">
							<label for="familycomp">II.Family Compostion</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
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
			                        <?php foreach ($items['fc'] as $row) : ?> 
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

		                        	<?php $org = json_decode($items['seminars_attended'], true);?>
		                        	<?php if(!empty($org)):?>
			                          	<?php foreach ($org['title']  as $i => $title) : ?> 
				                   			 <tr>    
						                  		<td><?= $i+1; ?></td>
						                        <td><?= ucfirst($title); ?></td>
						                        <td><?= date_create($org['date'][$i])->format('F m, Y')?></td>
						                   	</tr>
			                    
			                    		<?php endforeach; ?>
			                    	<?php else:?>
			                    		 <tr>    
						                  		<td colspan="3" class="text-center"> NO SEMINARS ATTENDED</td>
						                   	</tr>
		                    			<?php endif;?>
		                      	</tbody>
	            			</table>
	        			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>