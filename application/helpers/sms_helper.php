<?php

if(!function_exists('send_sms')){
	function send_sms($mobile, $message)
	{

		function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		$arr_post_body = array(
		    "message_type" => "SEND",
		    "mobile_number" => "{$mobile}",
		    "shortcode" => "29290284302",
		    "message_id" => generateRandomString(32),
		    "message" => "{$message}",
		    "client_id" => "b6efc7e5508974aaee356e82ec3e3102eb1ce6133a2fc1cc01a2ef3460b83d06",
		    "secret_key" => "968be38dd40695b2a6157fe1ff9e52f7bbb42c121eb012600b73d546caf73be0"
		);

		$opts = ['http' =>
		    [
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => http_build_query($arr_post_body)
		    ]
		];

		$context  = stream_context_create($opts);
		return json_decode(file_get_contents("https://post.chikka.com/smsapi/request", false, $context), true);

	    // die($response);

	}
}