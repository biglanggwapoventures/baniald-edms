<?php

	
if(!function_exists('edu_attainment_desc')){
	function edu_attainment_desc($educational)
	{
		switch ($educational) {

			case 'collegeundergraduate':
				return 'College Undergraduate';

			case 'collegegraduate':
				return 'College Graduate';

			case 'elementarygraduate':
				return 'Elementary Graduate';

			case 'elementaryundergraduate':
				return 'Elementary Undergraduate';

			case 'highschoolgraduate':
				return 'Highschool Graduate';

			case 'highschoolundergraduate':
				return 'Highschool Undergraduate';

			case 'postgraduate':
				return 'Post Graduate';

			case 'Vocational':
				return 'Vocational';

			case 'none':
				return 'None';

		}
	}
}


if(!function_exists('form_description')){
	function form_description($form_id)
	{
		switch ($form_id) {

			case '1':
				return 'Business Clearance';

			case '2':
				return 'Senior Citizen';

			case '3':
				return 'Kalipi Federation';

			case '4':
				return 'Amicable Settlement';

			case '5':
				return 'Kasambahay Form';

			case '6':
				return 'Empowerment and Reaffirmation of Paternal Abilities';

			case '7':
				return 'Solo Parent';

			case '8':
				return 'Person With Disability';

			case '9':
				return 'Financial Assistance Person With Disability';

			case '10':
				return 'Complaint Form';

		}
	}
}

if(!function_exists('employment_arrangement')){
	function employment_arrangement($employment)
	{
		switch ($employment) {

			case 'live_in':
				return 'Live In';

			case 'live_out':
				return 'Live Out';
		}
	}
}


if(!function_exists('sitio_desc')){
	function sitio_desc($sitio)
	{
		switch ($sitio) {

			case 'none':
				return 'None';

			case 'baniladproper':
				return 'Banilad Proper';

			case 'iccompound':
				return 'IC Compound';

			case 'sanroqueville':
				return 'San Roque Ville';

			case 'rotunda':
				return 'Rotunda';

			case 'mahigacenter':
				return 'Mahiga Center';

			case 'mahigaupper':
				return 'Mahiga Upper';

			case 'tonggo':
				return 'Tonggo';

			case 'tayongrelocation':
				return 'Tayong Relocation';

			case 'magihalower':
				return 'Mahiga Lower';

			case 'ibaan':
				return 'Ibaan';

			case 'bas':
				return 'Bas';

			case 'tayongupper':
				return 'Tayong Upper';

			case 'atis':
				return 'Atis';
		}
	}
}





if(!function_exists('request_form')){
	function request_form($id)
	{
		switch ($id) {

			case 1: return 'brgyclearanceform';
			case 2: return 'seniorcitizenform';
			case 3: return 'kalipiform';
			case 4: return 'settlementform';
			case 5: return 'kasambahayform';
			case 6: return 'erpatform';
			case 7: return 'soloparentform';
			case 8: return 'pwdform';
			case 9: return 'financialassistanceform';
			case 10: return 'complaintform';
			
		}
	}
}

