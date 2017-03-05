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
							<?php echo date_create(null)->format("F d, Y"); ?>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="name">NAME:</label>
							<div class="form-control-static">
								<?= $firstname .' '. $middlename .' '. $lastname ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="nickname">NICKNAME: </label>
							<div class="form-control-static"><?= $nickname ?></div>
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
				<br>
				<br>
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
						<input type="text" class="form-control" value="<?= element('name_of_company', $data, null)?>"  name="name_of_company" id="name_of_company" placeholder="">
					</div>
				</div>
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="company_address">COMPANY ADDRESS:</label>
						<input type="text" class="form-control" value="<?= element('company_address', $data, null)?>" name="company_address" id="company_address" placeholder="">
					</div>
				</div>
			</div>
				<div class="row">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="telephone_no_res">TELEPHONE NO (RESIDENCE):</label>
						<input type="text" class="form-control" value="<?= element('telephone_no_res', $data, null)?>" name="telephone_no_res" id="telephone_no_res" placeholder="">
					</div>
				</div>
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="telephone_no_off">TELEPHONE NO (OFFICE):</label>
						<input type="text" class="form-control"  value="<?= element('telephone_no_off', $data, null)?>" name="telephone_no_off" id="telephone_no_off" placeholder="">
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
			<!-- <div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="name_of_spouse">NAME OF SPOUSE:</label>
						
					</div>
				</div>
			</div>
 -->		<!-- <div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="address_of_spouse">ADDRESS:</label>
						
					</div>
				</div>
			</div> -->
			<!-- <div class="row">
				<div class="col-md-6 padding-top-10">
        			<div class="form-group">
						<label for="dateofbirth_of_spouse">DATE OF BIRTH:</label>
				  		
					</div>
				</div>
				<div class="col-md-4 padding-top-10">
   					<div class="form-group">
						<label for="spouse_age	">AGE:</label>
				  		
					</div>
				</div>
			</div> -->

	<!-- 		<div class="row">
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="highest_educational_attainment">HIGHEST EDUCATIONAL ATTAINMENT:</label>
				
					</div>
				</div>
				<div class="col-md-6 padding-top-10">
					<div class="form-group">
						<label for="occupation_of_spouse">OCCUPATION:</label>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 padding-top-10">
					<div class="form-group">
						<label for="num_of_children">NO OF CHILDREN:</label>
						
					</div>
				</div>
			</div> -->

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
		                	 <?php $sem = json_decode(element('seminars_attended', $data,'{"title":[""]}'), true)?>

                              <?php foreach($sem['title'] As $i => $title):?>
		                    <tr>
		                    	<td><?= $i + 1?></td>
		                        <td><input type="text" name="seminars_attended[title][]" value="<?=  $title ?>" class="form-control"></td>
		                        <td><input type="date" name="seminars_attended[date][]" value="<?= isset($sem['date'][$i]) ? $sem['date'][$i] : ''?>"  class="form-control"></td>                             
		                        <td>
		                            <a data-click="remove-line" class="btn btn-danger"><i class="fa fa-times"></i></a>
		                        </td> 
		                    </tr>
		                    <?php endforeach;?>
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
