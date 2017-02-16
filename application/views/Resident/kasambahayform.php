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
						 	<!-- <input type="text" class="form-control" name= "firstname" id="firstname"  value="<?php echo $firstname ?>" placeholder="" disabled> -->
						 	<p class="form-control-static"> <?= $firstname ?></p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="middlename">MIDDLE NAME:</label>
						 <!-- 	<input type="text" class="form-control" name= "middlename" id="middlename" value="<?php echo $middlename ?>" placeholder=""> -->
						 <p class="form-control-static"> <?= $middlename ?></p>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="lastname">LAST NAME: </label>
						 	<!-- <input type="text" class="form-control" name= "lastname" id="lastname" value="<?php echo $lastname?>"  placeholder="" disabled> -->
						 	 <p class="form-control-static"> <?= $lastname ?></p>
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
						 	<input type="text" class="form-control" name= "employers_home_address" id="employers_home_address" placeholder="">
						</div>
					</div>
					<div class="col-md-4">
        				<div class="form-group">
							<label for="employers_sitio">SITIO:</label>
						  	<input type="text" class="form-control" name="employers_sitio" id="employers_sitio" placeholder="">
						</div>
					</div>
					<div class="col-md-4 ">
        				<div class="form-group">
							<label for="employers_barangay">BARANGAY:</label>
						  	<input type="text" class="form-control" name="employers_barangay" id="employers_barangay" placeholder="">
						</div>
					</div>
					<div class="col-md-4 ">
        				<div class="form-group">
							<label for="employers_barangay">PROVINCE:</label>
						  	<input type="text" class="form-control" name="employers_province" id="employers_province" placeholder="">
						</div>
					</div>
					<div class="col-md-4 ">
        				<div class="form-group">
							<label for="employers_barangay">MUNICIPALITY:</label>
						  	<input type="text" class="form-control" name="employers_municipality" id="employers_municipality" placeholder="">
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
					<div class="col-md-6">
						<div class="form-group">
							<label for="housenumandstreet">HOUSE NO AND STREET: </label>
						 	<p class="form-control-static"> <?= $home_address ?></p>
						</div>
					</div>
					<div class="col-md-6">
        				<div class="form-group">
							<label for="sitio">SITIO: </label>
						  	<p class="form-control-static"> <?= $sitio ?></p>
						</div>
					</div>
					<div class="col-md-6">
        				<div class="form-group">
							<label for="barangay">BARANGAY: </label>
						  	<p class="form-control-static"> <?= $barangay ?></p>
						</div>
					</div>
					<div class="col-md-6">
        				<div class="form-group">
							<label for="municipality">MUNICIPALITY: </label>
						  	<p class="form-control-static"> <?= $municipality ?></p>
						</div>
					</div>

				</div>
				<!-- <div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="gender">SEX</label>
				  			<div class="radio">
								<label><input type="radio" name="sex" value="Male">Male</label>&nbsp;
								<label><input type="radio" name="sex" value="Female">Female</label>
							</div>	
						</div>
					</div>
					<div class="col-md-8 padding-top-10">
						<label for="civil_status">CIVIL STATUS</label>
				  			<div class="radio">
								<label><input type="radio" name="civil_status" value="Single">Single</label>&nbsp;
								<label><input type="radio" name="civil_status" value="Married">Married</label>&nbsp;
								<label><input type="radio" name="civil_status" value="Widower">Widower</label>&nbsp;
								<label><input type="radio" name="civil_status" value="Separated">Separated</label>
							</div>	
					</div>
				</div> -->
			<!-- 	<div class="row">
					<div class="col-md-3 padding-top-10">
        				<div class="form-group">
							<label for="age">AGE</label>
						  	<input type="text" class="form-control" name="age" id="age" placeholder="">
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="dateofbirth">DATE OF BIRTH:</label>
					  		<input type="date" class="form-control" name="dateofbirth" id="dateofbirth" placeholder="">
						</div>
					</div>
					<div class="col-md-5 padding-top-10">
    					<div class="form-group">
							<label for="contactno">CONTACT NO.</label>
					  		<input type="text" class="form-control" name="contactno" id="contactno" placeholder="">
						</div>
					</div>
				</div> -->
					<hr style="border-top: 1px solid #000; padding: 0; ">
				<div class="row">
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="sss_no">SSS NO: *</label>
							<div class="form-control-static">
								<?= $sss_no ?>
							</div> 
						  	<!-- <input type="text" class="form-control" name="sss_no" id="sss_no" placeholder=""> -->
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="barangay">PAG-IBIG NO: *</label>
							<div class="form-control-static">
								<?= $gsis_no?>
						  <!-- 	<input type="text" class="form-control" name="pag-ibig_no" id="pag-ibig_no" placeholder="" -->
							</div>
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
        				<div class="form-group">
							<label for="barangay">PHILHEALTH NO: *</label>
						  	<!-- <input type="text" class="form-control" name="philhealthno" id="philhealthno" placeholder=""> -->
						  	<div class="form-control-static">
						  		<?= $philhealth_no ?>
						  	</div>
						</div>
					</div>
				</div>
				<hr style="border-top: 1px solid #000; padding: 0; ">
				<div class="row">
					<div class="col-md-4 padding-top-10">
						<div class="form-group">
							<label for="familyinfo">FAMILY INFORMATION</label>
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
		                            <td><?= $row['monthly_salary']?></td>
		                            <td><?= ucfirst($row['family_educational_attainment']) ?></td>
		                            
		                        </tr>
		                        
		                        <?php endforeach; ?>
		                      
		                    </tbody>
						</table>
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-8 padding-top-10">
        				<div class="form-group">
							<label for="emergency_contact_personamily">IN CASE OF EMERGENCY, CONTACT PERSON: *</label>
					  		<input type="text" class="form-control" name="incase_of_emergency" id="incase_of_emergency" placeholder="">
						</div>
					</div>
					<div class="col-md-4 padding-top-10">
    					<div class="form-group">
							<label for="emergency_contact_no">CONTACT NO: *</label>
					  		<input type="text" class="form-control" name="emergency_contact_no" id="emergency_contact_no" placeholder="">
						</div>
					</div>
				</div>
				<hr style="border-top: 1px solid #000; padding: 0; ">
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<div class="form-group">
							<label for="eduinfo">EDUCATIONAL INFORMATION</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
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
						  	PHP<input type="text" class="form-control" name="monthly_salary" id="monthly_salary" placeholder="">
						</div>
					</div>
					<div class="col-md-6 padding-top-10">
						<label for="natureofwork">EMPLOYMENT ARRANGEMENT: *</label>
			  			<div class="radio">
							<label>
								<input type="radio" name="employment_arrangement" value="live_in">Live-In
							</label>
							<label>
								<input type="radio" name="employment_arrangement" value="live-out">Live-Out
							</label>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
						<label for="natureofwork">NATURE OF WORK</label>
				  			<div class="radio">
								<label><input type="radio" name="nature_of_work" value="general_househelp">General Househelp</label>
								<label><input type="radio" name="nature_of_work" value="cook">Cook</label>
								<label><input type="radio" name="nature_of_work" value="laundry_person">Laundry Person</label>
								<label><input type="radio" name="nature_of_work" value="yaya">Yaya</label>
								<label><input type="radio" name="nature_of_work" value="gardener">Gardener</label>
								<label><input type="radio" name="nature_of_work" value="Separated">Others(Please Specify)</label>
								
							</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 padding-top-10">
        				<div class="form-group">
							<label for="work">NAME OF EMPLOYER</label>
						  	<input type="text" class="form-control" name="name_of_employer" id="name_of_employer" placeholder="">
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

		 												


		  				
	
