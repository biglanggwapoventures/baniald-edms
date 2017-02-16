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