<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Api_Controller extends REST_Controller {

    
    function SMS_gateway_post() {
     
	// Textlocal account details
	$username = 'nilanga2bb@gmail.com';
	$hash = 'Your API hash';

	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash);

	// Send the POST request with cURL
	$ch = curl_init('http://api.txtlocal.com/get_templates/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	// Process your response here
	echo $response;

    }
     function save_post() {
         $result=1;
         echo $result;
     }

}  