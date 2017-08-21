<?php

namespace EeoBundle\Api;

class Config {

	public function __construct(){
		return false;
	}

	public function getBasicAuthentication(){
		// $credentials = new Credentials();
		// return Bigcommerce::configure(array(
		// 	    'store_url' => $credentials->getStore_url(),
		// 	    'username'  => $credentials->getUsername(),
		// 	    'api_key'   => $credentials->getApi_key()
		// 	));
	}
	public function getOauthAuthentication(){
		// return Bigcommerce::configure(array(
		// 	    'client_id'  => $credentials->getClient_id(),
		// 	    'auth_token' => $credentials->getAuth_token(),
		// 	    'store_hash' => $credentials->getStore_hash()
		// 	));
	}



}
