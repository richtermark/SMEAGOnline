<?php
namespace EeoBundle\Api;

use EeoBundle\Api\Config;
use Symfony\Component\HttpFoundation;

class Eeo {

	protected $url;

	private $token; 

	public function __construct(){
		$connection = new Config();

		return new Response("TEST API");
	}

}