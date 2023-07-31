<?php
require('../blog/protected/vendor/tcdent/php-restclient/restclient.php');

class ApiComponent extends CApplicationComponent
{
    public function getApi()
	{
		$api = new RestClient([
			'base_url' => 'https://my-json-server.typicode.com/traozin/db-conexa',
			'headers' => [
				'Accept' => 'application/json',
				'Content-Type' => 'application/json'
			]
		]);
		return $api;
	}
}