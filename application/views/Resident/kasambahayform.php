<div class="col-md-9">
	<div class="panel panel-default">
		<!-- Heading -->	
		<div class="panel-heading">
			<h4><label><i class="fa fa-file"></i> &nbsp;&nbsp;&nbsp;REQUEST FOR KASAMBAHAY REGISTRATION FORM</label></h4>
		</div> <!--Close Panel Heading -->
		<!-- Body -->
		<form action="<?= base_url('kasambahay/store') ?>" method= "POST" class="ajax"  data-next="<?= base_url('kasambahay/preview_form')?>">
			<div class="panel-body">
				<div class="alert alert-danger warning hidden"></div>
				<div class="row ">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<h4><label>1. PERSONAL INFORMATION</label></h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="firstname">FIRST NAME: </label>
						 	<p class="form-control-static"> 
						 		<?= $firstname ?>
						 	</p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="middlename">MIDDLE NAME:</label>
						 		<p class="form-control-static"> 
						 			<?= $middlename ?>
						 		</p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="lastname">LAST NAME: </label>
						 		<p class="form-control-static"> 
						 			<?= $lastname ?>
						 		</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
						<h4><label for="employers_home_address">EMPLOYER'S ADDRESS</label></h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="employers_home_address">HOME ADDRESS:</label>
						 	<input type="text" class="form-control" value="<?= element('employers_home_address', $data, null) ?>" name="employers_home_address" id="employers_home_address" placeholder="">
						</div>
					</div>
					<div class="col-md-4">
        				<div class="form-group">
							<label for="employers_sitio">SITIO:</label>
						  	<input type="text" class="form-control"  value="<?= element('employers_sitio', $data, null) ?>" name="employers_sitio" id="employers_sitio" placeholder="">
						</div>
					</div>
					<div class="col-md-4 ">
        				<div class="form-group">
							<label for="employers_barangay">BARANGAY:</label>
						  	<input type="text" class="form-control"  value="<?= element('employers_barangay', $data, null) ?>" name="employers_barangay" id="employers_barangay" placeholder="">
						</div>
					</div>
					<div class="col-md-4 ">
        				<div class="form-group">
							<label for="employers_province">PROVINCE:</label>
						  	<input type="text" class="form-control"  value="<?= element('employers_province', $data, null) ?>" name="employers_province" id="employers_province" placeholder="">
						</div>
					</div>
					<div class="col-md-4 ">
        				<div class="form-group">
							<label for="employers_municipality">MUNICIPALITY:</label>
						  	<input type="text" class="form-control"  value="<?= element('employers_municipality', $data, null) ?>" name="employers_municipality" id="employers_municipality" placeholder="">
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="form-group">
						<div class="col-md-4 ">
							<h4><label for="home_address">HOME ADDRESS</label></h4>
						</div>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="housenumandstreet">HOUSE NO AND STREET: </label>
						 	<p class="form-control-static"> <?= $home_address ?></p>
						</div>
					</div>
					<div class="col-md-4">
        				<div class="form-group">
							<label for="sitio">SITIO: </label>
						  	<p class="form-control-static"> <?= sitio_desc($sitio) ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
        				<div class="form-group">
							<label for="barangay">BARANGAY: </label>
						  	<p class="form-control-static">Banilad</p>
						</div>
					</div>
					<div class="col-md-4">
        				<div class="form-group">
							<label for="municipality">MUNICIPALITY: </label>
						  	<p class="form-control-static">Cebu</p>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="sex">SEX</label>
				  			<p class="form-control-static"><?= $sex  ?></p>

						</div>
					</div>
					<div class="col-md-8 padding-top-10">
						<label for="civil_status">CIVIL STATUS</label>
				  			<p class="form-control-static"><?= $civil_status ?></p>	
							
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="age">AGE</label>
						  	<p class="form-control-static"><?= $age  ?></p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="dateofbirth">DATE OF BIRTH:</label>
					  		<p class="form-control-static"><?= date_create($dateofbirth)->format('F d, Y')  ?></p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="contactno">CONTACT NO.</label>
					  			<p class="form-control-static"><?= $cellphone_no  ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>ID REFERENCE NO'S</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="sss_no">SSS NO:</label>
							<p class="form-control-static">
								<?= $sss_no ?>
							</p> 
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="barangay">PAG-IBIG NO:</label>
							<p class="form-control-static">
								<?= $gsis_no?>
							</p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="barangay">PHILHEALTH NO:</label>
						  	<p class="form-control-static">
						  		<?= $philhealth_no ?>
						  	</p>
						</div>
					</div>
				</div>
				<hr style="border-top: 1px solid #000; padding: 0; ">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<h4><label for="familyinfo">2. FAMILY INFORMATION</label></h4>
						</div>
					</div>
				</div>
				<div class="row">
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
		                            <td><?= number_format($row['monthly_salary'],2)?></td>
		                            <td><?= edu_attainment_desc($row['family_educational_attainment']) ?></td>
		                            
		                        </tr>
		                        
		                        <?php endforeach; ?>
		                      
		                    </tbody>
						</table>
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-8 padding-top-10">
        				<div class="form-group">
							<label for="incase_of_emergency">IN CASE OF EMERGENCY, CONTACT PERSON: *</label>
					  		<input type="text" class="form-control" value="<?= element('incase_of_emergency', $data, null) ?>" name="incase_of_emergency" id="incase_of_emergency" placeholder="">
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="emergency_contact_no">CONTACT NO: *</label>
					  		<input type="text" class="form-control" value="<?= element('emergency_contact_no', $data, null) ?>" name="emergency_contact_no" id="emergency_contact_no" placeholder="">
						</div>
					</div>
				</div>
				<hr style="border-top: 1px solid #000; padding: 0; ">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="eduinfo">EDUCATIONAL INFORMATION</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="highesteduattainment">Highest Educational Attainment:</label>
			  				<div class="form-control-static">
			  					<?php echo edu_attainment_desc($educational_attainment) ?>
			  				</div>
					</div>
				</div>
				<hr style="border-top: 1px solid #000; padding: 0; ">
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="workinfo">WORK INFORMATION</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 padding-top-10">
        				<div class="form-group">
							<label for="monthly_salary">MONTHLY SALARY: *</label>
						  	PHP<input type="text" class="form-control"  value="<?= element('monthly_salary', $data, null) ?>"  name="monthly_salary" id="monthly_salary" placeholder="">
						</div>
					</div>
					<div class="col-md-6 padding-top-10">
						<label for="natureofwork">EMPLOYMENT ARRANGEMENT: *</label>
			  			<div class="radio">
							<label>
								<input type="radio" value="live_in" <?= element('employment_arrangement', $data, null) === 'live_in' ? 'checked="checked"' : ''?> name="employment_arrangement">Live-In
							</label>
							<label>
								<input type="radio" value="live_out" <?= element('employment_arrangement', $data, null) === 'live_out' ? 'checked="checked"' : ''?> name="employment_arrangement">Live-Out
							</label>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="nature_of_work">NATURE OF WORK</label>
				  			<div class="radio">

								<label><input type="radio" name="nature_of_work" value="general_househelp" <?php element('nature_of_work', $data, null) === 'general_househelp' ? 'checked="checked" ':'' ?>> General Househelp</label>
								<label><input type="radio" name="nature_of_work" value="cook" <?php element('nature_of_work', $data, null) === 'cook' ? 'checked="checked" ':'' ?>>Cook</label>
								<label><input type="radio" name="nature_of_work" value="laundry_person" <?php element('nature_of_work', $data, null) === 'laundry_person' ? 'checked="checked" ':'' ?>>Laundry Person</label>
								<label><input type="radio" name="nature_of_work" value="yaya" <?php element('nature_of_work', $data, null) === 'yaya' ? 'checked="checked" ':'' ?>>Yaya</label>
								<label><input type="radio" name="nature_of_work" value="gardener" <?php element('nature_of_work', $data, null) === 'gardener' ? 'checked="checked" ':'' ?>>Gardener</label>
								<label><input type="radio" name="nature_of_work" value="others" <?php element('nature_of_work', $data, null) === 'others' ? 'checked="checked" ':'' ?>>Others(Please Specify)</label>
								
							</div>	
					</div>
				</div>
				<div class="row" data-hide="others">
					<div class="col-md-6">
						<div class="form-group">
							<label>OTHER:</label>
							<input type="text"  value="<?= element('other', $data, null)  ?>" name="other" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
        				<div class="form-group">
							<label for="work">NAME OF EMPLOYER</label>
						  	<input type="text" class="form-control" value="<?= element('name_of_employer', $data, null)  ?>" name="name_of_employer" id="name_of_employer" placeholder="">
						</div>
					</div>
				</div>
           	</div>
           	<!-- CLOSE BODY -->
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
	     
		

				<!-- <div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="familyinfo">5.ATTACHED DOCUMENT</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label>
							<input type="checkbox" name="KPT" value="KPT"> Kontrata sa Paglilingkod sa Tahanan
						</label>
						 <b><p style="text-indent: 50px; font-style:"> I herely certify that the above information are true and correct and may be used for any legal purpose. I further certify that any signature appearing herein is genuine and authentic.</p></b>
					</div>
				</div> -->
				<!-- <div class="row">
					<div class="col-md-7 padding-top-10"></div>
						<div class="col-md-5 padding-top-10">
							<hr style="display: block; height: 2px; margin-left: 50px; border-top: 1px solid #000;padding: 0; ">
							<label style="margin-left:120px;">Signature of Kasambahay</label>
						</div>
				</div>
				<div class="row">
					<div class="col-md-5 padding-top-10">
						<label>Received by:</label><hr style="display: block; height: 2px; margin-left: 90px;	 border-top: 1px solid #000;padding: 0; ">
						<label style="margin-left:95px;">Kasambahay Desk Officer</label>
					</div>
				</div> -->

		 												


		  				
	
