<?php

// SEC COUNT
if(!function_exists('pending_count')){
	function pending_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Secretary/Secretarymodel', 'sec');
		return $CI->sec->getPendingCount($type);
	}

}

if(!function_exists('reviewed_count')){
	function reviewed_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Secretary/Secretarymodel', 'sec');
		return $CI->sec->getReviewedCount($type);
	}

}

if(!function_exists('paid_count')){
	function paid_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Secretary/Secretarymodel', 'sec');
		return $CI->sec->getPaid_count($type);
	}

}
if(!function_exists('approved_count')){
	function approved_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Secretary/Secretarymodel', 'sec');
		return $CI->sec->getApproved_count($type);
	}

}

//  TREASURER COUNT

if(!function_exists('reviewed_count')){
	function reviewed_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Treasurer/Treasurermodel', 'tre');
		return $CI->tre->getReviewedCount($type);
	}
}

if(!function_exists('cap_pending_count')){
	function cap_pending_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Captain/Captainmodel', 'cap');
		return $CI->cap->getPendingCount($type);
	}

}

if(!function_exists('paid_count')){
	function paid_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Captain/Captainmodel', 'cap');
		return $CI->cap->getPaidCount($type);
	}
}


if(!function_exists('cap_approved_count')){
	function cap_approved_count($type = false)
	{
		$CI = & get_instance();
		$CI->load->model('Captain/Captainmodel', 'cap');
		return $CI->cap->getApprovedCount($type);
	}
}







