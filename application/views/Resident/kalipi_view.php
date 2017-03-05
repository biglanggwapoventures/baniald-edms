 <div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
			<center>
				<h2><label>KALIPI FEDERATION</label></h2>
				<h4><label>CEBU CITY</label></h4>
				<h3><label>MEMBERSHIP FORM </label></h3>
				<br/>		
			</center>
			<div class="row">
                <div class="col-md-4 col-md-offset-8">
                      <div style="width:100px; border:1px solid #000; padding:80px;""></div> 
                      <p style="margin-left:5px; font-weight: bold;">PLACE 2x2 PHOTO HERE</p>
                </div>
            </div>
			<div class="row">
				<div class="col-md-4 padding-top-10">
					<label for="personaldata">I. PERSONAL DATA:</label>
				</div>
				<div class="col-md-4 padding-top-10">
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="date">DATE:</label>
						<?php echo date_create(null)->format("F d, Y"); ?>

					</div>
				</div>
			</div>   	
			<div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="name">NAME:</label>
						<div class="form-control-static"><?= $firstname .' '. $middlename .' '. $lastname?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="nickname">NICKNAME: </label>
						<div class="form-control-static">
							<?= $nickname ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="cityAddr">CITY ADDRESS:</label>
						<div class="form-control-static">
							<?= $home_address ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="provAddr">PROVINCIAL ADDRESS</label>
						<div class="form-control-static">
							<?= $prov_address ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 padding-top-10">
        			<div class="form-group">
						<label for="dob">DATE OF BIRTH:</label>
			  			<div class="form-control-static">
			  				<?= date_create($dateofbirth)-> format('F d, Y') ?>
			  			</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="age">AGE:</label>
						<div class="form-control-static">
							<?= $age ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 padding-top-10">
					<label for="sex">SEX:</label>
		  			<div class="form-control-static">
		  				<?= $sex ?>
		  			</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="civil_status">CIVIL STATUS:</label>
						<div class="form-control-static">
							<?= $civil_status ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="religion">RELIGION:</label>
						<div class="form-control-static">
							<?= $religion ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
					<div class="form-group">
						<label for="telephone_no">TELEPHONE NO:</label>	
						<div class="form-control-static">
							<?= $telephone_no ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="cellphone_no">MOBILE NO:</label>
						<div class="form-control-static">
							<?= $cellphone_no ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
					<div class="form-control-static">
						<?= edu_attainment_desc($educational_attainment)?>
					</div>
				</div>
			</div>
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="occupation">OCCUPATION:</label>
					<div class="form-control-static">
						<?= $occupation ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="name_of_company">NAME OF COMPANY:</label>
					<div class="form-control-static">
						<?= $data['name_of_company'] ?>	
					</div>
				</div>
			</div>
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="company_address">COMPANY ADDRESS:</label>
					<div class="form-control-static">
						<?= $data['company_address'] ?>	
					</div>
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="telephone_no_res">TELEPHONE NO (RESIDENCE):</label>
					<div class="form-control-static">
						<?= $data['telephone_no_res'] ?>	
					</div>
				</div>
			</div>
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="telephone_no_off">TELEPHONE NO (OFFICE):</label>
					<div class="form-control-static">
						<?= $data['telephone_no_off'] ?>	
					</div>
				</div>
			</div>
			<div class="col-md-12 padding-top-10">
				<div class="form-group">
					<label for="skills">SKILLS / HOBBIES:</label>
					<div class="form-control-static">
						<?= $skills ?>
					</div>
				</div>
			</div>
		</div>
		<br>
	<!-- 	<div class="row">
			<div class="col-md-12 padding-top-10">
				<div class="form-group">
					<label for="name_of_spouse">NAME OF SPOUSE:</label>
					<div class="form-control-static">
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="row">
			<div class="col-md-12 padding-top-10">
				<div class="form-group">
					<label for="address_of_spouse">ADDRESS:</label>
					<div class="form-control-static">
					
					</div>
				</div>
			</div>
		</div>	 -->
		<!-- <div class="row">
			<div class="col-md-6 padding-top-10">
    			<div class="form-group">
					<label for="dateofbirth_of_spouse">DATE OF BIRTH:</label>
			  		<div class="form-control-static">
					</div>
				</div>
			</div>
			<div class="col-md-4 padding-top-10">
				<div class="form-group">
					<label for="spouse_age	">AGE:</label>
			  		<div class="form-control-static">
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="row">
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="highest_educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
					<div class="form-control-static">
						
					</div>
				</div>
			</div>
			<div class="col-md-6 padding-top-10">
				<div class="form-group">
					<label for="occupation_of_spouse">OCCUPATION:</label>
					<div class="form-control-static">
						
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 padding-top-10">
				<div class="form-group">
					<label for="num_of_children">NO OF CHILDREN:</label>
					<div class="form-control-static">
					
					</div>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-4">
				<label for="familycomp">II.FAMILY COMPOSITION</label>
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
		                <?php foreach ($family_composition as $row) : ?> 
		                <tr>    
		              
		                    <td><?= ucfirst($row['name']) ?></td>
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
			<div class="col-md-6 padding-top-10">
				<label for="sta">III.SEMINARS & TRAINING ATTENDED</label>
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

	                	<?php $org = json_decode($data['seminars_attended'], true);?>
	                  	<?php foreach ($org['title']  as $i => $title) : ?> 

		           			<tr>    
				          		<td><?= $i+1; ?></td>
				                <td><?= ucfirst($title); ?></td>
				                <td><?= date_create($org['date'][$i])->format('F d, Y')?></td>
		        			</tr>
		            
	           			<?php endforeach; ?>

	                </tbody>
	             </table>
	        </div>
		</div>
	</div>
		<div class="panel-footer">            
        <a href="<?= base_url('home/MyRequestedForms') ?>" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"> PROCEED </i></a>
    </div>
		</div>
	</div>
</form>
