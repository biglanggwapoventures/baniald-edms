<body>
    <div class="row">
        <div class="col-md-12">
    		<div class="row">
                <div class="col-md-12">
                    <div class="box-footer">
                        <div class="row">
			                <div class="col-md-4 col-md-offset-8">
			                      <div style="width:100px; border:1px solid #000; padding:80px; margin-left:74%;"></div> 
			                      <p style="margin-left:75%; font-weight: bold;">PLACE 2x2 PHOTO HERE</p>
			                </div>
				        </div>
	                	<center>
							<h3><label>KALIPI FEDERATION</label></h3>
							<P>CEBU CITY </P>
							<h4><label>MEMBERSHIP FORM</label></h4>
							<br/>
						</center>
						<div class="row">
							<div class="col-md-10"></div>
							<div class="col-md-2">
								<label for="date" style="float:right; padding-right:50px;">
									Date: <?php echo date_create(null)->format("F d, Y"); ?>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<h4><label>I. PERSONAL DATA:</label></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="name">
									Name: <?= $items['firstname'] .' '.$items['middlename'] .' '. $items['lastname'] ?>
								</label>
								<label for="nickname" style="padding-left:150px;">
									Nickname: <?= $items['nickname']?>
								</label>	
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label>City Address:
									 <?= $items['home_address']?>
								</label>
								<label for="prov_address" style="padding-left:185px;">
									Provincial Address: <?= $items['prov_address'] ?>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>
									Date of Birth: <?= date_create($items['dateofbirth'])->format('F d, Y') ?>
								</label>
								<label for="age" style="padding-left:140px;">
									Age: <?= "{$items['age']}" ?>
								</label>			
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="sex">
									Sex: <?= $items['sex'] ?>
								</label>
								<label for="civil_status" style="padding-left:285px;">
									Civil Status: <?= $items['civil_status'] ?>
								</label>
								<label for="civil_status" style="float:right; padding-right:70px;">
									Religion: <?= $items['religion'] ?>
								</label>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="telephone_no" >
									Telephone No: <?= $items['telephone_no'] ?>
								</label>
								<label for="cellphone_no" style="padding-left:220px;">
									Mobile No: 	<?= $items['cellphone_no'] ?>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="educational_attainment">Highest Educational Attaintment:<br/> 
									<?= edu_attainment_desc($items['educational_attainment']) ?>
								</label>
							</div>	
							<div class="col-md-6">
								<label>Occupation: <?= $items['occupation'] ?></label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Name of Company: <?= $items['name_of_company'] ?></label>
								<label style="padding-left:153px;">Company Address: <?= $items['company_address'] ?></label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="telephone_no_res">Telephone No (Residence): 
									<?= $items['telephone_no_res'] ?>
								</label>
								<label style="padding-left:120px;">Telephone No (Office): 
									<?= $items['telephone_no_off'] ?>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="skills">Skills / Hobbies: <?= $items['skills'] ?></label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 padding-top-10">
								<h4><label>II.FAMILY COMPOSITION</label></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
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
				                            <td><?= $row['monthly_salary']?></td>
				                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
				                            
				                        </tr>
				                        
				                        <?php endforeach; ?>
				                      
				                    </tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<h4><label>III.SEMINARS & TRAINING ATTENDED</label></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
			                    <table class="table table-border not-datatable" border="1">
			                        <thead>
			                        	<th>#</th>
				                    	<th>TITLE OF SEMINAR & TRAINING</th>
				                    	<th>DATE</th>
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
	</div>
</body>